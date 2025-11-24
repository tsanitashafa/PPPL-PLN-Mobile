// mengambil data dari button
document.getElementById('btnBayar').addEventListener('click', function () {
    document.getElementById('meterInput').value = this.dataset.meter;
    document.getElementById('nominalInput').value = this.dataset.nominal;
    document.getElementById('totalInput').value = this.dataset.total;
    document.getElementById('voucherInput').value = this.dataset.voucher;

    document.getElementById('formBayar').submit();
});
