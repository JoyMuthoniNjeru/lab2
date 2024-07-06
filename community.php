<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require_once ("includes/db_connect.php"); ?>
<?php include_once ("templates/nav.php"); ?>

<?php

    if(isset($_POST["submit"])){
    $fn = $_POST["fname"];
    $ln = $_POST["lname"];
    $mail = $_POST["email"]; 
    $view = $_POST["review"];

    $insert_message = "INSERT INTO community (firstname,lastname,email,views)
    VALUES ('$fn', '$ln', '$mail', '$view')";

    if ($conn->query($insert_message) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}
?>
<div class="banner"> 
    </div>
<div class="heading">
    <h1 style="text-align: centre;color: rgba(255, 143, 105, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;"> She-Ra Fan Community</h2>
</div>
    <p>This is a free space for fans to connect, share their stories, art and cosplay or discuss their favourite episodes and characters.</p>

    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="community_form">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"required><br><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"required>
      </form><br>

    <form>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"required>
    </form><br>

    <form>
        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob"required>
    </form><br>

    <p>Gender: </p>
<form>
  <input type="radio" id="gender" name="Male" value="Male">
  <label for="Male">Male</label><br>
  <input type="radio" id="gender" name="Female" value="Female">
  <label for="Female">Female</label><br>
  <input type="radio" id="gender" name="Non-Binary" value="Non-Binary">
  <label for="Non-Binary">Non-Binary</label><br>
  <input type="radio" id="gender" name="Rather not say" value="rather not say">
  <label for="rather not say">Rather not say</label>
</form><br>

<label for="review">Share your views:</label><br>
<textarea id="review" name="review" rows="4" cols="50">
</textarea><br><br>

<form>
    <label for="image">Share images:</label><br>
    <input type="image" src="img_submit.gif" alt="Submit" width="48" height="48">
</form><br>

<form>
    <input type="submit" value="Submit">
</form>

<?php include_once("templates/footer.php"); ?> 
</body>
</html>