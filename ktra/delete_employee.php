<?php
    $ma_nhanvien = $_GET['id'];
    $conn = mysqli_connect('localhost','root','','dhtl_danhba');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE FROM db_nhanvien WHERE ma_nhanvien = '$ma_nhanvien'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin.php"); 
    }else{
        header("location: error.php");
    }
    mysqli_close($conn);
?>