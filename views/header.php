<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koło naukowe informatyków</title>
    <link rel="stylesheet" href="<?php echo URL;?>public/css/style.css">
</head>
<body>
<?php Session::init();?>
    <header>
        <nav>
            <ul class="main-nav">
                <li class="main-nav__item"><a href="<?php echo URL;?>index" class="main-nav__link">Główna</a></li>
                <li class="main-nav__item"><a href="<?php echo URL;?>projekty" class="main-nav__link">Projekty</a></li>
                <?php if(Session::get('loggedIn')==true): ?>
                    <li class="main-nav__item"><a href="<?php echo URL;?>dashboard/logout" class="main-nav__link">Wyloguj</a></li>
                <?php else: ?>
                    <li class="main-nav__item"><a href="<?php echo URL;?>login" class="main-nav__link">Zaloguj</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>