<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $sitename = 'StrapBoard';
    $admintitle = 'Admin Console | '.$sitename;
    echo '<title>'.$admintitle.'</title>';
    include '../lib/bootstrap.php';
    ?>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<?php
include 'lib/menu.php';
?>
</body>