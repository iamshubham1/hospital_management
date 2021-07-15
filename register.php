<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style_register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script type="text/javascript">
        function matchpass() {
            var firstpassword = document.f1.pass1.value;
            var secondpassword = document.f1.pass2.value;

            if (firstpassword == secondpassword) {
                return true;
            } else {
                alert("password must be same!");
                return false;
            }
        }
    </script>
</head>

<body>

    <div class="container1">
        <div class="page">
            <h1>Create Account</h1>
            <form name="f1" action="manage_login_page.php" method="POST" onsubmit="return matchpass()">
                <div class="logo">
                    <img src="images_login_page/person logo.png">
                    <input type="name" name="name1" placeholder="Full Name" required>
                </div>
                <div class="logo">
                    <img src="images_login_page/pass.ico" alt="">
                    <input type="password" name="pass1" placeholder="Your Password" required>
                </div>
                <div class="logo">
                    <img src="images_login_page/pass icon.png" alt="">
                    <input type="password" name="pass2" placeholder="Conform Password" required>
                </div>
                <div class="logo">
                    <img src="images_login_page/email icon.jpg" alt="" srcset="">
                    <input type="email" name="email1" placeholder="Your Email Id" required>
                </div>

                <div class="btns">
                    <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                    <a href="login.html" class="btn btn-primary">Go login &#x2192</a>
                </div>
            </form>

        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>