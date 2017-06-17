<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Slabo+27px|Bitter" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{--Bootstrap Photo Gallery--}}
    <script src="{{ asset('plugins/bs-photo-gallery/jquery.bsPhotoGallery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/bs-photo-gallery/jquery.bsPhotoGallery.css') }}">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/bktprc.css') }}">
</head>

<body>

@yield('content')

</body>

@yield('script')

</html>