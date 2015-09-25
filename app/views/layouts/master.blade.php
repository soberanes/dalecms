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
    <body>
        @section('sidebar')
            <header class="top">
                <div class="wrap">
                    <nav>
                        <ul>
                            <li class="logo">
                                <a href="{{ URL::to('/') }}">Dale CMS</a>
                            </li>
                            <li class="active"><a href="#">Posts</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Users</a></li>
                            <li><a href="#">Extends</a></li>
                        </ul>
                    </nav>

                    {{ HTML::link('/', 'Logout', array('class' => 'btn')) }}
                    {{ HTML::link('contactos', 'Visitar sitio', array('class' => 'btn', 'target' => '_blank')) }}

                </div>
            </header>
        @show

        <div class=" container">
            @yield('content')
        </div>
    </body>
</html>
