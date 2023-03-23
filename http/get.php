<?php

include "../config/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET'){

    $sql = "SELECT * FROM name";
    $querry = $pdo->query($sql);

    $data = $querry->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
    http_response_code(200);

}

else {
    http_response_code(405);

}