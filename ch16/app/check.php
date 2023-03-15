<?php
include("../dbconn.php");

$id=$_GET['id'];

if(empty($id)){
    echo "<script>alert('체크실패 : 고유 ID가 넘어오지 않았습니다');</script>";
    echo "<script>location.replace('../index.php');</script>";
    exit;
} else{
    $sql="SELECT * FROM todo WHERE id = '$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $checked=(int)$row['checked'];
    $checked_re = match($checked){
        1=>0,
        0=>1,
    };

    $sql="UPDATE todo SET checked = '$checked_re' WHERE id='$id' ";
    $result=mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:../index.php");

}