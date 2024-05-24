<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Arrays are used to store more information

    //Indexed or numeric array
    $colors = ["Black","Green","Yellow"];

    print_r($colors);
    ?>
    
    <br>
    
    <?php
    $user = array("Muthoni","Mukami","Jahleel");
    print $user[2];

    print "<br>"; 

    $user_data=["fullname" => "Joy Muthoni", "email" => "joys@email.com", "phone" => "+2543467890"];
    print $user_data["email"];
    ?>
    <pre>
        <?php print_r($user);?>
    </pre>
    <?php
    //Multi-dimensional arrays 
    $user_details = [
        "Director"=> array("Joy Muthoni",
        "address"=>"Kiambu",
        "mobile"=>"+254980786998",
        "email"=>"joys@email.com"),

        "Secretary"=>array("Joy Muthoni",
        "address"=>"Kiambu",
        "mobile"=>"+254980786998",
        "email"=>"joys@email.com"),

        "Manager"=>array("Joy Muthoni",
        "address"=>"Kiambu",
        "mobile"=>"+254980786998",
        "email"=>"joys@email.com")
        ];

        print $user_details
        ["Director"]["address"]["mobile"];
    

    ?>
</body>
</html>