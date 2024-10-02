<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gothic Autentification</title>
    <link rel="stylesheet" href="styles/registrationStyle.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Кто ты, воин?</h1>
        </div>
        <form method="post" action="/autentification">
            <div class="form-group">
                <label for="username">Введитe имя</label>
                <input type="text" name="username">
                <br>
            </div>
            <div class="form-group">
                <label for="password">Введите пароль</label>
                <input type="password" name="password">
                <br>
            </div>
            <br>
    </div>
    <div class="btn-container">
        <input type="hidden" name="auth" value="true">
        <button type="submit" class="btn">Войти</button>
    </div>
    </form>
    </div>
    <?php
    require_once __DIR__ . '/../classes/pdoClasses.php';
    require_once __DIR__ . '/../classes/sessionClasses.php';
//TODO: Доделать правильную авторизацию без ошибок
    if (isset($_POST['username']) && isset($_POST['password']) && ($_POST['auth'] == true)) {
        $autentification = new DB_con;
        $autentification->loginUser();
    } else {
        echo 'Введите все данные';
    }
    if ($autentification == true) {
        $_SESSION['login_success'] = true;
        header('Location: tables');
    }
    print_r($_POST);
    ?>
    <a href="/">На Главную</a>
</body>

</html>