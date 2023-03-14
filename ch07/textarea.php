<!-- textarea : 여러 줄 입력 가능
	 input : 한 줄 입력 가능
-->

<?php
$text = "안녕하세요 저는 홍길동 입니다.
이렇게 여러 줄을 입력하였습니다.";
?>
<html>
<head>
	<title>Textarea</title>
</head>
<body>
<h1>Textarea</h1>
	<form action="./textarea_result.php" method="post">
		<textarea name="text" cols="50" rows="10"><?php echo $text;?></textarea>
		<input type="submit" value="전송">
	</form>
</body>
</html>