{{--5026231088 Tsanita Shafa Hadinanda--}}
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Redeem Berhasil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">
    <link href="{{ asset('css/tukar-berhasil.css') }}" rel="stylesheet">

    <script>
        function copyKode() {
            let kode = document.getElementById('kodeToken').innerText;

            navigator.clipboard.writeText(kode).then(() => {
                alert('Kode berhasil disalin');
            });
        }
    </script>

</head>

<body>

<div class="container text-center" style="margin-top: 25vh;">

    {{-- Ikon berhasil --}}
    <img src="{{ asset('assets/img/success.png') }}"
         alt=""S
         width="150"
         style="margin-bottom: 25px;">

    {{-- Judul --}}
    <h3 class="fw-bold" style="font-size: 1.8rem; margin-bottom: 6px;">
        Selamat!
    </h3>

    {{-- Box kode --}}
    <div class="d-flex justify-content-center mb-3">
        <div class="position-relative" style="width: 260px;">

            {{-- input kode token --}}
            <input
                id="kodeToken"
                type="text"
                class="form-control text-center"
                value="{{ $kodeToken }}"
                readonly
                style="border-radius: 12px; padding-right: 48px;"
            >

            {{-- tombol copy --}}
            <button
                type="button"
                onclick="copyKode()"
                style="
                    position: absolute;
                    right: 10px;
                    top: 50%;
                    transform: translateY(-50%);
                    border: none;
                    background: transparent;
                    padding: 4px;
                    font-size: 20px;
                    color: #14a2ba;
                "
            >
                <i class="fa-solid fa-copy"></i>
            </button>

        </div>
    </div>


    <p class="text-muted" style="font-size: 1.1rem; margin-bottom: 40px;">
        Berhasil Redeem Poin
    </p>

    {{-- Tombol selesai --}}
    <a href="{{ url('reward') }}" class="cta-wrap">
        <button class="btn btn-cta w-100" style="padding: 14px; font-size: 1.1rem;">
            Kembali
        </button>
    </a>

</div>
<script>
function copyKode() {
    const input = document.getElementById('kodeToken');
    navigator.clipboard.writeText(input.value)
        .then(() => alert('Kode berhasil disalin'));
}
</script>


</body>
</html>
