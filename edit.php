<?php 

include('db_connect.php');   

$id= $_GET['id']; 

if(isset($_POST['submit'])){ 
    $first_name=$_POST['first_name'];  
    $last_name=$_POST['last_name']; 
    $grade=$_POST['grade']; 
    $salary=$_POST['salary']; 
    $date=$_POST['date'];  

    $sql="UPDATE `records` SET `first_name`='$first_name',`last_name`='$last_name',`grade`='$grade',`salary`='$salary',`date`='$date' WHERE id=$id"; 

    $result= mysqli_query($conn, $sql); 

    if($result){ 
        header("location:ers_record.php?msg=Data updated successfully");
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
    <link rel="stylesheet" href="css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar nav-light justify-content-center fs-3 mb-5" style="background-color:#eee;">
        Employee Records System
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>
                Update Employee Information
            </h3>
            <p class="text-muted">
                Click update after changing any Information
            </p>
        </div>

        <?php  
            $sql= "SELECT * FROM `records` Where id =$id"; 
            //$sql="SELECT * FROM 'records' WHERE id = $id LIMIT 1"; 
            $result= mysqli_query($conn, $sql);  
            $row= mysqli_fetch_assoc($result); 

        ?>




        <div class="container d-flex justify-content-center">
            
            <form action=" " method="post" style="width:50vw, min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                        <label for="" class="form-label"> First Name :</label>
                        </div>
                        <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']?>">
                    <div class="col">
                        <label for="" class="form-label"> Last Name :</label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name']?>">
                    </div> 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Grade :</label>
                    <input type="text" class="form-control" name="grade" value="<?php echo $row['grade']?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Salary :</label>
                    <input type="text" class="form-control" name="Salary" value="<?php echo $row['salary']?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Date :</label>
                    <input type="date" class="form-control" name="date" value="<?php echo $row['date']?>">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="ers_record.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>



    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>