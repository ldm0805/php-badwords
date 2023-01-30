<!-- Recupero dei dati ed assegnazioni alle variabili -->
<?php
$paragraph = $_POST['paragraph'];
$censored = $_POST['censored'];
$censored_string = str_replace($censored,'***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel ="stylesheet" href="./css/style.css">
    <title>Primo eserecizio php</title>
</head>
    <body>
        <div class="center">
            <div>
                <h1>
                    La tua frase è:
                </h1>
                <!-- Paragrafo non censurato -->
                <h1>
                    <?php echo $paragraph."<br> La tua frase è lunga: ".strlen($paragraph)." caratteri.";?>
                </h1>
            </div>
            <div>
                <h1>
                    La tua frase censurata è:
                </h1>
                <!-- Paragrafo censurato -->
                <h1>
                    <?php echo $censored_string."<br> La tua frase censurata è lunga: ".strlen($censored_string)." caratteri.";?>
                </h1>
            </div>
        </div>
    </body>
</html>