<!DOCTYPE html>
<html>
<head>
    <!-- Make sure the title contains the required string -->
    <title>VIPUL AGRAWAL af97a874</title>
</head>
<body>
    <h1>Welcome to my guessing game</h1>

    <?php
    // Set the correct number to 30 as per the assignment requirement
    $correctnumber = 30;

    // Check if the 'guess' parameter is present in the URL
    if (isset($_GET['guess'])) {
        // If the guess is not a number
        if (!is_numeric($_GET['guess'])) {
            echo "Your guess is not a number";
        }
        // If the guess is lower than the correct number
        else if ($_GET['guess'] < $correctnumber) {
            echo "Your guess is too low";
        }
        // If the guess is higher than the correct number
        else if ($_GET['guess'] > $correctnumber) {
            echo "Your guess is too high";
        }
        // If the guess is exactly correct
        else if ($_GET['guess'] == $correctnumber) {
            echo "Congratulations - You are right";
        }
    } else {
        // If the 'guess' parameter is missing
        echo "Missing guess parameter <br> Your guess is too short";
    }
    ?>
</body>
</html>
