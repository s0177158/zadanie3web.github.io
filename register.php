<?PHP
header('Content-Type: text/html; charset=UTF-8');
require_once('db.php');
$fio - $_POST['fio'];
$tel - $_POST['tel'];
$email - $_POST['email'];
$date - $_POST['date'];
$pol - $_POST['pol'];
$lovl - $_POST['languages'];
$bio - $_POST['bio'];
$check - $_POST['check'];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
    if (!empty($_GET['save'])) {
      // Если есть параметр save, то выводим сообщение пользователю.
      print('Спасибо, результаты сохранены.');
    }
    // Включаем содержимое файла form.php.
    include('form.php');
    // Завершаем работу скрипта.
    exit();
  }

  $errors = FALSE;
  if (empty($_POST['fio'])) {
    print('Заполните имя.<br/>');
    $errors = TRUE;
  }
  
  if (empty($_POST['year']) || !is_numeric($_POST['year']) || !preg_match('/^\d+$/', $_POST['year'])) {
    print('Заполните год.<br/>');
    $errors = TRUE;
  }

  if ($errors) {
    // При наличии ошибок завершаем работу скрипта.
    exit();
  }


?>