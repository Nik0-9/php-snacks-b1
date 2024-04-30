<?php
$partite = [
    [
        "squadra_casa" => "Celtics",
        "squadra_ospite" => "Lakers",
        "punti_casa" => 102,
        "punti_ospite" => 95
    ],
    [
        "squadra_casa" => "Bulls",
        "squadra_ospite" => "Warriors",
        "punti_casa" => 110,
        "punti_ospite" => 105
    ],
    [
        "squadra_casa" => "Knicks",
        "squadra_ospite" => "Rockets",
        "punti_casa" => 95,
        "punti_ospite" => 92
    ],
    [
        "squadra_casa" => "Heat",
        "squadra_ospite" => "Spurs",
        "punti_casa" => 115,
        "punti_ospite" => 108
    ],
    [
        "squadra_casa" => "Thunder",
        "squadra_ospite" => "Clippers",
        "punti_casa" => 98,
        "punti_ospite" => 103
    ]
];
function getPartite($partite){
    foreach ($partite as $partita) {
        echo $partita['squadra_casa'] . ' - ' . $partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . '-' . $partita['punti_ospite'] . '<br>';
    }
}
function getData(){
    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        if (empty($name) || empty($email) || empty($age)) {
            echo 'Inserire dei valori nei campi';
        } else {
            control($name, $email, $age);
        }
    }
}
function control($name,$email,$age){
    if (strlen($name) > 2 && strpos($email, '.') !== false && strpos($email, '@') && is_numeric($age)) {
        //echo "nome: $name email: $email età: $age";
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snack </title>
</head>

<body>
    <section>
        <h2>Snack 1</h2>
        <?php
        getPartite($partite);
        ?>
    </section>
    <section>
        <h2>Snack 2</h2>
        <form action="index.php" method="GET">
            <input type="text" placeholder="Inserisci nome" name="name">
            <input type="email" placeholder="Inserisci una email" name="email">
            <input type="number" placeholder="Inserisci la tua età" name="age">
            <button type="submit">Invia</button>
        </form>
            <?php
           getData();
            ?>
    </section>
    <section>
        <h2>snak 3</h2>
    </section>
</body>

</html>