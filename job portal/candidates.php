<?php
   


    $server="localhost";
    $username="root";
    $password="";
    $database= "job_portal_user";
    
    $conn= mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("connection to this database failed due to " . mysqli_connect_error());
    }




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="career_style.css">
    <title>Candidate Appied</title>
  </head>
  <body>
    
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Candidate Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Year Passout</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $sql="select name,apply,year from candidates";
                $result= mysqli_query($conn,$sql);
                $i=0;
                if($result->num_rows>0) // to check whether no of rows are available or not
                {
                  while($rows= $result->fetch_assoc()) // to fetch from rows
                  {
                      echo'
                      <tr>
                          <th scope="row">'.++$i.'</th>
                          <td>'.$rows['name'].'</td>
                          <td>'.$rows['apply'].'</td>
                          <td >'.$rows['year'].'</td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>



