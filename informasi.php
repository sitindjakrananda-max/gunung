<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Gunung Rinjani</title>
  <style>
    body {font-family: Poppins, sans-serif; margin: 0; background: #fafafa;}
    nav {display:flex;justify-content:space-between;align-items:center;
      background:linear-gradient(90deg,#7b2cbf,#ff66b3);padding:15px 40px;color:white;}
    nav a{color:white;text-decoration:none;margin:0 10px;font-weight:500;}
    .container{padding:50px;max-width:900px;margin:auto;background:white;
      box-shadow:0 3px 10px rgba(0,0,0,0.1);border-radius:10px;}
    h2{color:#7b2cbf;}
    p{line-height:1.6;color:#333;}
  </style>
</head>
<body>
  <nav>
    <h1>Gunung Rinjani</h1>
    <div>
      <a href="index.php">Beranda</a>
      <a href="informasi.php">Informasi</a>
      <a href="user.php">User</a>
      <a href="harga.php">Harga Tiket</a>
      <a href="logout.php">Logout</a>
    </div>
  </nav>
  <div class="container">
    <h2>Informasi Gunung Rinjani</h2>
    <p>Gunung Rinjani adalah gunung berapi tertinggi kedua di Indonesia dengan ketinggian 3.726 mdpl. 
    Terletak di Pulau Lombok, Nusa Tenggara Barat, gunung ini terkenal dengan danau kawah Segara Anak
    yang menakjubkan dan panorama puncaknya yang memukau.</p>

    <h3>Rute Pendakian</h3>
    <ul>
      <li>Sembalun</li>
      <li>Senaru</li>
      <li>Torean</li>
    </ul>

    <h3>Waktu Terbaik Mendaki</h3>
    <p>Antara bulan April hingga November (musim kemarau).</p>
  </div>
</body>
</html>
