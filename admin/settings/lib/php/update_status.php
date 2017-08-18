<?php
/**
 * Created by PhpStorm.
 * User: jamin_rules
 * Date: 18/08/2017
 * Time: 10:23.
 */
include '../../../../config.php';

$status = $_GET['status'];
$id = $_GET['id'];

// Create connection
$conn = mysqli_connect($host, $user, $pass, $schema);
// Check connection
if (!$conn) {
    die('Connection failed: '.mysqli_connect_error());
}

$sql = "UPDATE statuses SET status=$status WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo 'Record updated successfully <a href="javascript:history.back()">Go Back</a>';
} else {
    echo 'Error updating record: '.mysqli_error($conn);
}

mysqli_close($conn);
