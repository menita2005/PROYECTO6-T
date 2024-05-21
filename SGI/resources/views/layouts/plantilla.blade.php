<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="/SGI/resources/css/css.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@yield('link')


  <div class="d-flex justify-content-center">
  <nav class="navbar navbar-expand-lg bg-body-tertiary p-3" >
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}" style="width:80px"><img src="images/meencanbta.png" alt="logo" style="width:100%"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('Productos.index')}}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Proveedor.index')}}">Proveedor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Categoria.index')}}">Categoria</a>
          </li>



        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

</div>
</head>

<body class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

    @yield('content')

</body>
</html>
