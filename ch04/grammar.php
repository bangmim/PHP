<!-- PHP 구문의 시작 -->
<?php 
//class 생성
class Grammer
{
	public $name = "GNUWIZ";	// 문자열 GNUWIZ를 속성name에 할당
	
	//메서드 정의
	public function phpStudy($year)
	{
		echo "변수 name은 {$this->name}입니다. <br/>";
		echo "변수 year은 {$year} 입니다. <br/>";
		echo $this->name . $year . "<br/>";
	}		

}

$year = 2022;
//변수 grammer에 클래서 Grammer를 인스턴스로 생성
$grammer = new Grammer();
//인스턴스의 메서드 phpStudy에 변수 $year를 매개변수로 전달하여 메서드 실행
$grammer->phpStudy($year);
// 한 줄 주석
# 한 줄 주석
/* 여러 줄 주석
<?php
class Grammer
{
    public $name = "GNUWIZ";

    public function phpStudy($year)
    {
        echo "변수 name은 {$this->name} 입니다. <br/>";
        echo "변수 year은 {$year} 입니다. <br/>";
        echo $this->name . $year . "<br/>";
    }

}

$year = 2022;
$grammer = new Grammer();
$grammer->phpStudy($year);
*/

