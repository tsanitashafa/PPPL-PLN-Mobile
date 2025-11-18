<!DOCTYPE html>
{{-- by mirza --}}
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Notification</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Poppins", sans-serif;
    }

    .notification-header {
      display: flex;
      align-items: center;
      padding: 1rem;
      background-color: white;
      border-bottom: 1px solid #eaeaea;
      font-size: 1.3rem;
      font-weight: 800;
    }

    .section-title {
      font-weight: 800;
      font-size: 1.3rem;
      margin-top: 1.5rem;
      margin-bottom: 0.5rem;
      color: #333;
    }

    .notif-card {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.05);
      padding: 1rem;
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1rem;
    }

    .notif-icon {
      width: 40px;
      height: 40px;
      border: 1.5px solid #13a0b5;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #0d6efd;
      font-size: 1.1rem;
    }

    .notif-text {
      display: flex;
      flex-direction: column;
    }

    .notif-title {
      font-weight: 600;
      font-size: 1.1rem;
      color: #212529;
      margin-bottom: 0.2rem;
    }

    .notif-time {
      font-size: 0.8rem;
      color: #6c757d;
    }
  </style>
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

        <div class="notif-card">
          <div class="notif-icon"><i class="bi bi-bookmark"></i></div>
          <div class="notif-text">
            <span class="notif-title">Listrik sisa 5kWh</span>
            <span class="notif-time">06.12 AM</span>
          </div>
        </div>

        <div class="notif-card">
          <div class="notif-icon"><i class="bi bi-bookmark"></i></div>
          <div class="notif-text">
            <span class="notif-title">Token Terisi</span>
            <span class="notif-time">06.12 AM</span>
          </div>
        </div>
      </div>

      <div>
        <div class="section-title">Minggu Lalu</div>

        <div class="notif-card">
          <div class="notif-icon"><i class="bi bi-bookmark"></i></div>
          <div class="notif-text">
            <span class="notif-title">Token Terisi</span>
            <span class="notif-time">06.12 AM</span>
          </div>
        </div>

        <div class="notif-card">
          <div class="notif-icon"><i class="bi bi-bookmark"></i></div>
          <div class="notif-text">
            <span class="notif-title">Listrik sisa 5kWh</span>
            <span class="notif-time">06.12 AM</span>
          </div>
        </div>
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
