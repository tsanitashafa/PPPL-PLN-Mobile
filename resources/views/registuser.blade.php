<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Nama & Email</title>
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
      <h5 class="m-4 fw-semibold">Register User</h5>
    </div>

    <h1>Masukkan nama dan email anda</h1>

    <div class="mb-3">
      <label class="form-label fw-semibold">Nama</label>
      <input type="text" class="form-control" placeholder="Masukkan nama Anda">
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Email</label>
      <input type="email" class="form-control" placeholder="Masukkan alamat email Anda">
    </div>
  </div>

  <a href="{{ route('verifyemail') }}" class="btn btn-continue">Continue</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
