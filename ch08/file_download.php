<?php
# 파일 다운로드 링크 클릭 -> 요청 파일이 서버에 존재하는지 체크 -> 파일이 존재한다면 다운로드

$filename=$_GET['file'];	//요청한 파일명
$filepath =$_SERVER['DOCUMENT_ROOT'].'/myapp/ch08/uploads/'.$filename;	//서버에 저장된 파일 경로
#_SERVER['DOCUMENT_ROOT'] : 현재 서버에서 루트 경로를 출력하는 변수.
#httpd.conf 파일에 설정된 DocumentRoot를 참조한다. (현재 "D:/xampp/gnuwiz"경로가 출력된다.)

//파일이 존재하는지 확인
if(!is_file($filepath)|| !file_exists($filepath)){
	#is_file() : 파일의 존재 유무 확인할 때 사용. 디렉터리를 확인할 경우 무조건 false를 반환한다.
	#경로 확인을 위해 file_exists()를 함께 사용해서 해당 파일이 존재하는지의 여부를 체크한다.
	echo "파일이 존재하지 않습니다";
	exit;
}

// 브라우저 체크 (다양한 파일 형식에 대해서 검색이나 다른 참고 자료를 통해 header 설정을 변경해야 한다)
if(preg_match("/msie/i",$_SERVER['HTTP_USER_AGENT']) && preg_match("/5\.5/",$_SERVER['HTTP_USER_AGENT'])){
	header("content-type:doesn/matter");
	header("content-length:".filesize("$filepath"));
	header("content-disposition:attachment; filename=\"$filename\"");	//다운로드 되는 파일명
	header("content-transfer-encoding:binary");
}else{
	header("content-type:file/unknown");
	header("content-length:".filesize("$filepath"));	
	header("content-disposition:attachment; filename=\"$filename\"$filename\"");		//다운로드 되는 파일명
	header("content-description:php generated data");
}

header("pragma:no-cache");
header("expires:0");

$fp=fopen($filepath, 'rb');	//rb 읽기전용. 바이러니 타입
#fopen(): 문서, 그림 등의 외부파일을 열어주는 함수. 열고 싶은 파일의 경로와 파일 모드 설정 내용을 인자로 받는다. 이때 파일모드는 반드시 설정해야만 사용이 가능하다.

while (!feof($fp)){
	#feof(): 파일 포인터를 읽어 들인 위치가 끝인지 아닌지 체크한다. while문을 사용하여 끝이 아니면 계속 반복하도록 되어잇다.
	echo fread($fp, 100*1024);	// 여기서 echo는 전송을 의미한다
	#fread():파일의 처음부터 끝까지 지정한 크기만큼 읽어 들이는 함수. 
}

fclose($fp);	//파일 닫기 (fopen()으로 열어서 사용한 다음에는 반드시 fclose()로 닫아주어야 한다. 파일 전송이 완료되면 파일을 닫늗다.)