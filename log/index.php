<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Connectez vous à l'espace de travail</title>
</head>

<body>
    <div class="case">
        <form action="login.php" method="post">
            <a href="index.html">x</a>

            <h1>Acces au site de travaux</h1>
            <div class="form_champ">
                <label for="name">Nom d'utilisateur</label>
                <input type="text" id="uname" name="uname" placeholder="Neo">
            </div>
            <div class="form_champ">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Anderson">
                <button>SE CONNECTER</button>
            </div>
        </form>
    </div>
</body>

</html>