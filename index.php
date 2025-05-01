   <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    
    $parking = $_GET['parcheggio'] ?? "" ;
    $vote = (int) $_GET["voto"] ?? 0;
    $new_hotels = [];
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    
    </head>
<body>
<form action="">
<label for="parcheggio">Si cerca con parhceggio?</label>
<input type="checkbox" name="parcheggio" value="true">
<label for="voto">Voto minimo hotel</label>
<input type="number" placeholder = 1 name = "voto" min = 1 max = 5>
<button type = "submit">Invio</button>
</form>
<h1>Hotels</h1>
<?php    
// Creazione tabella
if($vote != 0 && !$parking){
    echo "Solo voto";
    
    foreach($hotels as $hotel){
        foreach($hotel as $key => $value){
            if($key == "vote"){
                if($value >= $vote){
                    array_push($new_hotels, $hotel);
                    
                }
            }
        }
    }
    foreach($new_hotels as $hotel){
    echo "<section class = row>";
foreach($hotel as $key => $value){
    if($key == "parking"){
        $value = $value ? "Con parcheggio" : "No parcheggio";
    }
    echo "<p class = col>" . $value . "</p>";
}
echo "</section>";}
    // var_dump($new_hotels);
}if(!$vote && $parking == "true"){
echo "Solo parcheggio ";

    foreach($hotels as $hotel){
        foreach($hotel as $key => $value){
            if($key == "parking"){
                if($value != false){
                    array_push($new_hotels, $hotel);
                    
                }
            }
        }
    }
    foreach($new_hotels as $hotel){
    echo "<section class = row>";
foreach($hotel as $key => $value){
    if($key == "parking"){
        $value = $value ? "Con parcheggio" : "No parcheggio";
    }
    echo "<p class = col>" . $value . "</p>";
}
echo "</section>";}
    var_dump($new_hotels);
}if($vote != 0 && $parking == "true"){
echo "Parcheggio e voto ";

    foreach($hotels as $hotel){
        foreach($hotel as $key => $value){
            if($key == "parking"){
                if($value != false){
                    if($vote !=0){
                    array_push($new_hotels, $hotel);
                    }
                }
            }
        }
    }
    foreach($new_hotels as $hotel){
    echo "<section class = row>";
foreach($hotel as $key => $value){
    if($key == "parking"){
        $value = $value ? "Con parcheggio" : "No parcheggio";
    }
    echo "<p class = col>" . $value . "</p>";
}
echo "</section>";}
    // var_dump($new_hotels);
}else{
    foreach($hotels as $hotel){
    echo "<section class = row>";
foreach($hotel as $key => $value){
    if($key == "parking"){
        $value = $value ? "Con parcheggio" : "No parcheggio";
    }
    echo "<p class = col>" . $value . "</p>";
}
echo "</section>";}
}



// var_dump($parking)
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>