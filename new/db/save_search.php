<?php

session_start();

// PDO connect *********
function connect() {
return new PDO('mysql:host=localhost;dbname=dictionary_db', 'dictionary_user', 'dictionary_password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));}

$pdo = connect();
$keyword = $_GET['keyword'];
/*
$sql = "SELECT w.*, d.definition FROM word_tbl w, definition_tbl d WHERE (w.english LIKE (:keyword) || w.kurdish_en LIKE (:keyword) || w.kurdish_ku LIKE (:keyword)) and "
        . "w.word_id = d.word_id ORDER BY w.english  LIMIT 0, 10";*/
     die("<pre>" . print_r($_SESSION, true) . "</pre>");
$sql = "
SELECT word_tbl.english, word_tbl.kurdish_en, definition_tbl.definition, kurdish_ku, word_tbl.word_id
FROM word_tbl
LEFT JOIN definition_tbl ON ( definition_tbl.word_id = word_tbl.word_id )
WHERE word_tbl.english LIKE '%".$keyword."%'
OR word_tbl.kurdish_en LIKE '%".$keyword."%'
OR definition_tbl.definition LIKE '%".$keyword."%'
ORDER BY word_tbl.english
LIMIT 10"
        ;

$query = $pdo->prepare($sql);
$query->execute();
$list = $query->fetchAll();

?>