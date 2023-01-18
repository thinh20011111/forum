<!DOCTYPE html>
<html lang="en">

<head>
	<base href="{{asset('/')}}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>@yield('title')</title>
	<link rel="icon" href="front/img/logo_fita.png" type="image/png" sizes="16x16">

	<link rel="stylesheet" href="front/css/main.min.css" type="text/css">
	<link rel="stylesheet" href="front/css/style.css" type="text/css">
	<link rel="stylesheet" href="front/css/color.css" type="text/css">
	<link rel="stylesheet" href="front/css/responsive.css" type="text/css">
</head>

<body>
    @yield('body')

	<script src="front/js/main.min.js"></script>
	<script src="front/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>