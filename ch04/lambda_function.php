<?php
#익명함수
/*
$변수명 = function(){
	기술할 코드
	return;
	};
*/
# 선언과 동시에 바로 실행 호출 된다.
$lambda = function ($name){	//익명 함수를 선언한다.
	return $name;
};

echo $lambda("홍길동");
echo "<br/>";

// 익명함수를 다른 함수의 인수로 전달
function say($lambda){
	echo $lambda();
}

say(function(){return "hello world";});

// 함수의 결과 값으로 반환
function say1(){
	return function (){return "bye world";};
}

$lambda = say1();
echo "<br/>";

echo $lambda();

// 익명함수를 통해 생성된 클로저는 외부 변수 값에 영향을 주지 않는다.
$sep = ', ';

function myFunc(){
	global $sep;		//global 키워드 사용하여 전역변수로 선언

	$wor = 'world';

	return function ($hel) use ($sep, $wor){	//use 키워드 사용하여 익명함수에 변수 $sep, wor 가져옴
		$exc='!';
		return $hel . $sep.$wor.$exc;
	};
}
echo "<br/>";

 $hello = myFunc();
 echo $hello('hello');

 //use : 외부변수를 익명함수로 가져와서 사용
 //화살표 함수 : 명시적으로 지정하지 않더라도 외부 환경의 변수를 자동으로 스캔하여 사용할 수 있다. 단, 전역변수는 자동으로 인식하지 못하여 global 키워드를 지정해야한다.

 $sep='!! ';

 function myFunc1(){
	 global $sep;
	 $wor = 'word';	//use 사용하지 않아도 된다.
	 return fn($hel)=>$hel.$sep.$wor.'!';
 }
echo "<br/>";

 $hello = myFunc1();
 echo $hello('hello!');
