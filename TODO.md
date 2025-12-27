# Notification Feature Implementation

## Tasks
- [x] Modify PenggunaController::notif() to calculate token balance and check for low token condition
- [x] Add logic to detect recent successful token purchases using session flags
- [x] Update notif.blade.php to conditionally display low token and successful purchase notification cards
- [x] Set session flag in PelangganController::transaksiBerhasil() for purchase notifications
- [x] Move notif.blade.php to fitur-tambahan folder and update controller view path
- [ ] Test the notification display logic

## Details
- Low token threshold: 20% remaining
- Use existing cektoken data for balance calculation
- Use session 'recent_purchase' flag for purchase notifications
- No database modifications required
