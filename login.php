<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация - AreaWeb</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
<main class="main">
    <div class="wrapper">
        <form action="" class="form">
            <h3 class="mb-4">Авторизация</h3>
            <div class="mb-3">
                <label for="email" class="form-label">Email адрес</label>
                <input type="email" class="form-control" id="email" placeholder="igor@gudkov.ru">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" placeholder="********">
            </div>
            <div class="mb-3 d-flex align-items-center justify-content-between">
                <button type="submit" class="btn btn-primary">Войти</button>
                <a href="/register.php">Создать аккаунт</a>
            </div>
        </form>
    </div>
</main>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>