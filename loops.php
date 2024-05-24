<h1>Loops</h1>
<h4>While loop</h4>
<?php
//While loop
$in = 0;
while($in < 10){
    print $in . "<br>";
    $in++;
}
?>

<h4>Do-while loop</h4>
<?php
//Do-while loop

$s = 5;
do{
    print $s . "<br>";
    $s++;
}while($s < 15);
?>

<h4>For loop</h4>
<?php
for ($f=45; $f<55; $f++){
    print $f . "<br>";
}
?>

<h4>Foreach</h4>
<?php
$months=["January","February","March","April","May","June","July","August","September","October","November","December"];

foreach($months AS $month){
    print $month . "<br>";
}
?>

<form action=""></form>
<select name="" id="">
    <option value="">--Month--</option>
    <?php
    foreach($months AS $month){
        print "<option value=''>$month</option>";
    }
    ?>
</select>

<select name="" id="">
    <option value="">--Year--</option>
    <?php
    //While loop
    $y = 2000;
    while($y < 2030){
    print $in . "<option value=''>$y</option>";
    $y++;
}

//homework: make the year read the current date

?>
</select>
</form>

