<!DOCTYPE html>
{{-- by mirza --}}
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PLN Mobile - Welcome</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffffff;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .welcome-text h5 {
      margin-bottom: 0.3rem;
      font-weight: 500;
    }

    .welcome-text h6 {
      font-weight: 700;
    }

    .logo {
      width: 100px;
      height: 100px;
      margin: 2rem 0;
    }

    .btn-custom {
      width: 250px;
      border-radius: 20px;
      background-color: #09A8B6;
      color: white;
      font-size: 1rem;
      padding: 10px;
      margin: 0.5rem 0;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
      transition: background-color 0.2s ease;
    }

    .btn-custom:hover {
      background-color: #088d99;
      color: #fff;
    }
  </style>
</head>
<body>

  <div class="welcome-text">
    <h5>Hai, Electizen!</h5>
    <h6>Selamat datang di PLN Mobile</h6>
  </div>

  <img src="https://cdn-icons-png.flaticon.com/512/2933/2933245.png" alt="PLN Logo" class="logo">

  <div class="d-flex flex-column align-items-center">
    <a href= "{{ route('registerphone') }}" class="btn btn-custom">Register</a>
    <a href="{{ route('loginphone') }}" class="btn btn-custom">Login</a>
  </div>

</body>
</html>
