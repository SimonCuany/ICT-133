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

<h1>liste des concerts</h1>

<table class="table table-bordered">
    <th>Nom</th>
    <th>Date</th>
    <tbody>

    <?php
    foreach ($concerts as $concert)
    {
        echo "<tr><td>".$concert['band']."</td>"."<td>"."Le ". $concert['date']."</td></tr>";
    }
    ?>
    </tbody>
</table>


<?php
$content = ob_get_clean();
require_once 'gabarit.php'
?>
