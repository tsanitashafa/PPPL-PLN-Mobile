// mengambil verifikasi kode token — gabungkan 6 input PIN ke field tersembunyi
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    if (!form) return;
    form.addEventListener('submit', function (e) {
        let pin = '';
        document.querySelectorAll('.pin-input').forEach(function (input) {
            pin += input.value || '';
        });
        const hidden = document.getElementById('verifikasi');
        if (hidden) hidden.value = pin;
    });
});
