<?php

    $host ="localhost";
    $user = "root";
    $pss = "";
    $dbname = "hospital_management";

    $conn = mysqli_connect($host,$user,$pss,$dbname);

    if(isset($_POST['remove_patient']))
    {   
        $sql = "DELETE FROM patients_detail WHERE id = $_POST[patient_id]"; 

        mysqli_query($conn, $sql);

        echo"<script>
                alert('patient Removed');
                window.location.href='patient.php';
            </script>";
    }
    elseif(isset($_POST['add_patient']))
    {
        $sql = 'SELECT * FROM patients_detail'; 
        $retval= mysqli_query($conn, $sql);
        $row = mysqli_num_rows($retval);

        $sql = "INSERT INTO patients_detail (id,name,doctor,date,covid) VALUES ($row+1,'$_POST[name]','$_POST[doctor]','$_POST[date]','$_POST[covid]')";

        mysqli_query($conn, $sql);

        echo"<script>
                alert('patient Added');
                window.location.href='dashboard.php';
            </script>";

    }
    elseif(isset($_POST['update_patient']))
    {
        $sql = "UPDATE patients_detail SET covid='$_POST[covid]' WHERE id = $_POST[patient_id]";

        mysqli_query($conn, $sql);
        echo"<script>
                alert('patient Updated');
                window.location.href='patient.php';
            </script>";
    }

    mysqli_close($conn);
?>