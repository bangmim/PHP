<!-- # select 태그로 데이터 전달
<form>태그를 사용할 때 많이 사용된다.
여러 가지의 값들을 드롭 다운 목록 형태로 보여주고 선택할 때 사용되는 방식

//선택 목록을 <option>태그(=>옵션이 선택된 경우 전송되는 값)로 설정한다.
기본값 설정할 때에는 selected로 사용한다.
-->

<html>
<head>
	<title>Select</title>
</head>
<body>
<h1>Select Example</h1>
	<form action="./post_result.php" method="post">
	이름 :
	<select name="name">
		<option value="">선택하세요</option>
		<option value="홍길동">홍길동</option>
		<option value="임꺽정">임꺽정</option>
		<option value="장길산">장길산</option>
	</select>
	<br/>
	
	아이디:
	<select name="id">
		<option value="">선택하세요</option>
		<option value="hong">hong</option>
		<option value="im">im</option>
		<option value="jang">jang</option>
	</select>
	<br/>

	이메일 : 
	<select name="email">
		<option value="">선택하세요</option>
		<option value="hong@email.com">hong@email.com</option>
		<option value="im@email.com">im@email.com</option>
		<option value="jang@email.com">jang@email.com</option>
	</select>
	<br/>
	<input type="submit" value="전송">
	</form>
</body>
</html>
		
