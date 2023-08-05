<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new client();

try {

    $reponse = $client->get('https://character-database.becode.xyz/characters');
    $data = json_decode($reponse->getBody(), true);

    $imgs = ['images'] ?? 'Allez dehors';

} catch (Exception $e) {

    $imgs  = 'Une erreur s\'est produite lors de la récupération des conseils.';

    echo '<pre>';
    print_r($e);
    echo '</pre>';

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>character manager</title>
</head>
<body>
    <img src="<?php 
    $imgs
    ?>" alt="">
</body>
</html>