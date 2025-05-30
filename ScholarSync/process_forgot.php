<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $conn->real_escape_string(trim($_POST['email']));
  
  if (empty($email)) {
    die("Email is required.");
  }
  
  $sql = "SELECT id FROM users WHERE email='$email'";
  $result = $conn->query($sql);
  
  if ($result->num_rows == 1) {
    $token = md5(uniqid($email, true));
    $sql = "UPDATE users SET reset_token='$token' WHERE email='$email'";
    if ($conn->query($sql) === TRUE) {
      // Normally, an email with the reset token would be sent.
      echo "A password reset link has been sent to your email (simulated).";
    } else {
      echo "Error updating token: " . $conn->error;
    }
  } else {
    echo "No user found with this email address.";
  }
}
?>
