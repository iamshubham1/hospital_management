<!DOCTYPE html>

<?php
    include("header.php");
?>

<?php

    $host ="localhost";
    $user = "root";
    $pss = "";
    $dbname = "hospital_management";

    $conn = mysqli_connect($host,$user,$pss,$dbname);

    $sql = 'SELECT * FROM patients_detail'; 
    $retval= mysqli_query($conn, $sql);

    $row = mysqli_num_rows($retval);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>dashboard</title>
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="dashboard">
                <h1>Dashboard</h1>

                <div class="row">
                    <div class="col-4">
                        <div class="folder">
                            <div class="parts">
                                <h1><?php echo $row ?></h1>
                                <h3>Patients</h3>
                            </div>
                            <a href="patient.php">More Info <span>&#8594<span></a>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="folder">
                            <div class="parts">
                                <h1>15</h1>
                                <h3>Doctors</h3>
                            </div>
                            <a>More Info <span>&#8594<span></a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="folder">
                            <div class="parts">
                                <h1>50</h1>
                                <h3>Nurses</h3>
                            </div>
                            <a>More Info <span>&#8594<span></a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="folder">
                            <div class="parts">
                                <h1>6</h1>
                                <h3>Leboratorists</h3>
                            </div>
                            <a>More Info <span>&#8594<span></a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="folder">
                            <div class="parts">
                                <h1>5</h1>
                                <h3>Receptionist</h3>
                            </div>
                            <a>More Info <span>&#8594<span></a>
                        </div>
                    </div>
                </div>
            </div>

            <img src="images\doctor.jpg" alt="" srcset="">
        </div>
    </div>
<?php
    mysqli_close($conn);
?>
</body>
</html>