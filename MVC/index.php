<?php
require_once ('controller.php');
if (isset ($_GET ['action'])){

    $action = $_GET['action'];
}
else
{
    $action ='Accueil';
}
switch ($action) {
    case 'Movies':
        $title = 'Films';
        showMovies();
        break;
    case 'Concerts':
        $title = 'Concerts';
        showConcerts();
        break;
    default :
        $title = 'Accueil';
        require_once 'view/accueil.php';
    break;
}
require_once 'gabarit.php';
?>
