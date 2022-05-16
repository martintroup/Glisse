<?php
header("Access-Control-Allow-Origin: *");  

$connect = new PDO("mysql:host=twommexdgn1622.mysql.db;dbname=twommexdgn1622;charset=utf8", "twommexdgn1622", "Aqwzsxedc123");
//$connect = new PDO("mysql:host=localhost.mysql.db;dbname=stations;charset=utf8", "root", "");


$post_data = json_decode(file_get_contents("php://input"));


$req = $connect->prepare("INSERT INTO client_glisse values(?, ?)");

$req->execute(array(
    $post_data->email,
    $post_data->pass
));

?>