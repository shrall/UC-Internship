<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>UC Internship</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="UC Internship">
    <meta name="author" content="UC Internship">
    <meta name="description" content="Universitas Ciputra">

    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}"
        color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css"
        href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">
    {{-- Sweet Alert --}}
    <link type="text/css"
        href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}"
        rel="stylesheet">
    <!-- Notyf -->
    <link type="text/css" href="{{ asset('assets/vendor/notyf/notyf.min.css') }}"
        rel="stylesheet">
    {{-- Full Calendar --}}
    <link type="text/css" href="{{ asset('assets/vendor/fullcalendar/main.min.css') }}"
        rel="stylesheet">
    {{-- Drop Zone --}}
    <link type="text/css"
        href="{{ asset('assets/vendor/dropzone/dist/min/dropzone.min.css') }}"
        rel="stylesheet">
    {{-- Choices --}}
    <link type="text/css"
        href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}"
        rel="stylesheet">
    {{-- Leaflet --}}
    <link type="text/css" href="{{ asset('assets/vendor/leaflet/dist/leaflet.css') }}"
        rel="stylesheet">

    {{-- DataTables CSS --}}
    <link type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets/css/volt.css') }}" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>
@auth
    @include('inc.sidebar')
@endauth

<body>
    <main @auth class="content" @endauth>
        @auth
            @include('inc.navbar')
        @endauth
        <div class="preloader bg-soft flex-column justify-content-center align-items-center"><img
                class="loader-element animate__animated animate__jackInTheBox" src="{{ asset('assets/img/brand/light.svg') }}"
                height="60" alt="Volt logo"></div>
        @yield('content')
    </main>
    @auth
        @include('inc.modal.logout')
    @endauth

    <!-- Core -->
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

    <!-- Slider -->
    <script src="{{ asset('assets/vendor/nouislider/distribute/nouislider.min.js') }}">
    </script>

    <!-- Jarallax -->
    <script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>

    <!-- Smooth scroll -->
    <script
        src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}">
    </script>

    <!-- Count up -->
    <script src="{{ asset('assets/vendor/countup.js/dist/countUp.umd.js') }}"></script>

    <!-- Notyf -->
    <script src="{{ asset('assets/vendor/notyf/notyf.min.js') }}"></script>

    <!-- Charts -->
    <script src="{{ asset('assets/vendor/chartist/dist/chartist.min.js') }}"></script>
    <script
        src="{{ asset('assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
    </script>

    <!-- Datepicker -->
    <script
        src="{{ asset('assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}">
    </script>

    <!-- Simplebar -->
    <script src="{{ asset('assets/vendor/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    {{-- DataTables from VoltPro --}}
    <script
        src="{{ asset('assets/vendor/simple-datatables/dist/umd/simple-datatables.js') }}">
    </script>
    {{-- SweetAlert --}}
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}">
    </script>
    {{-- Moment --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    {{-- FullCalendar --}}
    <script src="{{ asset('assets/vendor/fullcalendar/main.min.js') }}"></script>
    {{-- Drop Zone --}}
    <script src="{{ asset('assets/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
    {{-- Choices --}}
    <script
        src="{{ asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}">
    </script>
    {{-- Leaflet --}}
    <script src="{{ asset('assets/vendor/leaflet/dist/leaflet.js') }}"></script>
    {{-- svgMap --}}
    <script src="{{ asset('assets/vendor/svgmap/dist/svgMap.min.js') }}"></script>

    {{-- DataTables JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function () {
            var thetable = $('#table').DataTable();

            // $('#searchDataTables').on('keyup', function () {
            //     thetable.search(this.value).draw();
            // });

        });

    </script>

    <!-- Volt JS -->
    <script src="{{ asset('assets/js/volt.js') }}"></script>
</body>

</html>
