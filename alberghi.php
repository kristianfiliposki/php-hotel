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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
           $first = $hotels[0];
            echo $first['name'];
        ?>
    </pre>
    <pre>
        <?php 
            $second = $hotels[1];
            echo $second['name'];
        ?>
    </pre>
    <pre>
        <?php 
            $third = $hotels[2];
            echo $third['name'];
        ?>
    </pre>
    <pre>
        <?php 
            $fourth = $hotels[3];
            echo $fourth['name'];
        ?>
    </pre>



    <form action="ricerca.php">
        <input type="text" placeholder="voto" name="voto">
        <button type="submit">send</button>
    </form>
</body>
</html>
<style >
    
</style>