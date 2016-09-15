<html>
<body>

<h1> a small example page to insert some data into the MYSQL USING PHP</h1>
<form action ="pgm5.php" method="post">
firstname:<input type="text" name="firstname"/><br><br>
lastname:<input type="text" name="lastname"/><br><br>
usn:<input type="text" name="usn"/><br><br>
address:<input type="text" name="address"/><br><br>
university:<input type="text" name="university"><br><br>
datetime:
 <select name="column">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select> 
<input type="submit">
</form>


<?php
$firstname=$_POST['firstname'];
$lastname= $_POST['lastname'];                    
$usn= $_POST['usn'];
$address=$_POST['address'];
$university=$_POST['university'];
$datetime = date("Y-m-d H:i:s");
$column=$_POST['column'];

echo $column;
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","admin@123","newtest");
if(!$con)
 {
  die('could not connect:' .mysqli_connect_error());
 }

mysqli_select_db("newtest",$con);



$sql="insert into student1(firstname,lastname,usn,address,university,datetime)values
   ('$firstname','$lastname','$usn','$address','$university','$datetime')";

if(!mysqli_query($con,$sql))

 {
   echo("Error description: " . mysqli_error($con));
   echo $sql ;

 }




else
{
echo   "record added";
}

mysqli_close($con);



?>
</body>
</html>

