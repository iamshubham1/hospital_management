<!DOCTYPE html>

<?php
    include("header.php");
    $host ="localhost";
    $user = "root";
    $pss = "";
    $dbname = "hospital_management";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>patients List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <header>
        <a href="addPatient.php"><button class="btn btn-primary active">Add Patient</button></a>
        <h1>List Patients</h1>
        </header>
        <div id="patients_details" class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Covid</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $conn = mysqli_connect($host,$user,$pss,$dbname);
                        $sql = "SELECT id,name,doctor,date,covid FROM patients_detail";
                        $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<tr class='alert alert-primary alert-dismissible fade show'>

                                <td>
                                    $row[id]
                                </td>
                                <td>
                                    $row[name]
                                </td>
                                <td>
                                    $row[doctor]
                                </td>
                                <td>
                                    $row[date]
                                </td>
                                <td>
                                    $row[covid]
                                </td>
                                <td>
                                    <form action='updatePatient.php' method='POST'>
                                        <input type='hidden' name='patient_id1' value='$row[id]'>
                                        <button class='btn btn-sm btn-link' name='update_patient'>Update</button>
                                    </form>
                                    
                                    <form action='manage.php' method='POST'>
                                        <input type='hidden' name='patient_id' value='$row[id]'>
                                        <button name='remove_patient' class='close'>&times;</button>
                                    </form>
                                </td>
                            </tr>";
                        }
                    mysqli_close($conn);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>