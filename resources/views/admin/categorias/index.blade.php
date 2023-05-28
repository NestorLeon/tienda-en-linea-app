<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>CRUD CATEGORIAS</title>
</head>
<body>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <a href="" class="brand-link">
                <img src="" alt="Cargando logo..." class="img-fluid img-size-64 elevation-4">
                <span class="brand-text size-32">ADMIN CATEGORIAS</span>
            </a>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu">
                        <a class="nav-link">
                            <i class="bi bi-archive"></i>
                            <p> > Categorias</p> 
                        </a>
                        <ul class="nav nav-treeview" id="submenuProductos">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="bi bi-bag-plus"></i> 
                                    <p>Crear</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  " class="nav-link"> 
                                    <i class="bi bi-search"></i> 
                                    <p>Actualizar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"> 
                                    <i class="bi bi-search"></i> 
                                    <p>Eliminar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="bi bi-cart-plus"></i> 
                            <p> > Consultar</p> 
                        </a>
                        <ul class="nav nav-treeview" id="submenuEntradas">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="bi bi-bag-plus"></i> 
                                    <p>Buscar categoria</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link">
                                    <i class="bi bi-search"></i> 
                                    <p>Ver todas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
{{-- href=" {{ route('categories.index') }} " --}}