<?php
require "db.php";

$task = $_POST['task'];
$stmt = $db->prepare("INSERT INTO tasks (task) VALUES (?)");
$stmt->execute([$task]);

echo "OK";
