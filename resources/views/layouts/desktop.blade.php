<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('layouts.include.head')
<body>
@yield('content')
@include('layouts.include.script')
@stack('js')
</body>
</html>