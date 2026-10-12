<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir votre rôle</title>
</head>
<body>

    <h1>Bienvenue {{ Auth::user()->name }}</h1>

    <p>Choisissez votre rôle :</p>

    <form action="{{ route('roleuser.store') }}" method="POST">
        @csrf

        <button type="submit" name="role" value="owner">
            Owner
        </button>

        <button type="submit" name="role" value="tenant">
            Tenant
        </button>
    </form>

</body>
</html>
