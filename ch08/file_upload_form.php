<html>
<head>
	<title>File Upload Form</title>
</head>
<body>
<h1>File Upload Example</h1>
	<form action="./file_upload.php" enctype="multipart/form-data" method="post">
	<input type="file" name="myfile">
	<button>보내기</button>
	</form>
</body>
</html>

<!-- 
07: action : 전송 결과를 받을 파일 경로 입력. method="post"
09: 보내기 버튼을 누르면 form의 action 경로로 이동한다.
-->

<!-- # 파일 업로드 사용 시 HTML 서식의 규칙! 
<form>태그
1.method는 post 사용해야만 한다
2.enctype은 multipart/form-data로 사용해야만 한다
3.input 태그의 type="file" : 입력되는 것이 파일임을 지정한다.

위 조건을 따르지 않으면 파일 업로드에 오류가 발생할 수 있다.
-->