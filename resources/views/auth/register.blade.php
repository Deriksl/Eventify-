<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>

    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">

</head>

<body background="http://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg">
<div class="login-page">
    <div class="form">
        <form class="login-form">
            <input type="text" placeholder="name"/>
            <input type="text" placeholder="lastname"/>
            <input type="email" placeholder="email"/>
            <input type="text" placeholder="phone number"/>
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <input type="password" placeholder="confirm password"/>
            <input type="file" placeholder="profile picture"/>
            <button><span>register</span></button>
            <p class="message">have a account? <a href={{route('login')}}>login</a></p>
        </form>
    </div>
</div>
<!-- Bootstrap JavaScript Libraries -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
></script>
</body>
</html>
