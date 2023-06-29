<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Operators and Logical Operators </title>
</head>
<body>
 
        <h2>Comparison Operators</h2>
        <ul>
           <li> - assignment:       =               </li>
           <li> - equal:            ==              </li>
           <li> - identical:        ===             </li>
           <li> - compare:          > < >= <= <>    </li>
           <li> - not equal:        !=              </li>
           <li> - not identical:    !==             </li>
        </ul>
       <h2> Logical Operators </h2>
        <ul>
            <li>- and:              &&  </li>
            <li>- or:               ||  </li>
            <li>- not:              !   </li>
        </ul>
   
        <?php
        
            $a = 4;
            $b = 3;
            $c = 1;
            $d = 20;

            if (($a > $b) || ($c >= $d)) {
                echo "a is larger than b OR ";
                echo "c is larger than d.";
            }
        
        ?>


        <br />
        <br />
        <br />
        
        <?php 
            $e = 100;

            if (!isset($e)) {
                $e = 200;
            }

            echo $e;
        
        
        ?>

        <br />
        <br />

        <?php
            $quantity = "";
            //don't reject 0 or 0.0
            if(empty($quantity) && !is_numeric($quantity)) {
                echo "You must enter a quantity";
            }
        
        ?>

</body>
</html>  