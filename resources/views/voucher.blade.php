<?php
// Data dummy daftar voucher (bisa tarik dari DB)
$vouchers = array_fill(0, 6, [
  "title" => "Voucher Diskon Up to 25% Token Listrik",
  "tag"   => "Voucher"
]);
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voucher</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="css/reward.css" rel="stylesheet">

</head>
<body>

<div class="container container-app px-3">
    <!-- App Bar -->
    <div class="app-bar position-relative mb-2">
        <a href="reward" class="back-btn text-dark position-absolute start-0">
            <i class="bi bi-arrow-left fs-4"></i>
        </a>
        <h5 class="app-title text-center m-0">Voucher</h5>
    </div>

  <div class="tab-content">
    <!-- Voucher -->
    <div class="tab-pane fade show active" id="tab-voucher" role="tabpanel">
    <?php foreach($vouchers as $i => $v): ?>
        <button class="voucher-card w-100 text-start mb-4"
                onclick="window.location.href='infovoucher'">
        <div class="card-body d-flex align-items-center">
            <div class="thumb">
                <img src="img/img25off.png" alt="25% OFF" class="img-fluid">
            </div>
            <div class="ms-4 me-2">
            <div class="fw-semibold"><?= htmlspecialchars($v["title"]) ?></div>
            </div>
        </div>
        </button>
    <?php endforeach; ?>

  <!-- Spacer agar tidak nabrak nav bawah (kalau dipakai) -->
  <div style="height: 24px;"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
