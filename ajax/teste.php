<?php
 
 
$data['email'] = $_POST['email'];
$data['text'] = $_POST['text'];

console.log($data['text']);
echo json_encode($data);
exit;
?>