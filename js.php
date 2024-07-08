<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="DynamicTimer();" >
    <p id="grouopa"></p>
    <script>
        document.getElemenyById('grouopa').innerHTML = "This is my first JS code";
    </script><br><br><br><br><br><br>

<button type="button" onclick="document.getElementById('MyImg').src='images/bulb on.png'">Turn On</button>

<img src="images/bulb on.png" alt="" id="MyImg" style = "width:200px;">

<button type="button" onclick="document.getElementById('MyImg').src='images/bulb off.png'">Turn Off</button><br><br><br>

<?php date_default_timezone_set("Africa/Nairobi"); ?>
Static timer: <?php print date("H:i:s"); ?><br>
Dynamic timer: <span id="dtmer"></div>

<script src="script.js"></script>

</body>
</html>