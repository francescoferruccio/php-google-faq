<!-- BONUS:
usare l'include/require per spostare i dati in un file dedicato
sviluppare funzione e stampare numero delle faq (da qualche parte in pagina)
sviluppare funzione che stampa i-esima faq (come visto a lezione per gli studenti) -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google FAQ</title>
    <link rel="stylesheet" href="app.css">
    <?php
      require_once "db.php";
    ?>
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="img/logo.png" alt="logo">
        <h3>Privacy e termini</h4>
      </div>
      <div class="nav">
        <div class="nav-left">
          <ul>
            <li><a href="#">Introduzione</a></li>
            <li><a href="#">Norme sulla privacy</a></li>
            <li><a href="#">Termini di servizio</a></li>
            <li><a href="#">Tecnologie</a></li>
            <li class="active"><a href="#">Domande frequenti</a></li>
          </ul>
        </div>
        <div class="nav-right">
          <a href="#">Account Google</a>
        </div>

      </div>
    </header>
    <main>
      <div class="container">
        <!-- ciclo nel primo array per estrarre la domanda e uso l'indice per estrarre la risposta corrispondete dal secondo array -->
        <?php
          function numeroDomande($domande) {
            return count($domande);
          }

          function stampaFaq($listaDomande, $listaRisposte, $indice) {
            echo "<h2>" . $listaDomande[$indice] . "</h2>";
            echo "<p>" . $listaRisposte[$indice] . "<p>";
          }

          foreach ($questions as $indice => $question) {
            stampaFaq($questions, $answers, $indice);
          }
        ?>
        <div>
          <h2>
            <?php
              echo "Numero domande: " . numeroDomande($questions);
            ?>
          </h2>
        </div>
      </div>
    </main>
    <footer>
      <div class="container">
        <div class="left-footer">
          <ul>
            <li><a href="#">Google</a></li>
            <li><a href="#">Tutto su Google</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Termini</a></li>
          </ul>
        </div>
        <div class="right-footer">
          <img src="img/index.png" alt="index-img">
          <select>
            <option value="it">Italiano</option>
            <option value="en">English</option>
            <option value="es">Espanol</option>
          </select>
        </div>
      </div>
    </footer>
  </body>
</html>
