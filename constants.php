<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Constants </title>
</head>
<body>
   <?php 
        $max_width = 980;

        define("MAX_WIDTH", 980);
        echo MAX_WIDTH;

   ?>

    <br/>

    <?php
        // can't change the value
        // MAX_WIDTH += 1
        // echo MAX_WIDTH;
    ?>

    <br />
    <?php
        // can't even re define  the constant
        // constant stays defined for a duration of a php script
        // echo MAX_WIDTH;

        // define("MAX_WIDTH", 981);
        // echo MAX_WIDTH;
    ?>
    <br />

    

</body>
</html>  