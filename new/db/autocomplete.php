<?php
// PDO connect *********
function connect() {
return new PDO('mysql:host=localhost;dbname=dictionary_db', 'dictionary_user', 'dictionary_password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT w.*, d.definition FROM word_tbl w, definition_tbl d WHERE (w.english LIKE (:keyword) || w.kurdish_en LIKE (:keyword) || w.kurdish_ku LIKE (:keyword)|| d.definition LIKE (:keyword)) and "
        . "w.word_id = d.word_id ORDER BY w.english  LIMIT 0, 10";

$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();

foreach ($list as $rs) {
	// put in bold the written text
	$english = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['english']);
        $en = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['kurdish_en']);
        $ku = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['kurdish_ku']);
        $def = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>',$rs['definition']);
        $def = substr($def, 0, 150);
        
     // add new option
       // echo $keyword.'<br>';
        
       if(preg_match('/'.$_POST['keyword'].'/',$rs['kurdish_en'])){
          $english = $en;
           //echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['english']).'\')">'.'<div style="width:200px; float:left">'.$english.'</div><div style="float:left">'.$def.'</div><br/></li>';
       }else if(preg_match('/'.$_POST['keyword'].'/',$rs['kurdish_ku'])){
           $english = $ku;
       }
echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['english']).'\')">'.'<div style="width:200px; float:left">'.$english.'</div><div style="float:left">'.$def.'</div><br/></li>';

}
?>