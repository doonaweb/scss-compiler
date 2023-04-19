<?php
//By https://Doonaweb.ir

 // Set table name
$table_name_for_users = 'users';

// Establish a connection to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// Check if the table exists
$stmt = $pdo->query("SHOW TABLES LIKE '".$table_prefix.$table_name_for_users."'");
if ($stmt->rowCount() > 0) {
   // echo "Table '".$table_prefix.$table_name_for_users."' already exists.";
} else {
    // Create the table with prefix if it does not exist
    try {
        $pdo->exec("CREATE TABLE ".$table_prefix.$table_name_for_users." (
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            tel VARCHAR(20) NOT NULL,
            email VARCHAR(255) NOT NULL,
            user_role VARCHAR(255) NOT NULL,
            birthday DATE NOT NULL
        )");
        echo "Table '".$table_prefix.$table_name_for_users."' created successfully.";
    } catch (PDOException $e) {
        echo "Error creating table: " . $e->getMessage();
    }
}

// Disconnect from the database
$pdo = null;