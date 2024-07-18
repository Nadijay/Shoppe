<?php
include './connection/dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];
//$user_id = $_SESSION['user_id'] ?? 1; // Default to 1 if not set for testing purposes


$sql = "SELECT title, description, date FROM announcements";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/profileToReceiveNotification.css">
    <link rel="stylesheet" href="./style/nav.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="" alt="Logo">
        </div>
        <ul class="nav-link">
            <li><a href="#Home"><img src="home-icon.png" alt="">Home</a></li>
            <li><a href="#wishlist"><img src="Heart-icon.png" alt="">Wishlist</a></li>
            <li><a href="#Categories"><img src="Categories-icon.png" alt="">Categories</a></li>
            <li><a href="#cart"><img src="cart-icon.png" alt="">Cart</a></li>
            <li><a href="#profile"><img src="User-icon.png" alt="">Profile</a></li>
        </ul>
    </div>
    <div class="right-section">
        <div class="profile-image">
            <img src="" alt="">
        <button class="activity-button">My Activity</button>
        </div>
    </div>
    </nav>

    <div class="profile">
        <div class="profile-img">
            <img src="https://s3-alpha-sig.figma.com/img/32b2/fed3/dd6e97ca36cbcbf5ca57596f7c6547d3?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=cyt-lGnRUaScJnGhZI8a~GT4Eia6VoLhkO-NWxR1H5p7J7~gZ4APUvIzRHYhl3MOEWPzGfMVXp1VJZVy0h6UWWJtZZ~9M1KYqHVeIdgT9MgvRj6KTSd~w94dyxedLmbbl3GQjnc0NFnT9TJFFsH~DQKfzmKMAxyRwDDFO4Rhn5DrYkwuhjfiUz5rfWnfwFDR~6Y8ysWhJondatm3caVy5nutFhAxBKiV9VDQ1sH7plOVizKp8Uz8bZ07vsPIuXdYUIiLS0jRBr9IlDPUh1uekxZARXRAORk0y3gv4et3Fi3F31l-BzFPy9y7t5wI9dIh11wKbnlW3zsDrTvwPcMr0g__" alt="">
        </div>
        <div class="profile-details">
            <h2>Hello, Amanda!</h2>
            <div class="announcement">
                <h3>Announcements</h3>
                <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<p>" . $row["description"] . "</p>";
            }
        } else {
            echo "No announcements found.";
        }
        $conn->close();
        ?>
                <button><i class="ri-arrow-right-line"></i></button>
            </div>
        </div>
    </div>

    <div class="recently-viewed">
        <h3>recently viewed</h3>
        <div class="recently-viewed-items">
            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/0a41/92cd/dfc715a39d328d71969353242251248e?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=YRlptMZQ288qKxPmdVSmt-jxYClTtIhJxsFN~0IiTTh0U85RlEfZDI~F90xXSv2rdiuoc2xrJl5x8a5SEIJ-muM9tuLkbmLPRpNnTpdh-4eZK6ZpC0z2em3oizaDsIUYp4sddSthFdOpWdFEGSiVcnK~1QwHeGkvrjfYlW03RGgQ6NLr5xeRM6GRcX2vwMA1JM6mbnuDZtYO0liQNw8QSGRET0x-HMV1bfKlBv1xyUa7WMX3x9rSQeevsFVBMNlazcHn5CRZW380maIPD3JD-p~qdbO5MjkUaIkyGuGvJFzfCdvlqhZFp~er2CgudgOuRYGUrooIyvyUTHtTywDMzA__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/1839/4337/441be8ec93bb43d7fd373d79c6adeeec?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=OKKITrSjLnqDoMU8Qs8X9BUBvTm2Qg~82qVe4dgAHgEeivcf~x~qeisRlDPFsJf0qCxnzH7Rgf13addGpGJWLTwPAOwN~ZhMSWXhaiXjgKahPdNi89ENFUIZKzHAAHo4DwDfS0U3CVX5~Yq~Q2h2iybMDqki~cA9AbLG7jWcdakD8Q4CAC-0KyufIotRSoNrsMeLzOgnlWxpGNJeDyD1PXOFqRhK6abRU8L3Bi4YjEz0GjI~KpqJQRQlSqsLXyRLMvhgCaSKwWRvAALzXGKc4x6cMI3rjfh36p3jTM6m5irJF5gUGhBBt3rinK1JETMn6OCjOLTKmubrwhtQAfWDSg__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/a59f/a349/ac198655fc26bb826bb389c550d33d9f?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=XZMT-7AwztpdkBESus-L1SPPOGf3YTs-XLj37brbboTUOdZLpbRBWt89FWgScLQy3G125LUdCAYtbdU317suuE60jD1SYzZQ~mVcp37W4GA47zsaggUH2mKJeaCQ-i8NLXBKMe5hlsVcTKl3u5tIk1S7Vv6NjFjsfLeaNhFJn1fhHGunSc99IU5wt94eM8gE812fr4sA0IWKJWjhyeKpA-d7e7tWMbbunvpP-6KEEt6ZXh~u7QQ5FdaobQveCsiNXV-EWcoCx1NJOJ1qhAJ25SfliC1BUtao-Dw2Q~K52d1RZQIPjcyTOMz9su46w0GoW-yd2oEGuc0UjxTUJdHhIQ__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/a83e/a946/c62c6f134effe41537b18c9db6256a82?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=axxKb47tNUkGY6B88M3kIDydvztRZElRJhxFKxwUdv0Hf-QbHk2RcYqEHRnJwVM~Xg1A2wUTrFJk5HPS1ONmDAxyHX4PNQpOLorBSuc8sczkik6n0fGV9UZnRh0CgPcHqIuiInm5OBDaMPF5g-23nU-nC6vve5CMwlarG4vvzr8Z-sB-mLN3WxfCOZPMSHCPO2ozXUIY08vjwlS0ISMdL8XWF442MdUFqQvixFgUav3612Tne250BXCOMyYpBgluUoOqoHOtP9SKAdCmXryCLT72lBqnZrkx433~U5FeoPUsRwj49pJ3WxKEeTJ9KVfrnpFh-tVIMpBN9SXBqzInJA__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/2735/3930/e7d78f58d556c1e7db3b90c000655b32?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=UAH~MTCywuwb-MXQ-Gy-FW~0v0PgeF8WhypACagpO~hglMf-zJyp40~pwWiws8TKCg6msdls~at6mrhyz3gqA2jczDirBSpDdELVsrMbZ-sypWyZlvx21725e3cS67wZ2Dsy3QqXalqN5VlUa9kAiBrxMZlcQkeTTPtoRhHeCMMUAiYDR8SzI0C7w7tKgmPmIdMEyrgiDSkbrQ3jyW3N19~B3M3qUJqOmPhVsMk7NhH8w8dczJ2QZBLvdZB2PvrWKTdfowk15aDQ5SWsJmPWrzKBbnn1Q~61WkVe7Ob-9QvQ55Q0CFzppHF4HUTCgIKayGdC7nhtn4-kkiPQM3-i7Q__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/0a41/92cd/dfc715a39d328d71969353242251248e?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=YRlptMZQ288qKxPmdVSmt-jxYClTtIhJxsFN~0IiTTh0U85RlEfZDI~F90xXSv2rdiuoc2xrJl5x8a5SEIJ-muM9tuLkbmLPRpNnTpdh-4eZK6ZpC0z2em3oizaDsIUYp4sddSthFdOpWdFEGSiVcnK~1QwHeGkvrjfYlW03RGgQ6NLr5xeRM6GRcX2vwMA1JM6mbnuDZtYO0liQNw8QSGRET0x-HMV1bfKlBv1xyUa7WMX3x9rSQeevsFVBMNlazcHn5CRZW380maIPD3JD-p~qdbO5MjkUaIkyGuGvJFzfCdvlqhZFp~er2CgudgOuRYGUrooIyvyUTHtTywDMzA__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/1839/4337/441be8ec93bb43d7fd373d79c6adeeec?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=OKKITrSjLnqDoMU8Qs8X9BUBvTm2Qg~82qVe4dgAHgEeivcf~x~qeisRlDPFsJf0qCxnzH7Rgf13addGpGJWLTwPAOwN~ZhMSWXhaiXjgKahPdNi89ENFUIZKzHAAHo4DwDfS0U3CVX5~Yq~Q2h2iybMDqki~cA9AbLG7jWcdakD8Q4CAC-0KyufIotRSoNrsMeLzOgnlWxpGNJeDyD1PXOFqRhK6abRU8L3Bi4YjEz0GjI~KpqJQRQlSqsLXyRLMvhgCaSKwWRvAALzXGKc4x6cMI3rjfh36p3jTM6m5irJF5gUGhBBt3rinK1JETMn6OCjOLTKmubrwhtQAfWDSg__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/a59f/a349/ac198655fc26bb826bb389c550d33d9f?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=XZMT-7AwztpdkBESus-L1SPPOGf3YTs-XLj37brbboTUOdZLpbRBWt89FWgScLQy3G125LUdCAYtbdU317suuE60jD1SYzZQ~mVcp37W4GA47zsaggUH2mKJeaCQ-i8NLXBKMe5hlsVcTKl3u5tIk1S7Vv6NjFjsfLeaNhFJn1fhHGunSc99IU5wt94eM8gE812fr4sA0IWKJWjhyeKpA-d7e7tWMbbunvpP-6KEEt6ZXh~u7QQ5FdaobQveCsiNXV-EWcoCx1NJOJ1qhAJ25SfliC1BUtao-Dw2Q~K52d1RZQIPjcyTOMz9su46w0GoW-yd2oEGuc0UjxTUJdHhIQ__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/a83e/a946/c62c6f134effe41537b18c9db6256a82?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=axxKb47tNUkGY6B88M3kIDydvztRZElRJhxFKxwUdv0Hf-QbHk2RcYqEHRnJwVM~Xg1A2wUTrFJk5HPS1ONmDAxyHX4PNQpOLorBSuc8sczkik6n0fGV9UZnRh0CgPcHqIuiInm5OBDaMPF5g-23nU-nC6vve5CMwlarG4vvzr8Z-sB-mLN3WxfCOZPMSHCPO2ozXUIY08vjwlS0ISMdL8XWF442MdUFqQvixFgUav3612Tne250BXCOMyYpBgluUoOqoHOtP9SKAdCmXryCLT72lBqnZrkx433~U5FeoPUsRwj49pJ3WxKEeTJ9KVfrnpFh-tVIMpBN9SXBqzInJA__" alt="">
            </div>

            <div class="item">
                <img src="https://s3-alpha-sig.figma.com/img/2735/3930/e7d78f58d556c1e7db3b90c000655b32?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=UAH~MTCywuwb-MXQ-Gy-FW~0v0PgeF8WhypACagpO~hglMf-zJyp40~pwWiws8TKCg6msdls~at6mrhyz3gqA2jczDirBSpDdELVsrMbZ-sypWyZlvx21725e3cS67wZ2Dsy3QqXalqN5VlUa9kAiBrxMZlcQkeTTPtoRhHeCMMUAiYDR8SzI0C7w7tKgmPmIdMEyrgiDSkbrQ3jyW3N19~B3M3qUJqOmPhVsMk7NhH8w8dczJ2QZBLvdZB2PvrWKTdfowk15aDQ5SWsJmPWrzKBbnn1Q~61WkVe7Ob-9QvQ55Q0CFzppHF4HUTCgIKayGdC7nhtn4-kkiPQM3-i7Q__" alt="">
            </div>
        </div>
    </div>
    <div class="my-orders-0">
        <h3>My Orders</h3>
        <div class="my-orders">
            <div class="btn"><button>To Pay</button></div>
            <div class="btn"><button>To Recieve</button><div class="circle"></div></div>
            <div class="btn"><button>To Review</button></div>
        </div>
    </div>

    <div class="stories">
        <h3>Stories</h3>
        <div class="items">
            <div class="items-1">
                <img src="https://s3-alpha-sig.figma.com/img/c9d5/52f9/ae0e0e2fca6d47ea4a77c7b3c7af5929?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=E~vgH42OEzqitiMHOx-R5RfHnibMTN2nnyuSr~K8pNt9yPqU38oRV-ke0C8IFu-NtnnBjK0c8eGi4FolEFPAOg4X~ytzkVjdyQgESdI-73BP56fNRZg9lqpimo06w1s78tBy7Gzq3SfZgjwWVDMmlfq0iZfYwgvpvd0eLciyV8gWo6T~EFHALxHRrq6cgEhKnHuImSpbCtRI1Vf7vK00YSNrPm3n4nL5afGLiyDIIsz2Oh6qjggj6ScMD52SEHMqCmAzUqopp1Gym4hS3U3itz79Whxj5OChB2XKblzeqf-PSjybOKa5Q2f8bGQqMfPQgV8gqXGf3GRAtyh4zid7fQ__" alt="">
            </div>
            <div class="items-1">
                <img src="https://s3-alpha-sig.figma.com/img/5c20/7bb4/21788ca6b8a82c20e2532463f6fb5f6a?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=plo8kdAgEy~rdqr1Hnj4Xxj9USw7oHShThE316gENfxQo0NRR4SlxI6RTSnvYNEkCmf18WORd8fJ5Jtwv5t0kunl6kQ-5ad5nYcGwKgZd6SHTrmTSkZO2d64fg9dNmlaT8ZErxb9m47oxnGn34f1wHFrmFLIoEedg8vFoNTFdO8BqOmVd6ujHyGlb4TsKuDXe0VXVflcRK5hI81P77AjTWYH2CAL8DNhScB2YdT7xLDa8AHeJTOclKu-ARDfVUFscgbys2Uq-Kc9hva7KbbR1XF~XGpW1d7udPqclsaOuhK0IGvaEJQdvjCCeieOOojRknsRqjhm-4ZR3g2ANMJooQ__" alt="">
            </div>
            <div class="items-1">
                <img src="https://s3-alpha-sig.figma.com/img/0f92/7313/fd27afa27ca1eb56190ae5462a749d4d?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=BljeSKZ~WK7FrH-3I~9o9ercvQa6s~BWYlbmoQK1M5vEf-87Vm7hA3nkm4oBolhBhDcZtewlNsPdL1zF3ExMjIwaPVNwpDp0Q99dUvfAjunA~PRIqdARqzoKaKgHp2UYaWs~Lip07mYApq3zFXevxpPt60bUgi7TyV6rS8t0MM-IrnHyYM856NXPw~ajPWCB6twVYRMgrWI9Fe1Dfsw7Iy-T9H0SemuO4C7v5kLyi2zHncN7mFJjhukmHRJgPFk3RFJysqXranu7Lra2gRjhMIzV086zFYXSHXz5mzKMb4iywJjESmv1T0x8uo0QS~zr0v7J0URWzD3qaGTkeBbf7g__" alt="">
            </div>
            <div class="items-1">
                <img src="https://s3-alpha-sig.figma.com/img/2f79/5eb6/d1915f15d70b1ca6466c06bfd313d6a7?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Qaaz6gx9iw1d55Dt60yIpPACs5Oy8NO~fzEs~67CGbFToBkPDQprHFql129kG6uvrHmMmbyCTAlrgPRun9g-1DYpYoCx0QU7CIS5LrJrnQ-OCjTLwE9VNTCRZFBDHRtGeJC44nI9f2K7E1unU285QUpZcWb2HpN9STD8UsuJruNYMJwl0QJfsmsRVEIG-aispG48LLLn~nfkW1T6bwQUUENJ7TCEd2ap5TdL9RAbU~5QD2u8kvB9ZjVfKaed2LjgoUrLt5EtR3p5ucatS5CID4yc9TL9joOH4mF90AtFbwJqgrmvDEqxWR5YIIw9aZxQ4tNTWfq5NMl1QF561nFCOw__" alt="">
            </div>
            <div class="items-1">
                <img src="https://s3-alpha-sig.figma.com/img/c9d5/52f9/ae0e0e2fca6d47ea4a77c7b3c7af5929?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=E~vgH42OEzqitiMHOx-R5RfHnibMTN2nnyuSr~K8pNt9yPqU38oRV-ke0C8IFu-NtnnBjK0c8eGi4FolEFPAOg4X~ytzkVjdyQgESdI-73BP56fNRZg9lqpimo06w1s78tBy7Gzq3SfZgjwWVDMmlfq0iZfYwgvpvd0eLciyV8gWo6T~EFHALxHRrq6cgEhKnHuImSpbCtRI1Vf7vK00YSNrPm3n4nL5afGLiyDIIsz2Oh6qjggj6ScMD52SEHMqCmAzUqopp1Gym4hS3U3itz79Whxj5OChB2XKblzeqf-PSjybOKa5Q2f8bGQqMfPQgV8gqXGf3GRAtyh4zid7fQ__" alt="">
            </div>
            <div class="items-1">
                <img src="https://s3-alpha-sig.figma.com/img/5c20/7bb4/21788ca6b8a82c20e2532463f6fb5f6a?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=plo8kdAgEy~rdqr1Hnj4Xxj9USw7oHShThE316gENfxQo0NRR4SlxI6RTSnvYNEkCmf18WORd8fJ5Jtwv5t0kunl6kQ-5ad5nYcGwKgZd6SHTrmTSkZO2d64fg9dNmlaT8ZErxb9m47oxnGn34f1wHFrmFLIoEedg8vFoNTFdO8BqOmVd6ujHyGlb4TsKuDXe0VXVflcRK5hI81P77AjTWYH2CAL8DNhScB2YdT7xLDa8AHeJTOclKu-ARDfVUFscgbys2Uq-Kc9hva7KbbR1XF~XGpW1d7udPqclsaOuhK0IGvaEJQdvjCCeieOOojRknsRqjhm-4ZR3g2ANMJooQ__" alt="">
            </div>
            <div class="items-1">
                <img src="https://s3-alpha-sig.figma.com/img/0f92/7313/fd27afa27ca1eb56190ae5462a749d4d?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=BljeSKZ~WK7FrH-3I~9o9ercvQa6s~BWYlbmoQK1M5vEf-87Vm7hA3nkm4oBolhBhDcZtewlNsPdL1zF3ExMjIwaPVNwpDp0Q99dUvfAjunA~PRIqdARqzoKaKgHp2UYaWs~Lip07mYApq3zFXevxpPt60bUgi7TyV6rS8t0MM-IrnHyYM856NXPw~ajPWCB6twVYRMgrWI9Fe1Dfsw7Iy-T9H0SemuO4C7v5kLyi2zHncN7mFJjhukmHRJgPFk3RFJysqXranu7Lra2gRjhMIzV086zFYXSHXz5mzKMb4iywJjESmv1T0x8uo0QS~zr0v7J0URWzD3qaGTkeBbf7g__" alt="">
            </div>
            <div class="items-1">
                <img src="https://s3-alpha-sig.figma.com/img/2f79/5eb6/d1915f15d70b1ca6466c06bfd313d6a7?Expires=1718582400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Qaaz6gx9iw1d55Dt60yIpPACs5Oy8NO~fzEs~67CGbFToBkPDQprHFql129kG6uvrHmMmbyCTAlrgPRun9g-1DYpYoCx0QU7CIS5LrJrnQ-OCjTLwE9VNTCRZFBDHRtGeJC44nI9f2K7E1unU285QUpZcWb2HpN9STD8UsuJruNYMJwl0QJfsmsRVEIG-aispG48LLLn~nfkW1T6bwQUUENJ7TCEd2ap5TdL9RAbU~5QD2u8kvB9ZjVfKaed2LjgoUrLt5EtR3p5ucatS5CID4yc9TL9joOH4mF90AtFbwJqgrmvDEqxWR5YIIw9aZxQ4tNTWfq5NMl1QF561nFCOw__" alt="">
            </div>
        </div>
    </div>
</body>
</html>