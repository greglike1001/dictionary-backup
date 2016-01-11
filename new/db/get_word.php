<?php
// PDO connect *********
function connect() {
return new PDO('mysql:host=localhost;dbname=dictionary_db', 'dictionary_user', 'dictionary_password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));}

$pdo = connect();
$keyword = strtolower($_GET['keyword']);
/*
$sql = "SELECT w.*, d.definition FROM word_tbl w, definition_tbl d WHERE (w.english LIKE (:keyword) || w.kurdish_en LIKE (:keyword) || w.kurdish_ku LIKE (:keyword)) and "
        . "w.word_id = d.word_id ORDER BY w.english  LIMIT 0, 10";*/

$sql = "
SELECT word_tbl.english, word_tbl.kurdish_en, definition_tbl.definition, kurdish_ku, word_tbl.word_id
FROM word_tbl
LEFT JOIN definition_tbl ON ( definition_tbl.word_id = word_tbl.word_id )
WHERE lower(word_tbl.english) LIKE '".$keyword."%'
OR lower(word_tbl.kurdish_en) LIKE '".$keyword."%'
ORDER BY word_tbl.english
LIMIT 10";

$query = $pdo->prepare($sql);
$query->execute();
$list = $query->fetchAll();

foreach ($list as $rs) {
    
	// put in bold the written text
	$english = str_replace($_GET['keyword'], '<b>'.$_GET['keyword'].'</b>', $rs['english']);
        $en = str_replace($_GET['keyword'], '<b>'.$_GET['keyword'].'</b>', $rs['kurdish_en']);
        $ku = str_replace($_GET['keyword'], '<b>'.$_GET['keyword'].'</b>', $rs['kurdish_ku']);
        $def = $rs['definition'];
        $def = substr($def, 0, 150);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['english']).'\')">'.'<div style="width:100px; float:left">'.$english.'</div><div style="float:left">'.$def.'</div><br/></li>';
    /*
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['kurdish_en']).'\')">'.'<div style="width:100px; float:left">'.$en.'</div><div style=" float:left">'.$def.'</div><br/></li>';
    if($ku != ""){
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['kurdish_ku']).'\')">'.'<div style="width:100px; float:left">'.$ku.'</div><div style="float:left">'.$def.'</div><br/></li>';
    }*/
}
?>