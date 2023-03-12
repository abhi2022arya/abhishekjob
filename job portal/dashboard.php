<?php
   


    $server="localhost";
    $username="root";
    $password="";
    $database= "job_portal_user";
    
    $conn= mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("connection to this database failed due to " . mysqli_connect_error());
    }

// php code of dashboard page
$cname=$_POST['cname'];
$position=$_POST['position'];
$jdesc=$_POST['jdesc'];
$skills=$_POST['skills'];
$ctc=$_POST['ctc'];

$sql ="INSERT INTO `job_portal_user`.`jobs`( `cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname', '$position', '$jdesc', '$skills', '$ctc')";

$result = mysqli_query($conn, $sql);//connect $sql to database.

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

    <link rel="stylesheet" href="dashboard_style.css">
</head>

<body>
    <div class="nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
                
            </div>
        </nav>
    </div>

    <!-- The sidebar -->
    <div class="sidebar">
        <a class="active" href="#home">Jobs</a>
        <a href="candidates.php">Candidate Applied</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Post Job
            </a>

        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form method = "POST">
                    <div class="row mb-3">
                        <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="company_name" name="cname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="position" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="position" name="position">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="job_desc" class="col-sm-2 col-form-label">Job Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="job_desc" name="jdesc">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="skill" class="col-sm-2 col-form-label">Skill Required</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="skill" name="skills">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ctc" class="col-sm-2 col-form-label">CTC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ctc" name="ctc">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">CTC</th>
                </tr>
            </thead>
               <?php
               
                    $query="SELECT `cname`,`position`,`CTC` FROM `jobs`";
                    $result= mysqli_query($conn,$query);
                    $i=0;
                    if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc()){
                        echo '
                        <tbody>
                         <tr>
                            <td>'.++$i.'</td>
                            <td>'.$row['cname'].'</td>
                            <td>'.$row['position'].'</td>
                            <td>'.$row['CTC'].'</td>
                         </tr>';
                    }
                }
                else{
                    echo "";
                }
               ?>
            </tbody>
        </table>


    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>