<?php
require "../config/db.php";
$stmt = $pdo->prepare("DELETE FROM customers WHERE customer_id=?");
$stmt->execute([(int)($_GET['id'] ?? 0)]);
header("Location: index.php");
