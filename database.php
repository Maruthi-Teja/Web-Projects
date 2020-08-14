
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  if(isset($_POST['name'])){
 $server = "localhost";
 $username ="root";
 $password = "";
 $con = mysqli_connect($server,$username,$password);
 if(!$con)
 {
     die("connection to the database is failed". mysqli_connect_error());

}
// echo "Success connecting to database" 
$name = $_POST['name'];
$age =$_POST['age'];
$phone  =$_POST['phone'];
$address = $_POST['address'];
$other = $_POST['desc'];

$sql ="INSERT INTO `plasma`.`plasma` ( `name`, `age`, `phone`, `address`, `other`, `date`) VALUES ('$name', '$age', '$phone', '$address', '$other', current_timestamp());";
//echo sql

if($con->query($sql)==true)
{
    //echo "successfully";
}
else{
    echo "ERROR :$sql<br>$con->error";
}
$con->close();
  }
  ?>
   <div class="container">
        <h2>Thanks for submitting we will inform you once the donor is availabe</h2>
    </div>
</body>
</html>

