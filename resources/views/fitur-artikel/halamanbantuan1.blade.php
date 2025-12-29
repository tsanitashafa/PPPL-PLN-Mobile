{{--5026231213 Haliza Putri Amelliani--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Bantuan</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        body {
            background-color: #f8f9fa;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }


        .web-navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 15px 0;
            margin-bottom: 30px;
            position: relative;
        }


        .web-navbar .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #212529;


            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin: 0;
        }

        .back-link {
            text-decoration: none;
            color: #212529;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.2s;
            z-index: 10;
            position: relative;
        }

        .back-link:hover {
            color: #00aeb6;
        }


        .main-container {
            max-width: 960px;
            margin: 0 auto;
            padding-bottom: 50px;
        }


        .help-card {
            background: white;
            border-radius: 12px;
            padding: 25px 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            text-decoration: none;
            color: #000;
            display: block;
            text-align: center;
            font-weight: 500;
            font-size: 1rem;
            line-height: 1.4;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .help-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-color: #00aeb6;
            color: #000;
        }

    </style>
</head>
<body>

    {{-- Revised by 5026231088 Tsanita Shafa Hadinanda --}}
  <x-templatenavbar
        title="Bantuan"
        backUrl="{{ url('/artikel') }}"
    />
  {{-- End Revised by 5026231088 Tsanita Shafa Hadinanda --}}

    <div class="container main-container">
        <div class="row">
            <div class="col-12">
                @foreach($bantuan as $item)
                <a href="{{ route('bantuan.detail', ['id' => $item->bantuanid]) }}" class="help-card">
                    {{ $item->judul }}
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
