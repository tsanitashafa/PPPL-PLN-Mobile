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

    <div class="d-flex align-items-center justify-content-between p-3 border-bottom bg-white">
        <a href="{{ route('edit-profile-1') }}" class="text-dark"><i class="fas fa-arrow-left fa-lg"></i></a>
        <h5 class="mb-0 font-weight-medium">Edit Profile</h5>
        <button type="submit" form="editProfileForm" class="btn btn-link text-info font-weight-medium p-0">Simpan</button>
    </div>

    <div class="text-center my-4">
        <div class="profile-container">
            <img id="profileImage" src="{{ $user->profile_image ?: 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}" alt="Foto Profil {{ $user->nama }}" class="rounded-circle">
            <div class="upload-icon">
                <label for="profileImageInput" style="cursor: pointer; margin: 0;">
                    <i class="fas fa-plus"></i>
                </label>
                <input type="file" id="profileImageInput" name="profile_image" accept="image/*" style="display: none;" form="editProfileForm">
            </div>
        </div>
    </div>

    <div class="container">
        <form id="editProfileForm" method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control rounded-pill" id="nama" name="nama" value="{{ $user->nama }}" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control rounded-pill" id="email" name="email" value="{{ $user->email }}"
                    placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
                <label for="phone">No. HP</label>
                <input type="text" class="form-control rounded-pill" id="phone" name="phone" value="{{ $user->phone }}" placeholder="Masukkan nomor HP" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control rounded-pill" id="tanggallahir" name="tanggallahir" value="{{ $user->tanggallahir }}">
            </div>

        </form>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Preview image before upload
        document.getElementById('profileImageInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profileImage').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

</body>

</html>
