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
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Status Management</h3>
    </div>
    <div class="panel-body">
<!-- Resolved -->
<div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Resolved <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="lib/php/update_status.php?id=1&status=1">Bathroom</a></li>
        <li><a href="lib/php/update_status.php?id=2&status=1">Bedrooms</a></li>
        <li><a href="lib/php/update_status.php?id=3&status=1">Lounge</a></li>
        <li><a href="lib/php/update_status.php?id=4&status=1">Kitchen</a></li>
    </ul>
</div>

<!-- Minor Problem -->
<div class="btn-group">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Minor <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="lib/php/update_status.php?id=1&status=2">Bathroom</a></li>
        <li><a href="lib/php/update_status.php?id=2&status=2">Bedrooms</a></li>
        <li><a href="lib/php/update_status.php?id=3&status=2">Lounge</a></li>
        <li><a href="lib/php/update_status.php?id=4&status=2">Kitchen</a></li>
    </ul>
</div>

<!-- Major Problem -->
<div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Major <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="lib/php/update_status.php?id=1&status=3">Bathroom</a></li>
        <li><a href="lib/php/update_status.php?id=2&status=3">Bedrooms</a></li>
        <li><a href="lib/php/update_status.php?id=3&status=3">Lounge</a></li>
        <li><a href="lib/php/update_status.php?id=4&status=3">Kitchen</a></li>
    </ul>
</div>
</div>
</body>
</html>
