<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="DynamicTimer();">
   
    <p id="demo"></p>
    <script>
        document.getElementById('demo').innerHTML = "This is my first JS code";
    </script><br><br>

    <button type="button" onclick="document.getElementById('MyImg').src='images/bulb on.png'">Turn On</button>

    <img src="images/bulb off.png" alt="" id="MyImg" style="width:200px;">

    <button type="button" onclick="document.getElementById('MyImg').src='images/bulb off.png'">Turn Off</button><br><br><br>

    <?php date_default_timezone_set("Africa/Nairobi"); ?>
    Static timer: <?php print date("H:i:s"); ?><br>
    Dynamic timer: <span id="dtimer"></span><br><br>

    <br><br>

    <script>
        document.write(5 * 3);
    </script>

    <br><br>

    <script>
        //window.alert('Your database is ready!');
    </script>

    <br><br>

    <script>console.log('Add information here');</script>

    <br><br>

    <a href="#" onclick="return confirm('Are you sure?');">Delete</a>

    <br><br>

    <script src="script.js"></script>

    <br><br>

    <button type="button" onclick="window.print();">Print page</button>

    <br><br>
    <script>
        let streetname = prompt('What is your street name?');
        var firstname = "Joy";
        const MyAge = 20;
        document.write(firstname + " A.K.A" + streetname + " is " + MyAge + " years old");
    </script>

</body>
</html>
