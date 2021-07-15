<?php
    include("header.php");
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
    <title>Add Patient</title>
</head>
<body>
    <div class='container header'>
        <img src="images/madical_sign.png" alt="" srcset="">
        <h1>New Patient Enrollment</h1>
    </div>

    <div class="container" style="background-color: #f6f8f8;">
        <form action="manage.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="name">Full Name: </label>
                    <input type="text" name='name' class="form-control" placeholder="Enter Full Name" id="name">
                </div>
               
                <div class="col">
                    <label for="date">Date of hospitalization: </label>
                    <input type="date" class="form-control" name='date' >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label for="doctor_name">Name of doctor: </label>
                    <input type="text" class="form-control"  name='doctor' placeholder="Doctor Name">
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
                <button type="submit" class="btn btn-primary active" name="add_patient">Submit</button>
            </div>
        </form>
    </div>
    
</body>
</html>