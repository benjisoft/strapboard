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
    <?php include 'variables.php'?>
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

            echo '<table style="margin: 0px auto;">';
            echo '<tr>';
            echo '<td>';
            echo "Bathroom: <br \>";
            if ($btr == 1) {
                echo '<img src="res/Green.png" height="100" width="100">';
            } elseif ($btr == 2) {
                echo '<img src="res/Yellow.png">';
            } elseif ($btr == 3) {
                echo '<img src="res/Red.png">';
            } else {
                echo 'Please email <a href="mailto:benji@benjisoft.org.uk">Benji</a>, so he knows that he broke his code and he can cry himself to sleep tonight.';
            }
            echo '&nbsp;</td> <td>';

            echo "Bedrooms: <br \>";
            if ($bdrms == 1) {
                echo '<img src="res/Green.png" height="100" width="100">';
            } elseif ($bdrms == 2) {
                echo '<img src="res/Yellow.png">';
            } elseif ($bdrms == 3) {
                echo '<img src="res/Red.png">';
            } else {
                echo 'Please email <a href="mailto:benji@benjisoft.org.uk">Benji</a>, so he knows that he broke his code and he can cry himself to sleep tonight.';
            }
            echo '&nbsp;</td> <td>';

            echo "Lounge: <br \>";
            if ($lounge == 1) {
                echo '<img src="res/Green.png" height="100" width="100">';
            } elseif ($lounge == 2) {
                echo '<img src="res/Yellow.png">';
            } elseif ($lounge == 3) {
                echo '<img src="res/Red.png">';
            } else {
                echo 'Please email <a href="mailto:benji@benjisoft.org.uk">Benji</a>, so he knows that he broke his code and he can cry himself to sleep tonight.';
            }
            echo '&nbsp;</td><td>';

            echo "Kitchen: <br \>";
            if ($kitchen == 1) {
                echo '<img src="res/Green.png" height="100" width="100">';
            } elseif ($kitchen == 2) {
                echo '<img src="res/Yellow.png">';
            } elseif ($kitchen == 3) {
                echo '<img src="res/Red.png">';
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
