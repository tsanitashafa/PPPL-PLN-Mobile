@props(['title', 'backUrl'])

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="css/beli-token/beli-token.css">

<div class="d-flex align-items-center position-relative py-3">
    {{-- memperbaiki buuton back atas 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}
    <!-- Tombol Back -->
    <a href="{{ $backUrl }}" class="position-absolute  m-3 text-decoration-none text-dark" style="z-index: 10;">
        <i class="fa-solid fa-arrow-left fa-xl"></i>
    </a>

    <!-- Judul (selalu di tengah) -->
    <h5 class="fw-bold text-center w-100 m-0">
        {{ $title }}
    </h5>
</div>
