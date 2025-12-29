{{--5026231088 Tsanita Shafa Hadinanda--}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voucher</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('css/reward.css') }}" rel="stylesheet">
</head>
<body>
    <x-templatenavbar
        title="Voucher"
        backUrl="{{ url('/reward') }}"
    />

    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-voucher" role="tabpanel">

            @foreach($vouchers as $v)
                <button class="voucher-card w-100 text-start mb-4"
                        onclick="window.location.href='{{ url('infovoucher/'.$v->rewardid) }}'">
                    <div class="card-body d-flex align-items-center">
                        @php
                            $voucherImg = 'voucher' . $v->nilai . '.png';
                        @endphp

                        <div class="thumb">
                            <img src="{{ asset('img/' . $voucherImg) }}" alt="voucher" class="img-fluid">
                        </div>
                        <div class="ms-4 me-2">
                            <div class="fw-semibold">{{ $v->rewardname }}</div>
                        </div>
                    </div>
                </button>
            @endforeach

            <div style="height: 24px;"></div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
