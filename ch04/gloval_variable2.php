<?php
$str="PHP";

function myFunc()
{
	echo "<p> 변수 str의 값은 : {$GLOBALS['str']}</p>";
}

myFunc();