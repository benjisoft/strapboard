<!DOCTYPE html>
<html>
<head>
    <title>Panel</title>
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <?php include "config.php"?>
</head>
<body>
<h1>StrapBoard</h1>
<h2>Check on everything from here!</h2>
<p class="centre">Have a problem? Email: <a href="mailto:strapboard@benjisoft.org.uk">strapboard@benjisoft.org.uk</a></p>
<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 07/05/2017
 * Time: 20:12
 */
$db_conx = mysqli_connect($host,$user,$password,$schema,$port);
$result = mysqli_query($db_conx, 'SELECT status FROM statuses');
$row = mysqli_fetch_assoc($result);
$br = $row['status'];
echo "Test: <br \>";
if ($br==0) {
    echo('<img src="res/Green.png">');
} elseif ($br==1) {
    echo('<img src="res/Yellow.png">');
} elseif ($br==2) {
    echo('<img src="res/Red.png">');
} else {
    echo('Please email <a href="mailto:benji@benjisoft.org.uk">Benji</a>, so he knows that he broke his code and he can cry himself to sleep tonight.');
}
?>
</body>
</html>
