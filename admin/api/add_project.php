<?php
require "db.php";

$title = $_POST['title'];
$desc  = $_POST['description'];

$stmt = $db->prepare("INSERT INTO projects (title, description) VALUES (?,?)");
$stmt->execute([$title, $desc]);

echo "OK";
