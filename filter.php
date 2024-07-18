<?php
include './connection/dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];
//$user_id = $_SESSION['user_id'] ?? 1; // Default to 1 if not set for testing purposes
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style/filter.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="topic">
            <h2>Filter</h2>
            <i class="ri-close-line"></i>
        </div>

        <div class="items">
            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/8fde/1dd4/694209a582e512582dbd19cc2b269514?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y7mYfuPvGgcFdh-v~zuhLVLF4rLjRohC9bZl~RKwsdLC0VjJ1-x59v7rhbRLFSGkzHeo4lmWlSDuy1fE1MVcA2MOSCFNaMt26qfSzFcKwK8I2u-Q-qJoVrxSkMZ5BuZryM1UQ-QpiCw1YSBCIaY4Cvlbw0g89k0b0CevZYrJLwdLsxQiXnX27osqSjTsnOBZBGujLIQGJOMqRDXSQSNROQq2XIn~cpnc8AiK9KfJ7pMk2xkGHcthOgZDixYuJbqQhBa7s6Z9hTHhPVHsZsp92124L5dUZDMp6LkJ58dUMVW42-l4bzOnKHCouGmUygh-I9-biZwbUoCc28TvKSq3WA__"
                        alt="">

                </div>
                <p>Dresses</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/52ae/8857/5366536edaf5453f302359d4c315bcec?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=o8dwzG8iu0ZsSgJnjlXPhKLoc1vw65oUm4UkVnhx6RNKWqcppdB5P9f3IfmMiNYGIgrzy3F7gRqRJy047whUIsdOOITLWIIBlbRbIOvdsBiNhSfErcXcxS2K4mFvP1CE9tcKw9c9iLhbbPCPaPUHp4KPvyqZmNLwg7938THKfzp362yiziTffVWdS90R4QnAgykATD01Ypn2X9N2-di~cRgYQfKfrOBR7vQR-Bv4KM~1x6XLJ6JGSjboFfzjc3r7KxERpPD2qRXwfzAQIYLNmMliB7c6MxteV8vpir86rASa~P0eYnJQPYgXhgMRr1XiUrIj9FB-St-k~s1XnwcWqw__"
                        alt="">

                </div>
                <p>Pants</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/a945/864c/13a0aa18addc2843265e22138c9a4395?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=CAEnoleSqSr6x-~v9TofYc3s1tAngJN~TgRft7lrsYnJb4T2HuLgkiC1RHdbzoPlv-G814siheFSiyvsRZ3mFSpAHHyDwLI4Zvp60Qh01rUgkfMQNXCh21lChL50uQOA8dGbsD09YWMlqwEI2VbAguwlKSUS2VWnZyMTpnE0WkVI39Ja5vKG9lbzHwKkel1VnCrgCBMEElNFAmytQxkapRuWsNJJu3p82RR4ubLGUAhqdAmeRJBdAlg2t2eW~A20X5mw8AcbPVIGRW9aC5EX20P86n9~bsYmJB2lWnd11ZHAlYJ3RziG6MyAZrlTJ3s57ER0aQ5obCXISexUAhGEKg__"
                        alt="">

                </div>
                <p>Skirts</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/991d/8877/42cbc5607a00b934ce15f45148471e12?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=lLowG704WGYuMRPU0jO~b81Zs6ouAV8LiwpsqqQ0zVyuWUcbNRiuGILsAWd5rm~hcAHtPqD~k2W9Jo8FA4fJTW4-55KAgJHUArbB7Nr8JUaODtqw-c3myVTDcI76FP9Wc78samvXpyp9VSq0NfyeFaWSSNsop2MnQHxCnpWIfBN2mKVrFfA8mA8ibXM3ZuiRzKpOFTiBGnyX4H0j~ssfb4ri2tHi~0ZumfMfDUQTIHFnRPAiYtqZy6VKm26w5Caq2lV2MSm9ZeMEfCaBXpM2tiMIMOqsz~Vi~C5bZoccgk4IDXoqHj4Wp81E~K1rpnjNxX6JLwXpYFBMCs39BNjnFA__"
                        alt="">

                </div>
                <p>Shorts</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/454d/fbe2/1049ef4bcfed9c28d83d036e575f0bdf?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=UioKAx6OFQgAxBbEWCPAqbrxj-ZmJh8fqPttXczmasDWL5sVxjxcmTCBSchCmewFaOU9x~MeNKiyVbTDYcaf0O9lMWKXX6yJOteaE-aewdcZu1TNroGfUjgzzGRBJRjdVhWNwB70UPVR5CDYcOQRMfiz2u~RODpXbvmCEZWeU-eNrKV2-TJAo0U3R76lGu~l4hwWPvOT9q8ZyP3njIuLpibw1wdUyji4vsfrjO0gQ0raLoFeHNCJJfNGpF-byFVROWcJVyIB0p5pY9iKW9E3bjMJ~ui6P1NKBw8K~IwtWcGKIV~mi0WwgWd0fmCYAgmpseKh2xT2ozTfV1tu0I2bng__"
                        alt="">

                </div>
                <p>Jackets</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/e956/362e/01bf5676cde2501214a503e9aed8704b?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ZjAZhKgcG1NG~tGwCCD-efLMVYclJiU4aiJbQW~YZtggEbgGWuqnKgkHNZDhR0fUQI~YscchFiT1MGpZxAsHjuztvf1Rk1ydH2zxMv5TE5VpBgsNETbpeXr9Wws7rtrMzfTHIKW3VBz4KRuU82bUUr0-yXg8qwMD4PqsOXI1nZz3wq6Hn77npzwQ5yYmWO0C1uyRVY0dAyUckliH8ZwAKSQ~Q0d1nVjeahor01oE3RZ2AE--oINeu1ruCBVhgxwvshwe2i34AJUKf1Dy8DmgoA8jXSP7gGtlLmuCipOKoIANMelhyrGw7QCHtAX4TW0tVG3pvJeINT4j7zre7fKseA__"
                        alt="">

                </div>
                <p>Hoodies</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/d54a/3038/b3fda3b0bab62a2c050261af3482fd6e?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MadXozIpd5KlmSoszCstjGd751QMxIgGqlvLWUfNM5RssokqWQ9NtKvdggYPJB1HDo0LRqqcJm23bLMUPCHR-9tI8cfHhmV03aLUNYebcHGHTFHkv5doOTOip0wjSKIrLwhrBvHoWZItRkgaIfdR-yHIQBSPY2r6Yon~HSCAM0TRofi1iGLqsC0ZvQD4Li8-5hQ4k1FzzGJVUOuNYjzUckk2oorIPfhAnNdWW41Amg97V4RTS8l5C2T8lenLggRUzEAL~aFwbMWxzOMax8pk04KaVo7LY5DWMi4vavsPGW6pe8~eEY~WD8b5N14CS0oVFW0Lk~6OQt8IcNy4cIwJiA__"
                        alt="">

                </div>
                <p>Shirts</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/cc41/14d5/27454b7282c49edc81b76bb6c1314605?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=NbjURF0QJnv-f0MNuB55fYl601~SgQgZP3w6LEUjh1xwRe2b8-a2g3GpLe5igIo1uRX4uAPQj0Xtt-TN5fz4ph5lYl1Hv-ajel23k0ZbxqmniOXeeTMk1YhRDxJ9OK-Of96hmhfiDLhyMioPCXWz2Rzjbq3oMsUyMwP8tXaHfq~42YwuSvySUazyCU-gTmmeIYqDaSqD-PZPJrnNSoVP1x1nwbx0BoaH~Zsifv9lR2GzbBS6-GM8fOkw-pBoTk~u2rYx4TVW4U0crmxkomncyOCXlnkCmJxmX5pafoPA9QAhgWMVXfUwzWkI4rxmlI4T6lgpLo1~WPgJFYqYRLC-4w__"
                        alt="">

                </div>
                <p>Polo</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/4e98/1e1f/88e55c19ce1aa419a238dff4dd3d7ee9?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Wt4k3CLfD4xMfAUOLAUR1zSTjPWTDScm3s6gym70964u~xoS9y4WhZLBrL5cW8d5KHEUSafV0NY76TWt5NCpTNXb0SbjdvIVK78~dKCL7yuyZIB7SZ0Fh~BQg-NXUYKe9XTRJfTu1JAe2BrFHp4ILfM6YeJ5GlripcfWSCLDZYdcdtkG-7CQxuQX0o8UgAQe3x9pGHlodIbFOJ5~NZfnc~S-t1wOytvObIjMRHD4nQJdOZmYl7uPwcx6JrPSVGuOWabaP9ATA9YwP64BfjsqzifmvK2XXWaRq-iRi69ARrFnT4xfnXCeFiiLgTkFqIcTWmCYtboSg0ER9DAYru-XtQ__"
                        alt="">

                </div>
                <p>T-Shirts</p>
            </div>

            <div class="item-1">
                <div class="item-1-1">
                    <i class="ri-verified-badge-fill"></i>
                    <img src="https://s3-alpha-sig.figma.com/img/39a9/4b6c/b66665a43b8e7d98053af3ed69d2469a?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=hqnJ6Roj9ftY7QdBVtNVKR8kc8yY3jsTIZ6t3V~d8GdgZ0UJguN2rCTOZMzH8tokvofe7gAYF-3Yb7fLRPA3XFdRaQwAyZTEeh94fRbN8cVzTL7YU7j~z~ske~nnMpMzaIKmB9hxZe79tDiTxWspwjwsfmZhQXtB~ulRJa~hlrw-gdOP9I0bUuXkASLIeN68vzT1Pn33M3OYx7wYCHhIPaIN5Cl3RDTI9~eMtKUFfp1cyYvC5mvZnDyOHz3cjL9ll-HQpi9k4-ptV9WmP~TZ~2d~~elWC3-~qpsR6fYWXDR61WXUzYDzRaGy8JXPdICmiexMIDMTmQq7PsgDhRCgPA__"
                        alt="">

                </div>
                <p>Tunics</p>
            </div>
        </div>

        <div class="size-color">
            <div class="size">
                <div class="size-1">
                    <div class="size-1-1">
                        <h4>Size</h4>
                    </div>
                    <div class="size-1-2">
                        <button>Clothes</button>
                        <button>Shoes</button>
                    </div>
                </div>

                <div class="size-2">
                    <div class="size-2-1">
                        <p>XS</p>
                    </div>
                    <div class="size-2-1">
                        <p>S</p>
                    </div>
                    <div class="size-2-1">
                        <p>M</p>
                    </div>
                    <div class="size-2-1">
                        <p>L</p>
                    </div>
                    <div class="size-2-1">
                        <p>XL</p>
                    </div>
                    <div class="size-2-1">
                        <p>XXL</p>
                    </div>
                </div>
            </div>

            <div class="color">
                <div class="color-1">
                    <h4>Color</h4>
                </div>

                <div class="color-2">
                    <div class="color-2-1"><i class="ri-verified-badge-fill"></i>
                        <div class="ash"></div>
                    </div>
                    <div class="color-2-1"><i class="ri-verified-badge-fill"></i>
                        <div class="black"></div>
                    </div>
                    <div class="color-2-1"><i class="ri-verified-badge-fill"></i>
                        <div class="blue"></div>
                    </div>
                    <div class="color-2-1"><i class="ri-verified-badge-fill"></i>
                        <div class="red"></div>
                    </div>
                    <div class="color-2-1"><i class="ri-verified-badge-fill"></i>
                        <div class="sea-blue"></div>
                    </div>
                    <div class="color-2-1"><i class="ri-verified-badge-fill"></i>
                        <div class="gold"></div>
                    </div>
                    <div class="color-2-1"><i class="ri-verified-badge-fill"></i>
                        <div class="pink"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price-buttons">
            <div class="price">
                <div class="price-1">
                    <div class="price-1-1">
                        <h4>Price</h4>
                    </div>
                    <div class="price-1-2">
                        <p><span>$</span>10 - <span>$</span>150</p>
                    </div>
                </div>

                <div class="price-2">
                    <div class="price-2-1">
                        <div class="price-2-1-1" id="min-handle"></div>
                        <div class="price-2-1-2" id="selected-range"></div>
                        <div class="price-2-1-3" id="max-handle"></div>
                    </div>
                </div>
            </div>

            <div class="buttons">
                <div class="buttons-1"><i class="ri-verified-badge-fill"></i><button>Popular</button></div>
                <div class="buttons-1"><i class="ri-verified-badge-fill"></i><button>Newest</button></div>
                <div class="buttons-1"><i class="ri-verified-badge-fill"></i><button>Price High to Low</button></div>
                <div class="buttons-1"><i class="ri-verified-badge-fill"></i><button>Price Low to High</button></div>
            </div>
        </div>

        <form id="filterForm" action="result.php" method="GET">
            <input type="hidden" name="selectedItems" id="selectedItems" value="">
            <input type="hidden" name="selectedColors" id="selectedColors" value="">
            <input type="hidden" name="selectedSizes" id="selectedSizes" value="">
            <input type="hidden" name="selectedSort" id="selectedSort" value="">
            <input type="hidden" name="priceRange" id="priceRange" value="">
            <div class="btn">
                <button type="button" onclick="clearFilters()">Clear</button>
                <button type="submit" onclick="applyFilters()">Apply</button>
            </div>
        </form>
    </div>


    <script>
        let select1 = document.querySelectorAll(".item-1-1");

        for (let i = 0; i < select1.length; i++) {

            select1[i].addEventListener("click", function () {
                let res1 = document.querySelectorAll(".item-1-1 i");
                res1[i].classList.toggle("active");

            })
        }

        let select2 = document.querySelectorAll(".color-2-1");

        for (let i = 0; i < select2.length; i++) {

            select2[i].addEventListener("click", function () {
                let res2 = document.querySelectorAll(".color-2-1 i");
                res2[i].classList.toggle("active");

            })
        }

        let select3 = document.querySelectorAll(".buttons-1 button");

        for (let i = 0; i < select3.length; i++) {

            select3[i].addEventListener("click", function () {
                let res3 = document.querySelectorAll(".buttons-1 i");
                res3[i].classList.toggle("active");

            })
        }

        let select4 = document.querySelectorAll(".size-2-1 p");

        for (let i = 0; i < select4.length; i++) {

            select4[i].addEventListener("click", function () {
                let res4 = document.querySelectorAll(".size-2-1");
                res4[i].classList.toggle("active");

            })
        }

        function applyFilters() {
            let selectedItems = [];
            let selectedColors = [];
            let selectedSizes = [];
            let selectedSort = [];
            let selectedPrice = '';

            document.querySelectorAll(".item-1-1 i.active").forEach((element) => {
                selectedItems.push(element.parentElement.nextElementSibling.innerText);
            });

            document.querySelectorAll(".color-2-1 i.active").forEach((element) => {
                selectedColors.push(element.nextElementSibling.className);
            });

            document.querySelectorAll(".size-2-1.active p").forEach((element) => {
                selectedSizes.push(element.innerText);
            });

            document.querySelectorAll(".buttons-1 i.active").forEach((element) => {
                selectedSort.push(element.nextElementSibling.innerText);
            });

            selectedPrice = document.querySelector(".price-1-2 p").innerText;

            document.getElementById("selectedItems").value = selectedItems.join(",");
            document.getElementById("selectedColors").value = selectedColors.join(",");
            document.getElementById("selectedSizes").value = selectedSizes.join(",");
            document.getElementById("selectedSort").value = selectedSort.join(",");
            document.getElementById("priceRange").value = selectedPrice;
        }

        function clearFilters() {
            document.querySelectorAll(".active").forEach((element) => {
                element.classList.remove("active");
            });
            document.getElementById("selectedItems").value = '';
            document.getElementById("selectedColors").value = '';
            document.getElementById("selectedSizes").value = '';
            document.getElementById("selectedSort").value = '';
            document.getElementById("priceRange").value = '';

            document.querySelector(".price-1-2 p").innerText = '$10 - $150';
        }



        document.addEventListener('DOMContentLoaded', function () {
            const minHandle = document.getElementById('min-handle');
            const maxHandle = document.getElementById('max-handle');
            const selectedRange = document.getElementById('selected-range');
            const priceDisplay = document.querySelector('.price-1-2 p');
            const slider = document.querySelector('.price-2-1');
            const sliderWidth = slider.offsetWidth;

            let min = 0;
            let max = 150;
            let minValue = 0;
            let maxValue = 150;
            let isDraggingMin = false;
            let isDraggingMax = false;

            function updateRange() {
                const minLeft = parseFloat(minHandle.style.left || 0);
                const maxLeft = parseFloat(maxHandle.style.left || 0);
                selectedRange.style.left = `${minLeft}px`;
                selectedRange.style.width = `${maxLeft - minLeft}px`;
                const minPrice = Math.round((minLeft / sliderWidth) * (max - min)) + minValue;
                const maxPrice = Math.round((maxLeft / sliderWidth) * (max - min)) + minValue;
                priceDisplay.innerText = `$${minPrice} - $${maxPrice}`;
            }

            function startDrag(e, handle) {
                e.preventDefault();
                if (handle === minHandle) isDraggingMin = true;
                if (handle === maxHandle) isDraggingMax = true;
                document.addEventListener('mousemove', onDrag);
                document.addEventListener('mouseup', stopDrag);
            }

            function onDrag(e) {
                const rect = slider.getBoundingClientRect();
                let left = e.clientX - rect.left;
                left = Math.max(0, Math.min(left, sliderWidth));

                if (isDraggingMin) {
                    if (left < parseFloat(maxHandle.style.left || sliderWidth)) {
                        minHandle.style.left = `${left}px`;
                        updateRange();
                    }
                }

                if (isDraggingMax) {
                    if (left > parseFloat(minHandle.style.left || 0)) {
                        maxHandle.style.left = `${left}px`;
                        updateRange();
                    }
                }
            }

            function stopDrag() {
                isDraggingMin = false;
                isDraggingMax = false;
                document.removeEventListener('mousemove', onDrag);
                document.removeEventListener('mouseup', stopDrag);
            }

            minHandle.addEventListener('mousedown', (e) => startDrag(e, minHandle));
            maxHandle.addEventListener('mousedown', (e) => startDrag(e, maxHandle));
        });
    </script>
</body>

</html>