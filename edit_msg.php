<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Message</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 
require_once ("includes/db_connect.php"); 
include_once ("templates/nav.php"); 

$communityId = intval($_GET['communityId']);

$spot_msg = "SELECT * FROM community WHERE communityId = $communityId LIMIT 1";
$spot_msg_res = $conn->query($spot_msg);

if ($spot_msg_res === false) {
    echo "Error: " . $conn->error;
    exit();
}

$spot_msg_row = $spot_msg_res->fetch_assoc();

if (isset($_POST["submit"])) {
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $mail = mysqli_real_escape_string($conn, $_POST["e-mail"]);
    $dob = mysqli_real_escape_string($conn, $_POST["date_of_birth"]); 
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]); 
    $view = mysqli_real_escape_string($conn, $_POST["community_views"]);
    $communityId = mysqli_real_escape_string($conn, $_POST["communityId"]);

    $update_view = "UPDATE community SET sender_name='$fn', sender_email='$mail', subject_bday='$dob', subject_gender='$gender', text_message='$view' WHERE communityId=$communityId";

    if ($conn->query($update_view) === TRUE) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error: " . $update_view . "<br>" . $conn->error;
    }
}
?>

<div class="banner"></div>
<div class="heading">
    <h1 style="text-align: center; color: rgba(255, 143, 105, 0.904); text-transform: uppercase; font-style: oblique; font-weight: bolder;"> She-Ra Fan Community</h1>
</div>
<p>Update message</p>

<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"] . "?communityId=" . $communityId); ?>" method="POST" class="community_form">
    <label for="fn">Full name:</label><br>
    <input type="text" id="fn" name="fullname" required value="<?php print $spot_msg_row['sender_name']; ?>"><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="e-mail" required value="<?php print $spot_msg_row['sender_email']; ?>"><br><br>

    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="date_of_birth" required value="<?php print $spot_msg_row['subject_bday']; ?>"><br><br>

    <p>Gender:</p>
    <input type="radio" id="male" name="gender" value="Male" <?php echo ($spot_msg_row['subject_gender'] == 'Male') ? 'checked' : ''; ?>>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female" <?php echo ($spot_msg_row['subject_gender'] == 'Female') ? 'checked' : ''; ?>>
    <label for="female">Female</label><br>
    <input type="radio" id="nb" name="gender" value="Non-binary" <?php echo ($spot_msg_row['subject_gender'] == 'Non-binary') ? 'checked' : ''; ?>>
    <label for="nb">Non-Binary</label><br>
    <input type="radio" id="rns" name="gender" value="Rather not say" <?php echo ($spot_msg_row['subject_gender'] == 'Rather not say') ? 'checked' : ''; ?>>
    <label for="rns">Rather not say</label><br><br>

    <label for="review">Share your views:</label><br>
    <textarea id="review" name="community_views" rows="4" cols="50" required><?php print $spot_msg_row['text_message']; ?></textarea><br><br>

    <input type="submit" name="submit" value="Submit">
    <input type="hidden" name="communityId" value="<?php print $spot_msg_row["communityId"];?>">

</form>

<?php include_once("templates/footer.php"); ?> 
</body>
</html>
