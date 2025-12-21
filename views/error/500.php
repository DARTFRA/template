<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>500 - Erreur Interne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Erreur 500 : Une erreur interne est survenue sur le serveur.">

    <style>
        :root {
            --color-primary: #e53935;
            --color-primary-dark: #c62828;
            --color-background: #f5f5f5;
            --color-text-main: #333;
            --color-text-secondary: #666;
            --color-white: white;
        }

        body {
            margin: 0;
            padding: 0;
            background: var(--color-background);
            font-family: 'Helvetica Neue', Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: var(--color-text-main);
            line-height: 1.6;
        }

        .container {
            text-align: center;
            padding: 50px 70px;
            background: var(--color-white);
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            max-width: 90%;
        }

        h1 {
            font-size: 80px;
            margin: 0;
            color: var(--color-primary);
            font-weight: 900;
            letter-spacing: 2px;
        }

        h2 {
            margin-top: 5px;
            font-size: 28px;
            font-weight: 600;
            color: var(--color-text-main);
        }

        p {
            font-size: 17px;
            margin: 25px 0 35px;
            color: var(--color-text-secondary);
        }

        a {
            display: inline-block;
            padding: 14px 30px;
            background: var(--color-primary);
            color: var(--color-white);
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: background-color 0.3s ease, transform 0.1s ease;
            border: none;
            cursor: pointer;
        }

        a:hover {
            background: var(--color-primary-dark);
            transform: translateY(-2px);
        }

        a:active {
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <div class="container" role="main">
        <h1>500</h1>
        <h2>Erreur Interne du Serveur</h2>
        <p>
            Oups ! Une erreur interne est survenue sur le serveur.
            <br>
            Nos équipes ont été notifiées. Veuillez réessayer plus tard.
        </p>
        <a href="/">Retourner à l'Accueil</a>
    </div>

</body>

</html>