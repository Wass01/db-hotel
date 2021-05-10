<?php
  include_once __DIR__.'/../db.php';

  header('Content-Type: application/json');

  if (!empty($_GET) && $_GET['id']) {
    $id = $_GET['id'];
    $result = [];

    $stmt = $conn->prepare("SELECT * FROM stanze WHERE id = ?");
    $stmt->bind_param("i", $_GET['id']); // sostituisce i dati dalla chiamata ajax

    $stmt->execute(); // esegue codice SQL
    $rows = $stmt->get_result(); // salva risultati in una variabile
    while($row = $rows->fetch_assoc()){ // cicla i risultati e li trasforma in array associativi
      $result[] = $row; // push dell'array associativo in array di risultati
    }


    echo json_encode([
      "response" => $result,
      "success" => true,
    ]);
  } else {
    echo json_encode([
     "response" => $database,
     "success" => true,
   ]);
  }
?>
