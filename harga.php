<?php
include 'config.php';
include 'ticket.php';
$ticket = new Ticket($conn);
$tickets = $ticket->getTickets();
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Harga Tiket Rinjani</title>
<style>
  body{font-family:Poppins,sans-serif;margin:0;background:#fafafa;}
  nav{display:flex;justify-content:space-between;align-items:center;
    background:linear-gradient(90deg,#7b2cbf,#ff66b3);padding:15px 40px;color:white;}
  nav a{color:white;text-decoration:none;margin:0 10px;}
  .container{padding:40px;display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;}
  .card{background:white;padding:20px;border-radius:12px;box-shadow:0 4px 10px rgba(0,0,0,0.1);}
  .card h3{color:#7b2cbf;}
  .card p{color:#333;}
  .price{color:#ff66b3;font-weight:bold;}
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
  <?php
  if ($tickets && $tickets->num_rows > 0) {
    while ($row = $tickets->fetch_assoc()) {
      echo "<div class='card'>
              <h3>{$row['nama_tiket']}</h3>
              <p>{$row['deskripsi']}</p>
              <p class='price'>Rp {$row['harga']}</p>
            </div>";
    }
  } else {
    echo "<p>Tidak ada data tiket.</p>";
  }
  ?>
</div>
</body>
</html>
