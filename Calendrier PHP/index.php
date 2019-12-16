<!-- Title   : calendar.html
     User    : Simon.CUANY
     Date    : 05.12.2019
     Project : calendar in php
     -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>calendar</title>
</head>
<body>

<div class="month">
    <ul>
        <?php
        /**
         * Title  : calendar.html
         * User   : Simon.CUANY
         * Date   : 05.12.2019
         * Time   : 11:21
         */


        $monthlist = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
            "Octobre", "Novembre", "Décembre");
        $month = $_GET ['month'];

        $year = $_GET ['year'];

        $monthbefore = $month - 1;
        $monthafter = $month + 1;

   //   function Upcalendar($month, $year) //function to write the head of the page
   //   {
   //       echo "<li>" . $month . "<br>" . $year . "</li>";
   //   }

      echo $monthlist [$month - 1];
      echo "<br>";
      echo $year;

        ?>
    </ul>
</div>

<ul class="weekdays">
    <?php


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
    $lastdayoflastmonth = date('F jS, Y', strtotime('last day of last month'));
    $lastmonth = date("t", strtotime("$year-" . $month - 1 . "-1"));

    function getDaysBefore($month, $year)
    {


        // TODO: Ecrire le code de la fonction
    }


    function getDaysAfter($month, $year)
    {


        // TODO: Ecrire le code de la fonction
    }


    //write the days of the previous month

    for ($i = 0; $i < $firstday - 1; $i++) {
        $daytoprint = $lastmonth - $firstday + $i + 2;
        echo "<li class=\"lastmonth\"> $daytoprint</li>";
    }

    //write the days of the month

    for ($days = 1; $days <= $nbdayformonth; $days++) {
        if ($days == $datenow && $year == $yearnow && $month == $monthnow) {
            echo "<li><span class=\"active\">$days</span></li>";
        } else echo "<li>$days</li>";
    }

    //write the days of the next month

    $nbdaynextmonth = ($firstday - 1 + $nbdayformonth) % 7;
    for ($i = 1; $i <= $nbdaynextmonth; $i++) {
        echo "<li class='monthafter'>$i</li>";
    }

    ?>
</ul>


</body>
</html>