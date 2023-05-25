<?php  
    include ('db_connect.php');    
    $id=$_GET['id'];   
    $sql ="DELETE FROM `records` WHERE id = $id"; 
    $result = mysqli_query($conn, $sql);  
    
    if($result){ 
        header("location:ers_record.php?msg=Records deleted successfully");
    }else{ 
        echo "Failed:".mysqli_error($conn);
    }




        
        


  
?> 