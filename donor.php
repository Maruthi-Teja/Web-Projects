<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>DONOR</title>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body> 
<div class= "header">
<h1 class="text-center">Patients status</h1>
</div>
<div class="container mt-5">
    <table id="receiver" class="table table-bordered">
     <thead class="thead-dark">
         <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Phone number</th>
          <th>Address </th>
          <th>OTHER</th>

         </tr>
     </thead>
     <tbody id="tablebody">
         <?php
        $username = "root";
        $password = "";
        $database = "plasma";
        $mysqli = new mysqli("localhost",$username,$password,$database);
        $query = "SELECT * FROM plasma";
        if($result = $mysqli->query($query))
     {
         while($row = $result->fetch_assoc())
         {
            $field1name = $row["name"];
            $field2name = $row["age"];
            $field3name = $row["phone"];
            $field4name = $row["address"];
            $field5name = $row["other"]; 
    
            echo '<tr> 
                      <td>'.$field1name.'</td> 
                      <td>'.$field2name.'</td> 
                      <td>'.$field3name.'</td> 
                      <td>'.$field4name.'</td> 
                      <td>'.$field5name.'</td> 
                  </tr>';
         }
         $result->free();
     }
         ?>
     </tbody>
    </table>
 </div>
</div>
</body>
</html>
<script>
    $("#receiver").DataTable();
</script>