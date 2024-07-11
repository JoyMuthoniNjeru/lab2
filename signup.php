<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="sign-up-page">

<?php require_once ("includes/db_connect.php"); ?>

<?php include_once ("templates/nav.php"); ?>
<div class="banner"></div> 
<div class="heading">
    <h1 style="text-align: center;color: rgba(255, 105, 185, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;"> Sign Up </h1>
</div>

<p style="text-align:center">Welcome to the Shera fanpage, we are so happy to have you. You can sign up to be part of this lovely community below.</p>

<div class="form-wrapper">
    <form action="action_page.php" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" required><br><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" required><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob"><br><br>
        <p>Would you like to receive email updates about the page</p> 
        <div class="radio-group">
            <label for="yes">Yes</label>
            <input type="radio" id="yes" name="updates" value="yes">
            <label for="no">No</label>
            <input type="radio" id="no" name="updates" value="no">
        </div><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php include_once("templates/footer.php"); ?>

</body>
</html>


