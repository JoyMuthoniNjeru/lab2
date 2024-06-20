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
    <div class="banner"> 
    </div>
    <h2 style="text-align: left;color: rgba(255, 105, 228, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;"> She-Ra Fan Community</h2>
    <p>This is a free space for fans to connect, share their stories, art and cosplay or discuss their favourite episodes and characters.</p>

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
</form>

<?php include_once("templates/footer.php"); ?> 
</body>
</html>