<?php
require "db.php";
$stmt = $db->query("SELECT * FROM projects ORDER BY created_at DESC");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
