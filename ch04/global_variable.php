<?php
$str="PHP";

function myFunc()
{
	#echo "<p>변수 str의 값은 : {$str}</p>";	//오류발생
	global $str;	//global 키워드를 사용하여 변수 $str을 전역변수로 선언
	echo "<p>변수 str의 값은 : {$str}</p>";
}

myFunc();
echo "<p>변수 str의 값은 : {$str}</p>";