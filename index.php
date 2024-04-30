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
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
         // SNACK 1
function getPartite($partite){
    foreach ($partite as $partita) {
        echo $partita['squadra_casa'] . ' - ' . $partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . '-' . $partita['punti_ospite'] . '<br>';
    }
}
       //SNACK 2
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
          // SNACK 3
function getPosts($posts){
    foreach($posts as $date => $postList){
        echo "Data: $date<br>";
        foreach($postList as $post){
            foreach($post as $key => $value){
                echo "$key: $value <br>";
            }
            echo "<br>";
        }
        echo "<br>";
    }
}

             //SNACK 4
function getRandNum($min, $max, $nItems){
    $newArray = [];
    while(count($newArray)< $nItems){
        $number = rand($min, $max);
        if(!in_array($number, $newArray)){
            $newArray[] = $number;
        }
    }
return $newArray;
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
        <h2>snack 3</h2>
        <?php
        getPosts($posts);
        ?>
    </section>
    <section>
        <h2>snack 4</h2>
        <?php
         $randNums = getRandNum(1,100,15);
         foreach($randNums as $number){
            echo "$number  ";
         }
        ?>
    </section>
</body>

</html>