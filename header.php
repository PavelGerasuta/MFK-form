<header>
    <nav>
        <ul>
            <li><a href="registration.php" title="Регистрация">Регистрация</a></li>
            <li><a href="index.php" title="Вход">Вход</a></li>
            <li><a href="vendor/exit.php">Выход</a></li>
        </ul>
        <p>
            <?php
            echo $_SESSION['user']['login'];
            ?>
        </p>
    </nav>
</header>
