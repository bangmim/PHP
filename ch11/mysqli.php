<?php
$mysql_host = "localhost:8080";		//데이터베이스 서버의 호스트 또는 IP
$mysql_user = "root";		//데이터베이스 사용자계정
$mysql_password="1234";		//데이터베이스 사용자 비밀번호
$mysql_db="mydb";	//연결할 데이터베이스 이름
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn){
	die("연결실패 : ".mysqli_connect_error());
}

echo "연결 성공!";
