<?php
session_start();


$valid_name = "John";
$valid_password = "12345";


$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';


if ($name === $valid_name && $password === $valid_password) {
    $_SESSION['user'] = $name;
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION['user']) . "!</h2>";
    echo "<p>Login successful. Welcome.</p>";
    echo '<a href="logout.php">Logout</a>';
} else {
    echo "<h2>User not recognized!</h2>";
    echo "<p>Invalid username or password.</p>";
    echo '<a href="form.php">Go Back to Login</a>';
}
?>
