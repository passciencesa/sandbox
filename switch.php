<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Switch </title>
</head>
<body>
 
 
<?php
    $a = 10;

    switch($a) {
        case 0:
            echo "e equals 0<br/>";
            break;
        case 1:
            echo "e equals 1<br/>";
            break;
        case 2:
            echo "e equals 2<br/>";
            break;
        case 3:
            echo "e equals 3<br/>";
            break;
        default:
            echo "a is not 0, 1, 2, or 3<br/>";
            break;
    }


?>
<br />
<br />
<br />
<br />
<?php
    //Chinese Zodiac
    //White space doesn't matter
    //Colons, semicolons and breaks do

    $year = 2022;
    switch(($year - 4) % 12) {
        case 0: 
            $zodiac = 'Rat';
            break;
        case 1:
            $zodiac = 'Ox';
            break;
        case 2:
            $zodiac = 'Tiger';
            break;
        case 3:
            $zodiac = 'Rabbit';
            break;
        case 4:
            $zodiac = 'Dragon';
            break;
        case 5:
            $zodiac = 'Snake';
            break;
        case 6: 
            $zodiac = 'Horse';
            break;
        case 7:
            $zodiac = 'Goat';
            break;
        case 8:
            $zodiac = 'Monkey';
            break;
        case 9:
            $zodiac = 'Rooster';
            break;
        case 10:
            $zodiac = 'Dog';
            break;
        case 11:
            $zodiac = 'Pig';
            break;
    }

    echo "{$year} is the year of the {$zodiac}.";

?>
        
<br />
<br />

<?php
    //case with multiple value

    $user_type = "customer";

    switch($user_type) {
        case 'student':
            echo "Welcome!";
            break;
        case 'press':
            echo "Greatings";
            break;
        case 'customer':
        case 'press':
        case 'admin':
            echo "Hello";
            break;
    }

?>
   

</body>
</html>  