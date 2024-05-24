<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   date_default_timezone_set("Africa/Nairobi");

   echo "This is my first php code"; //displaying a sentence or a stirng
   
   print "<br>"; //using HTML's <br> to break a line

   print "Today is <span style='color: #ff4856; text-transform: uppercase;'>Thursday</span>";

   print "<br>"; //using HTML's <br> to break a line

   print 1999; //this is an integer or a digit

   print "<br>"; //using HTML's <br> to break a line

   print "5467"; //this is a string

   print "<br>"; //using HTML's <br> to break a line

   print date('l');//displaying the current day of the week

   print "<br>"; //using HTML's <br> to break a line

   print date('l', strtotime('+125 days'));

   print "<br>"; //using HTML's <br> to break a line

   print date('l, F jS Y', strtotime('+20 days'));

   print "<br>"; //using HTML's <br> to break a line

   print "Today is " . date ('l, F jS Y H:i:s');

   //Creating (declaring) a variable

   $fname = 'Joy Njeru'; //decllaration of a variable or a string or a group of words

   $yob = 2004; //declaration of a digit or an integer

   print "<br>"; //using HTML's <br> to break a line

   $user_dob = "2004-10-31";

   echo $fname . " was born in " . $yob;

   print "<br>"; //using HTML's <br> to break a line

   $current_year = date('Y');

   echo $current_year;

   print "<br>"; //using HTML's <br> to break a line

   $age = $current_year - $yob;//using substraction to find the age
   
   print $fname . " is " . $age . " years old";

   print "<br>"; //using HTML's <br> to break a line

   print "45+69";

   print "<br>"; //using HTML's <br> to break a line

   print 45+69;

   $birthday = new DateTime($user_dob);
   $today = new DateTime('today');

   $interval = $birthday->diff($today);

   echo ',<pre>';
   print_r($interval);
   echo '</pre>';

   print $fname . " is actually, " . $interval->y . " years " . $interval->m . " months, and " . $interval->d . " days old.";

   //The if...else...statement

   print "<br>"; //using HTML's <br> to break a line

   $adult_age = 18;
   if($interval->y > $adult_age){
    print $fname . " is an adult";//event in block to be executed if the condition is true
   }else{
    print $fname . "is NOT an adult";//event in block to be executed if the condition is false
   }

   print "<br>"; //using HTML's <br> to break a line

   //Variable Characteristics

   $last_name = "Njeru";

   echo "My last name is $last_name";//double quote treats last name as a variable

   print "<br>"; //using HTML's <br> to break a line

   echo 'My last name is ' .$last_name;//single quote treats last name as a string

   print "<br>"; //using HTML's <br> to break a line

   echo "Today is " . date('l');

   print "<br>"; //using HTML's <br> to break a line

   $call['lname'] = "Njeru";
   print $call['lname'];

   print "<br>"; //using HTML's <br> to break a line
   define('LNAME', 'Njeru');
   echo LNAME;

   ?> 
</body>
</html>