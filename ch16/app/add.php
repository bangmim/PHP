<?php
include("../dbconn.php");

$title = trim($_POST['title']);
$datetime=date('Y-m-d H:i:s', time());

if(empty($title)){
    echo "<script>alert('추가실패 : 내용을 입력하세요.');</script>";
    echo "<script>location.replace('../index.php');</script>";
    exit;
} else {
    $sql="INSERT INTO todo SET title = '$title', datetime='$datetime'";
    $result=mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:../index.php");
}

// empty()함수 : 변수가 비어있는지 검사하고, 비어있다면 TRUE, 비어있지 않다면 FALSE를 반환한다.
// header()함수 : 현재 페이지가 변경되었거나 더이상 사용하지 않을 경우 다른 URL로 리다이렉트(서버 응용 프로그램의 규칙을 사용하는 방법)한다.