<?php
class Member {
	var $id = "hong";
	public $name = "홍길동";
	protected $nickname='쾌도 홍길동';
	private $age = 20;
}

$member = new Member();
//클래스의 프로퍼티에 접근하거나 메서드를 호출할 때 화살표 기호 (->)를 사용한다.
echo $member->id;
echo $member->name;
echo $member->nickname;	//액세스 불가
echo $member->age;		//액세스 불가