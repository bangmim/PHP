<?php
class A
{
	//생성자
	public function __construct()
	{
		echo __CLASS__;	//해당 클래스명 출력 A (매직상수)
	}

	//메서드
	public function sayHello()
	{
		return __METHOD__;	//해당 '클래스명::함수명'의 형태로 출력된다.(매직상수) A::sayHello
	}
}

$say = new A();	//변수 say에 클래스'A'의 인스턴스 생성
echo $say ->sayHello();	//A의 sayHello() 메서드 출력 AA::sayHello