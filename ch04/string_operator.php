<?php
#문자열 연산자
#. : $a.$b >> a와 b를 연결
#.= : $a.=$b >> a에 b를 추가

$str1 = "안녕하세요";
$str2 = "저는 PHP를 공부합니다";
echo "두 문자열을 합친 문자열은 [".$str1.$str2."] 입니다. <br/>";

$str = "안녕하세요";
$str .= "저는 PHP를 공부합니다";
echo "두 문자열을 합친 문자열은 [".$str."] 입니다. <br/>";
