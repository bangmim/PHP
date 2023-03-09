<?php
$input = true;

$result = match ($input){
	//match 표현식에서는 일치 조건이 매우 엄격하게 구분된다.
	"true"=>"1st",	//문자열 true로 인식
	"false"=>"2st",
		"null"=>"3st",
		true=>"4st",
		false=>"5st",
		null=>"6st",
};

	echo $result;
