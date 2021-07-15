<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="images_login_page/logo1.png" alt="" srcset="">
            </div>
            <h1>Welcome back</h1>
            <h2>Please sign in</h2>
        </div>
    </header>

    <section>
        <div class="container">
            <form action="manage_login_page.php" method="POST">

                <div class="inputs">
                    <input type="email" name="email" placeholder="Email Id" autofocus required size="40">
                </div>

                <div class="inputs">
                    <input type="password" name="pass" placeholder="Enter Your Possword" autofocus required size="40">
                </div>

                <div style="margin: 10px 0;">
                    <button type="submit" class="btn btn-primary active btn-block" , name="sign">Sign In</button>
                </div>

                <div class="pages">
                    <div class="form-check">
                        <label class="form-check-label">  
                          <input class="form-check-input" type="checkbox"> Remember me  
                        </label>
                    </div>
                    <a>forgotten password </a>
                </div>

                <div>
                    <h4>For register <a href="register.html">join now</a></h4>
                </div>
            </form>
        </div>

    </section>