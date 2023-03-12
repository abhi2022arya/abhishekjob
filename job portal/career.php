<?php
    $server="localhost";
    $username="root";
    $password="";
    $database= "job_portal_user";
    
    $conn= mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("connection to this database failed due to " . mysqli_connect_error());
    }

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $qualification=$_POST['qualification'];
    $year=$_POST['year'];
    $apply=$_POST['apply'];

    $sql="INSERT INTO `job_portal_user`.`candidates` ( `name`, `apply`,`qualification`, `year`) VALUES ( '$name','$apply', '$qualification', '$year');";

    $result= mysqli_query($conn,$sql);
}



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="career_style.css">
    <title>Career</title>
</head>

<body>
    <img class="image" src="career2.jpg" alt="career">
    <div class="container">
        <div id="title">
            <h1>JOB PORTAL</h1>
            <h3>Best Jobs Available matching your skills</h3>
        </div>
    </div>
    <!-- <div class="company">
        <div id="heading">PHP Developer <br>
            Company Name
        </div>

        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <h3>Skills Required:</h3>HTML,CSS3,javascript and PHP
        
        <h3>CTC:</h3> 5LPA -->
    </div>
    
    <div class="row">
        <?php
            $sql= "SELECT `id`, `cname`,`position`,`jdesc`,`skills`,`CTC` FROM `jobs`";
            $result= mysqli_query($conn,$sql);
            if($result->num_rows>0){
                while($row= $result->fetch_assoc()){
                    echo'
                    <div class="company">
                    <div id="heading"> '.$row['position'].' <br> 
                    <h4> '.$row['cname'].' </h4>
                    </div>
                    <p>'.$row['jdesc'].' </p>
                    <h3> Skills required</h3>'.$row['skills'].'

                    <h3> CTC</h3>'.$row['CTC'].'
                    <br>
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Apply For
                    </button>
                    </div>';
                }
            }
            else{
                echo "";
            }
        ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qualification">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passed</label>
            <input type="text" class="form-control" name="year">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
     
    </div>
  </div>
</div>


    </div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>