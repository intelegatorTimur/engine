<?php

$db = new PDO("mysql:host=localhost;dbname=engine","root","");
$result = $db->query("SELECT * FROM en_admin WHERE en_id = 1")->fetch(PDO::FETCH_ASSOC);
echo json_encode($result);

?>