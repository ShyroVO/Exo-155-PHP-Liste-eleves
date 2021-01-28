
<head>
    <meta charset="UTF-8">
    <title>Couilles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <div><h1>Couille:</h1></div>
    <div><a href='index.php'>Retour</a></div>
</header>

<div id="contenues">
    <ul>
        <?php
        echo "<li>" . $_GET['nom'] . " " . $_GET['prenom'] . "</li>";
        echo "<li>" . $_GET['age'] . "</li>";
        echo "<li>" . $_GET['ville'] . "</li>";
        ?>
    </ul>
</div>
