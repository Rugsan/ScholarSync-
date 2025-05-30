<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get and sanitize inputs
  $username = $conn->real_escape_string(trim($_POST['username']));
  $email = $conn->real_escape_string(trim($_POST['email']));
  $password = trim($_POST['password']);
  $confirm_password = trim($_POST['confirm_password']);

  // Validate fields
  if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    die("All fields are required.");
  }
  if ($password !== $confirm_password) {
    die("Passwords do not match.");
  }
  
  // Check if the email already exists
  $sql = "SELECT id FROM users WHERE email='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    die("This email is already registered.");
  }
  
  // Hash the password and insert the new user
  $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
  
  if ($conn->query($sql) === TRUE) {
    header("Location: login.php?signup=success");
    exit();
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
