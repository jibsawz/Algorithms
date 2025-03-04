<?php
session_start();
include '../src/app/db.php';
include '../src/app/auth.php'; 
// Cheking the identity of the user
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT fullName, phone, role FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($fullName, $phone, $role);
$stmt->fetch();
$stmt->close();
// if he has admin role he can see all datas from db
if ($role === 'admin') {
    $stmt = $conn->prepare("SELECT fullName, phone , password , role FROM users");
    $stmt->execute();
    $stmt->bind_result($allFullName, $allPhone, $allPaswords,$allRoles);
    $users = [];
    while ($stmt->fetch()) {
        $users[] = ['fullName' => $allFullName, 'phone' => $allPhone , 'password' => $allPaswords , 'role' => $allRoles];
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <!-- meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- links -->
  <link rel="stylesheet" href="/src/style/style.css">
  <!-- icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>پروفایل </title>
</head>

<body>
  <!------------------------- header ------------------------->
  <header>
    
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
        <h2>پروفایل</h2>
      </div>
      <div class="profile-card">
        <h1>پروفایل کاربر</h1>
        <p>نام و نام خانوادگی: <?php echo htmlspecialchars($fullName); ?></p>
        <p>شماره موبایل: <?php echo htmlspecialchars($phone); ?></p>
        <a href="../src/app/logout/logout.php">خروج</a>
    </div>
    <?php if ($role === 'admin'): ?>
        <div class="admin-section">
            <h2>لیست کاربران</h2>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li><?php echo htmlspecialchars($user['fullName']) . ' - ' . htmlspecialchars($user['phone']) . ' - ' . htmlspecialchars($user['password']) . ' - ' . htmlspecialchars($user['role']) ; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    </main>
    <div class="footer">
        <p> طراحی شده با ❤️ ارائه شده در تیم<a> Generation 8 </a></p>
    </div>
    <script type="module" src="/src/scripts/main.ts"></script>
</body>

</html>