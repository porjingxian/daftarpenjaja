<?php
include('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM  formpendaftaran WHERE id=$id"; 

if(mysqli_query($conn,$query)){
    echo "<script>alert('Data berjaya dihapuskan');</script>";
}else{
    mysqli_error($conn);
}
?>