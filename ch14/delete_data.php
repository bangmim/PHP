<?php
$mysql_host ="localhost";
$mysql_user="root";
$mysql_password="1234";
$mysql_db="mydb";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

if(!$conn){
	die("연결 실패 : ".mysqli_connect_error());
}

// 데이터 삭제 SQL문
$sql ="delete from movie_director where name='홍길동'";

if(mysqli_query($conn, $sql)){
	echo "레코드가 성공적으로 삭제되었습니다";
}else{
	echo "삭제 실패 : ".mysqli_error($conn);
}

mysqli_close($conn);