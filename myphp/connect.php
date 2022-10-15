<?php


//connecting to the database
$servername="localhost";
$username="root";
$password="";
$dbname="";

//create a connection
$conn=mysqli_connect($servername,$username,$password,$dbname);


//die if connection was not successful
if(!$conn){

    die("connection was failed".mysqli_connect_error());
}

else{ ?>


 <script>
     alert("Connection was sucessfull");
 </script>
 
<?php
}


   
?>
