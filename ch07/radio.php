<html>
<head>
	<title>Radio</title>
</head>
<body>
<h1>Radio Example</h1>
	<form action="./post_result.php" method="post">
		이름:
		<input type="radio" name="name" value="홍길동">홍길동
		<input type="radio" name="name" value="임꺽정">임꺽정
		<input type="radio" name="name" value="장길산">장길산
		<br/>

		아이디:
		<input type="radio" name="id" value="hong">hong
		<input type="radio" name="id" value="im">im
		<input type="radio" name="id" value="jang">jang
		<br/>

		이메일:
		<input type="radio" name="email" value="hong@email.com">hong@email.com
		<input type="radio" name="email" value="im@email.com">im@email.com
		<input type="radio" name="email" value="jang@email.com">jang@email.com
		<br/>
		<input type="submit" value="전송">
	</form>
</body>
</html>

