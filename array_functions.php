<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array Functions </title>
</head>
<body>
    <?php $number = array(8,23,15,42,16,4); ?>

    Count:          <?php echo count($number); ?><br />
    Max Value:      <?php echo max($number); ?><br />
    Min Value:      <?php echo min($number); ?><br />
    <br />
    <pre>
        Sort:           <?php sort($number); print_r($number); ?><br />
        Reverse sort:   <?php rsort($number); print_r($number); ?><br />
    </pre>
    <br />
    implode:        <?php echo $num_string = implode(" * ", $number); ?><br />
    Explode:        <?php print_r(explode(" * ", $num_string)); ?><br />

    15 in array?: <?php echo in_array(15, $number);  //returns T/F ?><br />
    19 in array?: <?php echo in_array(19, $number); //returns T/F ?><br />
    
</body>
</html> 