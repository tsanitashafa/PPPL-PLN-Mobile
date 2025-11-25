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

        <div class="location-item mt-3">
            <span>Rumah</span>
            <span>&#8250;</span>
        </div>

        <div class="location-item">
            <span>Toko</span>
            <span>&#8250;</span>
        </div>
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
            <div class="modal-header-custom mb-2">
                <button class="info-btn" type="button">
                    <img src="/images/info.png" width="30">
                </button>

                <span class="modal-title-centered">Tambah Lokasi</span>

                <button class="close-btn" data-bs-dismiss="modal">
                    ✕
                </button>
            </div>

            <!-- Map -->
            <iframe
                width="100%"
                height="200"
                style="border:0; border-radius: 12px;"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?q=-6.200000,106.816666&hl=id&z=15&output=embed">
            </iframe>

            <!-- Form -->
            <form>
                <div class="mb-3">
                    <label class="form-label">Lokasi</label>
                    <input type="text" class="form-control rounded-pill px-3" placeholder="Lokasi">
                </div>

                <div class="mb-3">
                    <label class="form-label">ID Pelanggan</label>
                    <input type="text" class="form-control rounded-pill px-3" placeholder="ID Pelanggan">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tandai Sebagai</label>
                    <input type="text" class="form-control rounded-pill px-3" placeholder="Contoh: Rumah / Toko">
                </div>

                <button type="submit" 
                        class="btn w-100 text-white"
                        style="background-color: #009FB7; border-radius: 12px; padding: 10px; font-weight: 600;">
                    Tambahkan Lokasi
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
