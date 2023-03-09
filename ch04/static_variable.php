<?php
function myFunc()
{
	static $x = 0;
	echo "<p>변수 x의 값 : {$x}</p>";
	$x++;
}

myFunc();	//0
myFunc();	//1 값이 소멸되지 않고 x++가 적용되었다.
myFunc();	//2
	
