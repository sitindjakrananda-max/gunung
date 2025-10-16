<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Cek apakah email sudah ada
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        $error = "Email sudah digunakan!";
    } else {
        $sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
        if ($conn->query($sql)) {
            header("Location: login.php");
            exit;
        } else {
            $error = "Gagal mendaftar, coba lagi!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register - Gunung Rinjani</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #7b2ff7, #f107a3);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .register-container {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.2);
      width: 350px;
      text-align: center;
    }
    h2 {
      color: #f107a3;
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
      background: linear-gradient(135deg, #f107a3, #7b2ff7);
      border: none;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
    }
    p { margin-top: 10px; }
    a { color: #f107a3; text-decoration: none; }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Daftar Akun</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
      <input type="text" name="name" placeholder="Nama Lengkap" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <input type="text" name="phone" placeholder="No. Telepon" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login</a></p>
  </div>
</body>
</html>
