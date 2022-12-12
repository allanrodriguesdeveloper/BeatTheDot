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
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <title>UniPonto</title>
</head>
<body>
<header class="header bg-dark-login text-light">
    <div class="logo">
        <img src="../../../assets/favicon.png" style="width: 30px;" alt="">
        <span class="font-weight-bold mx-2 ">UniPonto</span>
    </div>

    <div class="menu-toggle mx-3">
        <i class="icofont-navigation-menu"></i>
    </div>

    <div class="spacer"></div>
    <div class="dropdown">
        <div class="dropdown-button">
            <img class="avatar"
                 src="<?= "http://www.gravatar.com/avatar.php?gravatar_id=" .
                 md5(mb_strtolower(trim($_SESSION['user']->email))) ?>"
                 alt="user">
            <span class="ml-3 font-weight-light">
                <?= $_SESSION['user']->name; ?>
            </span>
            <i class="icofont-simple-down mx-2"></i>
        </div>

        <div class="dropdown-content">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="logout.php">
                        <i class="icofont-logout mr-2"></i>Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>