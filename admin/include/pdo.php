<?php

$servername = "localhost";
$username = 'root';
$password = '';
$db_name = 'advt_sportslab';

$pdo = new PDO("mysql:host=$servername;dbname=advt_sportslab", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM `products` WHERE `product_title` LIKE ? ");
$stmt->execute(["%" . $_POST["search"] . "%"]);
$results = $stmt->fetchAll();
if (isset($_POST["ajax"])) {
    echo json_encode($results);
}
