<html>
    <head>
        <meta charset="utf-8">
        <title>Mon test BDD</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Modifier</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </body>
</html>

<?php
$a = 8;
$b = 3;

if ($a < $b){
    echo "b est plus grand que a. a = ". $a." et b = ".$b."<br/>";
} else{
    echo "a est plus grand que b. a = ". $a." et b = ".$b. "<br/>";
}

$tableauFruit = [
    "fruit1" => "fraise",
    "fruit2" => "framboise",
    "fruit3" => "pêche",
    "fruit4" => "abricot"
];
foreach($tableauFruit as $Fruits){
    if (stristr($Fruits, 'a') !== false)
    echo $Fruits. '<br/>';
}

function nombre_fruits($compteur){
    return count($compteur);
}
echo nombre_fruits($tableauFruit);