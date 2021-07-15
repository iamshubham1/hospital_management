<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
        $host ="localhost";
        $user = "root";
        $pss = "";
        $dbname = "student_login";

        $conn = mysqli_connect($host,$user,$pss,$dbname);
    
    if(isset($_POST['sign']))
    {
        $sql = 'SELECT email_id,pass FROM login_id';  

        $retval=mysqli_query($conn, $sql);

        if(mysqli_num_rows($retval) > 0){
            
            $flag = true;
            
            while($row = mysqli_fetch_assoc($retval))
            {   
                    
                if($_POST['email'] == $row['email_id'])
                {
                    if($_POST['pass'] == $row['pass'])
                    {
                        echo"<script>
                                alert('login sucessfully');
                                window.location.href='dashboard.php';
                            </script>";
                    }
                    else
                    {
                        echo"<script>
                                alert('Your Password is incorrect');
                                window.location.href='login.php';
                        </script>";
                    }
                }
                else
                {
                    $flag = false;
                }
                    
            }
            
            if($flag == false)
            {
                echo"<script>
                            alert('Your Email Id is incorrect');
                            window.location.href='login.php';
                    </script>";
                
            }
        }
        else
        {  
            echo "0 results";  
        } 

        mysqli_close($conn); 
        
    }
    else if(isset($_POST['submit']))
    {
        $name1 = $_POST['name1'];
        $email1 = $_POST['email1'];
        $pass1 = $_POST['pass1'];
        
        $sql = "INSERT INTO login_id(name,email_id,pass) VALUES ('$name1','$email1','$pass1')";
        
        if(mysqli_query($conn, $sql))
        {  
            echo "<script>
                alert('successfully Sign Up');
                window.location.href='login.php';
                </script>";

        }
        else
        {  
            echo "<script>
            alert('you have account from this id please login');
                window.location.href='login.html';
            </script>";
            mysqli_error($conn);  
        }  
            
        mysqli_close($conn);  

    }
}

?>