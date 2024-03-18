<?php

$user = 'u67293'; // Заменить на ваш логин uXXXXX
$pass = '3126725'; // Заменить на пароль, такой же, как от SSH
$db = new PDO('mysql:host=localhost;dbname=form', $user, $pass,
[PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

try {
    $stmt = $db->prepare("INSERT INTO application SET name = ?");
    $stmt->execute([$_POST['fio']]);
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}
try {
    $stmt = $db->prepare("INSERT INTO application SET name = ?");
    $stmt->execute([$_POST['tel']]);
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}
?>