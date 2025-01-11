<?php
include '../db.php';
include '../previousPage.php';
$error = '';


// Getting input values from signup.html
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
    $password = $_POST['password'];
// Validations : 
    if (empty($fullName) || empty($phone) || empty($password)) {
        $error = "لطفاً همه فیلدها را پر کنید.";
    } elseif (!preg_match('/^[0-9]{11}$/', $phone)) {
        $error = "شماره موبایل نامعتبر است.";
    } elseif (strlen($password) < 6) {
        $error = "رمز عبور باید حداقل 6 کاراکتر باشد.";
    } else {
        // Inserting into database
        $stmt = $conn->prepare("INSERT INTO users (fullName, phone, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fullName, $phone, $password);
        // Going to login.html
        if ($stmt->execute()) {
            header("Location: ../../../pages/login.html");
            exit();
        } else {
            $error = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
// Printing The error
if (!empty($error)): ?>
    <p class="error"><?php echo $error; ?></p>
<?php endif; ?>
