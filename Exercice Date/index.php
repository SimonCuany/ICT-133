<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>C to PHP</title>
</head>
<body>
<h1 align="center">C to PHP</h1>

<?php
/**
 * Title  : ICT-133 - Traduction C vers PHP
 * User   : simon.cuany
 * Date   : 21.11.2019
 * Time   : 11:41
 */
$value = 20;
$step = 3;
for ($i = 0 ; $i<10;$i++){  //boucle servant de vérifier si i est plus petit que 10, si il l'est, rentre dans la condition "IF" sinon ne fait rien

    if ($value >= 30){  //condition servant à vérifier si la variable "value" est plus grande que 30, si elle l'est, start le echo
        echo (" Le nombre vaut $value <br>");
    }
    else{ //
        echo(" Nombre trop petit"."<br>");
    }
        $value += $step;
}

?>

</body>
</html>