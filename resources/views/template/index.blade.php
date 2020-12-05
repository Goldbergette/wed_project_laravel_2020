{{--
./resources/views/template/index.blade.php
--}}
<!doctype html>
<html class="no-js" lang="zxx">
<head>
 @include('template.partials._head')
</head>
<body>
<!-- Preloader Start -->
 @include('template.partials._preload')
<!-- Preloader Start-->

 @include('template.partials._header')

 @include('template.partials._main')

 @include('template.partials._footer')

<!-- JS here -->

 @include('template.partials._scripts')

</body>
</html>
