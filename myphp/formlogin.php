<?php
$name=filter_input(INPUT_POST,'name');
$password=filter_input(INPUT_POST,'password');

if(!empty($name)){
  
      if(!empty($password)){

//connecting to the database
$servername="localhost";
$username="root";
$password="";
$dbname="db_sms";

//create a connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

//die if connection was not successful
if(!$conn){

    die("connection was failed".mysqli_connect_error());
}
else{

    $sql="INSERT Into login (name,password) values('$name,'$password')";
    if($conn->query($sql)){
        echo"New record is inserted";
    }
}

   
  }

}






?>
