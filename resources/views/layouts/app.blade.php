<!DOCTYPE html>

<head>
    @include('includes.head')
</head>

<body data-spy="scroll" data-target="#myTarget">
<!-- Content -->
@yield('content')
        <!-- Content ends -->

@section('script')
        <!-- Scripts -->
@include('includes.scripts')
        <!-- Scripts ends -->
@show
</body>
</html>