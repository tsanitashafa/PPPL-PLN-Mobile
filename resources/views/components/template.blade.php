{{--5026231088 Tsanita Shafa Hadinanda--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voucher</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Floating QR Button -->
    <button class="fab-main">
        <i class="bi bi-qr-code fs-2"></i>
    </button>

    <!-- Curved Bottom Nav -->
    <nav class="bottom-nav curved mb-2">

        <a class="nav-link text-center {{ Request::is('homepage') ? 'active' : '' }}"
           href="{{ url('/homepage') }}">
            <i class="bi bi-house-door fs-5 d-block"></i>Home
        </a>

        <a class="nav-link text-center me-5 {{ Request::is('reward') ? 'active' : '' }}"
           href="{{ url('/reward') }}">
            <i class="bi bi-gift fs-5 d-block"></i>Reward
        </a>

        <a class="nav-link text-center ms-5 {{ Request::is('artikel') ? 'active' : '' }}"
           href="{{ url('/artikel') }}">
            <i class="bi bi-newspaper fs-5 d-block"></i>Artikel
        </a>

        <a class="nav-link text-center {{ Request::is('edit-profile-1') ? 'active' : '' }}"
           href="{{ url('/edit-profile-1') }}">
            <i class="bi bi-person fs-5 d-block"></i>Profile
        </a>

    </nav>
</body>
