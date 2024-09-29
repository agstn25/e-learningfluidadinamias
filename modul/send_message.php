<?php
// send_message.php

// Connect to database
$koneksi = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$koneksi) {
  die("Connection failed: " + mysqli_connect_error());
}

// Get message from JavaScript
$message = $_POST['message'];

// Insert message into database
$query = "SELECT * fROM chat_messages (username, message) VALUES ('".$_SESSION['username']."', '$message')";
mysqli_query($koneksi, $query);

// Close connection
mysqli_close($koneksi);

// Output success message
echo json_encode(array('success' => true));
?>