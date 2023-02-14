<?php

require_once 'Track.php';
$song = new Track ("Any Major Dude");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <li><strong>Now Playing</strong><?=$song-> title;?>
    </li>
    </ol>
</body>
</html>