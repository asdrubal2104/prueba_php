<?php
  const API_URL = "https://whenisthenextmcufilm.com/api";
  # Inicializar una nueva sesión de cURL; cURL handle
  $ch = curl_init(API_URL);
  // Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  /* Ejecutar la petición 
      y guardar el contenido
  */
  $result = curl_exec($ch);
  $data = json_decode($result, true);
  $name = "Asdrubal";
  
  curl_close($ch);

 ?>
<head>
  <meta charset="UTF-8" />
  <title>La próxima película de Marvel</title>  
  <meta name="description" content="La próxima película de Marvel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
  />
</head>

  <pre style="font-size: 10px; overflow: scroll; height: 250px;">
  <?php var_dump($data); ?>
  </pre>

<main>
  <section>
     <img src="<?= $data["poster_url"]; ?>" witdh="200" alt="Poster de la pelicula <?= $data["title"]; ?>" style="border-radius: 16px" />
  </section>

  <hgroup>
    <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> Dias</h3>
    <p>Fecha de estreno:  <?= $data["release_date"]; ?></p>
    <p>La Siguiente Pelicula es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>

<footer>
  <p>Creado por <?= $name ?> Con mucho amor</p>
</footer>
<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
    height: 100vh;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  footer {
    text-align: center;
  }

  img {
    margin: 0 auto;
    height: 500px;
    width: auto;
  }
</style>