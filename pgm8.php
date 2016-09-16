<html>
<body>
<h1> a small example page to insert some data into the MYSQL USING PHP</h1>
<form action ="database.php" method="post">
<table>
<tr><td>emp_no</td><td><input type="text" name="emp_no"/><br><br></td></tr>
<tr><td>dept_no:</td><td><input type="text" name="dept_no"/><br><br></td></tr>
<tr><td>from_date:</td><td><input type="text" name="from_date"/><br><br></td></tr>
<tr><td>to_date:</td><td><input type="text" name="to_date"/><br><br></td></tr>
<tr><td>dept_name:</td><td><input type="text" name="dept_name"/><br><br></td></tr>
<tr><td>salary:</td><td><input type="text" name="salary"/><br><br></td></tr>
<tr><td>birth_date:</td><td><input type="text" id="datepicker" name="birth_date"/><br><br></td></tr>
<tr><td>first_name:</td><td><input type="text" name="first_name"/><br><br></td></tr>
<tr><td>last_name:</td><td><input type="text" name="last_name"/><br><br></td></tr>
<tr><td>gender:</td><td><input type="radio" name="gender" value="male"> Male</td>
      <td> <input type="radio" name="gender" value="female"> Female<br></td></tr>
<tr><td>hire_date:</td><td><input type="text" id="datepicker1" name="hire_date"/><br><br></td></tr>
<tr><td>title:</td><td><input type="text" name="title"/><br><br></td></tr>
</table>
<input type="submit" value="go">
</form>


<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
$con=mysqli_connect("localhost","root","admin@123","employ");
if(!$con)
 {
  die('could not connect:' .mysqli_connect_error());
 }
else{
echo "success";
}


if(isset($_POST['dept_no'])) {
	$dept_no = $_POST['dept_no'];
	//echo $dept_no;
}
if(isset($_POST['dept_name'])) {
	$dept_name = $_POST['dept_name'];
	//echo $dept_name;
}


if(isset($_POST['emp_no'])) {
	$emp_no = $_POST['emp_no'];
	//echo $emp_no;
}
if(isset($_POST['from_date'])) {
	$from_date = $_POST['from_date'];
	//echo $from_date;
}

if(isset($_POST['to_date'])) {
	$to_date = $_POST['to_date'];
	//echo $to_date;
}

if(isset($_POST['salary'])) {
	$salary = $_POST['salary'];
	//echo $salary;
}


if(isset($_POST['birth_date'])) {
	$birth_date = $_POST['birth_date'];
	//echo $birth_date;
}

if(isset($_POST['first_name'])) {
	$first_name = $_POST['first_name'];
	//echo $first_name;
}
if(isset($_POST['last_name'])) {
	$slast_name = $_POST['last_name'];
	//echo $last_name;
}

if(isset($_POST['gender'])) {
	$gender= $_POST['gender'];
	//echo $gender;
}

if(isset($_POST['hire_date'])) {
	$hire_date= $_POST['hire_date'];
	//echo $hire_date;
}



//echo "good day";*/


$sql1="insert into dept_emp(emp_no,dept_no,from_date,to_date)values
  ('$emp_no','$dept_no','$from_date','$to_date')";
if(!mysqli_query($con,$sql1))
 {
   echo("Error description: " . mysqli_error($con));
  // echo $sql1 ;
 }

else
{
echo   "record added";
} 

$sql2="insert into departments(dept_no,dept_name)values('$dept_no','$dept_name')";
if(!mysqli_query($con,$sql2))
{
echo("Error description: " . mysqli_error($con));
   //echo $sql2 ;
 }

else
{
echo   "record added";
}

//echo "hi";
$sql3="insert into salarees(emp_no,salary,from_date,to_date)values('$emp_no','$salary','$from_date','$to_date')";
if(!mysqli_query($con,$sql3))
  {
   echo("Error description: " . mysqli_error($con));
   //echo $sql3 ;
  }
else
{
echo "record added";
}


$sql4="insert into dept_manager(dept_no,emp_no,from_date,to_date)values('$dept_no','$emp_no','$from_date','$to_date')";
if(!mysqli_query($con,$sql4))
{
echo("error description: ".mysqli_error($con));
//echo $sql4;
}
else
{
echo " record added";
}

$sql5="insert into titles(emp_no,title,from_date,to_date)values('$emp_no','$title','$from_date','$to_date')";

if(!mysqli_query($con,$sql5))
{
echo("error description: ".mysqli_error($con));
//echo $sql5;
}
else
{
echo " record added";
}


$sql6="insert into employees(emp_no,hire_date,birth_date,first_name,last_name,gender)values('$emp_no','$hire_date','$birth_date','$first_name','$last_name','$gender')";
//$sql6="insert into employees(emp_no,hire_date,birth_date,first_name,last_name,gender)values('12','2016-09-17','1994-09-17','manasa','shetty','female')";
 if(!mysqli_query($con,$sql6))
{
echo("error description: ".mysqli_error($con));
//echo $sql6;
}
else
{
echo " record added";
}  
mysqli_close($con);


//echo "hello";



?>



</body>
</html>

