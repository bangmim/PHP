<?php
include("../dbconn.php");

$id=$_GET['id'];

if(empty($id)){
    echo "<script>alert('삭제실패 : 고유 ID가 넘어오지 않았습니다');</script>";
    echo "<script>location.replace('../index.php');</script>";
    exit;
} else{
    $sql="DELETE FROM todo WHERE id='$id' ";
    $result=mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:../index.php");
}