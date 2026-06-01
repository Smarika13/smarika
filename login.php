<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid username or password.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required/><br><br>
    <input type="password" name="password" placeholder="Password" required/><br><br>
    <button type="submit">Login</button>
  </form>
  <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</body>
</html>