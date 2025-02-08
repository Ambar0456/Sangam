<?php

session_start();


 {
    // Sanitize input to prevent XSS
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']); // You can add hashing for password in real-world scenarios
    
    // Store the details in session variables
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password; // Storing password is not recommended in production environments

    // Redirect to the next page (dashboard or welcome page)

}

// Check if the user is logged in (i.e., session is active)
if (isset($_SESSION['username'])) {
    echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
    echo "<p>Your username is: " . $_SESSION['username'] . "</p>";
    echo "<p>Your password is: " . $_SESSION['password'] . "</p>"; // In a real app, never display the password like this!

    // Optionally, provide a log-out option
    echo '<a href="logout1.php">Logout</a>';
} else {
    echo "<p>You need to log in first.</p>";
}
exit();