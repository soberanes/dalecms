<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DaleCMS!</title>
        {{ HTML::style('css/reset.css') }}
        {{ HTML::style('css/admin.css') }}
        {{ HTML::style('css/login.css') }}
        {{ HTML::style('css/notifications.css') }}
        {{ HTML::style('css/forms.css') }}
    <body class="admin">
        @section('sidebar')
            <header class="top">
                <div class="wrap">
                    <nav>
                        <ul>
                            <li class="logo">
                                <a href="{{ URL::to('/') }}">Dale CMS</a>
                            </li>
                            <li class="active"><a href="#">Artículos</a></li>
                            <li><a href="#">Páginas</a></li>
                            <li><a href="#">Categorías</a></li>
                            <li><a href="#">Usuarios</a></li>
                            <li><a href="{{ URL::to('admin/contacts') }}">Contactos</a></li>
                            <li><a href="#">Extends</a></li>
                        </ul>
                    </nav>

                    {{ HTML::link('logout', 'Logout', array('class' => 'btn')) }}
                    {{ HTML::link('/', 'Visitar sitio', array('class' => 'btn', 'target' => '_blank')) }}

                </div>
            </header>
        @show

        <div class=" container">
            @yield('content')
        </div>
        <footer class="wrap bottom">
			<small>Powered by DaleCMS, version 0.0.1.</small>
			<em>Make content management beautiful.</em>
		</footer>
    </body>
</html>
