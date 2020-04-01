<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Dashboard Template · Bootstrap</title>
    <meta name="theme-color" content="#563d7c">

    @include('admin.layout.partial.style')
</head>
<body>
@include('admin.layout.partial.topNav')

<div class="container-fluid">
    <div class="row">
        @include('admin.layout.partial.leftNav')
        @yield('content')

        @include('admin.layout.partial.javascript')
    </div>
</div>
</body>
</html>
