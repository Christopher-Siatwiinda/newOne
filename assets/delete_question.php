<?php 
    include "../dbconnect.php";

    $id = mysqli_real_escape_string($conn,$_POST['id']);

    $sql ="DELETE FROM questions WHERE id = '$id'";
   
    if(mysqli_query($conn,$sql)){
        echo 1;
    }


?>