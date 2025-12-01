<link rel="stylesheet" href="/css/templates/button.css">

@props([
    'href' => null,
    'type' => 'button',
    'variant' => null, // connect, pay, back, continue, enter
])

<button
    style=" color: white;
    background-color: #4fa3bb !important;
    border-radius: 15px !important;
    font-size: 18px;
    padding: 14px 0 !important; /* ini yang bikin tombol tinggi */
    border: none !important;"
    @if ($href) onclick="window.location.href='{{ $href }}'" @endif
    type="{{ $href ? 'button' : $type }}"
    {{ $attributes->merge([
        'class' => 'btn btn-block poppins-regular ' . ($variant ? $variant : ''),
    ]) }}>
    {{ $slot }}
</button>
