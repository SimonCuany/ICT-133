<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>calendrier</title>
</head>
<body>

<div class="month">
    <ul>
        <?php
        $monthlist = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

        $month = $_GET ['month'];
        $year = $_GET ['year'];
        $days = $_GET ['day'];
        echo $month [$monthlist];
        echo "<br>";
        echo $year;

        ?>
    </ul>
</div>

<ul class="weekdays">
    <?php
    /**
     * Title  : calendar.html
     * User   : Simon.CUANY
     * Date   : 05.12.2019
     * Time   : 11:21
     */

    $weekdays = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");


    for ($i = 0; $i < 8; $i++) {
        echo "<li>$weekdays[$i]</li>";
    }
    ?></ul>
<ul class="days">
    <?php
    for ($days = 1; $days < 32; $days++) {
        if ($days == 5) {
            echo "<li><span class=\"active\">$days</span></li>";
        } else echo "<li>$days</li>";
    }
    ?>
</ul>


</body>
</html>