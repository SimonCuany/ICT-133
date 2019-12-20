<?php
/**
 * Title  : MVC
 * User   : Simon.CUANY
 * Date   : 19.12.2019
 * Time   : 10:56
 */
?>

<?php
ob_start();

?>

    <a href='?action=Movies'><img width="300 height="200" src="/images/movies.jpg"/></a><br><br>


    <a href='?action=Concerts'><img width="300 height="200" src="/images/concerts.jpg"/></a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php'
?>