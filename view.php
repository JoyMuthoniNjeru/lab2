<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 
require_once ("includes/db_connect.php"); 
include_once ("templates/nav.php"); 
?>

<div class="banner"></div>
<div class="heading">
    <h1 style="text-align: center;color: rgba(255, 143, 105, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;">View Messages</h1>
</div><br><br>

<table border="1px" style="border: 1px solid black;width: 50%;border-collapse: collapse;">
    <thead>
    <tr>
       <th colspan="2">Name</th>
       <th>Email</th>
       <th>Message</th>
       <th>Time</th>
       <th>Action</th>
    </tr>
    </thead>
<tbody>

<?php
$select_msg = "SELECT * FROM community ORDER BY datecreated DESC";
$select_msg_res = $conn->query($select_msg);

if ($select_msg_res === false) {
    // Display error message if the query failed
    echo "Error: " . $conn->error;
} else {
    $en = 0;
    if ($select_msg_res->num_rows > 0) {
        // output data of each row
        while($select_msg_row = $select_msg_res->fetch_assoc()) {
            $en++;
?>
</tbody>
    <tr>
        <td><?php print $en;?>.</td>
        <td><?php print $select_msg_row["sender_name"]; ?></td>
        <td><?php print $select_msg_row["sender_email"]; ?></td>
        <td><?php print "<strong>" . $select_msg_row["text_message"] . '</strong>. ' .  substr($select_msg_row["text_message"], 0,2) . '...'; ?></td>
        <td><?php print date("d-M-Y H:i", strtotime($select_msg_row["datecreated"])); ?></td>
        <td>[ <a href = "edit_msg.php?communityId=<?php print $select_msg_row['communityId'];?>">Edit</a> ] [ Del ]</td>
    </tr>
<?php
        }
    } else {
        echo "<tr><td colspan='5'>0 results</td></tr>";
    }
}
?>

</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include_once("templates/footer.php"); ?> 
</body>
</html>