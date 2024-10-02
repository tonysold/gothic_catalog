<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gothic Registration</title>
    <link rel="stylesheet" href="styles/registrationStyle.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Кто ты, воин?</h1>
        </div>
        <form method="post" action="/registration">
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
            <label for="admin">Хочу стать редактором</label>
            <input type="checkbox" name="admin">
            <br>
    </div>
    <div class="btn-container">
        <input type="hidden" name="register" value="true">
        <button type="submit" class="btn">Зарегистрироваться</button>
    </div>
    </form>
    </div>
    <?php
    require_once __DIR__ . '/../classes/pdoClasses.php';
//TODO: Доделать правильную регистрацию без ошибок
    if ((isset($_POST['username']) && isset($_POST['password'])) && ($_POST['register'] ==true)) {
        $registration = new DB_con;
        $registration->addUser();
    } else {
        echo 'Введите данные';
    }
    ?>
    <br>
    <a href="/">На Главную</a>
</body>

</html>