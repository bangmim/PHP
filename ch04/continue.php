<?php
for ($i=1; $i<50; $i++){
	if($i %2 ==0) continue;		//조건식 값은 제외하고 출력된다.
	echo "{$i}<br/>";
}