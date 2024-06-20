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
<h2 style="text-align: left;color: rgba(255, 105, 185, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;"> Sign In </h2> 
<p>Welcome back. Proceed to sign in below.</p> 

<form>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label for="pwd">Password: </label><br>
    <input type="password" id="pwd" name="pwd">
  </form>
</body>
</html>