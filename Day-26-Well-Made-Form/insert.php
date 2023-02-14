<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// prepare empty entity
$song = new Song;
 
// update entity from request
$song->name = $_POST['name'] ?? $song->name;//is there a name? if so, whatever is right of '??' will be used.
// Could also be:
// if (isset($_POST['name'])) {
//     $song->name  = $_POST['name']
// }
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;
// ...
 
// var_dump($song);
// die(); //script ends here

// somehow insert the entity into the database and generate a unique ID
// here done using DBBlackbox
$id = insert($song);
var_dump ($id);
