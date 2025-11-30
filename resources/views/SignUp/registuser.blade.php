<!DOCTYPE html>
{{-- by mirza --}}
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Nama & Email</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/registuser.css') }}">
</head>
<body>
  <div class="container mt-4">
    <div class="d-flex align-items-center mb-3">
      <a href="javascript:history.back()" class="text-dark me-2"><i class="bi bi-arrow-left"></i></a>
      <h5 class="m-4 fw-semibold">Register User</h5>
    </div>

    <h1>Masukkan nama dan email anda</h1>

    <form action="{{ route('storeuserdata') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label fw-semibold">Nama</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
      </div>
      <div class="mb-3">
        <label class="form-label fw-semibold">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Masukkan alamat email Anda" required>
      </div>
    </form>
  </div>

  <button type="submit" form="registuser-form" class="btn btn-continue">Continue</button>
  <script>
    document.querySelector('form').id = 'registuser-form';
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
