<?php
include('includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $conn->query("INSERT INTO users (email, password) VALUES ('$email', '$pass')");
    echo "Registered successfully. <a href='login.php'>Login</a>";
}
?>
<form method="post">
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Register</button>
</form>
