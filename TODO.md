# TODO: Fix OTP Verification Routing Issue

## Completed Tasks
- [x] Uncomment the signup OTP verification method (`verifyOTP`) in `PenggunaController.php`
- [x] Rename the e-wallet OTP verification method to `verifyPOTP` in `PenggunaController.php`
- [x] Update e-wallet routes (`/verifikasi-shopePay` and `/verifikasi-goPay`) in `routes/web.php` to use `verifyPOTP`

## Next Steps
- [ ] Test the signup flow: Submit OTP during registration and verify it redirects to the user registration form (`registuser`)
- [ ] Test e-wallet OTP verification: Submit OTP for ShopeePay and GoPay and verify it redirects to success/failure views
- [ ] Ensure no conflicts or errors in the application after changes
