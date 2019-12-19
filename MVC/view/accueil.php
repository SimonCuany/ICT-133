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
$movies = [
    ['title' => 'Jumanji: Next Level', 'audio' => 'Doublé en français', 'showtime' => '18:00'],
    ['title' => 'La Reine des neiges 2', 'audio' => 'Doublé en français', 'showtime' => '15:30'],
    ['title' => 'Last Christmas', 'audio' => 'Standard', 'showtime' => '21:00'],
    ['title' => 'La Famille Addams', 'audio' => 'Standard', 'showtime' => '15:30'],
    ['title' => 'Le Meilleur reste à venir', 'audio' => 'Doublé en français', 'showtime' => '15:50'],
    ['title' => 'À couteaux tirés', 'audio' => 'Standard', 'showtime' => '18:10'],
    ['title' => 'Joker', 'audio' => 'Doublé en français', 'showtime' => '20:45']
];
?>

    <a href='?action=Movies'><img width="300 height="200" src="/images/movies.jpg"/></a><br><br><br>


    <a href='?action=Concerts'><img width="300 height="200" src="/images/concerts.jpg"/></a>

<?php
$content = ob_get_clean();
?>