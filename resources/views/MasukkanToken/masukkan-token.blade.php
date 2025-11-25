<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Token</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
        }

        /* Icon Circle (mirip figma) */
        .icon-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #E5F7FB;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        /* Input style */
        .input-token {
            border-radius: 10px;
            font-size: 16px;
            height: 50px;
        }

        /* Tombol style figma */
        .btn-figma {
            background-color: #0AA3BB;
            color: white;
            border: none;
            border-radius: 22px;
            padding: 14px;
            font-size: 18px;
            width: 100%;
            box-shadow: 0px 3px 6px rgba(0,0,0,0.15);
        }

        .btn-figma:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

<div class="container py-4">

    <!-- Header Template -->
    <x-templatenavbar 
        title="Masukkan Token"
        backUrl="{{ url('/homepage') }}"
    />

    <!-- Icon + Title -->
    <div class="text-center mb-3">
        <div class="icon-circle mb-3">
            <img src="/images/Ellipse6.png" width="70">
        </div>

        <h5 class="fw-bold">Punya token listrik?</h5>
        <p class="text-muted">Masukkan token listriknya di sini ya.</p>
    </div>

    <!-- Input Token -->
    <input type="text" class="form-control input-token mb-4" placeholder="Enter Token">

    <!-- Tombol Submit -->
    <button 
        class="btn-figma"
        onclick="window.location.href='{{ url('/token-success') }}'">
        Masukkan
    </button>

</div>

</body>
</html>
