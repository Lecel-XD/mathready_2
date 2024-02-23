<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATHREADY</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="sass/style.css">
</head>
<body>
    <?php 
        @include('nav.php');
     ?>
    <div class="container">
        <div class="container first_cont">
        <h1>алгебра</h1>
        <h2>весь школьный курс</h2>
        <div class="theme_box">
            <h3 class="theme_text">Список тем</h3>
        </div>
        <div class="ol_box">
            <ol>
                <li><a href="algebra_numbers.php">Числа и арифметические действия</a></li>
                <ul>
                    <li><a href="algebra_numbers.php#numbers">Виды чисел</a></li>
                    <li><a href="algebra_numbers.php#arifmetic">Арифметические действия</a></li>
                    <li><a href="algebra_numbers.php#roots">Корень, степень, модуль</a></li>
                    <li><a href="algebra_numbers.php#approximation">Приближение. Аболютная, относительная погрешности</a></li>
                    <li><a href="algebra_numbers.php#plenties">Множества</a></li>
                </ul>
                <li><a href="algebra_proportions.php">Проценты и пропорции</a></li>
                <li><a href="algebra_units.php">Единицы измерения</a></li>
                <li><a href="algebra_monomial.php">Одночлены и многочлены</a></li>
                <li><a href="algebra_progressions.php">Прогрессии</a></li>
                <ul>
                    <li><a href="algebra_progressions.php#arifmetic">Арифметическая, геометрическая прогрессии</a></li>
                    <li><a href="algebra_progressions.php#infinite">Бесконечно убывающая геометрическая прогрессия</a></li>
                </ul>
                <li><a href="algebra_equals.php">Уравнения</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ol>
        </div>
    </div> 
    </div>
</body>
</html>
