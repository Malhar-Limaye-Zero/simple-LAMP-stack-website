
<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Login</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
    <link rel="stylesheet" 
        href="css/style.css">
</head>
  
<body>
    <div class="container mt-5">
        <h1>Please Login with your teacher credentials</h1>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label>Teacher name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="name" 
                    name="iname" />
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="number" 
                    class="form-control" 
                    placeholder="password" 
                    name="ipass" />
            </div>
            <div class="form-group">
                <input type="submit" 
                    value="Login" 
                    class="btn btn-danger" 
                    name="lgin">
            </div>
        </form>
        <?php
        if(isset($_POST["lgin"])) {
            include("connect.php");
            $name=$_POST['iname'];
            $roll=$_POST['ipass'];
            $q="select * from teacher_id where name='$name' and identity=$roll";
            $result=mysqli_query($con,$q);
            if(mysqli_num_rows($result)==0)
            {
                echo("<span class='row btn btn-danger'>Incorrect password or id</span>");
            }
            else
            {
                header("location:marks_page.php");
            }
        }
        ?>
    </div>
</body>
  
</html>