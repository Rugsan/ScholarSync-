<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name    = $conn->real_escape_string(trim($_POST['name']));
  $email   = $conn->real_escape_string(trim($_POST['email']));
  $phone   = isset($_POST['phone']) ? $conn->real_escape_string(trim($_POST['phone'])) : '';
  $message = $conn->real_escape_string(trim($_POST['message']));

  $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
  if ($conn->query($sql) === TRUE) {
    echo "Thank you, your message has been sent!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
} else {
  header("Location: contact.php");
  exit();
}
?>
