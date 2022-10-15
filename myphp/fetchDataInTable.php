<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
  table,
  th,
  td {
    border: 1px solid black;
    text-align: center;
    margin-left: 15px;
    
  }
</style>

<body>

  <h2> Data to be Displayed</h2>


  <a href="form.php" class="btn btn-info m-3">Add New User</a>
 
  <table style="width:50%">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>Lastname</th>
      <th colspan=2>Operation</th>
    </tr>



    <?php

    // include "fetchdata.php"; 

    // or below

    include "form_conn.php";        //$conn=mysqli_connect("localhost","root","","db_sms");


    $sql = " select * from login";
    $res = mysqli_query($conn, $sql);
    //$op='edit';

    if ($res->num_rows > 0) {

      while ($row = $res->fetch_assoc()) {

        echo '<tr>
 
      <td>' . $row['id'] . '</td>
      <td>' . $row['name'] . '</td>
      <td>' . $row['LastName'] . '</td>
      <td>
      <button class="btn btn-primary"> <a href="update.php?rn= ' . $row['id'] . '& sn=' . $row['name'] . ' & sln=' . $row['LastName'] . ' "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg></a></button> 

      <button class="btn btn-danger"><a href="delete.php?rn=' . $row['id'] . ' & sn=' . $row['name'] . ' & sln=' . $row['LastName'] . ' "  onclick= "return checkdelete()"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash3-fill" viewBox="0 0 16 16">
      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
      </svg></a></button>
      </td>

    </tr>';

        // echo  "<tr><td>".$row['id'].    "<td>".$row['name'].   "<td>".$row['LastName']. 
        //   "<td >"."<a href='update.php?rn=$row[id] & sn=$row[name] & sln=$row[LastName]'> Edit </a> " . "<td>".  "<a href='delete.php?rn=$row[id] & sn=$row[name] & sln=$row[LastName]'  onclick=' return checkdelete()'> Delete </a> " . "</tr>";
      }
    } else {

      echo "no results";
    }






    $conn->close();

    ?>



  </table>

  


  <script>
    function checkdelete() {

      return confirm("do you want to delete");
    }
  </script>



</body>

</html>