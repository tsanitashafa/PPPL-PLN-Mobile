<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verifikasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      max-width: 360px;
      margin: auto;
      background-color: #fff;
      min-height: 100vh;
      position: relative;
      padding-bottom: 100px;
    }
    h1 {
      font-size: 1.1rem;
      font-weight: 600;
      color: #135e6c;
      margin-bottom: 1.5rem;
    }
    .otp-input {
      width: 45px;
      height: 50px;
      text-align: center;
      font-size: 1.2rem;
    }
    .btn-continue {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      width: 90%;
      background-color: #13a0b5;
      color: white;
      font-weight: 500;
      border-radius: 16px;
      padding: 12px;
      box-shadow: 0 3px 5px rgba(0,0,0,0.15);
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <div class="d-flex align-items-center mb-3">
      <a href="javascript:history.back()" class="text-dark me-2"><i class="bi bi-arrow-left"></i></a>
      <h5 class="m-4 fw-semibold">Verifikasi Phone Number</h5>
    </div>

    <h1>Masukkan kode verifikasi yang kami kirim ke nomor <span class="text-info fw-bold">6282154156040</span></h1>

    <div class="d-flex justify-content-between mb-3">
      <input type="text" maxlength="1" class="form-control otp-input">
      <input type="text" maxlength="1" class="form-control otp-input">
      <input type="text" maxlength="1" class="form-control otp-input">
      <input type="text" maxlength="1" class="form-control otp-input">
      <input type="text" maxlength="1" class="form-control otp-input">
      <input type="text" maxlength="1" class="form-control otp-input">
    </div>

    <p class="text-muted text-center">
      Belum menerima kode verifikasi? 
      <a href="#" class="text-decoration-none fw-semibold" style="color:#135e6c;">Kirim Ulang</a>
    </p>
  </div>

  <a href="{{ route('registuser') }}" class="btn btn-continue">Continue</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
