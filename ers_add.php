<?php 

include('db_connect.php'); 

if(isset($_POST['submit'])){ 
    $first_name=$_POST['first_name'];  
    $last_name=$_POST['last_name']; 
    $grade=$_POST['grade']; 
    $salary=$_POST['salary']; 
    $date=$_POST['date'];  

    $sql="INSERT INTO `records`(`id`, `first_name`, `last_name`, `grade`, `salary`, `date`) VALUES (NULL,'$first_name','$last_name','$grade','$salary','$date')"; 

    $result= mysqli_query($conn, $sql); 

    if($result){ 
        header("location:ers_record.php?msg=New Record created successfully");
    } else{ 
        echo "Failed:".mysqli_error($conn);
    }
}
?>
 
 
 
 
 
 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERS</title> 
    <link rel="stylesheet" href="C:\xampp\htdocs\ERS_project\css\all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar nav-light justify-content-center fs-3 mb-5" style="background-color:#eee;"> 
        Employee Records System
    </nav> 

    <div class="container"> 
        <div class="text-center mb-4" >  
            <h3>
                Add New Employee
            </h3> 
            <p class="text-muted">  
                Complete the form below to add a new employee 
            </p>
        </div>  

        <div class="container d-flex justify-content-center" >  

        <form action="" method="post"style="width:50vw, min-width:300px" > 
        <div class="row mb-3"> 
            <div class="col"> 
                <label for="" class="form-label"> First Name :</label> 
                <input type="text" class="form-control" name="first_name" placeholder="enter your first name">
            </div> 
            <div class="col"> 
                <label for="" class="form-label"> Last Name :</label> 
                <input type="text" class="form-control" name="last_name" placeholder="enter your last name">
            </div> 
        </div>  
        <div class="mb-3"> 
                <label for="" class="form-label"> Grade :</label> 
                <input type="text" class="form-control" name="grade" placeholder="enter your grade">
            </div> 
            <div class="mb-3"> 
                <label for="" class="form-label"> Salary :</label> 
                <input type="text" class="form-control" name="Salary" placeholder="enter your salary">
            </div> 
            <div class="mb-3"> 
                <label for="" class="form-label"> Date :</label> 
                <input type="date" class="form-control" name="date" placeholder="">
            </div>  

            <div> 
                <button type="submit" class="btn btn-success" name= "submit">Save</button> 
                <a href="ers_record.php" class="btn btn-danger" >Cancel</a>
            </div>
    </form>
    </div>
    </div> 

    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>