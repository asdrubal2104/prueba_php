<?php
require_once 'functions.php';

$data = get_data(API_URL);
$untilmessage = get_until_message($data["days_until"]);
?>
<?php require 'sections/head.php'; ?>

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
  <p>Creado por Asdrubal</p>
</footer>
<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
    height: 100vh;
    padding: 20px;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
    padding: 20px;
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
    height: 50vh;
    width: auto;
  }
</style>