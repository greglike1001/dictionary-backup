<?php
define('CONFIGURATOR_PATH', 'config/api.ini');
define('RESULTS_COUNT', 10);

function getReplacementsMap() {
    return DB::map(DB::getInstance()->selectAll('KurCharReplacement'), 'chars', 'replacement');
}

function getSearchWords($word, array $replacements) {
    $words = array();
    foreach($replacements as $chars => $replacement) {
        if($count = substr_count($word, $chars)) {
            $offset = 0;
            while(false !== ($pos = strpos($word, $chars, $offset))) {
                $newWord = substr_replace($word, $replacement, $pos, strlen($chars));
                $words[$newWord] = $newWord;
                $offset = $pos + 1;
            }
        }
    }

    foreach($words as $newWord) {
        $words = array_merge($words, getSearchWords($newWord, $replacements));
    }

    $words = array_merge(array($word => $word), $words);

    return array_keys(array_flip($words));
}

function removeDuplicates(array $words) {
    return array_values(DB::map($words, 'id'));
}

function searchKurdishStartingWith($search, $limit) {
    return DB::getInstance()->select('
        SELECT  *
        FROM    `KurDictionary`
        WHERE   `word` LIKE concat(:search, \'%\')
        ORDER   BY `word` ASC
        LIMIT   :limit', array(
            'search' => $search,
            'limit' => array(
                'value' => $limit,
                'type' => PDO::PARAM_INT
            )
        )
    );
}

function searchKurdishContaining($search, $limit) {
    return DB::getInstance()->select('
        SELECT  *
        FROM    `KurDictionary`
        WHERE   `word` LIKE concat(\'%\', :search, \'%\')
                AND `word` NOT LIKE concat(:search, \'%\')
        ORDER   BY `word` ASC
        LIMIT   :limit', array(
            'search' => $search,
            'limit' => array(
                'value' => $limit,
                'type' => PDO::PARAM_INT
            )
        )
    );
}

function searchEnglishContaining($search, $limit) {
    return DB::getInstance()->select('
        SELECT  *
        FROM    `KurDictionary`
        WHERE   `description` LIKE concat(\'%\', :search, \'%\')
        ORDER   BY `word` ASC
        LIMIT   :limit', array(
            'search' => $search,
            'limit' => array(
                'value' => $limit,
                'type' => PDO::PARAM_INT
            )
        )
    );
}

function doSearch(array $words, array $searchWords, $limit, $searchFunction) {
    foreach($searchWords as $searchWord) {
        $words = array_merge($words, $searchFunction($searchWord, $limit));
        $words = removeDuplicates($words);
        if(count($words) >= $limit) {
            array_splice($words, $limit);
        }
    }

    return $words;
}

function getMinMaxIds() {
    $result = DB::getInstance()->selectValues('
        SELECT  min(`id`) AS `min`, max(`id`) AS `max`
        FROM    `KurDictionary`');

    return array($result['min'], $result['max']);
}

$results = array();
try {
    require_once('classes/functions.php');
    require_once('classes/Configuration.php');
    require_once('classes/Configurator.php');
    require_once('classes/Logger.php');
    require_once('classes/DB.php');
    
    if(isset($_GET['s'])) {
        $search = strtolower(trim(sget('s')));

        $replacements = getReplacementsMap();
        $searchWords = getSearchWords($search, $replacements);

        $words = doSearch(array(), $searchWords, RESULTS_COUNT, 'searchKurdishStartingWith');
        if(count($words) < RESULTS_COUNT) {
            $words = doSearch($words, $searchWords, RESULTS_COUNT - count($words), 'searchKurdishContaining');
            if(count($words) < RESULTS_COUNT) {
                $words = removeDuplicates(array_merge($words, searchEnglishContaining($search, RESULTS_COUNT - count($words))));
            }
        }

        foreach($words as $word) {
            $results[] = array(
                'label' => sprintf('<b>%s</b>', trim($word['original'])) . ' ' . $word['description'],
                'value' => trim($word['original'])
            );
        }
    } else if(isset($_GET['random'])) {
/*        list($minId, $maxId) = getMinMaxIds();

        $word = null;
        $attempts = 0;
        while(is_null($word) && ($attempts < 10)) {
            $word = DB::getInstance()->selectOneByField('KurDictionary', 'id', mt_rand($minId, $maxId));
            $attempts++;
        }

        if(!is_null($word)) {
            $results = $word;
        }*/
    }
    else if(isset($_GET['last'])) {
        
        
        function connect() {
        return new PDO('mysql:host=localhost;dbname=dictionary_db', 'dictionary_user', 'dictionary_password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));}
        
        $pdo = connect();
        
        $sql = "SELECT word_tbl.english, word_tbl.word_id, definition_tbl.definition FROM word_tbl LEFT JOIN definition_tbl ON ( definition_tbl.word_id = word_tbl.word_id )ORDER BY word_id DESC LIMIT 15";

        $query = $pdo->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        
        $word = array();
        
        foreach ($list as $rs) {
            $word[] = $rs;    
        }
        
        $random_word = array();
        
        $random_word[0] = $word[mt_rand(0, 15)];
        
        if(!empty($word)) {
            $results = $random_word;
        }
    }
} catch(Exception $e) {
    Logger::error('Error: ' . $e->getMessage());
}

echo json_encode($results);

