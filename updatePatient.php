<?php
    include("header.php");
    $host ="localhost";
    $user = "root";
    $pss = "";
    $dbname = "hospital_management";

    $conn = mysqli_connect($host,$user,$pss,$dbname);

    if(isset($_POST['update_patient']))
    {   
        $sql = "SELECT id,name,doctor FROM patients_detail WHERE id = $_POST[patient_id1]"; 

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Update Patient</title>
</head>
<body>
    <div class='container header'>
        <img src="images/madical_sign.png" alt="" srcset="">
        <h1>Uddate Pateint Detail </h1>
    </div>

    <div class="container" style="background-color: #f6f8f8;">
        <form action="manage.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="name">Full Name: </label>
                    <input type="text" name='name' class="form-control" placeholder="<?php echo $row['name']; ?>" id="name" disabled >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label for="doctor_name">Name of doctor: </label>
                    <input type="text" class="form-control"  name='doctor' placeholder="<?php echo $row['doctor']; ?>" disabled>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="sel1">Covid Status :</label>
                        <select class="form-control" id="sel1" name="covid">
                            <option value="Sample Collected">Sample Collected</option>
                            <option value="In Lab">In Lab</option>
                            <option value="Negative">Negative</option>
                            <option value="Positive">Positive</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>

            <div class="button">
                <input type="hidden" name="patient_id" value= "<?php echo $_POST['patient_id1']; ?>">
                <button type="submit" class="btn btn-primary active" name="update_patient">Submit</button>
            </div>
        </form>
    </div>
    <?php
        mysqli_close($conn);
    ?>
</body>
</html>