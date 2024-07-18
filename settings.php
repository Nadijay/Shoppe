<?php
include './connection/dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];
//$user_id = $_SESSION['user_id'] ?? 1; // Default to 1 if not set for testing purposes


$sql_country = "SELECT country FROM country WHERE user_id = $user_id";
$result_country = $conn->query($sql_country);
$country = ($result_country->num_rows > 0) ? $result_country->fetch_assoc()['country'] : "Country not found.";


$sql_currency = "SELECT currency FROM currency WHERE user_id = $user_id";
$result_currency = $conn->query($sql_currency);
$currency = ($result_currency->num_rows > 0) ? $result_currency->fetch_assoc()['currency'] : "Currency not found.";


$sql_size = "SELECT size FROM size WHERE user_id = $user_id";
$result_size = $conn->query($sql_size);
$size = ($result_size->num_rows > 0) ? $result_size->fetch_assoc()['size'] : "Size not found.";

$sql_language = "SELECT language FROM language WHERE user_id = $user_id";
$result_language = $conn->query($sql_language);
$language = ($result_language->num_rows > 0) ? $result_language->fetch_assoc()['language'] : "Size not found.";

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/settings.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h2>Settings</h2>
        <div class="content-1">
            <h3>Personal</h3>
            <div class="content-1-1">
                <p>Profile</p>
                <i class="ri-arrow-right-s-line"></i>
            </div>

            <div class="content-1-1">
                <p>Shipping Address</p>
                <i class="ri-arrow-right-s-line"></i>
            </div>

            <div class="content-1-1">
                <p>Payment methods</p>
                <i class="ri-arrow-right-s-line"></i>
            </div>
        </div>

        <div class="content-2">
            <h3>Shop</h3>
            <div class="content-2-1">
                <p>Country</p>
                <div class="category"><p><?php echo $country; ?></p> <i class="ri-arrow-right-s-line"></i></div>
            </div>

            <div class="content-2-1">
                <p>Currency</p>
                <div class="category"><p><?php echo $currency; ?></p> <i class="ri-arrow-right-s-line"></i></div>
            </div>

            <div class="content-2-1">
                <p>Sizes</p>
                <div class="category"><p><?php echo $size; ?></p> <i class="ri-arrow-right-s-line"></i></div>
            </div>

            <div class="content-2-1">
                <p>Terms and Conditions</p>
                <i class="ri-arrow-right-s-line"></i>
            </div>
        </div>

        <div class="content-3">
            <h3>Account</h3>
            <div class="content-3-1">
                <p>Language</p>
                <div class="category"><p><?php echo $size; ?></p> <i class="ri-arrow-right-s-line"></i></div>
            </div>

            <div class="content-3-1">
                <p>About Slada</p>
                <i class="ri-arrow-right-s-line"></i>
            </div>
        </div>

        <div class="delete">Delete My Account</div>

        <div class="bottom">
            <div class="circle"><i class="ri-arrow-down-s-line"></i></div>
        </div>
    </div>
</body>
</html>