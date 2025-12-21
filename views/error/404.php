<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>404 - Page Introuvable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Désolé, la page que vous recherchez n'a pas été trouvée. Code d'erreur 404.">

    <style>
        :root {
            /* Variables de couleur */
            --color-primary: #ff3d3d;
            /* Rouge vif pour l'alerte */
            --color-primary-dark: #d93131;
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
        <h1>404</h1>
        <h2>Oups ! Page Introuvable</h2>
        <p>
            Désolé, la page que vous recherchez n'existe pas ou a été déplacée.
            <br>
            Veuillez vérifier l'adresse ou retournez à la page d'accueil pour continuer.
        </p>
        <a href="/">Retourner à l'Accueil</a>
    </div>

</body>

</html>