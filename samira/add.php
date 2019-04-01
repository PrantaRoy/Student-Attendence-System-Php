<?php 

require_once 'config/config.php';

if (isset($_POST['submit'])) {
	$name = htmlspecialchars($_POST['name']);
	$roll = htmlspecialchars($_POST['roll']);
	
	if  (!empty($name) && !empty($roll)) {
		$sql = "insert into tbl_student (name, roll) values ('$name', '$roll')";
		if ($conn->query($sql) === TRUE) {
			echo "
				<script>
					window.alert('Student information inserted successfully!');
				</script>
				";
		} else {
			echo "
				<script>
					window.alert('Error! Failed to insert.');
				</script>
				";
		}
	} else {
		// Pass
	}
}

$conn->close();
?>
<?php?>

<!DOCTYPE html>
<html>
<head>

<title>
STUDENT ATTENDANCE SYSTEM
</title>
<link rel="stylesheet" href="inc/bootstrap.min.css" media="screen" title="no title">
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

<a class="btn btn-info pull-right"href="index.php">Back</a></h2>
</div>

<div class="panel-body">


<form action=""method="post">
	<div class="form-group">
		<label for="name">Student Name</label>
		<input type="text" class="form-control" name="name"  placeholder="Enter Username">
	</div>
	<div class="form-group">
		<label for="roll">Student Roll</label>
		<input type="text" class="form-control" name="roll" placeholder="Enter Roll" >
	</div>
			  
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="submit" value="Add student" required="">
	</div>
</form>
<div class="well">
 
<h3> www.diu.edu.bd
<span class="pull-right"> CONTACT: www.edu.bd </span>
</h3>
</div>
</div>
</div>
</div>




</body>

</html>






