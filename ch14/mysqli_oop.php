<!-- 객체지향 스타일 -->
<?php
$mysql_host ="localhost";
$mysql_user="root";
$mysql_password="1234";
$mysql_db="mydb";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_password,$mysql_db);

if($conn->connect_error){
	die("연결 실패 : ".$conn->connect_error);
}

echo "연결 성공!";