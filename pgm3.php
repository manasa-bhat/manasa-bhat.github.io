<html>
<body>
<?php
echo "firstname ";
echo "lastname ";
$firstname="manasa";
$lastname="bhat";
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","admin@123","test");
if(!$con)
 {
  die('could not connect:' .mysqli_connect_error());
 }
mysqli_select_db("test",$con);



$sql="insert into nametable(firstname,lastname)values
   ('$firstname','$lastname')";

if(!mysqli_query($con,$sql))
 {
   echo("Error description: " . mysqli_error($con));
 }

/*if (!mysqli_query($con,"INSERT INTO Persons (FirstName) VALUES ('Glenn')"))
  {
  echo("Error description: " . mysqli_error($con));
  }*/

echo "1 record added";
mysqli_close($con);


?>
</body>
</html>

