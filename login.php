<?php
session_start();
include('includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
    if ($query->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: user/dashboard.php");
    } else {
        echo "Invalid credentials";
    }
}
?>
<form method="post">
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button>
</form>
