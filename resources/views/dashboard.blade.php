<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventify</title>
    <link rel="stylesheet" href="{{ asset('assets/stylesdash.css') }}">
</head>
<body>
<header>
    <h1>Eventify</h1>

        <img src="assets/img/web3.png">
    <a href="{{ url('/profile') }}">


        <img src="assets/img/web2.png">
    </a>
</header>
<main>
    <section>
        <a href="{{ url('/create_event') }}">
            <img src="assets/img/web.png">
            <h2>Crea un evento</h2>
        </a>
    </section>
    <section>
        <a href="join_event">
            <img src="assets/img/web4.png">
            <h2>Ve a un evento</h2>
        </a>
    </section>
</main>
</body>
</html>
