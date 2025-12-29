<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Token</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">
    <!-- CSS dipisah -->
    <link rel="stylesheet" href="{{ asset('css/masukkan-token.css') }}">
</head>

<body>

<div class="container py-4">

    <!-- Header Template -->
    <x-templatenavbar
        title="Masukkan Token"
        backUrl="{{ url('/homepage') }}"
    />

    <!-- Icon + Title -->
    <div class="text-center mb-3">
        <div class="icon-circle mb-3">
            <img src="/assets/img/Ellipse6.png" width="70">
        </div>

        <h5 class="fw-bold">Punya token listrik?</h5>
        <p class="text-muted">Masukkan token listriknya di sini ya.</p>
    </div>
    <!--form input token-->
        <form method="POST" action="{{ route('verifikasi-token') }}">
        @csrf

        <input
            type="text"
            name="nomor_token"
            class="form-control input-token mb-4"
            placeholder="Masukkan Token"
            required
        >

        <button type="submit" class="btn-figma">
            Masukkan
        </button>
    </form>

</div>

</body>
</html>
