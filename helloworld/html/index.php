<meta charset="UTF-8">
<title>hello world</title>

<?php
$db = new PDO('mysql:host=mysql;dbname=test', 'root', 'pass');
$db->query("INSERT INTO test.test VALUES (1,'テスト太郎')");
$st = $db->query("SELECT count(id) as cnt FROM test.test");
//$res = $st->fetchAll();
$res = $st->fetch();
var_dump($res['cnt']);

