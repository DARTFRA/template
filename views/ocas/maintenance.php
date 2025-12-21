<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colis DartFood | Service désactivé</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #0f172a;
            --card: #020617;
            --primary: #22c55e;
            --muted: #94a3b8;
            --text: #e5e7eb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            color: var(--text);
            padding: 24px;
        }

        .card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.01));
            backdrop-filter: blur(10px);
            border-radius: 22px;
            padding: 40px 30px;
            text-align: center;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 16px;
            color: var(--primary);
        }

        p {
            font-size: 1rem;
            color: var(--muted);
            margin-bottom: 24px;
            line-height: 1.5;
        }

        a {
            display: inline-block;
            padding: 12px 28px;
            background: var(--primary);
            color: #052e16;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 700;
            transition: transform 0.15s, box-shadow 0.15s;
        }

        a:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(34, 197, 94, 0.25);
        }

        img.logo {
            max-width: 120px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="https://colis.dartfood.com/assets/logo.png" alt="Logo DartFood" class="logo">
        <h1>Service colis désactivé</h1>
        <p>Le site <strong>colis.dartfood.com</strong> n'est pas disponible pour le moment.<br>
            Nous travaillons à sa remise en ligne. Merci de votre patience !</p>
        <a href="https://dartfood.com">⬅ Retour au site principal</a>
    </div>
</body>

</html>