<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/User.php';
$db = (new Database())->getConnection();
$userModel = new User($db);
$user = $userModel->findById($_SESSION['user_id']);
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Profil - Rinjani Tickets</title><link rel="stylesheet" href="../assets/css/style.css"></head>
<body>
<div class="container">
  <div class="header">
    <h1>Profil</h1>
    <div class="nav">
      <a class="btn" href="index.php">Beranda</a>
      <a class="btn btn-alt" href="logout.php">Logout</a>
    </div>
  </div>

  <div class="card" style="max-width:520px">
    <h3><?=htmlspecialchars($user['name'])?></h3>
    <p class="small">Email: <?=htmlspecialchars($user['email'])?></p>
    <p class="small">No. HP: <?=htmlspecialchars($user['phone'] ?? '-')?></p>
    <p class="small">Terdaftar: <?=htmlspecialchars($user['created_at'])?></p>
  </div>
</div>
</body>
</html>
