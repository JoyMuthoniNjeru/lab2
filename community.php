<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 
require_once ("includes/db_connect.php"); 
include_once ("templates/nav.php"); 

if(isset($_POST["submit"])){
    $fn = $_POST["fullname"];
    $mail = $_POST["e-mail"];
    $dob = $_POST["date_of_birth"]; 
    $gender = $_POST["gender"]; 
    $view = $_POST["community_views"];

    $insert_view = "INSERT INTO community (sender_name,sender_email,subject_bday,subject_gender,text_message)
    VALUES ('$fn', '$mail', '$dob', '$gender', '$view')";

    if ($conn->query($insert_view) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $insert_view . "<br>" . $conn->error;
    }
}
?>

<div class="banner"></div>
<div class="heading">
    <h1 style="text-align: centre;color: rgba(255, 143, 105, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;"> She-Ra Fan Community</h1>
</div>
    <p>This is a free space for fans to connect, share their stories, art and cosplay or discuss their favourite episodes and characters.</p>

    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="community_form">
        <label for="fn">Full name:</label><br>
        <input type="text" id="fn" name="fullname" required><br><br>
      

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="e-mail"required><br><br>
    

        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="date_of_birth"required><br><br>
    

    <p>Gender:</p>

  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label><br>
  <input type="radio" id="nb" name="gender" value="Non-binary">
  <label for="nb">Non-Binary</label><br>
  <input type="radio" id="rns" name="gender" value="Rather not say">
  <label for="rns">Rather not say</label><br><br>

  <label for="review">Share your views:</label><br>
  <textarea id="review" name="community_views" rows="4" cols="50" required>
  </textarea><br><br>

 
  <input type="submit" name="submit" value="Submit">
</form>

<?php include_once("templates/footer.php"); ?> 
</body>
</html>