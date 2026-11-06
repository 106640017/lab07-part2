<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>

<body>

    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php

    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
    $age = isset($_POST["age"]) ? $_POST["age"] : "";
    $species = isset($_POST["species"]) ? $_POST["species"] : "";
    $food = isset($_POST["food"]) ? $_POST["food"] : "";
    $bookday = isset($_POST["bookday"]) ? $_POST["bookday"] : "";
    $partysize = isset($_POST["partysize"]) ? $_POST["partysize"] : "";

    if ($species == "M") {
        $speciesName = "Human";
    } elseif ($species == "D") {
        $speciesName = "Dwarf";
    } elseif ($species == "E") {
        $speciesName = "Elf";
    } elseif ($species == "H") {
        $speciesName = "Hobbit";
    } else {
        $speciesName = "Not selected";
    }

    echo "<p>Welcome $firstname $lastname!</p>";

    echo "<p>You are now booked for:</p>";

    echo "<ul>";

    if (isset($_POST["accom"])) {
        echo "<li>Accommodation</li>";
    }

    if (isset($_POST["4day"])) {
        echo "<li>4 Day Tour</li>";
    }

    if (isset($_POST["10day"])) {
        echo "<li>10 Day Tour</li>";
    }

    echo "</ul>";

    echo "<p>Species: $speciesName</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Meal Preference: $food</p>";
    echo "<p>Date: $bookday</p>";
    echo "<p>Number of travellers: $partysize</p>";

    ?>

</body>

</html>