<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Loops: while </title>
</head>
    <body>
    <?php
        $count = 0;
        while($count <= 10) {
            if($count == 5){ 
                echo "FIVE, ";
            } else {
                echo $count . ", ";
            }
            // echo $count . ", ";
            
            // Increment by 1
            $count++;
        }
        echo "<br />";
        echo "Count: {$count}";
    ?>
</body>
</html>  