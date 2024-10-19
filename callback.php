<?php
// Récupérer les données de la requête
$data = json_decode(file_get_contents('php://input'), true);

// Traiter les données (par exemple, les enregistrer en base de données)
if ($data) {
    // Exemple : enregistrer les données dans un fichier log
    file_put_contents('callback_log.txt', print_r($data, true), FILE_APPEND);
    
    // Répondre à l'API
    http_response_code(200); // Indiquer que la requête a été traitée avec succès
} else {
    http_response_code(400); // Indiquer une erreur si les données ne sont pas valides
}
?>
