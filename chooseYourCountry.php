<?php
include './connection/dbconnect.php';
$user_id = $_SESSION['user_id'];
//$user_id = $_SESSION['user_id'] ?? 1; // Default to 1 if not set for testing purposes

$current_country = '';
$stmt = $conn->prepare("SELECT country FROM country WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($current_country);
$stmt->fetch();
$stmt->close();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $country = $_POST['country'];

    $stmt = $conn->prepare("UPDATE country SET country = ? WHERE user_id = ?");
    $stmt->bind_param("si", $country, $user_id);

    if ($stmt->execute()) {
        echo "Country updated successfully";
    } else {
        echo "Error updating country: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/chooseYourCountry.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <div class="content">
       <div class="content-1">
        <h2>Settings</h2>
        <h3>Country</h3>
       </div>
        <div class="content-2">
            <p><?php echo htmlspecialchars($current_country); ?></p>
            <i class="ri-verified-badge-fill"></i>
        </div>

        <div class="country">
            <div class="country-1"><h3>A</h3></div>
            <div class="country-2">
                <p onclick="updateCountry('Afghanistan')">Afghanistan</p>
                <p onclick="updateCountry('Albania')">Albania</p>
                <p onclick="updateCountry('Algeria')">Algeria</p>
                <p onclick="updateCountry('Andorra')">Andorra</p>
                <p onclick="updateCountry('Angola')">Angola</p>
                <p onclick="updateCountry('Antigua and Barbuda')">Antigua and Barbuda</p>
                <p onclick="updateCountry('Argentina')">Argentina</p>
                <p onclick="updateCountry('Armenia')">Armenia</p>
                <p onclick="updateCountry('Aruba')">Aruba</p>
                <p onclick="updateCountry('Austria')">Austria</p>
            </div>

            <div class="country-1"><h3>B</h3></div>
            <div class="country-2">
                <p onclick="updateCountry('Bahamas')">Bahamas</p>
                <p onclick="updateCountry('Bahrain')">Bahrain</p>
                <p onclick="updateCountry('Bangladesh')">Bangladesh</p>
                <p onclick="updateCountry('Barbados')">Barbados</p>
                <p onclick="updateCountry('Belarus')">Belarus</p>
                <p onclick="updateCountry('Belgium')">Belgium</p>
                <p onclick="updateCountry('Belize')">Belize</p>
                <p onclick="updateCountry('Benin')">Benin</p>
                <p onclick="updateCountry('Bhutan')">Bhutan</p>
                <p onclick="updateCountry('Bolivia')">Bolivia</p>
                <p onclick="updateCountry('Bosnia and Herzegovina')">Bosnia and Herzegovina</p>
            </div>
        </div>
    </div>

    <script>
        const countryList = document.querySelectorAll('.country-2 p');
        countryList.forEach(country => {
            country.addEventListener('click', () => {
                const countryName = country.textContent;
                document.querySelector('.content-2 p').textContent = countryName;
                updateCountry(countryName);
            });
        });

        function updateCountry(country) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", window.location.href, true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log("Country updated to " + country);
                }
            };
            xhr.send("country=" + encodeURIComponent(country));
        }
    </script>
</body>
</html>
