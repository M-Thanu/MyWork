<?php
// Step 1: Connect to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Step 2: Check connection
if ($conn->connect_error) {
    die("<script>alert('Database connection failed!'); window.location.href='CreateProfile.html';</script>");
}

// Step 3: Get form input
$user = $_POST['username'];
$pass = $_POST['password'];
$confirm_pass = $_POST['confirm_password'];

// Step 4: Validate password match
if ($pass !== $confirm_pass) {
    echo "<script>alert('Passwords do not match!'); window.location.href='CreateProfile.html';</script>";
    exit();
}

// Step 5: Check if username already exists
$checkQuery = "SELECT * FROM Reg_User WHERE username = '$user'";
$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {
    echo "<script>alert('Username already exists. Please choose another.'); window.location.href='CreateProfile.html';</script>";
} else {
    // Step 6: Insert into database
    $sql = "INSERT INTO Reg_User (username, password) VALUES ('$user', '$pass')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Account created successfully! Please log in.'); window.location.href='LogIn.html';</script>";
    } else {
        echo "<script>alert('Error: Could not create account.'); window.location.href='CreateProfile.html';</script>";
    }
}

$conn->close();
?>
