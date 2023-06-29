<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Logical </title>
</head>
<body>
 
    <?php 
        $a = 4;
        $b = 3;

        if ($a < $b) {
            echo "a is larger than b";
        } elseif {
            echo "a is smaller than a";
        } else {
            echo "a is equal to b";
        }
    ?> 
   
   <br />
    
    <?php  
    
    $new_user = true;
    
    if ($new_user) {
        echo "<h1> Welcome! </h1>";
        echo "<p>We are glad you decided to join us.</p>";
    }
    ?>

    <br />
    <br />
    
    <?php
        // don't divide by zero
        $numerator = 20;
        $denominator = 4;

        //make sure $result in if statement has default value;
       
        $result = 0;
            if ($denominator > 0) {
                    $result = $numerator / $denominator;

                // result are define inside if statement
               
                echo "Result: {$result}";
            }

        // when defining variables in if statement then we 
        // acocunt for posibility that $result is not set
        echo $result;
    
    ?>


        Comparison Operators
        
        - assignment:       =
        - equal:            ==
        - identical:        ===
        - compare:          > < >= <= <>
        - not equal:        !=
        - not identical:    !==

        Local Operators

        - and:              &&
        - or:               ||
        - not:              !

        

   

</body>
</html>  