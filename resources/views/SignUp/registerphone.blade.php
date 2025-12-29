<!DOCTYPE html>
<!-- Mirza Fathi Taufiqurrahman | 5026231105 -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Phone Number</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/registerphone.css') }}">
</head>
<body>
    {{-- Revised by 5026231088 Tsanita Shafa Hadinanda --}}
  <x-templatenavbar
        title="Register"
        backUrl="{{ url('/') }}"
    />
  {{-- End Revised by 5026231088 Tsanita Shafa Hadinanda --}}
    <h1>Masukkan nomor handphone Anda</h1>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <form action="{{ route('registerphone') }}" method="POST">
      @csrf
      <div class="d-flex gap-2">
        <input type="text" class="form-control text-center country-code" value="+62" readonly>
        <input type="text" name="phone" class="form-control" placeholder="Contoh: 81234567" required>
      </div>
    </form>
  </div>

  <button type="submit" form="registerphone-form" class="btn btn-continue">Continue</button>
  <script>
    document.querySelector('form').id = 'registerphone-form';
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
