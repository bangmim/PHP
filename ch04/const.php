<?php
const CONSTANT = '안녕하세요';

function myFunc()
{
	#const MESSAGE = '저는 PHP를 공부합니다';
}

#myFunc();

class MyClass	//클래스 선언
{
	public const MESSAGE = '저는 PHP를 공부합니다';
	
	public static function foo()	//클래스 내부에 메서드(함수) 선언
	{
		echo "감사합니다";
		#const BYE = '안녕히가세요';	//에러발생
	}
}

echo CONSTANT;
echo MyClass::MESSAGE;	// 범위지정 연산자 :: 사용하여 클래스의 속성(프로퍼티)에 접근
echo MyClass::foo();	//메서드에 접근