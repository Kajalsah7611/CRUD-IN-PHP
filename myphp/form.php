<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Form</title>
</head>


<body>

<div class="container mt-5 ">
  <div class="row justify-content-center ">
    <div class="col-4 bg-light  border border-secondary rounded m-3 p-2 ">
    <form action="" method="post">
    
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="name" placeholder="John"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="password" placeholder="Doe"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>
    </div>
    

</div>
</body>
</html>




<?php

include 'form_conn.php';


if(isset($_POST['submit'])){


  $Name=$_POST['name'];
  $Lname=$_POST['password'];

  $insertquery=" insert into login (name,LastName) values('$Name',  '$Lname') ";


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
 ?>
<script>
    alert("data was not inserted ");
</script>
    <?php
  }
}



?>