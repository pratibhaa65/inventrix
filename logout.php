<?php
session_start();
session_unset();
session_destroy();

$_SESSION['success'] = "Logged out successfully.";
header("Location: index.php");
exit();
?>