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
        echo "<p class='error'>Invalid username or password.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Login</h2>

    <form action="login.php" method="POST">

      <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username" required/>
      </div>

      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required/>
      </div>

      <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
  </div>
</body>
</html>