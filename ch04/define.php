<?php
define ('CONSTANT', '안녕하세요');

function myFunc()
{
	define('MESSAGE','저는 PHP를 공부합니다.');
}

myFunc();

//함수 내부에서 엑세스 가능
echo CONSTANT;
echo MESSAGE;