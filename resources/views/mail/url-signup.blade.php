<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Passwizard - Signup Mail</title>
</head>

<body style="font-family: 'Lato', sans-serif;">
    <div style="display: flex; justify-content: center;">
        <img alt="" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" style="height: 10rem;">
    </div>

    <div style="display: flex; justify-content: center; margin-top: 5rem;">
        Olá, {{ $user }}, ficamos felizes por você querer fazer parte do Passwizard, sinta essa magia confirmando seu e-mail.
    </div>

    <div style="display: flex; justify-content: center; margin-top: 5rem;">
        <a href="http://localhost:8000/confirm-account/{{ $hash }}">
            Confirmar E-mail
        </a>
    </div>
</body>

</html>
