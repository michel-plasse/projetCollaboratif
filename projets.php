
<?php

$idSession = filter_input(INPUT_GET, "idSession", FILTER_VALIDATE_INT);

$erreur = null;
$session = null;
if ($idSession == null || $idSession == false) {
  $message = "idSession doit être préent et entier";
  require_once "vue/messageV.php";
} else {
  require_once "modele/SessionDAO.php";
  // Recuperer les donnees des projets
  require_once "vue/projetsV.php";
}
?>
    
