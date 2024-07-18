<?php
include './connection/dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];
//$user_id = $_SESSION['user_id'] ?? 1; // Default to 1 if not set for testing purposes

// Fetch card details
$sql_card = "SELECT card_number, name, expire_date FROM card_details WHERE user_id = $user_id";
$result_card = $conn->query($sql_card);

if ($result_card->num_rows > 0) {
    $card = $result_card->fetch_assoc();
    $card_number = substr($card['card_number'], -4);
    $name = $card['name'];
    $expire_date = $card['expire_date'];
} else {
    $card_number = "N/A";
    $name = "N/A";
    $expire_date = "N/A";
}

$sql_orders = "SELECT date, order_id, price FROM order_history WHERE user_id = $user_id";
$result_orders = $conn->query($sql_orders);

$order_history = [];
if ($result_orders->num_rows > 0) {
    while ($order = $result_orders->fetch_assoc()) {
        $order_history[] = $order;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/paymentMethods+History.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <div class="content">
       <div class="content-1">
        <h2>Settings</h2>
        <h3>Payment Methods</h3>

        <div class="card">
            <div class="card-1">
                <div class="circle-0">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-2"></div>
                </div>
                <div class="circle-3">
                    <i class="ri-settings-5-line"></i>
                </div>
            </div>
            <div class="card-2">
                <p>* * * *</p>
                <p>* * * *</p>
                <p>* * * *</p>
                <p><?php echo $card_number; ?></p>
            </div>

            <div class="card-3">
                <p><?php echo $name; ?></p>
                <p>12/22</p>
            </div>
        </div>

        <div class="content-2">
            <i class="ri-add-line"></i>
        </div>

        <div class="content-3">
            <?php foreach ($order_history as $order): ?>
            <div class="item">
                <div class="item-1">
                    <div class="item-1-1"><i class="ri-handbag-fill"></i></div>
                    <div class="item-1-2">
                        <p><?php echo $order['date']; ?></p>
                        <h3>Order #<?php echo $order['order_id']; ?></h3>
                    </div>
                </div>
                <h3>-$<?php echo $order['price']; ?></h3>
            </div>
            <?php endforeach; ?>
        </div>
       </div>
    </div>
</body>
</html>