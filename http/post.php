<?php

include "../config/db.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST['name'];
    
    $sql = "INSERT INTO `name`(`name`) VALUES ('$name')";
    $query = $pdo->prepare($sql);
    $query->execute();    

    http_response_code(200);

}

else {
    http_response_code(405);

}