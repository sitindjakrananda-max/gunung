<?php
session_start();
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Ticket.php';
if (empty($_SESSION['user_id'])) { header("Location: login.php"); exit; }

$db = (new Database())->getConnection();
$ticketModel = new Ticket($db);

$id = intval($_GET['id'] ?? 0);
$ticket = $ticketModel->find($id);
if (!$ticket) {
    die("Tiket tidak ditemukan.");
}

$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sederhana: tidak menyimpan transaksi, hanya simulasi konfirmasi
    $msg = "Pesanan paket '" . htmlspecialchars($ticket['title']) . "' berhasil. Tim kami akan menghubungi Anda untuk detail (simulasi).";
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Beli Paket - <?=htmlspecialchars($ticket['title'])?></title><link rel="stylesheet" href="../assets/css/style.css"></head>
<body>
<div class="container">
  <div class="card" style="max-width:720px;margin:30px auto">
    <h2><?=htmlspecialchars($ticket['title'])?></h2>
    <p class="small"><?=nl2br(htmlspecialchars($ticket['description']))?></p>
    <p style="font-weight:700">Harga: Rp <?=number_format($ticket['price'],0,',','.')?> — <?=htmlspecialchars($ticket['duration'])?></p>

    <?php if($msg): ?><div style="color:green;margin-bottom:12px"><?=$msg?></div><?php endif; ?>

    <form method="post">
      <div class="form-group"><label>Jumlah peserta:</label>
        <input class="form-control" type="number" name="qty" value="1" min="1" required>
      </div>
      <button class="btn" type="submit">Konfirmasi Pesan (Simulasi)</button>
      <a class="btn btn-alt" href="index.php" style="margin-left:8px">Kembali</a>
    </form>
  </div>
</div>
</body>
</html>
