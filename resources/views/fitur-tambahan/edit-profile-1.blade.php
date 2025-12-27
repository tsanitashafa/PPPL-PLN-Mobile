{{-- 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fitur-tambahan/edit-profile-1.css') }}">
</head>

<body>
    @include('components/template')

    <div style="position: relative; ">

        <div class="d-flex align-items-center justify-content-between p-3 position-relative">

            <a href="{{ route('homepage') }}" class="text-decoration-none text-dark position-absolute start-0 ms-3">
                <i class="fa-solid fa-arrow-left fa-lg"></i>
            </a>
            <br />
            <br />
            <h5 class="nunito-sans-semibold">Profile</h5>

            <div style="width: 24px;"></div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="col py-5" style="position: relative; z-index: 2;">

            <div class="row mb-4">
                <div class="col">
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="d-flex align-items-center text-black">
                            <img src="{{ asset($user->profile_image) }}" class="rounded-circle profile-img-circle">
                            <div>
                                <h2 class="h6 m-0 fw-bold poppins-bold">{{ $user->nama }}</h2>
                                <p class="small m-0 poppins-regular">{{ $user->email }}</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="card rounded-circle text-white d-flex align-items-center justify-content-center"
                                style="
                                    background-color: #16a1ba;
                                    width: 50px;
                                    height: 50px;
                                    font-size: 24px;
                                ">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row mt-4 mb-2">
                <div class="col">
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="d-flex align-items-center text-black">
                            <h4 class="h4 m-0 fw-bold poppins-bold">Account</h4>
                        </div>



                    </div>
                </div>
            </div>


            <ul class="list-unstyled m-0 p-0">

                <!-- Edit Profile -->
                <li class="mb-3">
                    <a href="{{ route('edit-profile-2') }}"
                        class="d-flex justify-content-between align-items-center p-3 bg-white rounded shadow-sm text-dark text-decoration-none">
                        <div class="d-flex align-items-center">
                            <i class="far fa-user-circle fa-lg mr-3 text-secondary "></i>
                            <span class="poppins-regular">Edit Profile</span>
                        </div>

                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                </li>
                </li>

                <li class="mb-3">
                    <div class="d-flex justify-content-between align-items-center p-3 bg-white rounded shadow-sm">
                        <div class="d-flex align-items-center">
                            <i class="fa-regular fa-bell fa-lg mr-3 text-secondary"></i>
                            <span class="font-weight-normal text-dark">Notifications</span>
                        </div>
                        <div class="custom-control custom-switch m-0">
                            <input type="checkbox" class="custom-control-input" id="notifSwitch"
                                {{ $user->notifenabled ? 'checked' : '' }}>
                            <label class="custom-control-label" for="notifSwitch"></label>
                        </div>
                    </div>
                </li>

                <!-- Sign Out -->
                <li>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit"
                            class="d-flex justify-content-between align-items-center p-3 bg-white rounded shadow-sm text-dark text-decoration-none border-0 w-100">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-sign-out-alt fa-lg mr-3 text-secondary"></i>
                                <span class="font-weight-normal">Sign Out</span>
                            </div>
                            <i class="fas fa-chevron-right text-muted"></i>
                        </button>
                    </form>
                </li>

            </ul>



        </div>
    </div>

    {{-- script untuk set notification switch agar terganti di database by mirza --}}
    <script>
        $(document).ready(function() {
            $('#notifSwitch').change(function() {
                var isChecked = $(this).is(':checked');
                $.ajax({
                    url: '{{ route('toggle-notification') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        notifenabled: isChecked ? 1 : 0
                    },
                    success: function(response) {
                        if (response.success) {
                            console.log('Notification setting updated successfully');
                        } else {
                            alert('Failed to update notification setting');
                            // Revert the switch if update failed
                            $('#notifSwitch').prop('checked', !isChecked);
                        }
                    },
                    error: function() {
                        alert('An error occurred while updating notification setting');
                        // Revert the switch if error occurred
                        $('#notifSwitch').prop('checked', !isChecked);
                    }
                });
            });
        });
    </script>


</html>
