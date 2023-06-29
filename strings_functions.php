<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php

        $first = "The quick brown fox ";
        $second = "jumped over the lazy dog.";         
        $third = $first;
        $third .= $second;

        echo $third;


    ?>
    <br />
    <br />
    <br />
    Lowercase: <?php echo strtolower($third); ?><br />
    Uppercase: <?php echo strtoupper($third); ?><br />
    Uppercase first: <?php echo ucfirst($third); ?><br />
    Uppercase Words: <?php echo ucwords($third); ?><br />
    <br />
    <br />
    <br />
    <br />


    Length: <?php echo strlen($third); ?><br />
    Trim: <?php echo "A" . trim(" B C D") . "E"; ?><br />
    Find: <?php echo strstr($third, "brown"); ?><br />
    Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />
    
    <br />
    <br />
    <br />
    <br />

    Repeat: <?php echo str_repeat($third, 2); ?> <br />
    Make Substring: <?php echo substr($third ,5 ,10); ?> <br />
    Find position: <?php echo strpos($third, "brown"); ?><br />
    Find Character: <?php echo strchr($third, "z"); ?><br />

</body>
</html>