<?php

$user = 'u67293'; // Заменить на ваш логин uXXXXX
$pass = '3126725'; // Заменить на пароль, такой же, как от SSH
$db = new PDO(
    'mysql:host=localhost;dbname=forms1',
    $user, 
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

try {
    $stmt = $db->prepare("INSERT INTO forms1 (name) VALUES (:fio)");
    $fio - $_POST['fio'];
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}

?>