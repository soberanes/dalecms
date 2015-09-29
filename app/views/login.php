<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Manage Develephant Blog</title>

		<script src="/blog/anchor/views/assets/js/zepto.js"></script>

		<link rel="stylesheet" href="http://dalecms.io/css/reset.css">
		<link rel="stylesheet" href="http://dalecms.io/css/admin.css">
		<link rel="stylesheet" href="http://dalecms.io/css/login.css">
		<link rel="stylesheet" href="http://dalecms.io/css/notifications.css">
		<link rel="stylesheet" href="http://dalecms.io/css/forms.css">

		<link rel="stylesheet" media="(max-width: 980px), (max-device-width: 480px)"
			href="http://dalecms.io/css/small.css">

		<meta http-equiv="X-UA-Compatible" content="chrome=1">
		<meta name="viewport" content="width=600">
	</head>
	<body class="login">
		<header class="top">
			<div class="wrap">
                <aside class="logo">
					<a href="/blog/admin/users/login">Anchor CMS</a>
				</aside>
			</div>
		</header>
        <section class="login content">
        	<form method="post" action="check/user">

        		<input name="token" type="hidden" value="3e59da67c27038d9454d9243825d4c79">

        		<fieldset>
        			<p><label for="user">Username:</label>
        			<input id="user" autocapitalize="off" autofocus="true" placeholder="Username" type="text" name="user"></p>

        			<p><label for="pass">Password:</label>
        			<input id="pass" placeholder="Password" type="password" name="pass"></p>

        			<p class="buttons"><a href="/blog/admin/amnesia">Forgotten your password?</a>
        			<button type="submit">Login</button></p>
        		</fieldset>
        	</form>

        </section>


    </body>
</html>
