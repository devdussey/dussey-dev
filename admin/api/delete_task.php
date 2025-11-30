<?php
require "db.php";

$id = $_POST['id'];
$stmt = $db->prepare("DELETE FROM tasks WHERE id=?");
$stmt->execute([$id]);

echo "OK";
