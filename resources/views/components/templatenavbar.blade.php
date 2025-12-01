<!--Tiara Aulia Azadirachta Indica | 5026231148-->

@props(['title', 'backUrl'])

<div class="d-flex align-items-center position-relative py-2 mb-3">

    <!-- Tombol Back -->
    <a href="{{ $backUrl }}" 
        class="position-absolute start-0 ms-3" 
        style="z-index: 10;">
        <img src="{{ asset('images/back-button.png') }}" width="24">
    </a>

    <!-- Judul -->
    <h5 class="fw-bold text-center w-100 m-0">
        {{ $title }} <!--nama halaman yang akan ditampilkan-->
    </h5>
</div>
