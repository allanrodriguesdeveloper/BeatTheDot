<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <title>UniPonto</title>
</head>
<body>
<form class="form-login"  method="post">
    <div class="login-card card border-0">
        <div class="card-header text-light bg-dark-login">
            <img src="../../../assets/favicon.png" style="width: 40px;" alt="">
            <span class="font-weight-bold mx-2 ">UniPonto</span>
        </div>

        <div class="card-body text-light bg-dark-login">
            <?php include(TEMPLATE_PATH . '/messages.php') ?>
            <div class="form-group">
                <label for="email">Matricula</label>
                <input value="<?= $email;
                $email; ?>" type="email" id="email" name="email"
                       class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                       placeholder="informe a sua matricula" autofocus>
                <div class="invalid-feedback">
                    <?= $errors['email']; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password"
                       class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>" placeholder="*********"
                       autofocus>
                <div class="invalid-feedback">
                    <?= $errors['password']; ?>
                </div>
            </div>
        </div>

        <div class="card-footer bg-dark-login">
            <button class="btn btn-success btn-lg btn-block"><i class="icofont-login mx-2"></i>Entrar</button>
        </div>
    </div>
</form>
</body>
</html>