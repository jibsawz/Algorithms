<?php 
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    if (isset($_POST['fullName']) && isset($_POST['phone']) && isset($_POST['password'])) {
        $fullName = $_POST['fullName'];
        $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
        $password = $_POST['password'];

        if (!empty($fullName) && !empty($phone) && !empty($password)) {
            $stmt = $conn->prepare("INSERT INTO users (fullName, phone, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $fullName, $phone, $password);

            if ($stmt->execute()) {
                header(header: "Location: ../../../pages/login.html");
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "All fields are required!";
        }
    } else {
        echo "Form data is missing!";
    }
}
