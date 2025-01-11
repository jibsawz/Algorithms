<?php
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        function redirectToPreviousPage() {
            setTimeout(function () {
                window.history.back();
<<<<<<< Updated upstream
            }, 2000);
=======
            }, 2000); // 5000 میلی‌ثانیه = 5 ثانیه
>>>>>>> Stashed changes
        }
        redirectToPreviousPage();
    </script>
</body>

</html>