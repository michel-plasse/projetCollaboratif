<?php
if (count($sessions) != 0) {
  ?>
  <p>Il y a <?= count($sessions) ?> sessions</p>
  <ol>
    <?php
    foreach ($sessions as $session) {
      ?>
    <li><a href="projets.php?idSession=<?= $session["id_session_formation"]?>"><?= $session["nom"] ?></a>
        (n° <?= $session["id_session_formation"]?>)</li>
      <?php
    }
    ?>
  </ol>
  <?php
} else {
  ?>
  <p>Aucune session trouvée</p>
  <?php
}
?>