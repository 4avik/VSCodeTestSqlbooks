<?php

require_once('connection.php');

$id = $_GET['id'];

echo $id;

$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ? AND status=?');
$stmt->execute([$email, $status]);
$user = $stmt->fetch();