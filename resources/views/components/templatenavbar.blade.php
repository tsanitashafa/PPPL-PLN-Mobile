<!--Tiara Aulia Azadirachta Indica | 5026231148-->

@props(['title', 'backUrl'])

<div class="d-flex align-items-center position-relative py-3 mb-3 px-2">

    <!-- Tombol Back -->
    <a href="{{ $backUrl }}"
        class="position-absolute start-0 ms-3"
        style="z-index: 10;">
        <img src="{{ asset('images/back-button.png') }}" width="24">
    </a>

    <!-- Judul (tanpa bold) -->
    <h5 class="text-center w-100 m-0" style="font-weight: 600;">
        {{ $title }}
    </h5>
</div>
