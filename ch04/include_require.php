<!-- php에서 파일을 포함시키는 키워드 require, include -->
<?php
#include'filename.php';
#require 'filename.php'

#include ('filename.php');
include 'if.php';
include ('../ch03/hello.php');

echo "<br/>";
require 'match.php';

//한번만 include (중복 방지)
#include_once 'filename.php';	
#require_once 'filename.php';	
