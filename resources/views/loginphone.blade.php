<!DOCTYPE html>
{{-- by mirza --}}
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Phone Number</title>
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
      margin-bottom: 1rem;
    }
    .country-code {
      width: 90px;
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
      <a href="{{ route('welcome') }}" class="text-dark me-2"><i class="bi bi-arrow-left"></i></a>
      <h5 class="m-4 fw-semibold">Login Phone Number</h5>
    </div>
    <h1>Masukkan nomor handphone Anda</h1>

    <form action="{{ route('processloginphone') }}" method="POST">
      @csrf
      <div class="d-flex gap-2">
        <input type="text" class="form-control text-center country-code" value="+62" readonly>
        <input type="text" name="phone" class="form-control" placeholder="Contoh: 81234567" required>
      </div>
      @if(session('error'))
        <div class="alert alert-danger mt-3">{{ session('error') }}</div>
      @endif
    </form>
  </div>

  <button type="submit" form="loginphone-form" class="btn btn-continue">Continue</button>
  <script>
    document.querySelector('form').id = 'loginphone-form';
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
