<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
        <title>Урок 1</title>
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
                <h2>Урок 1</h2>
                <p>Табличка умножения</p>
            </div>

            <table class="table">
                <tr>
                    <?php
                    for ($num = 1; $num < 6; $num++) {
                        echo '<td>';
                        for ($i = 1; $i < 11; $i++) {
                            $result = $num * $i;
                            echo "$num x $i = ". $result . '<br>';
                        }
                        echo '</td>';
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    for ($num = 6; $num < 11; $num++) {
                        echo '<td>';
                        for ($i = 1; $i < 11; $i++) {
                            $result = $num * $i;
                            echo "$num x $i = ". $result . '<br>';
                        }
                        echo '</td>';
                    }
                    ?>
                </tr>
            </table>
        </main>
    </body>
</html>