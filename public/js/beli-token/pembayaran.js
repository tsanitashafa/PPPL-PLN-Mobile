let selectedMetode = null;

    document.querySelectorAll('.metode-pilih').forEach(item => {
        item.addEventListener('click', function () {
            selectedMetode = this.dataset.metode;
            document.getElementById('metodeInput').value = selectedMetode;

            // optional UI effect
            document.querySelectorAll('.metode-pilih').forEach(el => el.classList.remove('active'));
            this.classList.add('active');
        });
    });

    document.getElementById("btnBayar").addEventListener("click", function() {
        if (!selectedMetode) {
            alert('Silakan pilih metode pembayaran');
            return;
        }

        document.getElementById("meterInput").value = this.dataset.meter;
        document.getElementById("nominalInput").value = this.dataset.nominal;
        document.getElementById("totalInput").value = this.dataset.total;
        document.getElementById("voucherInput").value = this.dataset.voucher;

        document.getElementById("formBayar").submit();
    });
