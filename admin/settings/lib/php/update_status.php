<?php
/**
 * Created by PhpStorm.
 * User: jamin_rules
 * Date: 18/08/2017
 * Time: 10:23.
 */
include '../../../../config.php';
require_once 'Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;

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
    echo "Record updated successfully <a href=\"javascript:history.back()\">Go Back</a>";

    // Twilio Stuff
    $client = new Client($account_sid, $auth_token);

    $messages = $client->messages->create("[Alert Number]", array(
            'From' => "SB-ALERTS",
            'MessagingServiceSid' => "MGe3aad68c5008c1c4c91dc94f9bb0ae34",
            'Body' => "An issue has been reported. For more details, go to [Domain Name]",
        ));
} else {
    echo 'Error updating record: '.mysqli_error($conn);
}

mysqli_close($conn);
