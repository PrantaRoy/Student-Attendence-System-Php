
<?php

	 if(isset($_POST['submit'])){
	  $db = mysqli_connect("localhost","root","","samira");
	 
		 $s_id=$_POST['id'];
		 $s_name=$_POST['name'];
		 $pre=$_POST['r_button'];
	 
		 $sql = "INSERT INTO stinfo(s_id,name,present) VALUES ('$s_id','$s_name','$pre')";
		 mysqli_query($db ,$sql);
	  
  }

?>





<!DOCTYPE html>
<html>
<head>

<title>
STUDENT ATTENDANCE SYSTEM
</title>
<link rel="stylesheet" href="inc/bootstrap.min.css" media="screen" title="no title"/>
<style>
.well text-center, .well{background:#444;color:#fff;text-align:center;}
.panel-heading{background:#444;color:#ffa64d;text-align:center;}
</style>

</head>

<body>
<div class="container">
<div class="well text-center">
<h2> STUDENT ATTENDANCE SYSTEM </h2>

</div>



<div class="panel panel-defult">
<div class="panel-heading">
<h2> 
<a class="btn btn-success" href="add.php"> Add Student </a>
<a class="btn btn-info pull-right"href="showall.php">View all</a></h2>
</div>
</div>
<div class="panel-body">
 <div class="well text-center" style="font-size:20px">
   <strong>Date: </strong> <?php $cur_date = date('Y-m-d');echo $cur_date; ?>
</div>


<form method="post">
  Student_Id:<br>
  <input type="text" name="id">
  <br>
  Student_name:<br>
  <input type="text" name="name">
  <br>
  <input type="radio" name="r_button" value="present">Present<br>
  <input type="radio" name="r_button" value="absent">Absent<br>
  
  
    <br><br>
    <input type="submit" name="submit" value="Submit">
  
</form>





















<!--
<form action=""method="post">
<table class="table ">
<tr>
 <th width="25%">ID</th>
 <th width="25%">Student Name</th>
 <th width="25%">Attendance</th>
 </tr>
 
 <tr>
 <td>151-15-5006</td>
 <td>samira</td>
 <td>
 <input type="radio" name="sami" value="sami" >P
  <input type="radio" name="sami" value="sami" >A </td>
</tr>
 <tr>
 <td>66</td>
 <td>jigar</td>
 <td>
 <input type="radio" name="ra" value="ra" >P
<input type="radio" name="ra" value="ra" >A </td>
</tr>
 
 
 <tr>
 <td>3435</td>
 <td>kolli</td>
 <td>
 <input type="radio" name="aabb" value="aabb" >P
  <input type="radio" name="aabb" value="aabb" >A </td>
</tr>

<tr>
 <td>56476</td>
 <td>ghf</td>
 <td>
 <input type="radio" name="ccdd" value="ccdd" >P
  <input type="radio" name="ccdd" value="ccdd" >A </td>
</tr>

<tr>
 <td>6764</td>
 <td>ira</td>
 <td>
 <input type="radio" name="bbcc" value="bbcc" >P
  <input type="radio" name="bbcc" value="bbcc" >A </td>
</tr>





 
 
 <tr>

 <td colspan="4">
 
 <input type="submit" class="btn btn-primary" name="submit" value="submit">
 </td>
 </tr>
 </table>
 
 
 

</form>-->
</div>
</div>
<div class="well">
 
<h3> 
<span class="pull-right">CONTACT: www.edu.bd </span>
</h3>
</div>
</div>





</body>

</html>







