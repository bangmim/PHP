<?php
#PDO (PHP Data Objects) : 다양한 데이터베이스 종류에 연동할 수 있는 방법

$mysql_host ="localhost";
$mysql_user="root";
$mysql_password="1234";
$mysql_db="mydb";

//MySQL 데이터베이스 연결 실행
try{
	$conn = new PDO ("mysql:host=$mysql_host;dbname=$mysql_db", $mysql_user, $mysql_password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "연결 성공!";
}catch(PDOException $e){
	echo "연결 실패 : ".$e->getMessage();
}