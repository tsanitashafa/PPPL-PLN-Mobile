{{-- 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}
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
    <link rel="stylesheet" href="{{ asset('css/fitur-tambahan/edit-profile-2.css') }}">
</head>

<body>

    <div class="header-edit-profile">
        <a href="{{ route('edit-profile-1') }}" class="text-dark"><i class="fas fa-arrow-left fa-lg"></i></a>
        <h5 class="mb-0 font-weight-medium">Edit Profile</h5>
        <button type="submit" form="editProfileForm" class="btn-save-link">Simpan</button>
    </div>

    <div class="text-center my-4">
        <div class="profile-container">
            <img id="profileImage" src="{{ asset($user->photourl) }}" class="rounded-circle">
            <div class="upload-icon">
                <label for="profileImageInput">
                    <i class="fas fa-plus"></i>
                </label>
                <input type="file" id="profileImageInput" name="profile_image" accept="image/*"
                    style="display: none;" form="editProfileForm">
            </div>
        </div>
    </div>

    <div class="container">
        <form id="editProfileForm" method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control rounded-pill" id="nama" name="nama"
                    value="{{ $user->nama }}" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control rounded-pill" id="email" name="email"
                    value="{{ $user->email }}" placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
                <label for="phone">No. HP</label>
                <input type="text" class="form-control rounded-pill" id="phone" name="phone"
                    value="{{ $user->phone }}" placeholder="Masukkan nomor HP" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control rounded-pill" id="tanggallahir" name="tanggallahir"
                    value="{{ $user->tanggallahir }}">
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
