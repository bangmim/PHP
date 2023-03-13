<?php
#session_start()함수는 <html>태그보다 앞서 위치해야 한다
session_start();
?>
<html>
<head>
	<title> Result Session</title>
</head>
<body>
<h1>Session Example</h1>
세션 값은 : <?php echo $_SESSION['mySession'];?> 입니다.
</body>
</html>