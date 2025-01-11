<?php
session_start();
include '../db.php';
include '../previousPage.php';
// Getting input valeus from login.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    // Cheking matching phone and password from database
    if (!empty($phone) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE phone = ?");
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $stored_password);
            $stmt->fetch();
            // If user exists session will be saved and user will go to profile.php tab
            if ($password == $stored_password) {
                $_SESSION['user_id'] = $id;
                header("Location: ../../../pages/profile.php");
                exit();
                //  Some Validations
            } else {
                $error = "رمز عبور اشتباه است.";
            }
        } else {
            $error = "شماره موبایل یافت نشد.";
        }
        $stmt->close();
    } else {
        $error = "لطفاً همه فیلدها را پر کنید.";
    }
}
// Printing The error
if (!empty($error)): ?>
    <p class="error"><?php echo $error; ?></p>
<?php endif; ?>
