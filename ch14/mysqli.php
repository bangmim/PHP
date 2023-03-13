<!-- MsSQLi 확장 API를 사용한 데이터베이스 연결방법 (절차 지향 스타일) -->
<?php
$mysql_host = "localhost";		//데이터베이스 서버의 호스트 또는 IP
$mysql_user = "root";		//데이터베이스 사용자계정
$mysql_password="1234";		//데이터베이스 사용자 비밀번호
$mysql_db="mydb";	//연결할 데이터베이스 이름

//데이터베이스 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn){	//연결 오류 발생 시 스크립트 종료
	die("연결실패 : ".mysqli_connect_error());
}

echo "연결 성공!";
