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
    <body class="login">
        @section('sidebar')
            <header class="top">
                <div class="wrap">
                    <aside class="logo">
                        <a href="/blog/admin/users/login">Anchor CMS</a> @section('sidebar-title') @show
                    </aside>
                </div>
            </header>
        @show

        <div class=" container">
            @yield('content')
        </div>
    </body>
</html>
