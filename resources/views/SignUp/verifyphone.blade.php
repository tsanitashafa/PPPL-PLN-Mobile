<!DOCTYPE html>
<!-- Mirza Fathi Taufiqurrahman | 5026231105 -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verifikasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">
  <link rel="stylesheet" href="{{ asset('css/verifyphone.css') }}">
</head>
<body>
  <div class="container mt-4">
    {{-- Revised by 5026231088 Tsanita Shafa Hadinanda --}}
  <x-templatenavbar
        title="Verifikasi"
        backUrl="{{ url('/registerphone') }}"
    />
  {{-- End Revised by 5026231088 Tsanita Shafa Hadinanda --}}

    <h1>Masukkan kode verifikasi yang kami kirim ke nomor <span class="text-info fw-bold">{{ $phone }}</span></h1>

    <form action="{{ route('verifyotp') }}" method="POST">
      @csrf
      <div class="d-flex justify-content-between mb-3">
        <input type="text" name="otp[]" maxlength="1" class="form-control otp-input" required>
        <input type="text" name="otp[]" maxlength="1" class="form-control otp-input" required>
        <input type="text" name="otp[]" maxlength="1" class="form-control otp-input" required>
        <input type="text" name="otp[]" maxlength="1" class="form-control otp-input" required>
        <input type="text" name="otp[]" maxlength="1" class="form-control otp-input" required>
        <input type="text" name="otp[]" maxlength="1" class="form-control otp-input" required>
      </div>
      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif
    </form>

    <p class="text-muted text-center">
      Belum menerima kode verifikasi?
      <a href="#" class="text-decoration-none fw-semibold" style="color:#135e6c;">Kirim Ulang</a>
    </p>
  </div>

  <button type="submit" form="verifyphone-form" class="btn btn-continue">Continue</button>
  <script>
    document.querySelector('form').id = 'verifyphone-form';
    // Combine OTP inputs into single field
    document.querySelector('form').addEventListener('submit', function(e) {
      const otpInputs = document.querySelectorAll('input[name="otp[]"]');
      const otp = Array.from(otpInputs).map(input => input.value).join('');
      const hiddenInput = document.createElement('input');
      hiddenInput.type = 'hidden';
      hiddenInput.name = 'otp';
      hiddenInput.value = otp;
      this.appendChild(hiddenInput);
      otpInputs.forEach(input => input.removeAttribute('name'));
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
