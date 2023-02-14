<?php
$page_title = 'Shopping List';
$page = $_GET['page']?? 'home.php';
$items = [];

if (!empty($_POST['items'])){
   var_dump ($_POST);
   $items = $_POST['items'];
};


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
<nav>
    <a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
</nav>

    <h1><?=$page_title?></h1>
    <?php if($page == 'home') return include_once 'home.php' ?>
    <?php if($page == 'form') return include_once 'form.php' ?>



</body>
</html>