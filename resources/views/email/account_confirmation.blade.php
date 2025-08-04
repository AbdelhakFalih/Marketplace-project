<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Confirmation de compte </title>
    </head>
    <body>
        <img src="images/logo.jpg" alt="Logo" style="width: 100px; height: 100px;">
        <h1> Bonjour {{ $name }}</h1>
        <p>
            Merci pour vôtre inscription. Ton compte est crée avec l email : :email., {{ $email }}
            {{ __('Veuillez cliquer sur le lien ci-dessous pour confirmer votre mail.') }}
        </p>
        <a href="{{ route('validate',[ 'user' => $user ])  }}">{{ __('Valider Mail ICI !!!') }}</a>
    </body>
</html>
