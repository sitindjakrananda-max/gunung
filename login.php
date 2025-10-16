<?php
session_start();
require_once 'config.php';

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Gunung Rinjani</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #7b2ff7, #f107a3);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-container {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.2);
      width: 350px;
      text-align: center;
    }
    h2 {
      color: #7b2ff7;
      margin-bottom: 20px;
    }
    input {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    button {
      background: linear-gradient(135deg, #7b2ff7, #f107a3);
      border: none;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
    }
    p { margin-top: 10px; }
    a { color: #7b2ff7; text-decoration: none; }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Gunung Rinjani</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
  </div>
</body>
</html>
