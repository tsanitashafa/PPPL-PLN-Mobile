<!--Tiara Aulia Azadirachta Indica | 5026231148-->

@props(['title', 'backUrl'])

<div class="d-flex align-items-center position-sticky top-0 py-3 mb-3 px-2 bg-white"
     style="z-index: 999;">
    <!-- Tombol Back -->
    <a href="{{ $backUrl }}"
       class="position-absolute start-0 ms-3"
       style="z-index: 1000;">
        <img src="{{ asset('assets/img/back-button.png') }}" width="24" alt="Back">
    </a>

    <!-- Judul -->
    <h5 class="text-center w-100 m-0" style="font-weight: 600;">
        {{ $title }}
    </h5>
</div>
