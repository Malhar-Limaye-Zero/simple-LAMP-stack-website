<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Add List</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  
<body>
    <div class="container mt-5">
        <h1>Add New Student</h1>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label>Student name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Student name" 
                    name="iname" />
            </div>
  
            <div class="form-group">
                <label>Roll No</label>
                <input type="number" 
                    class="form-control" 
                    placeholder="roll_no" 
                    name="iroll" />
            </div>
  
            <!--<div class="form-group">
                <label>Item status</label>
                <select class="form-control" 
                    name="istatus">
                    <option value="0">
                        PENDING
                    </option>
                    <option value="1">
                        BOUGHT
                    </option>
                    <option value="2">
                        NOT AVAILABLE
                    </option>
                </select>
            </div>-->
            <div class="form-group">
                <label>Marks</label>
                <input type="number" 
                    class="form-control" 
                    placeholder="Marks" 
                    name="imarks">
            </div>
            <div class="form-group">
                <input type="submit" 
                    value="Add" 
                    class="btn btn-danger" 
                    name="btn">
            </div>
        </form>
    </div>
  
    <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
            $name=$_POST['iname'];
            $roll=$_POST['iroll'];
            #$item_status=$_POST['istatus'];
            $marks=$_POST['imarks'];
      
  
            $q="insert into marks(roll_no,
            name,marks)
            values($roll,'$name',$marks)";
            mysqli_query($con,$q);
            header("location:marks_page.php");
        }
          
        // if(!mysqli_query($con,$q))
        // {
            // echo "Value Not Inserted";
        // }
        // else
        // {
            // echo "Value Inserted";
        // }
    ?>
</body>