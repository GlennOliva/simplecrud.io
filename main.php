<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student_Simple_Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style ="background-color: #eab676;">
        Student_Simple_Crud
    </nav>

    <div class="container">
        <?php
            if(isset($_GET['msg']))
            {
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  
                </button>
              </div>';
            }
        ?>
        <a href="student_add.php" class="btn btn-dark mb-3">Insert_Student</a>

        <table class="table table-hover text-center">
            <thead class= "table-dark">
                <tr>
                <th scope="col">Student_Id</th>
                <th scope="col">Full_name</th>
                <th scope="col">Age</th>
                <th scope="col">Course</th>
                <th scope="col">Contact_number</th>
                <th scope="col">Gender</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "database_connection.php";
                    $sql = "SELECT * FROM `simple_crud`";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['full_name']?></td>
                                <td><?php echo $row['age']?></td>
                                <td><?php echo $row['course']?></td>
                                <td><?php echo $row['contact_number']?></td>
                                <td><?php echo $row['gender']?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $row['id']?>" class="link-dark"> <i class="fa-solid fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                    <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"> <i class="fa-solid fa-solid fa-trash fs-5 me-3"></i></a>
                                </td>
                            </tr>

                        <?php

                    }
                
                ?>
                
                
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>