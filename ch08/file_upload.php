<?php
#$_FILES
/*
$_FILES["file"]["name"]	-업로드된 파일의 이름
$_FILES["file"]["type"]	-업로드된 파일의 MIME(마임)형식 - 예:image/gif
$_FILES["file"]["size"]	-업로드된 파일의 크기(바이트로 표시)
$_FILES["file"]["tmp_name"] -서버에 저장된 파일의 임시 복사본 이름
$_FILES["file"]["error"] -파일 업로드 중 발생한 오류의 오류코드
*/

$uploads_dir="./uploads";	//파일 업로드 디렉터리 설정
$allowed_ext=array('jpg','jpeg','png','gif');	//파일 확장자 지정

//uploads 디렉터리 없다면 생성
if(!is_dir($uploads_dir)){	
	#is_dir() : 해당 경로 내에 변수에 설정된 디렉터리가 존재하는지 체크한다.
	//존재하지 않으면 
	#mkdir()함수(=>디렉터리를 생성하는 함수. 성공시 true/ 실패시 PHP오류 반환)를 사용하여 0777 퍼미션을 가진 디렉터리를 생성한다.
	if(!mkdir($uploads_dir, 0777)){		//디렉터리 생성에 실패했을 경우 
		die("업로드 디렉터리 생성에 실패했습니다.");
	}
}

//업로드할 파일 없다면
if(!isset($_FILES['myfile'])){
	die("업로드 파일이 없습니다");
}

$error=$_FILES['myfile']['error'];
$name=$_FILES['myfile']['name'];

//오류확인 (match 표현식)
$result= match($error){
	UPLOAD_ERR_OK=> "업로드 정상 완료 ($error)",
	UPLOAD_ERR_INI_SIZE =>"php.ini에 설정된 최대 파일크기 초과 ($error)",
	UPLOAD_ERR_FORM_SIZE=>"HTML폼에 설정된 최대 파일크기 초과 ($error)",
	UPLOAD_ERR_PARTIAL=>"파일의 일부만 업로드됨 ($error)",
	UPLOAD_ERR_NO_FILE=>"업로드할 파일이 없음 ($error)",
	UPLOAD_ERR_NO_TMP_DIR=>"웹서버에 임시폴더가 없음($error)",
	UPLOAD_ERR_CANT_WRITE=>"웹서버에 파일을 쓸 수 없음($error)",
	UPLOAD_ERR_EXTENSION =>"PHP확장기능에 의한 업로드 중단($error)",
};

//업로드 실패 시 오류 출력
if($error != UPLOAD_ERR_OK){
	echo $result;
	exit;
}

$upload_file=$uploads_dir.'/'.$name;		//저장될 디렉터리 및 파일명
$fileinfo=pathinfo($upload_file);		//첨부파일의 정보를 가져옴
#pathinfo():저장할 경로명을 개별 저보로 분리한다. 이는 디렉터리, 파일명, 확장자명에 대한 정보에 쉽게 접근하기 위함이다.
$ext=strtolower($fileinfo['extension']);	//확장자명을 소문자로 변경하여 변수ext에 넣는다.

$i=1;

while(is_file($upload_file)){
	$name=$fileinfo['filename']."-{$i}.".$fileinfo['extension'];
	$upload_file=$uploads_dir.'/'.$name;
	$i++;
}

if(!in_array($ext, $allowed_ext))	//확장자 검사
#in_array() : 값이 배열 안에 존재하는지 확인해준다.
{
	echo "허용되지 않은 확장자입니다.";
	exit;
}

//파일 이름
if(!move_uploaded_file($_FILES['myfile']['tmp_name'],$upload_file)){
	#move_uploaded_file() : 임시 디렉터리에 저장된 파일을 새 위치로 이동하는 함수
	echo "파일이 업로드 되지 않았습니다.";
	exit;
}

?>

<html>
<head>
	<title>File Upload</title>
</head>
<body>
<h1>File Upload Example</h1>
	<h2>파일 정보</h2>
	<ul>
		<li>결과 :<?php echo $result;?></li>
		<li>파일명 :<?php echo $name;?></li>
		<li>확장자 :<?php echo $ext;?></li>
		<li>파일형식 :<?php echo $_FILES['myfile']['type'];?></li>
		<li>파일크기 :<?php echo number_format($_FILES['myfile']['size']); ?>바이트</li>
	</ul>
	<a href="./file_download.php?file=<?php echo $name;?>">다운로드</a>
</body>
</html>



