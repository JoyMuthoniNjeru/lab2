<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require_once ("includes/db_connect.php"); ?>

    <?php include_once ("templates/nav.php"); ?>
    <div class="banner"> 
</div> 
<div class="heading"> 
    <h1 style="text-align: centre;color: rgba(255, 105, 185, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;"> Sign In </h2> 
</div>

<p style="text-align:center">Welcome back. Proceed to sign in below</p>
<form style="text-align: center;">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>
    <label for="pwd">Password: </label><br>
    <input type="password" id="pwd" name="pwd" required><br><br>

<input type="submit" name="submit" value="Submit"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>

<?php include_once("templates/footer.php"); ?>

</body>
</html>