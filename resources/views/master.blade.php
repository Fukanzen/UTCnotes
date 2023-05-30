<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{url('master.css')}}">

</head>
<body>
    @include('layout.header')

    @yield('content')
</body>
</html>