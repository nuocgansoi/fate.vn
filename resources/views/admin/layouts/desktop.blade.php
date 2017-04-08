<!doctype html>
<html class="no-js" lang="en">
@include('admin.layouts.include.head')
<body>
<div class="main-wrapper">
    <div class="app" id="app">
        @include('admin.layouts.include.header')
        @include('admin.layouts.include.sidebar')
        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        @yield('content')

        @include('admin.elements.modal')
    </div>
</div>
@include('admin.layouts.include.script')
</body>

</html>