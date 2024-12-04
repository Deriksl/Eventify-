<!DOCTYPE html>
<html>
<head>
    <title>Eventify</title>
    <link rel="stylesheet" href="{{ asset('assets/create_event.css') }}">
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
    <form>
        <div>
            <label for="name">Nombre del evento</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="description">Descripción</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="location">Localidad</label>
            <input type="text" id="location" name="location">
        </div>
        <div>
            <label for="date">Fecha</label>
            <input type="date" id="date" name="date">
        </div>
        <div>
            <label for="logo">Logo</label>
            <input type="file" id="logo" name="logo">
        </div>
        <button type="submit">Crear evento</button>
    </form>
</main>
</body>
</html>
