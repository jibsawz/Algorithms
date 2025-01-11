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
            }, 2000);
        }
        redirectToPreviousPage();
    </script>
</body>

</html>