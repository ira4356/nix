<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
        <title>Урок 3</title>
    </head>

    <body>
        <header class="page-header">
            <div class="container">
                <h1 class="heading">Hello, NIX Education!</h1>
                <h2>Уроки для всех желающих</h2>
            </div>
        </header>

        <main class="main-content">
            <div class="container">
                <h2>Форма обработки текста</h2>
            </div>

            <form class="form" action="form.php" method="post">
                <label for="text">Введите Ваш текст:</label><br><br>
                <textarea name="text" id="text" cols="55" rows="5"><?= isset($_POST['text']) ? $_POST['text'] : '' ?></textarea><br>
                <input class="button" type="submit" value="Отправить"><br><br>
<!--                <input class="button" type="reset" value="Назад"><br><br>-->
            </form>
            <br><br>
            <div class="result">
                <div class="container">
            <?php
            $result = null;
            $text = $_POST['text'] ?? '';

            if (!empty($text)) {
                $result = strrev($text);
                echo 'Результат обработки:' . '<br><br>' . $result . '<br><br>';
            }

            if (!empty($result)) {
                echo "<a href='form.php' align='center'>Назад</a><br><br>";
            }
            ?>
                <a class="button" href="nixeducation.php">К списку всех уроков</a>
                </div>
            </div>
        </main>

        <footer class="page-footer">
            <div class="container">
                <a class="footer-email" href="mailto:tsaruk4356@gmail.com">tsaruk4356@gmail.com</a>
            </div>
        </footer>
    </body>
</html>
