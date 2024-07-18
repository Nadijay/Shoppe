<?php
include './connection/dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];
//$user_id = $_SESSION['user_id'] ?? 1; // Default to 1 if not set for testing purposes

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['language'])) {
    $language = $_POST['language'];
    $sql = "UPDATE language SET language = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $language, $user_id);

    if ($stmt->execute()) {
        echo "Language updated successfully";
    } else {
        echo "Error updating language: " . $stmt->error;
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
    <link rel="stylesheet" href="./style/chooseYourLanguage.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <div class="content">
       <div class="content-1">
        <h2>Settings</h2>
        <h3>Language</h3>
       </div>
        <div class="content-2" data-language="English">
            <p>English</p>
            <div class="icn"><i class="ri-verified-badge-fill"></i></div>
        </div>

        <div class="content-2" data-language="Français">
            <p>Français</p>
            <div class="icn"><i class="ri-verified-badge-fill"></i></div>
        </div>

        <div class="content-2" data-language="Русский">
            <p>Русский</p>
            <div class="icn"><i class="ri-verified-badge-fill"></i></div>
        </div>

        <div class="content-2" data-language="Tiếng Việt">
            <p>Tiếng Việt</p>
            <div class="icn"><i class="ri-verified-badge-fill"></i></div>
        </div>
    </div>

    <script>
        const languageElements = document.querySelectorAll('.content-2');
        languageElements.forEach(element => {
            element.addEventListener('click', function() {
                languageElements.forEach(el => el.classList.remove('active'));
                this.classList.add('active');

                const language = this.getAttribute('data-language');
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);
                    } else {
                        console.error('Error updating language');
                    }
                };
                xhr.send('language=' + encodeURIComponent(language));
            });
        });
    </script>
</body>
</html>