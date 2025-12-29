{{-- 5026231088 Tsanita Shafa Hadinanda --}}
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voucher</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">
    <link href="{{ asset('css/info.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container container-app px-3">

        <x-templatenavbar
            title="Voucher"
            backUrl="{{  url()->previous() }}"
        />

        {{-- Banner --}}
        <div class="ratio ratio-16x9 banner mb-3">
            @php
                $voucherImg = 'voucher' . $voucher->nilai . '.png';
            @endphp

            <img src="{{ asset('assets/img/' . $voucherImg) }}" alt="voucher" class="rounded-3">
        </div>

        {{-- Nama voucher --}}
        <h5 class="fw-semibold mb-3">
            {{ $voucher->rewardname }}
        </h5>

        {{-- Deskripsi --}}
        <p class="text-muted mb-5">
            {{ $voucher->deskripsi }}
        </p>

    </div>

    {{-- Tombol Pakai --}}
    <div class="cta-wrap">
        <button class="btn btn-cta w-100" data-bs-toggle="modal" data-bs-target="#redeemModal">
            Pakai
        </button>
    </div>

    {{-- Modal Konfirmasi --}}
    <div class="modal fade bottom-sheet" id="redeemModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content confirm-sheet">

                <div class="sheet-handle"></div>

                <h5 class="text-center fw-semibold mb-3">Konfirmasi Redeem</h5>

                <div class="d-grid gap-3">
                    {{-- Cari bagian Modal Konfirmasi di infovoucher.blade.php --}}
                    <button class="btn btn-pill btn-yes"
                        onclick="window.location.href='{{ route('pakai-voucher', $voucher->rewardid) }}'">
                        Ya
                    </button>

                    <button type="button" class="btn btn-pill btn-no" data-bs-dismiss="modal">
                        Tidak
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
