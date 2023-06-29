<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
    <?php
        $number = array(4,8,15,16,23,42);

        echo $number[0];

    
    ?>
    <br />
    <br />
    <br />

    <?php 
    
        $mixed = array(6, "fox", "dog", array("x", "y","z"));

       
    ?>
   
    <?php  echo $mixed[2]; ?><br />
    
    <?php // echo $mixed[3]; ?> <br />
   
    <?php  //echo $mixed[3]; ?><br />
    
    <?php  echo $mixed[3][1]; ?><br />
     
    <?php $mixed[2] = "cat"; ?><br/>
    
    <?php $mixed[4] = "mouse"; ?><br/>
   
    <?php $mixed[] = "horse"; ?><br/>
    
    <pre>
        <?php  echo print_r($mixed); ?> <br/>
    </pre>

    <?php
        //php version 5.4 added short array syntax.
        $array = [1,2,3];
    ?>

    Associative Array
    an object-indexed collection of objects.

    Compare
    -Basic Arrays:
        -When order is most important

    -Associative arrays:
        -When having a reference label is most important
</body>
</html>