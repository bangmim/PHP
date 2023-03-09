<?php
#instanceof 연산자 : 어떤 변수가 어떤 클래스에 속하는지 확인
#비교는 인스턴스 변수가 비교를 하는 클래스의 인스턴스이면 true, 아니면 false를 반환

class MyClass{};

$my_class = new MyClass();
$result = $my_class instanceof MyClass;
echo $result;	//true(참) 1