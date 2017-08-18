<!DOCTYPE html>
<html>
<head>
    <title>Panel</title>
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php include 'config.php'?>
</head>
<body>
<div id="container">
    <div id="header">
        <h1>StrapBoard</h1>
        <h2>Check on everything from here!</h2>
        <p class="centre">Have a problem? Email: <a href="mailto:strapboard@benjisoft.org.uk">strapboard@benjisoft.org.uk</a></p>
    </div>
    <div id="body">
        <br />
        <?php
            /**
             * Created by PhpStorm.
             *  User: benji
             * Date: 07/05/2017
             * Time: 20:12.
             */
            $db_conx = mysqli_connect($host, $user, $pass, $schema, $port);
            $result_btr = mysqli_query($db_conx, 'SELECT status FROM statuses WHERE id=1;');
            $row_btr = mysqli_fetch_assoc($result_btr);
            $btr = $row_btr['status'];

            echo '<table style="margin: 0px auto;">';
            echo '<tr>';
            echo '<td>';
            echo 'Bathroom: ';
            echo '</td><td>';
            if ($btr == 1) {
                echo '<img src="res/Green.png" height="100" width="100">';
            } elseif ($btr == 2) {
                echo '<img src="res/Yellow.png" height="100" width="100">';
            } elseif ($btr == 3) {
                echo '<img src="res/Red.png" height="100" width="100">';
            } else {
                echo 'Please email <a href="mailto:benji@benjisoft.org.uk">Benji</a>, so he knows that he broke his code and he can cry himself to sleep tonight.';
            }
            echo '&nbsp;</td></tr> <tr><td>';

            $result_bdrms = mysqli_query($db_conx, 'SELECT status FROM statuses WHERE id=2;');
            $row_bdrms = mysqli_fetch_assoc($result_bdrms);
            $bdrms = $row_bdrms['status'];

            echo 'Bedrooms: ';
            echo '</td><td>';
            if ($bdrms == 1) {
                echo '<img src="res/Green.png" height="100" width="100">';
            } elseif ($bdrms == 2) {
                echo '<img src="res/Yellow.png" height="100" width="100">';
            } elseif ($bdrms == 3) {
                echo '<img src="res/Red.png" height="100" width="100">';
            } else {
                echo 'Please email <a href="mailto:benji@benjisoft.org.uk">Benji</a>, so he knows that he broke his code and he can cry himself to sleep tonight.';
            }
            echo '&nbsp;</td></tr> <tr><td>';

            $result_lounge = mysqli_query($db_conx, 'SELECT status FROM statuses WHERE id=3;');
            $row_lounge = mysqli_fetch_assoc($result_lounge);
            $lounge = $row_lounge['status'];

            echo 'Lounge: ';
            echo '</td><td>';
            if ($lounge == 1) {
                echo '<img src="res/Green.png" height="100" width="100">';
            } elseif ($lounge == 2) {
                echo '<img src="res/Yellow.png" height="100" width="100">';
            } elseif ($lounge == 3) {
                echo '<img src="res/Red.png" height="100" width="100">';
            } else {
                echo 'Please email <a href="mailto:benji@benjisoft.org.uk">Benji</a>, so he knows that he broke his code and he can cry himself to sleep tonight.';
            }
            echo '&nbsp;</td></tr><tr><td>';

            $result_ktchn = mysqli_query($db_conx, 'SELECT status FROM statuses WHERE id=4;');
            $row_ktchn = mysqli_fetch_assoc($result_ktchn);
            $ktchn = $row_ktchn['status'];

            echo 'Kitchen: ';
            echo '</td><td>';
            if ($ktchn == 1) {
                echo '<img src="res/Green.png" height="100" width="100">';
            } elseif ($ktchn == 2) {
                echo '<img src="res/Yellow.png" height="100" width="100">';
            } elseif ($ktchn == 3) {
                echo '<img src="res/Red.png" height="100" width="100">';
            } else {
                echo 'Please email <a href="mailto:benji@benjisoft.org.uk">Benji</a>, so he knows that he broke his code and he can cry himself to sleep tonight.';
            }
            echo '&nbsp;</td></tr></table>';
        ?>
    </div>
    <div id="footer">
        <hr>
        <a href="admin/home.php">Management</a>
        <a href="https://support.benjisoft.org.uk">Support Centre</a>
        <a href="mailto:support@benjisoft.org.uk">Email Us</a>
    </div>
</div>
</body>
</html>
