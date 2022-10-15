<?php

include "form_conn.php"; // Using database connection file here

$id = $_GET['rn']; // get id through query string




if(isset($_POST['submit'])){


  $Name=$_POST['name'];
  $Lname=$_POST['password'];

  $insertquery= "UPDATE `login` SET id=$id, name='$Name',LastName='$Lname' WHERE id=$id";


  $res=mysqli_query($conn,$insertquery);

  if($res){
    header("location:fetchDataInTable.php");
   
//    ?>
// <script>
//    alert("data inserted ");
// </script>
//     <?php
  }

  else{
//  ?>
// <script>
//     alert("data was not inserted ");
// </script>
//     <?php
 die(mysqli_error($conn));// display error message if not delete
    }


  }




?>
   

   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>


<body>
    <form action="" method="POST">

    <label for="fname">Roll no:</label><br>
      <input type="text" id="fname" name="roll" placeholder="John"   value="<?php  echo $_GET['rn']; ?>"><br>
    
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="name" placeholder="John"   value="<?php  echo $_GET['sn']; ?>"><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="password" placeholder="Doe"   value="<?php  echo $_GET['sln']; ?>" ><br><br>
      <input type="submit" name="submit" value="Update">
    </form>






</body>
</html>

