<?php
$Tableau = [ 0 => ["nom","prenom","age","ville", "passions"=> ["passion1","passion2"]],
            1 => ["nom1","prenom1","age1","ville1", "passions1"=> ["passion11","passion21"]],
];
?>
<head>
    <meta charset="UTF-8">
    <title>Couilles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <div><h1>Liste couilles</h1></div>
    <div></div>
</header>
<div id="contenues">
    <ul>
        <?php
            foreach ($Tableau as $key){
                echo "<li>" . $key[0] . " " . $key[1] .
                    " <a href='couille.php?nom=$key[0]&amp;prenom=$key[1]&amp;age=$key[2]&amp;ville=$key[3]'>
                    INFO</a></li>";
            }
        ?>
    </ul>
</div>

