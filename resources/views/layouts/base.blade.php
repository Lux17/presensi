<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/icon.png') }}" rel="icon">
    {{-- <link href="css/sb-admin-2.min.css" rel="stylesheet">
     --}}
    @include('partials.styles')
    @stack('style')

    <title>{{ $title }} | Sanjore Education</title>
</head>

<body>

    <x-toast-container />

    @yield('base')

    @include('partials.scripts')
    @stack('script')


</body>

</html>