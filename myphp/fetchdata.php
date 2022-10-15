<?php

include "form_conn.php";        //$conn=mysqli_connect("localhost","root","","db_sms");


$sql=" select * from login";
$res=$conn->query($sql);



if($res->num_rows>0){

while($row=$res->fetch_assoc()){

    echo  "<tr>"."<td>". $row['id']  ." ". "<td>". $row['name']. " " . "<td>". $row['LastName']."<br>";
  }
}

else{

    echo "no results";
}

$conn->close();

?>