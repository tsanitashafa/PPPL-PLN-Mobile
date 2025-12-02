<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #ffffff; }

        .card-section {
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            background: #fff;
            margin-bottom: 25px;
        }

        .btn-add-location {
            background-color: #009FB7;
            color: white;
            border-radius: 12px;
            font-weight: 600;
            width: 100%;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .location-item {
            border: 1px solid #cfcfcf;
            border-radius: 12px;
            padding: 10px 15px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #F3F3F3;
        }

        .btn-share {
            background-color: #009FB7;
            color: white;
            border-radius: 12px;
            font-weight: 600;
            width: 100%;
            padding: 10px;
        }
        .modal-header-custom {
            position: relative;
            height: 40px;
            margin-bottom: 10px;
        }
        .modal-title-centered {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 18px;
            font-weight: 700;
        }

        .info-btn {
            position: absolute;
            left: 0;
            top: 0;
            background: transparent;
            border: none;
            padding: 5px;
        }

        .close-btn {
            position: absolute;
            right: 0;
            top: 0;
            background: transparent;
            border: none;
            font-size: 22px;
            padding: 5px;
        }

        .location-item {
            background: #ffffff;
            padding: 14px 16px;
            border-radius: 16px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            transition: 0.2s;
        }

        .location-item:hover {
            background: #f7f7f7;
        }

        .location-item span {
            font-size: 15px;
        }

    </style>
</head>
<body>

<!-- NAVBAR TEMPLATE -->
<x-templatenavbar title="Detail Pelanggan" backUrl="{{ url('/cek-token') }}" />

<div class="container mt-3 mb-5">

    <h6 class="fw-bold mb-2">Multi-Lokasi</h6>

    <div class="card-section">
        <p class="mb-2">Kelola Pemakaian dibeberapa lokasi</p>

        <button class="btn-add-location" data-bs-toggle="modal" data-bs-target="#modalTambahLokasi">
            Tambahkan Lokasi
            <span style="font-size: 20px;">+</span>
        </button>

        @foreach($pelanggan as $p)
            <a href="{{ route('cek-token', $p->id) }}"
            class="location-item d-flex justify-content-between align-items-center mt-3 text-decoration-none">

                <span class="text-dark fw-semibold">
                    {{ $p->tandaisebagai }} ({{ $p->alamat }})
                </span>

                <span class="text-muted" style="font-size: 20px;">&#8250;</span>
            </a>
        @endforeach

    </div>

    <h6 class="fw-bold mb-2">Bagikan Data</h6>

    <div class="card-section">
        <p class="mb-3">Ekspor dan Bagikan Data Pemakaian Listrik</p>
        <button class="btn-share" data-bs-toggle="modal" data-bs-target="#modalShare">
                Bagikan
        </button>
    </div>
</div>

<!-- MODAL TAMBAH LOKASI -->
<div class="modal fade" id="modalTambahLokasi" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3" style="border-radius: 22px;">

            <!-- Header -->
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title w-100 text-center fw-bold">Tambah Lokasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Map -->
            <div class="mt-2 mb-3">
                <iframe
                    width="100%"
                    height="200"
                    style="border:0; border-radius: 12px;"
                    loading="lazy"
                    allowfullscreen
                    src="https://www.google.com/maps?q=-6.200000,106.816666&hl=id&z=15&output=embed">
                </iframe>
            </div>

            <!-- Form -->
            <form action="{{ route('lokasi.tambah') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nomor Meter</label>
                    <input type="text" name="nomormeter" class="form-control" placeholder="Nomor meter listrik" required>
                </div>
                <!--
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Pengguna</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama pengguna" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">ID Pengguna</label>
                    <input type="text" name="penggunaid" class="form-control" placeholder="Masukkan ID Pengguna" required>
                </div> -->

            <!-- TANDAI LOKASI SEBAGAI-->
                <div class="mb-3">
                <label class="form-label fw-semibold">Tandai Sebagai</label>
                <select id="tandaisebagai" name="tandaisebagai" class="form-select" required>
                    <option value="">Pilih...</option>
                    <option value="Rumah">Rumah</option>
                    <option value="Kantor">Kantor</option>
                    <option value="Gudang">Gudang</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>

                <div class="mb-3 d-none" id="inputLainnyaWrapper">
                <label class="form-label fw-semibold">Nama Custom</label>
                <input
                    type="text"
                    id="inputLainnya"
                    name="tandaisebagai_custom"
                    class="form-control"
                    placeholder="Tulis nama label…" />
                </div>

                <script>
                const select = document.getElementById('tandaisebagai');
                const inputWrapper = document.getElementById('inputLainnyaWrapper');
                const customInput = document.getElementById('inputLainnya');

                select.addEventListener('change', function() {
                    if (this.value === "Lainnya") {
                        inputWrapper.classList.remove('d-none');
                        customInput.setAttribute('required', true);
                    } else {
                        inputWrapper.classList.add('d-none');
                        customInput.removeAttribute('required');
                        customInput.value = "";
                    }
                });
                </script>
            <!-- BUTTON SUBMIT -->
                <button type="submit" class="btn w-100 text-white" style="background-color:#009FB7; border-radius:14px;">
                    Tambah Lokasi
                </button>
            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

</script>

<!-- MODAL SHARE -->
<div class="modal fade" id="modalShare" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3" style="border-radius: 22px;">

            <!-- Header -->
            <div class="modal-header-custom mb-2">
                <button class="info-btn" type="button">
                    <img src="/images/info.png" width="30">
                </button>

                <span class="modal-title-centered">Share</span>

                <button class="close-btn" data-bs-dismiss="modal">
                    ✕
                </button>
            </div>

            <!-- Ekspor Section -->
            <h6 class="fw-bold mb-2">Ekspor</h6>

            <div class="d-flex justify-content-around mb-4">

                <div class="text-center">
                    <img src="/images/pdf.png" width="50">
                    <div class="mt-1">PDF</div>
                </div>

                <div class="text-center">
                    <img src="/images/xls.png" width="50">
                    <div class="mt-1">XLS</div>
                </div>

                <div class="text-center">
                    <img src="/images/png.png" width="50">
                    <div class="mt-1">PNG</div>
                </div>

            </div>

            <!-- Bagikan Section -->
            <h6 class="fw-bold mb-2">Bagikan</h6>

            <div class="d-flex justify-content-around mb-3">

                <div class="text-center">
                    <img src="/images/WA.png" width="55">
                </div>

                <div class="text-center">
                    <img src="/images/IG.png" width="55">
                </div>

                <div class="text-center">
                    <img src="/images/X.png" width="55">
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
