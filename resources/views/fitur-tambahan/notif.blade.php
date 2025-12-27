<!DOCTYPE html>
<!-- Mirza Fathi Taufiqurrahman | 5026231105 -->
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Notification</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/notif.css') }}">
</head>
<body>

  <!-- Header -->
  <div class="notification-header">
    <a href="javascript:history.back()" class="text-dark me-2"><i class="bi bi-arrow-left"></i></a>
    <h5 class="m-0">Notification</h5>
  </div>

  <!-- Content -->
  <div class="container mt-3">
    @if($user->notifenabled)
      <div>
        <div class="section-title">Hari Ini</div>

        @if($lowToken || $recentPurchase)
        @if($lowToken)
        <div class="notif-card">
          <div class="notif-icon"><i class="bi bi-exclamation-triangle"></i></div>
          <div class="notif-text">
            <span class="notif-title">Token hampir habis, Segera lakukan isi ulang</span>
            <span class="notif-time">{{ now()->format('H.i') }} AM</span>
          </div>
        </div>
        @endif

        @if($recentPurchase)
        <div class="notif-card">
          <div class="notif-icon"><i class="bi bi-check-circle"></i></div>
          <div class="notif-text">
            <span class="notif-title">Token terisi</span>
            <span class="notif-time">{{ now()->format('H.i') }} AM</span>
          </div>
        </div>
        @endif
        @else
        <div class="notif-card">
          <div class="notif-text">
            <span class="notif-title">No notifications available yet.</span>
          </div>
        </div>
        @endif
      </div>
      @endif
  </div>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
