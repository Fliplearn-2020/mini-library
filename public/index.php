<?php
require '../vendor/autoload.php';
// Run app
$app = (new Library\App\LibraryRoute())->get();
$app->run();
