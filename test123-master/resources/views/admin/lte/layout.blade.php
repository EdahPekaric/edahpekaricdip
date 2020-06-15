<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('admin.lte.head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.lte.navbar')

        @yield('header')

        @yield('content')

        @include('admin.lte.footer')
    </div>
    <!-- ./wrapper -->
    @include('admin.lte.js')
</body>
</html>
