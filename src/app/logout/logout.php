<?php
// Logout section
session_start();
session_destroy();
header("Location: ../../../pages/login.html");
exit();