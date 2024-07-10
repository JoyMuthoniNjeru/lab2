<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require_once ("includes/db_connect.php"); ?>

  <?php include_once ("templates/nav.php"); ?>
  <div class="banner"> 
  </div> 
  <div class="heading">
    <h1 style="text-align: centre;rgba(255, 143, 105, 0.904);text-transform: uppercase;font-style: oblique;font-weight: bolder;">ABOUT SHE-RA</h1>
  </div> 
    <h3 style="text-align: left;color: rgb(223, 105, 255);text-transform: uppercase;font-style: italic;font-weight: bolder;">Backstory of She-Ra</h3>
    <p>She-Ra and the Princesses of Power is set on the planet Etheria and follows the stories of Adora and Catra, orphans who were<br> raised to be soldiers in the Horde. They are part of an evil army led by Hordak, a tyrannical despot who dreams of conquering<br>
    the planet. One day, after getting lost in the woods, Adora finds a magic sword that transforms her into the legendary Princess<br> of Power, She-Ra. After learning that the Horde is actually evil and has been inflicting suffering on Etheria and its inhabitants,<br> 
    Adora decides to join the Rebellion in the fight against the Horde. She helps rebuild the Princess Alliance, a league of kingdoms<br> ruled by other magical princesses. Adora's newfound allegiance to the Rebellion pits her against Catra, her former best friend,<br> 
    whose feelings of betrayal and abandonment twist her personal ambitions and lead her to become Adora's archenemy.</p>
 
    <h3 style="text-align: left;color: rgb(115, 105, 255);text-transform: uppercase;font-style: italic;font-weight: bolder;">Character Profiles</h3>

    <img src="images\Adora polaroid poster.jpeg"alt="" width="20%">
    <img src="images\Catra polaroid poster.jpeg"alt="" width="20%">
    <img src="images\Glimmer polaroid poster.jpeg"alt="" width="20%">
    <img src="images\Bow polaroid poster.jpeg"alt="" width="20%">
    <img src="images\Scorpia polaroid poster.jpeg"alt="" width="20%">
    <img src="images\Entrapta polaroid poster.jpeg"alt="" width="20%">
    <img src="images\Double Trouble polaroid poster.jpeg"alt="" width="20%">

    <?php include_once("templates/footer.php"); ?>  
</body>
</html>