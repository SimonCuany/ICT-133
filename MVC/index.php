<?php
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
        require_once 'view/movies.php';
        break;
    case 'Concerts':
        $title = 'Concerts';
        require_once 'view/concerts.php';
        break;
    default :
        $title = 'Accueil';
        require_once 'view/accueil.php';
    break;
}
require_once 'gabarit.php';
?>
