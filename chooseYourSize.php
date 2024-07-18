<?php
include './connection/dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];
//$user_id = $_SESSION['user_id'] ?? 1; // Default to 1 if not set for testing purposes

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['size'])) {
    $size = $_POST['size'];


    $sql = "UPDATE size SET size = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $size, $user_id);

    if ($stmt->execute()) {
        echo "size updated successfully";
    } else {
        echo "Error updating size: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/chooseYourSize.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <div class="content">
       <div class="content-1">
        <h2>Settings</h2>
        <h3>Size</h3>
       </div>
        <div class="content-2" data-size="US">
            <p>US</p>
            <div class="icn"><i class="ri-verified-badge-fill"></i></div>
        </div>

        <div class="content-2" data-size="EU">
            <p>EU</p>
            <div class="icn"><i class="ri-verified-badge-fill"></i></div>
        </div>

        <div class="content-2" data-size="UK">
            <p>UK</p>
            <div class="icn"><i class="ri-verified-badge-fill"></i></div>
        </div>
    </div>

    <script>
        const currencyElements = document.querySelectorAll('.content-2');
        currencyElements.forEach(element => {
            element.addEventListener('click', function() {
                currencyElements.forEach(el => el.classList.remove('active'));
                this.classList.add('active');

                const size = this.getAttribute('data-size');
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);
                    } else {
                        console.error('Error updating size');
                    }
                };
                xhr.send('size=' + encodeURIComponent(size));
            });
        });
    </script>
</body>
</html>