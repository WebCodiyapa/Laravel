<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TripAdvisor - @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jssocials.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jssocials-theme-flat.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pnotify.custom.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/backend.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

@include('admin.partials.header')
@include('admin.partials.sidebar_left')

    <div class="content-wrapper">
        @yield('content')
    </div>


</div>
@yield('modals')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugin/jssocials.min.js') }}"></script>
<script src="{{ asset('js/plugin/select2.min.js') }}"></script>
<script src="{{ asset('js/plugin/pnotify.custom.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin-layout.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@yield('footer-scripts')

<script>
    $(document).ready(function () {
        @if (Session::has('success'))
        new PNotify({
            title: 'Notification',
            text: '{{Session::pull('success')}}',
            type: 'success',
            delay: 3000,
            styling: 'bootstrap3',
            buttons: {
                closer: false,
                sticker: false
            }
        });
        @endif

        @if (Session::has('error'))
        new PNotify({
            title: 'Warning',
            text: "{{ Session::pull('error') }}",
            type: 'warning',
            delay: 3000,
            styling: 'bootstrap3',
            buttons: {
                closer: false,
                sticker: false
            }
        });
        @endif
    })

</script>

</body>

</html>
