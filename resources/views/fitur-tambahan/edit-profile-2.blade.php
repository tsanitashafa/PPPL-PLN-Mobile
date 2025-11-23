<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body style="font-family: 'Poppins', sans-serif; background-color: #fff;">

    <!-- Header -->
    <div class="d-flex align-items-center justify-content-between p-3  bg-white">
        <a href="/profile" class="text-dark">
            <i class="fas fa-arrow-left fa-lg"></i>

        </a>

        <h5 class="nunito-sans-semibold">Edit Profile</h5>
        <a href="#" class="nunito-sans-semibold font-weight-medium text-black" style="color: black"
            onclick="document.getElementById('formProfile').submit();">
            Simpan
        </a>
    </div>

    <!-- Foto Profil -->
    <div class="text-center my-4">
        <div style="position: relative; display: inline-block;">
            <img src="{{ $pengguna->photoUrl ?? '' }}"
                style="
            width:100px;
            height:100px;
            min-width: 100px; /* Tambahkan ini */
            min-height: 100px; /* Tambahkan ini */
            border-radius:50%;
            object-fit:cover;
            display:block; /* Tambahkan ini */
        ">

        </div>
    </div>

    <!-- Form Edit -->
    <div class="container">
        <form id="formProfile" action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="penggunaid" value="{{ $pengguna->penggunaid ?? '' }}">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama"
                    class="form-control rounded-pill poppins-medium color-white shadow-sm" id="nama"
                    placeholder="Masukkan nama Anda" value="{{ $pengguna->nama ?? '' }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"
                    class="form-control rounded-pill poppins-medium color-white shadow-sm" id="email"
                    value="{{ $pengguna->email ?? '' }}">
            </div>

            <div class="form-group">
                <label for="tgl">Tanggal Lahir</label>
                <input type="date" name="tanggallahir"
                    class="form-control rounded-pill poppins-medium color-white shadow-sm" id="tgl"
                    value="{{ $pengguna->tanggallahir ? date('Y-m-d', strtotime($pengguna->tanggallahir)) : '' }}">
            </div>

            <div class="form-group poppins-medium">
                <label for="hp">No. HP</label>
                <input type="text" name="phone"
                    class="form-control rounded-pill poppins-medium color-white shadow-sm" id="hp"
                    value="{{ $pengguna->phone ?? '' }}" placeholder="Masukkan nomor HP">
            </div>
        </form>
    </div>


    <!-- Toast Success -->
    @if (session('success'))
        <div class="toast position-fixed" style="top: 20px; right: 20px; z-index: 9999;" data-delay="2000"
            id="successToast">
            <div class="toast-header bg-success text-white">
                <strong class="mr-auto">Berhasil</strong>
                <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        @if (session('success'))
            $(document).ready(function() {
                $('#successToast').toast('show');
            });
        @endif
    </script>

</body>

</html>
