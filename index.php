<?php


const API_URL = "https://whenisthenextmcufilm.com/api";
# Initialize a new cURL session
$ch = curl_init(API_URL);
// Indicate that we want to receive the result of the request and not show it on the screen
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*
  Execute the request
  and store the 
  result
  */
$result = curl_exec($ch);
$data = json_decode($result, true);
// close the cURL session
curl_close($ch);
var_dump($data);
?>

<head>
    <meta charset="UTF-8">
    <title>Marvel API</title>
    <meta name="description" content="Marvel API">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2"> -->
</head>
<main>
    <section>
        <img src="<?= $data["poster_url"]?>" alt="Poster of Film" width="300">
    </section>
    <h2>
        La proxima pelicula de Marvel es
        <?= $data["title"] ?>
    </h2>
</main>