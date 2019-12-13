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

        $monthlist = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
            "Octobre", "Novembre", "Décembre");

        $monthbefore = $month - 1;
        $monthafter = $month + 1;

        $month = $_GET ['month'];

        $year = $_GET ['year'];

        echo $monthlist [$month - 1];
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
    $datenow = date("d");
    $yearnow = date("Y");
    $monthnow = date("m");
    $firstday = date("N", strtotime("$year-$month-1"));
    $nbdayformonth = date("t", strtotime("$year-$month-1"));


    //écrire les jours du mois précédent

    $lastmonth = date("t", strtotime("$year-" . $month - 1 . "-1"));
    for ($i = 0; $i < $firstday - 1; $i++) {
        $daytoprint = $lastmonth - $firstday + $i + 2;
        echo "<li class=\"lastmonth\"> $daytoprint</li>";
    }

    for ($days = 1; $days <= $nbdayformonth; $days++) {
        if ($days == $datenow && $year == $yearnow && $month == $monthnow) {
            echo "<li><span class=\"active\">$days</span></li>";
        } else echo "<li>$days</li>";
    }
    //Afficher les jours d'après


    $nbdaynextmonth = ($firstday - 1 + $nbdayformonth) % 7;
    for ($i = 1; $i <= $nbdaynextmonth; $i++) {
        echo  "<li>$i</li>";
    }

    ?>
</ul>


</body>
</html>