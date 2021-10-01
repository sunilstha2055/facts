<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/admin/css') }}/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin/css') }}/custom.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <title>@yield('title')</title>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('admin.layouts.footer')
    </div>
    <script src="{{asset('assets/admin')}}/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/bootsrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/admin') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/adminlte.js"></script>
    <script src="{{ asset('assets/admin') }}/js/demo.js"></script>
    <script>
    $(document).ready(function() {
        var i = 1;
        $('.add').on('click', function() {
            var field =
                '<br><div> <input type="text" id="feature" name="feature" class="form-control" > ';
            $('.appending_div').append(field);
            i = i + 1;
        })
    })
    </script>
</body>

</html>