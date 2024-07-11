<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="sign-in-page">

<?php require_once ("includes/db_connect.php"); ?>

<?php include_once ("templates/nav.php"); ?>
<div class="banner"></div> 
<div class="heading"> 
    <h1 style="text-align: center;color: rgba(255, 105, 185, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;"> Sign In </h1> 
</div>

<p style="text-align:center">Welcome back. Proceed to sign in below</p>
<div class="form-wrapper">
    <form action="action_page.php" method="post">
        <div class="imgcontainer">
            <img src="images/avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="uname" required><br><br>

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" required><br><br><br>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label><br><br><br>
        </div>

        <div class="container">
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<?php include_once("templates/footer.php"); ?>

</body>
</html>

