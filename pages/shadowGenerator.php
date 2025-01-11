<?php
include '../src/app/auth.php';
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
    <link rel="stylesheet" href="/src/style/style.css">
    <link rel="stylesheet" href="/src/style/shadowGenerator.css">
    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>سایه ساز </title>
</head>

<body>
    <!------------------------- header ------------------------->
    <header>
        <!-- search-box -->
        <div class="search-box">
            <a href="#">
                <i class="material-symbols-outlined"></i>
                <input type="text" name="" id="" placeholder="جستجو">
            </a>
        </div>
        <!-- icons-menu -->
        <div class="icons-menu">
            <ul>
                <li><i class="material-symbols-outlined"></i></li>
                <li><i class="material-symbols-outlined"></i></li>
            </ul>
        </div>
    </header>
    <!------------------------- aside ------------------------->
    <aside>
        <!-- title-list -->
        <div class="title-list">
            Generation 8
        </div>
        <!-- list -->
        <div class="list">
            <ul>
                <li>
                    <a href="/pages/profile.php">
                        <span class="material-symbols-outlined">person </span>
                        <p>پروفایل</p>
                    </a>
                </li>
            </ul>
            <h6>برنامه ها و صفحات</h6>
            <ul>
                <li>
                    <a href="/pages/sortingAlgoritms.php"><span class="material-symbols-outlined"> </span>
                        مرتب سازی ارایه اعداد
                    </a>
                </li>
                <li>
                    <a href="/pages/bitcoin.php"><span class="material-symbols-outlined"> </span>
                        قیمت لحظه ای بیت کوین
                    </a>
                </li>
                <li>
                    <a href="/pages/shadowGenerator.php"><span class="material-symbols-outlined"> </span>
                        سایه ساز
                    </a>
                </li>
            </ul>
            <h6>متفرقه</h6>
            <ul>
                <li>
                    <a href="#">
                        <span class="material-symbols-outlined">headset_mic</span>
                        پشتیبانی
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="material-symbols-outlined">description</span>
                        مستندات
                    </a>
                </li>
                <li>
                    <a href="/pages/developes.php">
                        <span class="material-symbols-outlined">code</span>
                        توسعه دهندگان
                    </a>
                </li>
            </ul>
        </div>

    </aside>
    <!------------------------- main ------------------------->
    <main>
        <div class="container">

            <!-- Address-bar -->
            <div class="Address-bar">
                <h2>سایه ساز</h2>
            </div>
            <div id="m1">
                <div class="container-m1">
                    <div class="result">
                        <div id="preview"></div>
                    </div>

                    <div class="settings">
                        <div class="range-wrapper">
                            <label for="x-shadow">Horizontal Shadow :</label>
                            <input type="range" id="x-shadow" min="-100" max="100" value="-6">
                        </div>
                        <div class="range-wrapper">
                            <label for="y-shadow">Vertical Shadow :</label>
                            <input type="range" id="y-shadow" min="-100" max="100" value="15">
                        </div>
                        <div class="range-wrapper">
                            <label for="blur-r">Blur Radius :</label>
                            <input type="range" id="blur-r" min="0" max="100" value="30">
                        </div>
                        <div class="range-wrapper">
                            <label for="spread-r">Spread Radius :</label>
                            <input type="range" id="spread-r" min="-50" max="50" value="6">
                        </div>
                        <div class="range-wrapper">
                            <label for="border-r">Border Radius :</label>
                            <input type="range" id="border-r" min="0" max="100" step="1" value="70">
                        </div>
                        <div class="range-wrapper">
                            <label for="shadow-opacity">Shadow Opacity :</label>
                            <input type="range" id="shadow-opacity" min="0" max="1" step="0.1" value="0.5">
                        </div>

                        <div class="input-wrapper">
                            <label for="inset-shadow">Inset Shadow :</label>
                            <input type="checkbox" id="inset-shadow">
                        </div>

                        <div id="color-wrapper">
                            <label for="shadow-color">Shadow Color :</label>
                            <input type="color" id="shadow-color">
                        </div>

                    </div>


                    <div class="code-container">
                        <textarea id="styles" rows="2"></textarea>
                        <button id="copy-styles" onclick="copyStyles()">Copy Styles</button>
                    </div>


                </div>
            </div>


    </main>
    <div class="footer">
        <p> طراحی شده با ❤️ ارائه شده در تیم<a> Generation 8 </a></p>
    </div>
    <script type="module" src="/src/scripts/main.ts"></script>
    <script src="/src/scripts/shadow generator/genaretor.js"></script>
</body>

</html>