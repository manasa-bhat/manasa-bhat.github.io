<html>
<body>
<h1> a small example page to search  some data from the MYSQL USING PHP</h1>

<form action ="pgm6.php" method="post">
search:<input type="text" name="search">

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


$con=mysqli_connect("localhost","root","admin@123","newtest");
if(!$con)
 {
  die('could not connect:' .mysqli_connect_error());
 }

if($column == 'firstname') { 
    $query = "SELECT * FROM student  WHERE firstname LIKE '$search' "; 
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
  print_r($query);
  }

if(!mysqli_query($con,$query))

 {
   echo("Error description: ".mysqli_error($con));

 }


else
{
//echo $query;
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) 
{
print_r($row);
printf ("%s (%s)(%S)(%S)(%S)(%S)\n",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
}



/*while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
{

printf ("%s (%s)(%S)(%S)(%S)(%S)\n",$row["firstname"],$row["lastname"],$row["usn"],$row["address"],$row["university"],$row["datetime"]);
}*/


}

mysqli_close($con);



?>
</body>
</html>

