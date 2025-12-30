<!DOCTYPE html>
<!-- Mirza Fathi Taufiqurrahman | 5026231105 -->
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Notification</title>
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/notif.css') }}">
</head>
<body>

  <!-- Header -->
  <x-templatenavbar title="Notifikasi" backUrl="{{ url('homepage') }}" />

  <!-- Content -->
  <div class="container mt-3">
    @if($user->notifenabled)
      <div>
        <div class="section-title">Hari Ini</div>

        @if($zeroToken || $lowToken || $recentPurchase)
        @if($zeroToken)
        <div class="notif-card">
          <div class="notif-icon"><i class="bi bi-exclamation-triangle"></i></div>
          <div class="notif-text">
            <span class="notif-title">Token anda hampir habis, Segera lakukan isi ulang</span>
            <span class="notif-time">{{ now()->format('H.i') }} AM</span>
          </div>
        </div>
        @endif

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
            <span class="notif-title">Anda baru saja membeli token</span>
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
      @else
      <div class="text-center mt-5">
        <div class="mb-4">
          <i class="bi bi-bell-slash" style="font-size: 4rem; color: #6c757d;"></i>
        </div>
        <h4 class="text-muted mb-3">Notifications are currently off</h4>
        <p class="text-muted mb-4">Please enable notifications in your profile settings to receive updates.</p>
        <a href="{{ route('edit-profile-1') }}" class="btn btn-primary">Go to Profile Settings</a>
      </div>
      @endif
  </div>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
