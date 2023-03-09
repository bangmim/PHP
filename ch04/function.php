<?php
#스플랫(...)연산자 : 함수의 가변 길이의 인수를 배열로 나타낼 수 있게 지원한다.

function sum(...$numbers){
	$acc = 0;
	foreach ($numbers as $n){
		$acc+=$n;
	}
	return $acc;
}

echo sum(1,2,3,4);
