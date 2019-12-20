<?php
/**
 * Title  : MVC
 * User   : Simon.CUANY
 * Date   : 20.12.2019
 * Time   : 13:42
 */



function showConcerts(){

   require_once ('MVC/concerts.php');

   /*unset($concerts[5]);
    unset($concerts[6]);
    unset($concerts[7]);*/

    for($i = 0 ; $i < count($concerts); $i ++)
    {
        if ($concerts[$i]['date'] < date('Y-m-d'))
        {
            unset($concerts[$i]);
        }
    }

    require_once ('view/concerts.php');
}

function showMovies(){

    require_once ('MVC/Movies.php');

    /*unset($movies[5]);
    unset($movies[6]);
    unset($movies[7]);*/

    require_once ('view/movies.php');
}


?>