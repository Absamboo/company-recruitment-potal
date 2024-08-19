<?php
// Start session
session_start();

// Login credentials
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check user credentials
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

// Execute query
$result = $conn->query($query);

// Check if user exists
if ($result->num_rows > 0) {
    // User authenticated, store user data in session
    $_SESSION['user_id'] = $result->fetch_assoc()['id'];
    $_SESSION['user_email'] = $email;
    
    // Redirect to dashboard or home page
    header('Location: form.html');
    exit;
} else {
    // Invalid credentials, show error message
    echo 'Invalid email or password';
}
?>
