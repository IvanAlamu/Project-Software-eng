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
        <?php   
            if(isset($_GET['msg'])){ 
                $msg=$_GET['msg']; 
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>
         <a href="ers_add.php " class="btn btn-dark mb-4">Add New Employee </a>

         <table class="table table-hover text-center">
             <thead class="table-dark">
                 <tr>
                     <th scope="col">ID</th>
                     <th scope="col">First name</th>
                     <th scope="col">Last name</th>
                     <th scope="col">Grade</th>  
                     <th scope="col">Salary</th> 
                     <th scope="col">Date</th>  
                     <th scope="col">Action</th>


                 </tr>
             </thead>
             <tbody class="table-group-divider">  

                <?php  
                    include("db_connect.php");
                    $sql= "SELECT * FROM `records`"; 
                    $result= mysqli_query($conn, $sql); 
                    while($row =mysqli_fetch_assoc($result)){ 
                        ?> 
                         <tr>
                     <td><?php   echo $row['id']?>  </td> 
                     <td><?php   echo $row['first_name']?>  </td> 
                     <td><?php   echo $row['last_name']?>  </td> 
                     <td><?php   echo $row['grade']?>  </td> 
                     <td><?php   echo $row['salary']?>  </td> 
                     <td><?php   echo $row['date']?>  </td>
                      
                     <td> 
                        <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"> <i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>  
                        <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"> <i class="fa-solid fa-trash fs-5 me-3"></i></a>

                     </td>
                 </tr> 
                 <?php
                    }
                ?>





                
                
             </tbody>
         </table>
     </div>









     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
     </script>
 </body>

 </html>