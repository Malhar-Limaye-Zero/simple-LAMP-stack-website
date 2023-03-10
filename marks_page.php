<?php
    include("connect.php");
  
    if (isset($_POST['btn'])) {
        $entry=$_POST['imarks'];
        $q="select * from marks where marks='$entry'";
        $query=mysqli_query($con,$q);
    } 
    else {
        $q= "select * from marks";
        $query=mysqli_query($con,$q);
    }
?>
  
<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>View List</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
    <link rel="stylesheet" 
        href="css/style.css">
</head>
  
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Students List</h1>
                <a href="add.php">Add new Student</a>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-8">
                        <form method="post" action="">
                            <input type="number" 
                                class="form-control" 
                                name="imarks">
                          
                            <div class="col-lg-4" 
                                method="post">
                                <input type="submit" 
                                class="btn btn-danger float-right" 
                                name="btn" value="filter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <?php
                while ($qq=mysqli_fetch_array($query)) 
                {
            ?>
  
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $qq['name']; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Roll-No: <?php echo 
                            $qq['roll_no']; ?>
                        </h6>
                        <p class="text-info">
                            <?php echo
                            $qq['marks']; ?>/100
                        </p>
                        <a href=
                        "delete.php?id=<?php echo $qq['roll_no']; ?>" 
                            class="card-link">
                            Delete
                        </a>
                        <a href=
                        "update.php?id=<?php echo $qq['roll_no']; ?>" 
                            class="card-link">
                            Update
                        </a>
                    </div>
                </div><br>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
  
</html>