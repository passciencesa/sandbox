<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    

    <h1>Associative Array</h1>
    <p>an object-indexed collection of objects.</p>   

    <h2>Compare</h2>
    <h3>-Basic Arrays:</h3>
        <p>-When order is most important</p>

    <h3>-Associative arrays:</h3>
        <p>-When having a reference label is most important</p>


    <!-- Example code  -->

    <?php $assoc = array("first_name" => "Kevin", 
                          "last_name" =>"kerobs"); ?><br />
        
    <?php echo $assoc["first_name"]; ?> <br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "Lary" ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
</body>
</html>