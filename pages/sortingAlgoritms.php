
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <!-- meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- links -->
  <link rel="stylesheet" href="/src/style/style.css">
  <link rel="stylesheet" href="/src/style/sorting.css">
  <!-- icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>مرتب سازی ارایه</title>
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
           <h2>مرتب سازی ارایه اعداد</h2>
      </div>
      <div id="gettingNumber">
        <div id="app">
            <div class="app-child">
                <div>
                    <div id="radioInput">
                
                    </div>
                    <div id="addingNum">
                        <input type="text">
                    </div>
                </div>
                <div>
                    <button id="addNumber">ثبت عدد</button>
                    <button id="sort">مرتب سازی</button>
                    <button id="reset">ریست</button>
                </div>
            </div>
            <div class="app-child">
                <h4>خروجی</h4>
                <div style="font-family: 'dirooz';" id="result">
                    برای شروع اعدادی وارد کنید
                </div>
            </div>
        </div>
      </div>
    </main>
    <div class="footer">
        <p> طراحی شده با ❤️ ارائه شده در تیم<a> Generation 8 </a></p>
    </div>
  <script type="module" src="./../src/scripts/algoritms/sorting.js"></script>
  <!-- <script type="module" src="/src/scripts/main.ts"></script> -->
</body>

</html>