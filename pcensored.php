<?php
$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];
$censored_string = str_replace($censored, '***', $paragraph);
// echo $paragraph;
// echo strlen($paragraph);
// echo $censored_string;
// echo strlen($censored_string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
    <body>
        <h1>
        <?php echo $paragraph;?>
        <?php echo strlen($paragraph);?>
        </h1>
        <h1>
        <?php echo $censored_string;?>
        <?php echo strlen($censored_string);?>
        </h1>
    </body>
</html>