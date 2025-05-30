<?php
session_start();
session_unset();
session_destroy();
echo "<h2>You have been logged out.</h2>";
echo '<a href="form.php">Login Again</a>';
?>
