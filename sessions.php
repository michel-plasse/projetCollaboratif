<?php
require_once "modele/sessionDao.php";
$sessions = SessionDao::getAll();
require_once "vue/sessionsV.php";