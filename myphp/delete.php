<?php

include "form_conn.php"; // Using database connection file here

if(isset($_GET['rn'])){
$id = $_GET['rn']; // get id through query string

$del = mysqli_query($conn,"delete from login where id = '$id'"); // delete query

if($del)
{
    
header("location:fetchDataInTable.php");
}

else{
    
die(mysqli_error($conn));// display error message if not delete
}


}

?>