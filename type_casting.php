<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Type Juggling and Type Casting </title>
</head>
<body>
    <!--
    
    Type Juggling and Casting
    settype($var, "integer");
    or
    (integer) $var;

    string 
    int, integer 
    float 
    array 
    bool, boolean
    
    -->

    <b>Type Jugging</b> <br />
    <?php $count = "2"; ?><br />
    Type : <?php echo gettype($count);  ?><br />

    <?php $count += 3; ?><br />
    Type : <?php echo gettype($count);  ?><br />

    <?php $cats = "I have " . $count . " cats."; ?><br />
    Cats : <?php echo gettype($cats);  ?><br />
     
    <br />
    <br />
    <br />
    <br />

    <b>Type Casting</b><br />
    <?php settype($count, "integer"); ?>
    count : <?php echo gettype($count); ?>

    <?php $count2 = (string) $count; ?><br />
    count: <?php echo gettype($count); ?><br />
    count 2 : <?php echo gettype($count2); ?><br />

    <br />
    <br />

    <?php $test1 = 3; ?>
    <?php $test2 = 3; ?>

    <?php settype($test1, "string"); ?>
    <?php (string) $test2; ?>

    test 1 : <?php echo gettype($test1); ?><br />
    test 2 : <?php echo gettype($test2); ?><br />



</body>
</html>  