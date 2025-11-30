@props(['title', 'backUrl'])

<div class="d-flex align-items-center position-relative py-2" style="border-bottom: 1px solid #eaeaea;">
    
    <!-- Tombol Back -->
    <a href="{{ $backUrl }}" 
       class="position-absolute start-0 ms-3" 
       style="z-index: 10;">
        <img src="{{ asset('images/back-button.png') }}" width="24">
    </a>

    <!-- Judul (selalu di tengah) -->
    <h5 class="fw-bold text-center w-100 m-0">
        {{ $title }} <!-- namanya apa-->
    </h5>
</div>
