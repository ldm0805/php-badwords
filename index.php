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
            <h3>Inserisci una frase ed una parola da censurare:</h3>
            <form action="./pcensored.php" method="GET">
                <input type="text" name="paragraph" id="paragraph"
                placeholder="paragraph">
                <input type="text" name="censored" id="censored"
                placeholder="censored">
                <button type="submit">Censura</button>
            </form>
        </div>
    </body>
</html>