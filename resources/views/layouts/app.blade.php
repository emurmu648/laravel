<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        @yield('title')
    </title>

    <link href="{{asset('Admin')}}/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


</head>
<body class="sb-nav-fixed">
{{--top-header--}}
@include('layouts.include.top-header')
{{--//top-header--}}
<div id="layoutSidenav">
{{--side-bar--}}
@include('layouts.include.sidebar')
{{--//side-bar--}}
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                @yield('main-content')
            </div>
        </main>
{{--footer--}}
@include('layouts.include.footer')
{{--//footer--}}
    </div>
</div>

<!--Toastr js-->
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
         @foreach($errors->all() as $error)
          toastr.error('{{$error}}','Error',{
              closeButton:true,
        progressBar:true,
    });
        @endforeach
    @endif
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('Admin')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Sweet Alert2 Js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


</body>
</html>
