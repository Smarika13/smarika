<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email    = $_POST['email'];
    $dob      = $_POST['dob'];
    $gender   = $_POST['gender'];
    $country  = $_POST['country'];

    $sql = "INSERT INTO users (username, password, email, dob, gender, country) 
            VALUES ('$username', '$password', '$email', '$dob', '$gender', '$country')";
    mysqli_query($conn, $sql);

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>
  <h2>Sign Up</h2>

  <form action="signup.php" method="POST">

    <label>Username:</label><br>
    <input type="text" name="username" placeholder="Username" required/><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" placeholder="Password" required/><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="Confirm Password" placeholder="Confirm Password" required/><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" placeholder="Email" required/><br><br>

    <label>Date of Birth:</label><br>
    <input type="date" name="dob" required/><br><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male" required/> Male
    <input type="radio" name="gender" value="Female" /> Female
    <input type="radio" name="gender" value="Other" /> Other<br><br>

    <label>Country:</label><br>
    <select name="country" required>
      <option value="">-- Select Country --</option>
      <option value="Nepal">Nepal</option>
      <option value="India">India</option>
      <option value="USA">USA</option>
      <option value="UK">UK</option>
      <option value="Australia">Australia</option>
      <option value="Canada">Canada</option>
      <option value="China">China</option>
      <option value="Japan">Japan</option>
      <option value="Germany">Germany</option>
      <option value="France">France</option>
    </select><br><br>

    <button type="submit">Sign Up</button>
  </form>

  <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>