{{--5026231088 Tsanita Shafa Hadinanda--}}
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tukar Gagal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/info.css') }}" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container text-center" style="margin-top: 25vh;">

    <img src="{{ asset('img/warning.png') }}"
         alt=""S
         width="150"
         style="margin-bottom: 25px;">

    <h3 class="fw-bold" style="font-size: 1.8rem; margin-bottom: 6px;">
        Gagal!
    </h3>

    <p class="text-muted" style="font-size: 1.1rem; margin-bottom: 40px;">
        Poin Tidak Mencukupi
    </p>

    <a href="{{ url('reward') }}" class="cta-wrap">
        <button class="btn btn-cta w-100" style="padding: 14px; font-size: 1.1rem;">
            Kembali
        </button>
    </a>

</div>

</body>
</html>
