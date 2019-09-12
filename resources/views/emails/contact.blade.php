<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h2>Prise de contact sur mon beau site</h2>
        <p>Réception d'une prise de contact avec les éléments suivants :</p>
        <ul>
            <li><strong>Nom</strong> : {{ $contact['name'] }}</li>
            <li><strong>Email</strong> : {{ $contact['email'] }}</li>
            <li><strong>Message</strong> : {{ $contact['text'] }}</li>
        </ul>
    </body>
</html>