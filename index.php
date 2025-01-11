<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <!-- meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- links -->

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>Panel</title>
</head>

<body>
  <script type="module" src="./src/scripts/index.ts"></script>
</body>

</html>

<?php
session_start();
// Checking if user is logged in 
if (isset($_SESSION['user_id'])) {
  // if its logged in:
  header("Location: pages/profile.php");
  exit();
} else {
  // if its not logged in:
  header("Location: pages/login.html");
  exit();
}
?>