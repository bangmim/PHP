<html>
<head>
	<title>Checkbox Result</title>
</head>
<body>
<h1>Checkbox Example</h1>
	<?php
	if (isset($_POST['fruit'])){	//배열에 값이 있는 경우 출력
		echo "선택한 과일은 <br/>";
		for($i=0; $i<count($_POST['fruit']); $i++){
			$fruit=$_POST['fruit'][$i];
			echo $fruit."<br/>";
			}
			echo "입니다";
		}else{	//배열에 값이 없는 경우 출력
		echo"선택한 과일이 없습니다";
		}	
	?>
</body>
</html>

<!-- isset()함수를 사용해 $_POST[] 변수에 값이 있는지 확인한다 -->