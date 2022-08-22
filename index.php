<?php
    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quis minima architecto sunt pariatur quas! 
    Vel placeat nihil dolorem ad tempore, mollitia, illo facere consectetur praesentium ut officia unde natus!";
    $censure = $_GET["censorship"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <h4>La stampa è:</h4>

    <?php
        echo "{ " . $string . " }";
        echo " " . strlen($string);
    ?>

    <h4>La stampa CENSURATA è:</h4>

    <?php
        echo str_replace($censure, "***", $string);
    ?>
</body>

</html>