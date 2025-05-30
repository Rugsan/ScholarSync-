<?php
include 'db_config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $conn->real_escape_string(trim($_POST['email']));
  $password = trim($_POST['password']);
  
  if (empty($email) || empty($password)) {
    die("Email and Password are required.");
  }
  
  $sql = "SELECT id, username, password FROM users WHERE email='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      header("Location: index.php");
      exit();
    } else {
      die("Invalid email or password.");
    }
  } else {
    die("Invalid email or password.");
  }
}
?>
