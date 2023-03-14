<?php
$name="홍길동";
$id="hong";
$email="hong@email.com"
?>

<html>
<head>
	<title>Hidden</title>
</head>
<body>
<h1>Hidden Example</h1>
	<form action="./post_result.php" method="post">
		<input type = "hidden" name="name" value="<?php echo $name;?>">
		<input type = "hidden" name="id" value="<?php echo $id;?>">
		<input type = "hidden" name="email" value="<?php echo $email;?>">
		<input type="submit" value="전송">
	</form>
</body>
</html>

<!-- form 구조 안에 <input type="submit">을 사용하면 form action 경로로 이동한다 (<form method-"post">)-->
<!-- input type="hidden"을 사용하면 화면상에 입력 부분은 보이지 않지만, 서버로 함께 전송된다. -->