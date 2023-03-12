<?php
// print_r($_POST);
$insert = false;
if(isset($_POST['fullname']))
{
    $server="localhost";
    $username="root";
    $password="";
    $database= "job_portal_user";
    
    $con= mysqli_connect($server, $username, $password, $database);

    if(!$con){
        die("connection to this database failed due to " .mysqli_connect_error());
    }

    // <!-- collect post variables -->

    $Full_name =$_POST['fullname'];
    $email =$_POST['email'];
    $phone_number =$_POST['phonenumber'];
    $pwd =$_POST['pwd'];
    $confirm_password =$_POST['cpwd'];



    $sql= "INSERT INTO `job_portal_user`.`user` ( `Full name`, `Email Address`, `phone number`, `password`, `confirm password`) VALUES ('$Full_name' , '$email', '$phone_number', '$pwd', '$confirm_password');";
    // echo $sql;

   // Execute the query
   if($con->query($sql) == true){
    // echo "Successfully inserted";
    header("location: login.php");

    $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    
 // Close the database connection
 $con->close();

}

?>


<!-- html code -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
    <link rel="stylesheet" href="register_style.css">
</head>

<body>
    <img class="image" src="img1.jpeg" alt="image">
    <div class="container">
    <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>
    form
        <form  method="POST">

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="fullname" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="inputEmail3">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Phone number</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="phonenumber" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="pwd" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="cpwd" id="inputPassword3">
                </div>
            </div>

            <input class="btn btn-primary" type="submit" value="Submit">
            <!-- <button class="btn">submit</button> -->
            <p>Already registered? <a href="login.php">Log in</a>
            </p>

        </form>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>




