<?php

require_once 'content.php';
require_once 'Ad.php';
require_once 'Article.php';
require_once 'Vacancy.php';

$articleOne = new Article("I am not feeling this coffee anymore");
$articleTwo = new Article("I like my coffee beens more");

$ad = new Ad("Better coffee beens available, look for the see through pot");

$vacancy = new Vacancy("Apply for being a coffee been right now!");

$content = [$articleOne, $articleTwo, $ad, $vacancy];

foreach ($content as $item) {
    echo $item->showTitle();
    echo "<br>";
    echo $item->getText();
    echo "<br>";
}