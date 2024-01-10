<?php

require_once 'Content.php';
require_once 'Ad.php';
require_once 'Article.php';
require_once 'Vacancy.php';

$articleOne = new Article("I am not feeling this coffee anymore","or am I?");
$articleTwo = new Article("I like my coffee beans more","wuuuut");

$ad = new Ad("Better coffee beans available", "look for the see through pot");

$vacancy = new Vacancy("Apply for being a coffee been right now!","APPLY!");

$content = [$articleOne, $articleTwo, $ad, $vacancy];

foreach ($content as $item) {
    echo $item->showTitle();
    echo "<br>";
    echo $item->getText();
    echo "<br><br>";
}