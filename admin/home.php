<!-- HTML Header info -->
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
    include 'lib/bootstrap.php';
    ?>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<?php
include 'lib/menu.php';
?>
<div class="break"></div>
<div class="well well-lg">
    <div class="alert alert-warning" role="alert">
        This section is still under construction. Necessary site settings are available <a href="settings/general.php">here</a>.
    </div>
</div>
<div class="hidden">
    <p>
        <div class="alert alert-danger">You are not authorized to access this page.</> Please <a href="index.php">login</a>.
    </p>
</div>
</body>
</html>