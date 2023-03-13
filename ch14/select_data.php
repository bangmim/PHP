<?php
$mysql_host ="localhost";
$mysql_user="root";
$mysql_password="1234";
$mysql_db="mydb";

$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

if(!$conn){
	die("연결실패:".mysqli_connect_error());
}

$sql = " SELECT * FROM movie_director ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_array($result)){	//검색 항목을 반복문을 통해 출력
	echo "id : ".$row['id']." -name : ".$row['name']." -birthday : ".$row['birthday']."<br/>";
	}
}else {
	echo "저장된 데이터가 없습니다";
}

mysqli_close($conn);	//데이터베이스 접속 종료

#데이터 베이스에 SQL문을 실행하기 위해서는 mysqli_query()함수를 사용해야 한다.
// mysqli_query(연결된 데이터베이스 리소스, SQL문을 담고 있는 변수);

/* SQL문의 종류에 따라 함수가 반환하는 결과 값이 다르다
1. SELECT, SHOW, DESCRIVE 문과 같이 테이블 및 데이터를 조회하는 SQL문을 실행하면 결과는 mywqli_result 객체를 반환한다. 
즉, 조회한 데이터의 행을 가져오게 된다.
2. INSERT, UPDATE, DELETE, DROP 문과 같이 데이터를 추가,변경,삭제하는 SQL문은 실제 데이터를 반환하지 않고, 참과 거짓 여부를 반환한다.
거짓이라면 오류발생

-$row = mysqli_fetch_assoc($result);	//연관 배열 반환. 필드 이름은 $row['no']형식으로
-$row = mysqli_fetch_row($result);		//숫자 인덱스의 배열 반환. $row[0]
-$row = mysqli_fetch_array($result);	//연관 배열과 숫자 인덱스 배열을 모두 사용할 수 있다.
*/