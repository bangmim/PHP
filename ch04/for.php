<?php
#반복문
/*
1.for 
for(초기식; 조건식; 증감식;){
	반복할 코드
	}
for($i=0; $i<10; $i++){
echo $i;
}	//0123456789

2.foreach
foreach(배열명 as 값 변수){
	반복할 코드
	}
foreach(배열명 as 키변수=> 값 변수){	//변수는 사용자가 설정가능
	반복할 코드
	}

3.while

4.do-while
do{
	반복할 코드
	}while(조건);

*/
#foreach문 : 배열에 대해 반복을 실행할 때
$fruits=[
"apple"=>"사과",
"banana"=>"바나나",
"strawberry"=>"딸기"
];

echo "값만 사용 <br/>";
foreach($fruits as $fruit){
	echo "{$fruit}<br/>";
}

echo "<br/>";
echo "키와 값 모두 사용 <br/>";
foreach($fruits as $key=>$value){
	echo "{$key}=>{$value}<br/>";
}

#do-while문 : 조건의 만족 여부와 상관없이 처음 한 번은 무조건 실행

$i=0;	// 변수에 초기값 할당

do{
	echo $i;
	$i++;
}while($i<10);	//조건을 적지 않으면 무한루프 된다