<?php
include "database_connection.php";

if(isset($_POST['submit']))
{
    $full_name = $_POST['student_fullname'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $contact_number = $_POST['contact_number'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `simple_crud`(`id`, `full_name`, `age`, `course`, `contact_number`, `gender`)
    VALUES (NULL,'$full_name','$age','$course','$contact_number','$gender')";


    $_result = mysqli_query($conn,$sql);

    if($_result)
    {
        header("Location: main.php?msg=New Student Information Successfully Inserted!");
    }
    else
    {
        echo "Unsuccessfully:" . mysqli_error($conn);
    }
}

?>



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
        <div class="text-center mb-4">
            <h3>Student_Information_Create</h3>
            <p class= "text-muted">Please complete the form to add student info!</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method = "post" style = "width:50vw; min-width:300px;">
                <div class = "row mb-3">
                    <div class="col">
                        <label class="form-label">Student_Full-name</label>
                        <input type="text" class = "form-control" name="student_fullname" placeholder="Glenn">
                    </div>

                    <div class="col">
                        <label class="form-label">Student_Age</label>
                        <input type="text" class = "form-control" name="age" placeholder="21">
                    </div>

                    <div class="col">
                        <label class="form-label">Student_Course</label>
                        <input type="text" class = "form-control" name="course" placeholder="BSIT">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Student_Contact_number</label>
                        <input type="text" class = "form-control" name="contact_number" placeholder="0998344931">
                    </div>

                    <div class="form-group mb-3">
                        <label >Gender:</label>
                        <input type="radio" class="form-check-input" name="gender" 
                        id = "male" value = "male">
                        <label for="male" class="form-input-label">Male</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="gender" 
                        id = "female" value = "female">
                        <label for="male" class="form-input-label">Female</label>
                        
                    </div>
                    

                    <div>
                        <button type = "submit" class="btn btn-success" name = "submit">Insert</button>
                        <a href="index.php" class = "btn btn-danger">Back</a>
                    </div>
                </div>        
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>