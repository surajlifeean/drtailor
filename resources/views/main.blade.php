
<!DOCTYPE html>
<html>
<head>
<title>Dr Tailor | Home</title>
@include('Partials.header')
</head>
<body>
<!--header-->
@include('Partials.navbar')
<!--banner-->
@yield('content');
<!--footer-->

@include('Partials.footer')
<!--footer-->
</body>
</html>