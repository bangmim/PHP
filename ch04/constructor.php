<?php
#생성자 __construct() : return 값을 반환할 필요가 없다.

class Example{
	protected $name;

	public function __construct(){
		$this->name="홍길동";
		echo $this->name;
	}
}

//new Example();

// 구버전
class Example1{
	//프로퍼티
	public string  $id;
	public string $name;
	public mixed $nickname;
	//생성자
	public function __construct(
		string $id,
		string $name,
		mixed $nickname
		){
		//this를 사용하여 프로퍼티에 값을 설정
		$this->id=$id;
		$this->name=$name;
		$this->nickname=$nickname;
	}
}

$id="hong";
$name="gildong";
$nickname="honghong";

$example = new Example1(id:$id, name:$name,nickname:$nickname);

//PHP8버전 -생성자 속성 승격
class Example2
{
	//생성자에 매개변수 지정
	public function __construct(
		public string $id,
		public string $name,
		public mixed $nickname
		){}	//$this를 사용하지 않아도 중괄호 안에서 자동으로 그 값이 설정
}

$id="hong";
$name="gildong";
$nickname="honghong";
$example = new Example2(id:$id, name:$name,nickname:$nickname);

/*
요약

구)
class Example{
	public string $name;

	public function __construct(
	string $name='홍길동'
	){
		$this->name = $name;
	}
}

신)
class Example{
	public function __construct(
	public string $name = '홍길동',
	){}
}
*/