<!DOCTYPE html>
<!-- Mirza Fathi Taufiqurrahman | 5026231105 -->
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat PIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/createpin.css') }}">
</head>
<body>

  <!-- Top Navigation -->
  {{-- Revised by 5026231088 Tsanita Shafa Hadinanda --}}
  <x-templatenavbar
        title="Buat PIN"
        backUrl="{{ url('/verifyemail') }}"
    />
  {{-- End Revised by 5026231088 Tsanita Shafa Hadinanda --}}

  <!-- Main Section -->
  <div class="pin-section">
    <h5 class="pin-title">Buat PIN PLN Mobile</h5>
    <form action="{{ route('storepin') }}" method="POST">
      @csrf
      <div class="pin-inputs">
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
        <input type="password" name="pin[]" maxlength="1" required>
      </div>
    </form>
  </div>

  <!-- Continue Button -->
  <button type="submit" form="createpin-form" class="btn btn-continue">Continue</button>
  <script>
    document.querySelector('form').id = 'createpin-form';
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
