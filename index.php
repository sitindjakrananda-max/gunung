<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gunung Rinjani</title>
  <style>
    :root {
      --ungu: #7b2cbf;
      --pink: #ff66b3;
      --putih: #fff;
    }

    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, var(--ungu), var(--pink));
      color: var(--putih);
    }

    /* 🌄 Navbar */
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(255, 255, 255, 0.1);
      padding: 15px 40px;
      backdrop-filter: blur(10px);
    }

    nav h1 {
      font-size: 1.6rem;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: var(--putih);
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: var(--pink);
    }

    /* 🏔️ Hero */
    .hero {
      text-align: center;
      padding: 120px 20px;
      background: url('https://upload.wikimedia.org/wikipedia/commons/d/de/Gunung_Rinjani_dari_Sembalun_Lombok.jpg') center/cover no-repeat;
      background-attachment: fixed;
      position: relative;
    }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.4);
    }

    .hero h2, .hero p, .hero a {
      position: relative;
      z-index: 1;
    }

    .hero h2 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    .hero a {
      background-color: var(--pink);
      color: white;
      padding: 10px 25px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s;
    }

    .hero a:hover {
      background-color: var(--ungu);
    }

    /* 🧭 Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(5px);
      color: var(--putih);
      margin-top: 50px;
    }

    /* 📱 Bottom Menu */
    .bottom-menu {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background: linear-gradient(90deg, var(--ungu), var(--pink));
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 10px 0;
      color: white;
      font-size: 22px;
    }

    .bottom-menu a {
      color: white;
      text-decoration: none;
    }

  </style>
</head>
<body>

  <nav>
    <h1>Gunung Rinjani</h1>
    <ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="informasi.php">Informasi</a></li>
      <li><a href="user.php">User</a></li>
      <li><a href="harga.php">Harga Tiket</a></li>
      <li><a href="register.php">register</a></li>
      <li><a href="login.php">login</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </nav>

  <section class="hero">
    <h2>Selamat Datang di Gunung Rinjani</h2>
    <p>Rasakan keindahan alam dan petualangan di puncak tertinggi Nusa Tenggara Barat 🌄</p>
    <a href="harga.php">Lihat Harga Tiket</a>
  </section>
</body>
</html>
