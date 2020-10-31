<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Урок 2</title>
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
        <h2>Урок 2</h2>
        <p>Веселая табличка умножения</p>
    </div>

    <table class="table">
        <tr>
            <?php
            for ($num = 1; $num < 6; $num++) {
                echo '<td>';
                for ($i = 1; $i < 11; $i++) {
                    $result = $num * $i;
                    $search = ['1', '2', '3', '4'];
                    $replacement = ['<span style="color:red">1</span>', '<span style="color:green">2</span>', '<span style="color:yellow">3</span>', '<span style="color:blue">4</span>'];
                    $string = "$num * $i = $result";
                    $string1 = str_replace($search, $replacement, $string);
                    echo $string1 . '<br>';
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
                    $search = ['1', '2', '3', '4'];
                    $replacement = ['<span style="color:red">1</span>', '<span style="color:green">2</span>', '<span style="color:yellow">3</span>', '<span style="color:blue">4</span>'];
                    $string = "$num * $i = $result";
                    $string1 = str_replace($search, $replacement, $string);
                    echo $string1 . '<br>';
                }
                echo '</td>';
            }
            ?>
        </tr>
    </table>
    <br>
    <a class="button" href="nixeducation.php">К списку всех уроков</a>
</main>

<footer class="page-footer">
    <div class="container">
        <a class="footer-email" href="mailto:tsaruk4356@gmail.com">tsaruk4356@gmail.com</a>
    </div>
</footer>
</body>
</html>