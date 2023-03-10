<?php
	include("connect.php");
	if(isset($_POST['btn']))
	{
		$marks=$_POST['imarks'];
		$id = $_GET['id'];
		$q= "update marks set marks='$marks' where roll_no=$id";
		$query=mysqli_query($con,$q);
		header('location:marks_page.php');
	}
	else if(isset($_GET['id']))
	{
		$q = "SELECT * FROM marks WHERE roll='".$_GET['id']."'";
		$query=mysqli_query($con,$q);
		$res= mysqli_fetch_array($query);
	}
?>
<html>

<head>
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8">
	
	<title>Update List</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container mt-5">
		<h1>Update Student Data</h1>
		<form method="post">
			<div class="form-group">
				<label>Marks</label>
				<input type="number" class="form-control"
					name="imarks" placeholder="marks"
					value="<?php echo $res['marks']?>">
			</div>

			<div class="form-group">
				<input type="submit" value="Update"
					name="btn" class="btn btn-danger">
			</div>
		</form>
	</div>
</body>

</html>
