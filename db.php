<?PHP


$user = 'u67293'; // Заменить на ваш логин uXXXXX
$pass = '3126725'; // Заменить на пароль, такой же, как от SSH
$db = new PDO(
    'mysql:host=localhost;dbname=forms1',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
); // Заменить test на имя БД, совпадает с логином uXXXXX


// try {
//     $stmt = $db->prepare("INSERT INTO forms SET (name,email) = ?");
//     $stmt->execute([$_POST['login']]);
//     $stmt->execute([$_POST['email']]);
// } catch (PDOException $e) {
//     print ('Error : ' . $e->getMessage());
//     exit();
// }
try {
    $stmt = $db->prepare("INSERT INTO forms (name, email,message) VALUES (:name, :email,:message)");

    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $stmt->bindParam(':login', $fio);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $tel);
    $stmt->execute();
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}


?>