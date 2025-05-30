<?php
// Step 1: Connect to the database
$servername = "localhost";  // Change if not localhost
$username = "root";         // Your DB username
$password = "";             // Your DB password
$dbname = "user";  // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Get input from form
$user = $_POST['username'];
$pass = $_POST['password'];

// Step 3: Query to check credentials
$sql = "SELECT * FROM Reg_User WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);

// Step 4: Process result
if ($result->num_rows > 0) {
    echo "Login Successful. Welcome, " . $user . "!";
    // You can redirect to a dashboard here using: header("Location: dashboard.php");
} else {
    echo "<script>alert('Invalid username or password.'); window.location.href='LogIn.html';</script>";
}

$conn->close();
?>
