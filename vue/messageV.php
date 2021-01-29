<?php
// Affiche une exception $exc ou un message $message
?>
<p><?= $message ?></p>
<?php
if (isset($exc)) {
  ?>
  <p><?= $exc->getMessage() ?></p>
  <?php
}