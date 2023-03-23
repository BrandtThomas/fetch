<?php
    // informations d'identification pour la base de données
        $host = 'localhost'; // nom d'hôte
        $dbname = 'fetch'; // nom de la base de données
        $username = 'root'; // nom d'utilisateur
        $password = ''; // mot de passe

        // tentative de connexion à la base de données
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            // configuration des options PDO
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
        } catch(PDOException $e) {
            // message d'erreur en cas d'échec de la connexion
            echo "<p>Erreur de connexion à la base de données: " . $e->getMessage() . "</p>";
        }