<?php
/**
 * Title  : MVC
 * User   : Simon.CUANY
 * Date   : 19.12.2019
 * Time   : 10:53
 */
?>

<?php
ob_start();

?>

<h1>liste des films</h1> <br>

    <table class="table table-bordered">
        <th>Titre</th>
        <th>Langue</th>
        <th>Horaire</th>
        <tbody>
        <?php

         foreach ($listofmovies as $movie)
        {
            echo "<tr><td>".$movie['title']."</td>"."<td>".$movie['audio']."</td>"."<td>".$movie['showtime']."</td></tr>";

        }
        ?>
        </tbody>
    </table>

<?php
$content = ob_get_clean();
require_once 'gabarit.php'
?>