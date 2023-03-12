<?php
    $login=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server="localhost";
    $username="root";
    $password="";
    $database= "job_portal_user";
    
    $conn= mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("connection to this database failed due to " . mysqli_connect_error());
    }

// php code of login page
$email= $_POST['email'];
$pwd= $_POST['pwd'];


$sql ="select * from user where Email Address ='$email' AND password = '$pwd' ";

$result = mysqli_query($conn, $sql);//connect $sql to database.

$num = mysqli_num_rows($result); //how many rows got fetched.

// if(num == 1)
// {
//    // $login=true;
//    session_start();
//    $_SESSION['loggedin'] = true;
//    $_SESSION['email'] = $email; //keeping user email info so that no need to enter email again.
//    header("location: career.php"); // not working properly

// }
// else{
//     $showError = "invalid credentials";
// }
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
    <title>login</title>
    <link rel="stylesheet" href="register_style.css">
</head>

<body>
    <img class="image" src="img1.jpeg" alt="image">
    <div class="container">
        
        <form  action="career.php" method="POST">

            
            <div class="row mb-3">
                <label for="inputEmail3"  class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="inputEmail3">
                </div>
            </div>

           
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="pwd" class="form-control" id="inputPassword3">
                </div>
            </div>
           

            <input class="btn btn-primary" type="submit" value="Submit">

            <p>New User?<br>
            Create Account<a href="register.html">Sign up</a>
            </p>

        </form>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>

