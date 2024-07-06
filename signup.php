<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require_once ("includes/db_connect.php"); ?>

<div class="banner"> 
    <?php include_once ("templates/nav.php"); ?>
    <div class="banner"> 
</div>
<div class="heading">
    <h1 style="text-align: centre;color: rgba(255, 105, 185, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;"> Sign Up </h2>
</div>

<p>Welcome to the Shera fanpage, we are so happy to have you. You can sign up to be part of this lovely community below.</p>

<form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname">
  </form><br>

<form>
    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email">
</form><br>

<form>
    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob">
</form><br>

<p>Would you like to receive email updates about the page</p> 
    <form>
        <label for ="Sign up">Yes</label>
        <input type="radio" id="html" name="Sign up" value="Sign up">
        <label for ="Sign up">No</label>
        <input type="radio" id="html" name="Sign up" value="Sign up">
    </form><br><br><br><br><br><br><br><br><br><br>
    
    <?php include_once("templates/footer.php"); ?>
</body>
</html>