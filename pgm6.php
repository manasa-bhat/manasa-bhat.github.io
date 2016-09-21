<html>
<body>
<h1> a small example page to search  some data from the MYSQL USING PHP</h1>
search:<input type="text" name="search">

<form action ="pgm6.php" method="post">
<select name="column">
  <option value="firstname">firstname</option>
  <option value="lastname">lastname</option>
  <option value="usn">usn</option>
  <option value="address">address</option>
  <option value="university">university</option>
  <option vlue="datetime">datetime</option>
</select> 
<input type="submit" value="go">
</form>


<?php
$search=$_POST['search'];
$column=$_POST['column'];

//echo $column;
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","admin@123","newtest");
if(!$con)
 {
  die('could not connect:' .mysqli_connect_error());
 }


if($column == 'firstname') { 
    $query = "SELECT * FROM student  WHERE firstname like '$search'"; 
}

else if($column == 'lastname') { 
    $query = "SELECT * FROM student  WHERE lastname like '$search'"; 
}
else if($column == 'usn') { 
    $query = "SELECT * FROM student  WHERE usn like '$search'"; 
}
else if($column == 'address') { 
    $query = "SELECT * FROM student  WHERE address like '$search'"; 
}
else if($column == 'university') { 
    $query = "SELECT * FROM student  WHERE university like '$search'"; 
}
else if($column == 'datetime') { 
    $query = "SELECT * FROM student  WHERE datetime like '$search'"; 
}

else
  {
   $query= "select * from student";
  }

$sql = mysqli_query($con,$query); 
print_r($sql);

/*if(!mysqli_query($con,$sql))

 {
   echo("Error description: " . mysqli_error($con));
  
 }
/*
else
{
//$result = $conn->query($sql);
$result = mysqli_query($con, $sql);
echo $result;

if (mysqli_num_rows($result) > 0) {
echo "hi";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . " " . $row["usn"]. " " . $row["address"]." " .$row["university"] ." " 
. $row["datetime"] "<br>";
    }




}
 else {
     echo "0 results";
}
}
*/
mysqli_close($con);



?>
</body>
</html>

