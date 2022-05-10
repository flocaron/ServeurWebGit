<?php 
    $titre = "Welcome";

    $fullname = "Jhon Doo";

    $incremente = 0;

    $produit = [
        [
            'libele' => 'chaussure',
            'marque' => 'Collab nike dior',
            'prix' => 750,
            'stock' => 15,
        ],
        [
            'libele' => 'casquette',
            'marque' => 'Gucci',
            'prix' => 150,
            'stock' => 60,
        ],
        [
            'libele' => 'jean',
            'marque' => 'levis',
            'prix' => 90,
            'stock' => 100,
        ],
    ];

    function testSiHack() : void {
        if (isset($_GET['hack'])){
            echo "<div id='hack'><div>";    
        }
        return;
    }


    function loginDB() : PDO {
            try {
                $db = new PDO(
                    'mysql:host=localhost;dbname=projet;charset=utf8',
                    'root',
                    'root'
                );
            } catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
            }
            return $db;
    }



?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="icon" href="image/dromadaire.jpg">
    <meta charset="utf-8" />
    <title>Dromadaire</title>
</head>