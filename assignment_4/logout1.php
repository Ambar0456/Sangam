<?php
// Start the session to destroy it
session_start();

// Destroy the session
session_unset();
session_destroy();

// Redirect to login page
header("Location: index1.html");
exit();
?>
