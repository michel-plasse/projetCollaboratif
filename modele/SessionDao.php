<?php

class SessionDao {

  /** session de id $idSession (tableau association),
   * ou null si pas trouvé
   * @param type $idSession
   */
  public static function getById($idSession) {
    $result = null;
    if ($idSession == 1) {
      // Un tableau associatif
      $result = array(
          "id_session" => 1,
          "nom" => "CDA 1"
      );
    }
    return $result;
  }

  /** Liste de toutes les sessions, sous forme d'un tableau de
   * tableaux associatifs. Nous ne nous préoccupons pas de la pagination
   * (liste par bloc).
   * @return tableau_de_tableaux_associatifs
   */
  public static function getAll() {
//    return array(
//        array(
//            "id_session_formation" => 1,
//            "nom" => "CDA 1"
//        ),
//        array(
//            "id_session_formation" => 2,
//            "nom" => "CDI 7"
//    ));
    // Obtenir une connexion à la BD
    require_once 'DB.php';
    $db = DB::getConnection();
    // Preparer une requete SQL (la compiler)
    $sql = "SELECT * FROM session_formation";
    $stmt = $db->prepare($sql);
    // L'executer
    $stmt->execute();
    // Retourner les lignes resultats sous forme
    // d'un tableau de tableaux associatifs
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
