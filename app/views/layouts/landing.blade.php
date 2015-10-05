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
    <body class="front">
        @section('sidebar')
            <header class="top">
                <div class="wrap">
                    <aside class="logo">
                        <a href="/blog/admin/users/login">Anchor CMS</a>
                    </aside>
                </div>
            </header>
        @show

        <div class=" container">
            @yield('content')
        </div>
        <footer class="wrap bottom">
			<small>Powered by DaleCMS, version 0.0.1.</small>
			<em>Make content management beautiful.</em><br />
			<em>{{ HTML::link('login', 'Admin area') }}</em>
		</footer>
    </body>
</html>
