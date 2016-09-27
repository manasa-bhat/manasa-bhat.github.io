<html>

<head>
<style type="text/css">
 .topcorner{
   top:100;
   right:0;
  }
</style>

</head>
<body>
<h1> a small example page to insert some data into the MYSQL USING PHP</h1>
<div style="float:left">
	<form action ="ternary.php" method="post">
		<table>
			<tr><td>emp_no:</td><td><input type="text" name="emp_no"/><br><br></td></tr>
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

</div>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$con=mysqli_connect("localhost","root","admin@123","employ");
if(!$con)
 {
  die('could not connect:' .mysqli_connect_error());
 }
else{
//echo "success";
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
	$last_name = $_POST['last_name'];
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

if(isset($_POST['title'])) {
	$title= $_POST['title'];
	//echo $hire_date;
}




$sql1="insert into dept_emp(emp_no,dept_no,from_date,to_date)values
  ('$emp_no','$dept_no','$from_date','$to_date')";
if(!mysqli_query($con,$sql1))
 {
   //echo("Error description: " . mysqli_error($con));
  // echo $sql1 ;
 }

else
{
echo   "record added";
} 

$sql2="insert into departments(dept_no,dept_name)values('$dept_no','$dept_name')";
if(!mysqli_query($con,$sql2))
{
//echo("Error description: " . mysqli_error($con));
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
  // echo("Error description: " . mysqli_error($con));
   //echo $sql3 ;
  }
else
{
echo "record added";
}


$sql4="insert into dept_manager(dept_no,emp_no,from_date,to_date)values('$dept_no','$emp_no','$from_date','$to_date')";
if(!mysqli_query($con,$sql4))
{
//echo("error description: " .mysqli_error($con));
//echo $sql4;
}
else
{
echo " record added";
}

$sql5="insert into titles(emp_no,title,from_date,to_date)values('$emp_no','$title','$from_date','$to_date')";

if(!mysqli_query($con,$sql5))
{
//echo("error description: ".mysqli_error($con));
//echo $sql5;
}
else
{
echo " record added";
}


$sql6="insert into employees(emp_no,hire_date,birth_date,first_name,last_name,gender)values('$emp_no','$hire_date','$birth_date','$first_name','$last_name','$gender')";

 if(!mysqli_query($con,$sql6))
{
//echo("error description: ".mysqli_error($con));
//echo $sql6;
}
else
{
echo " record added";
}  

?>


<div class="topcorner">
<form action="ternary.php" method="POST">
<table border="4" bordercolor="pink">   
<tr><th>formGender  </th><th>empno  </th><th>birthdate  </th><th>salary  </th><th>deptname  </th><th>submit</th></tr>
<tr>

<td>
<select name="formGender">
  <option value="male">male</option>
  <option value="female">female</option>
</select>
</td>

<td>
<select name="empno">
  <option value="ASC">ASC</option>
  <option value="DESC">DESC</option>
</select>
</td>

<td>
<select name="birthdate">
<option value="ASC">ASC</option>
<option value="DESC">DESC</option>
</select>
</td>
<td>
<select name="SALARY">
<option value="ASC">ascending</option>
<option value="DESC">decsending</option>
</select>
</td>
<td>
<select name="deptname">
<option value="civil">civil</option>
<option value="marketing"> marketing</option>
<option value="human resource">human resourcel</option>
<option value="designing"> designing</option>
<option value="english"> english</option>
</select>
</td>
<td>
<input type="submit" value="go">
</td>
</tr>
</table>
</form>


<?php
$abc="select e.emp_no as emp1_no,e.first_name,e.last_name,e.hire_date,e.gender,e.birth_date,de.from_date,de.to_date,s.salary,d.dept_name,d.dept_no,t.title
				        from employees e join   dept_emp de 
		                        on e.emp_no=de.emp_no 
					join departments d on 
		                        de.dept_no=d.dept_no 
					join salarees s on
					e.emp_no=s.emp_no
		                        join titles t on 
		                        e.emp_no=t.emp_no";
//echo $abc;		
//$empno=$_POST['empno'];
$birthdate=$_POST['birthdate'];
$formGender=$_POST['formGender'];
$SALARY=$_POST['SALARY'];
$deptname=$_POST['deptname'];
$a="e.gender='$formGender' ";
//$b=" e.emp_no $empno ";
$c=" e.birth_date $birthdate ";
$d=" s.salary $SALARY ";
$e=" d.dept_name ='$deptname' ";
$f=" ";

//$query="order by "(isset($birthdate)?$c:$f) ; 
//echo $query;

//$pqr=(isset($formGender)?$a:$f) .(isset($empno)?$b:$f);/* . (isset($birthdate)?$c:$f).(isset($SALARY)?$d:$f) . (isset($deptname)?$e:$f);*/

$query="where " . (isset($formGender)?$a:'') ." and".(isset($deptname)?$e:'') . "order by " . (isset($birthdate)?$c:'') .",". (isset($SALARY)?$d:'') .",".  (isset($formGender)?$a:'') .",".(isset($deptname)?$e:$f) ; 
//echo $query;

//$pqr=(isset($formGender)?$a:(isset($empno)?$b:$f));(isset($SALARY)?$d:
//$pqr=(isset($formGender)?$a:$f);


//echo $pqr ;
$sql="$abc" . " $query" ;
echo $sql;
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
//print_r($result);
?>
 

			<table border="4" bordercolor="pink">   
                              
				   <?php      
                                                echo "<tr>";
                                                echo "<th>emp_number</th>"; 
						echo"<th>first_name</th>";

						echo "<th>last_name</th>";

						echo "<th>hire_date</th>";

						echo "<th>gender</th>";

						echo "<th>birth_date</th>";

						echo "<th>from_date</th>";

						echo "<th>to_date</th>";

						echo "<th>salary</th>";

						echo "<th>dept_name</th>";

						echo "<th>dept_no</th>";

						echo "<th>title</th>";
                                            
			                         echo "</tr>";
					

                             
				
					
                                            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
						{//print_r($row);

                                                echo "<tr>";
					     
                                                echo "<td>" .$row['emp1_no']. "</td>"; 
						echo "<td>".$row['first_name']."</td>";

						echo "<td>". $row['last_name']."</td>";

						echo "<td>". $row['hire_date']."</td>";

						echo "<td>".$row['gender']."</td>";

						echo "<td>".$row['birth_date']."</td>";

						echo "<td>". $row['from_date']."</td>";

						echo "<td>".$row['to_date']."</td>";

						echo "<td>". $row['salary']."</td>";

						echo "<td>". $row['dept_name']."</td>";

						echo "<td>". $row['dept_no']."</td>";

						echo "<td>".$row['title']."</td>";
                                         
                                                echo "</tr>";
                                                }
					?>				
                              
			  </table>


                      
		<?php
		mysqli_close($con);
		?>

</div>
</body>
</html>


