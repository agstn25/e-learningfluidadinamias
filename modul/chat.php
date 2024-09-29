<?php
// chat.php

// Connect to database
$koneksi = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
  die("Connection failed: " + mysqli_connect_error());
}

// Get chat messages
$query = "SELECT * FROM chat_messages";
$result = mysqli_query($conn, $query);

$messages = array();
while ($row = mysqli_fetch_assoc($result)) {
  $messages[] = $row;
}

// Close connection
mysqli_close($conn);

// Output chat messages in JSON format
echo json_encode($messages);
?>