<?php
$dsn = 'pgsql:host=127.0.0.1;port=5432;dbname=toors_com;user=postgres;password=prit@2004';
try {
    $pdo = new PDO($dsn);
    echo "Connected to PostgreSQL database successfully\n";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
