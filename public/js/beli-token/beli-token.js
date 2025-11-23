// Fungsi untuk memformat angka menjadi format Rupiah
function formatRupiah(angka) {
    var reverse = angka.toString().split('').reverse().join(''),
        ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
    return 'Rp ' + ribuan;
}

// Fungsi untuk memperbarui tampilan Total Pembayaran
function updateSummary(nominal) {
    var totalFormatted = formatRupiah(nominal);

    $('.total-pln').text(totalFormatted);
    $('.total-payment-amount').text(totalFormatted);
    $('.total-amount').text(totalFormatted);
}

$(document).ready(function() {
    var defaultNominal = 10000;
    updateSummary(defaultNominal);

    $('.token-btn').on('click', function() {
        $('.token-btn').removeClass('active');
        $(this).addClass('active');

        var selectedNominal = parseInt($(this).data('nominal'));
        updateSummary(selectedNominal);
    });

    $('#meter-id').on('input', function() {
        var nomorMeter = $(this).val();
        var displayElement = $('#nama-pelanggan-display');

        displayElement.html('Nama Pelanggan: **Mencari...**');

        if (nomorMeter.length === 8) {

            var ajaxUrl = $('#meter-id').data('url'); // SOLUSI
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: ajaxUrl,
                method: 'POST',
                data: {
                    nomor_meter: nomorMeter,
                    _token: csrfToken
                },
                success: function(response) {
                    if (response.success) {
                        displayElement.html('Nama Pelanggan: **' + response.nama_pelanggan + '**');
                    }
                },
                error: function(xhr) {
                    var errorData = xhr.responseJSON;
                    var errorMessage = errorData && errorData.message ? errorData.message : 'Terjadi kesalahan.';
                    displayElement.html('Nama Pelanggan: **' + errorMessage + '**');
                }
            });

        } else {
            displayElement.html('Nama Pelanggan: **(Masukkan 8 digit Nomor Meter)**');
        }
    });
});
