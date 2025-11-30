{{-- 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Jost:wght@100..900&family=Montserrat:wght@100..900&family=Playfair+Display:wght@400..900&family=Poetsen+One&family=Poppins:wght@100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bottom-navbar.css') }}">
</head>

<style>
    /* (STYLE TETAP — tidak berubah) */
</style>

<body>

    <div style="position: relative; ">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 180px; z-index: 1;">
            <img src="assets/img/wave.svg" alt="Latar Belakang Gelombang"
                style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <div class="container py-5" style="position: relative; z-index: 2;">
            <div class="row mb-4">
                <div class="col">
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="d-flex align-items-center text-white">
                            <img src="{{ $user->profile_image ?: 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}"
                                alt="Foto Profil {{ $user->nama }}" class="rounded-circle"
                                style="width: 50px; height: 50px; object-fit: cover; border: 2px solid white; margin-right: 12px;">
                            <div>
                                <h2 class="h6 m-0 fw-bold poppins-bold">Hi, {{ $user->nama }}</h2>
                                <p class="small m-0 poppins-regular">{{ ucfirst($user->tier) }} - {{ $user->poin }} Poin</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="position-relative me-3" style="width: 150px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#6c757d"
                                    class="bi bi-search position-absolute"
                                    style="left: 15px; top: 50%; transform: translateY(-50%); pointer-events: none;"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                                <input type="text" class="form-control rounded-pill pe-2" placeholder="Search"
                                    style="height: 40px; padding-left: 40px; border: none; background-color: #fff; color: #6c757d; font-size: 0.9rem;">
                            </div>

                            <a href="{{ route('notif') }}" class="text-white fs-4 ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="card p-3 shadow-lg rounded-3 border-0" style="border-radius: 14px">

                        <div class="d-flex justify-content-between align-items-center pb-2 border-bottom mb-3">
                            <h3 class="h4 m-0 fw-normal">{{ $user->phone }}</h3>
                            <div class="d-flex align-items-center text-black" style="color: #18a2bb">
                                <i class="h4 fa-solid fa-chevron-right"></i>
                            </div>
                        </div>

                        <div class="row pt-0">

                            <div class="col-6 border-end">
                                <p class="text-muted small mb-1">Saldo</p>
                                <div class="d-flex align-items-center">
                                    <h4 class="m-0 fw-bold">Rp {{ number_format($user->saldo, 0, ',', '.') }}</h4>
                                    <div class="d-flex align-items-center text-black" style="color: #18a2bb">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <p class="text-muted small mb-1">Token Listrik</p>
                                <div class="d-flex align-items-center">
                                    <h4 class="m-0 fw-bold">0 kWh</h4>
                                    <a href="#" class="text-info ms-2">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- MENU -->
            <div class="row">
                <div class="col">
                    <div class="card p-3 shadow-lg border-0" style="border-radius: 14px">
                        <div class="row row-cols-4 g-3">

                            <div class="col text-center">
                                <a href="#" class="text-decoration-none d-block">
                                    <div class="card rounded-3 p-3 bg-info-custom" style="background-color:#16a1ba">
                                        <img src="assets/img/beli-token.svg" alt="beli token"
                                            class="d-block mx-auto" style="width: 48px; height: 48px;">
                                    </div>
                                    <p class="small mt-2 mb-0 text-dark poppins-regular">Beli Token</p>
                                </a>
                            </div>

                            <div class="col text-center">
                                <a href="{{ route('masukkan-token') }}" class="text-decoration-none d-block">
                                    <div class="card rounded-3 p-3 bg-info-custom" style="background-color:#16a1ba">
                                        <img src="/images/masukkan-token.png" alt="masukkan token"
                                            class="d-block mx-auto" style="width: 48px; height: 48px;">
                                    </div>
                                    <p class="small mt-2 mb-0 text-dark poppins-regular">Masukkan Token</p>
                                </a>
                            </div>
                            <div class="col text-center">
                                <a href="{{ route('cek-token') }}" class="text-decoration-none d-block">
                                    <div class="card rounded-3 p-3 bg-info-custom" style="background-color:#16a1ba">
                                        <img src="/images/cek-token.png" alt="cek token" class="d-block mx-auto"
                                            style="width: 48px; height: 48px;">
                                    </div>
                                    <p class="small mt-2 mb-0 text-dark poppins-regular">Cek Token</p>
                                </a>
                            </div>
                            <div class="col text-center">
                                <a href="#" class="text-decoration-none d-block">
                                    <div class="card rounded-3 p-3 bg-info-custom" style="background-color:#16a1ba">
                                        <img src="/images/lihat-semua.png" alt="Lihat Semuanya" class="d-block mx-auto"
                                            style="width: 48px; height: 48px;">
                                    </div>
                                    <p class="small mt-2 mb-0 text-dark poppins-regular">Lihat Semuanya</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4 mb-2">
                <div class="col">
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="d-flex align-items-center text-black">
                            <h4 class="h4 m-0 fw-bold poppins">Artikel</h4>
                        </div>

                        <div class="d-flex align-items-center text-black ">
                            <i class=" h4 fa-solid fa-chevron-right"></i>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row mb-4">
                <div class="col">
                    <div class="card p-4 shadow-lg border-0" style="border-radius: 14px; background-color: #e7f5f9;">

                        <div class="row g-3">

                            <div class="col-8">
                                <h4 class="m-0 fw-bold poppins" style="font-size: 1.35rem; line-height: 1.4;">
                                    PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025
                                </h4>

                                <h6 class="mt-3 m-0 poppins" style="opacity: 0.8;">
                                    Tanggal 11 May 2025
                                </h6>
                            </div>

                            <div class="col-4 d-flex justify-content-end align-items-center">
                                <img src="/images/artikel.svg" alt="Foto Artikel" class="img-fluid"
                                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 10px;">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="card p-4 shadow-lg border-0" style="border-radius: 14px; background-color: #e7f5f9;">

                        <div class="row g-3">

                            <div class="col-8">
                                <h4 class="m-0 fw-bold poppins" style="font-size: 1.35rem; line-height: 1.4;">
                                    PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025
                                </h4>

                                <h6 class="mt-3 m-0 poppins" style="opacity: 0.8;">
                                    Tanggal 11 May 2025
                                </h6>
                            </div>

                            <div class="col-4 d-flex justify-content-end align-items-center">
                                <img src="/images/artikel.svg" alt="Foto Artikel" class="img-fluid"
                                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 10px;">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

   @include('components/template')
    </div>

</body>
</html>