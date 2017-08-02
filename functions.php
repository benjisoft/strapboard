<?php
/**
 * Created by PhpStorm.
 * User: jamin_rules
 * Date: 09/06/2017
 * Time: 21:17.
 */
function bathroom()
{
    $db_conx = mysqli_connect($host, $user, $password, $schema, $port);
    $bathroom = mysqli_query($db_conx, 'SELECT status FROM statuses');
    $row = mysqli_fetch_assoc($bathroom);
    $br = $row['status'];
    echo "Bathroom: <br \>";
    if ($br == 1) {
        echo '<img src="res/Green.png">';
    } elseif ($br == 2) {
        echo '<img src="res/Yellow.png">';
    } elseif ($br == 3) {
        echo '<img src="res/Red.png">';
    } else {
        echo '<img src="res/unknown.png">';
    }
}
