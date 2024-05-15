<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> 
@yield('link')
<a href="{{route('Productos.index')}}"><h1>Productos</h1></a> <a href="{{route('Proveedor.index')}}"><h1>Proveedor</h1></a>
</head>

<body>
    
    @yield('content')

</body>
</html>