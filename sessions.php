<?php
require_once "modele/sessionDao.php";
// C'est le controleur qui gère les exceptions
try {
  $sessions = SessionDao::getAll();
  require_once "vue/sessionsV.php";
}
catch (PDOException $exc) {
  $message = "Problème technique. Veuillez essayer ultérieurement";
//  $exc = null;
  require_once "vue/messageV.php";
}