<!DOCTYPE html>
<html>
<head>
    <title>Registration Results</title>
    <style>
        h2{
            background-color:rgb(238, 83, 238);
            text-align: center;
        }

    </style>
</head>
<body>

    <h2>Thank You for Registering</h2>

    
        <p><strong>Full Name:</strong> <?php echo htmlspecialchars($_GET["name"]); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_GET["email"]); ?></p>
        <p><strong>Subject Interest:</strong> <?php echo htmlspecialchars($_GET["in"]); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($_GET["gen"]); ?></p>
        <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($_GET["dob"]); ?></p>
        <button onclick="window.location.href='f1.html'">Go Back</button>

</body>
</html>
