<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gerenciador de Eventos</title>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    @include('shared.navbar')

<div class="content-wrapper">

    <div class="container-fluid">
        @include('shared.errors')
        @include('flash::message')
        @yield('content')
    </div>

    @include('shared.footer')
</body>

</html>
