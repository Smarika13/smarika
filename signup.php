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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Sign Up</h2>

    <form action="signup.php" method="POST">

      <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username" required/>
      </div>

      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required/>
      </div>

      <div class="form-group">
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required/>
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" placeholder="Email" required/>
      </div>

      <div class="form-group">
        <label>Date of Birth:</label>
        <input type="date" name="dob" required/>
      </div>

      <div class="form-group">
        <label>Gender:</label>
        <div class="radio-group">
          <input type="radio" id="male" name="gender" value="Male" required/>
          <label for="male">Male</label>
          
          <input type="radio" id="female" name="gender" value="Female"/>
          <label for="female">Female</label>
          
          <input type="radio" id="other" name="gender" value="Other"/>
          <label for="other">Other</label>
        </div>
      </div>

      <div class="form-group">
        <label>Country:</label>
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
        </select>
      </div>

      <button type="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
</body>
</html>