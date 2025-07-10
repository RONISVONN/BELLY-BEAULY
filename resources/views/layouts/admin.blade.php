<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Belly Beauly - @yield('title')</title>

    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{ asset('admin/css/sb-admin-2.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body id="page-top">
    <div id="wrapper">

        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('layouts.partials.topbar')

                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>

                    @yield('content')
                </div>
                </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Belly Beauly {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            </div>
        </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('admin/js/sb-admin-2.js') }}"></script>

    {{-- Scripts específicos de cada página (opcional) --}}
    @stack('scripts')
</body>
</html>