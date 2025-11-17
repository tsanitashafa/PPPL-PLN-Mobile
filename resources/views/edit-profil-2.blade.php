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

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
        }

        .profile-container {
            position: relative;
            display: inline-block;
        }

        .profile-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .upload-icon {
            position: absolute;
            right: 0;
            bottom: 0;
            transform: translate(20%, 20%);
            background-color: #17a2b8;
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom bg-white">
        <a href="#" class="text-dark"><i class="fas fa-arrow-left fa-lg"></i></a>
        <h5 class="mb-0 font-weight-medium">Edit Profile</h5>
        <a href="#" class="text-info font-weight-medium">Simpan</a>
    </div>

    <!-- Foto Profil -->
    <div class="text-center my-4">
        <div class="profile-container">
            <img src="assets/img/image-profile.png" alt="Foto Profil">
            <div class="upload-icon">
                <i class="fas fa-plus"></i>
            </div>
        </div>
    </div>

    <!-- Form Edit -->
    <div class="container">
        <form>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control rounded-pill" id="nama" placeholder="Masukkan nama Anda">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control rounded-pill" id="email"
                    placeholder="Masukkan email Anda">
            </div>

            <div class="form-group">
                <label for="tgl">Tanggal Lahir</label>
                <input type="date" class="form-control rounded-pill" id="tgl">
            </div>

            <div class="form-group">
                <label for="hp">No. HP</label>
                <input type="text" class="form-control rounded-pill" id="hp" placeholder="Masukkan nomor HP">
            </div>
        </form>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
