<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Passwizard - Signup Mail</title>
</head>

<body style="font-family: 'Lato', sans-serif;">
    <div style="display: flex; justify-content: center;">
        <img style="height: 10rem;" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
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
