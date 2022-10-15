<?php
include 'form_conn.php';

if(isset($_POST['import'])){

    $filename=$_FILES['file']['tmp_name'];

    if($_FILES['file']['size']>0){

        $file=fopen($filename,"r");
        while(($column=fgetcsv($file,1000,","))!==FALSE){

$insert="insert into data (name,type) values (".$column['name'].",".$column['type'].")";
$res=mysqli_query($conn,$insert);

if(!empty($res)){

    echo"imported";
}

else{

    echo "not imported";
}
        }
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
    <form action="" method="post" enctype="multipart/form-data">
    
      
      <input type="file" name="file" accept=".csv">
      <Button type="submit" name="import">import</Button>
    </form>
</body>
</html>
