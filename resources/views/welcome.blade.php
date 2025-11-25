<!DOCTYPE html>
{{-- by mirza --}}
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PLN Mobile - Welcome</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
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
