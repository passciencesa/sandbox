<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Point Number</title>
</head>
<body>
    <?php echo $float = 3.14; ?> <br />
    <?php echo $float + 7; ?> <br />
    <?php echo 4/3; ?><br />
    
    <!-- //cant divide by zero -->

    <?php //echo 4/0; //return a error mesage ?>

    <br />
    <br />
    <br />
    <br />

    Round:      <?php echo round($float, 1); ?><br />
    Ceiling:    <?php echo ceil($float); ?><br />
    Floor:      <?php echo floor($float); ?> <br />
    <br />
    <br />
    <br />
    <?php $integer = 3; ?>
    <br />
    <?php echo "Is {$integer} integer ?" . is_int($integer); ?><br />
    <?php echo "Is {$float} integer ?" . is_int($float); ?><br />
    <br />
    <?php echo "Is {$integer} float ?" . is_float($integer); ?><br />
    <?php echo "Is {$float} float ?" . is_float($float); ?><br />
    <br />
    <?php echo "Is {$integer} numeric ?" . is_numeric($integer); ?><br />
    <?php echo "Is {$float} numeric ?" . is_numeric($float); ?><br />

</body>
</html>