<?php
require_once "inc.php";

$nav = [
    [ 'name' => 'Home', 'href' => '/Home.php'],
    [ 'name' => 'Catalog', 'href' => '/Catalog.php'],
    [ 'name' => 'Forum', 'href' => '/Forum.php'],
    [ 'name' => 'About', 'href' => '/About.php'],
];

echo '<div class="flex">';
        for ( $i = 0; $i < 4; $i++) {
            echo '<div><a href=" ' . $nav[$i]["href"] . '"> ' . $nav[$i]["name"] . '</a></div>';
      }
echo '</div>';




