<?php
require_once __DIR__ . '/config.php';
try {
	$pdo = new PDO("mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8", DB_USER, DB_PASS, [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}    
?>
