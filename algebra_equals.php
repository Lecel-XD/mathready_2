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
<body class="equals">
    <?php 
        @include('nav.php')
     ?>
    <div class="container">
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Уравнения 1-ой степени</div>
            </div>
        </section>
        <section class="grade_1">
            <div class="box first_grade">
                <div class="lighter_box">
                    <h4>С 1 неизвестным</h4>
                    <p><strong class="yellow">Общий вид</strong>: kx + b = 0 (k ≠ 0)</p>
                    <p>k – коэффициент при неизвестном</p>
                    <p>b – свободный член</p>
                    <p><strong class="yellow">Корень (решение)</strong> уравнения –число, при подстановке которого в уравнение вместо x получается верное числовое равенство</p>
                    <p><strong class="yellow">Как решить уравнение:</strong>
                        <p>1) Перенести свободный член b в правую часть, изменив при этом знак у числа b на противоположный</p>
                        <p>2) Разделить обе части полученного уравнения на коэффициент k (k ≠ 0) при неизвестном</p>
                    </p>
                    <div class="example"><strong class="yellow">Пример:</strong>
                        <p>3x - 21 = 0</p>
                        <p>3x = 21</p>
                        <p>x = 7</p>
                        <p>Ответ: 7</p>
                    </div>

                </div>
                <div class="lighter_box">
                    <h4>С 2 неизвестными</h4>
                    <p><strong class="yellow">Общий вид</strong>: ax + by + c = 0</p>
                    <p>a – коэффициент при x</p>
                    <p>b – коэффициент при y</p>
                    <p>c – свободный член</p>
                    <p><strong class="yellow">Решение уравнения</strong> – пара чисел (x<sub>0</sub>; y<sub>0</sub>)</p>
                    <p>Чтобы решить уравнение, можно выразить y через x или наоборот</p>
                    <div class="example"><strong class="yellow">Пример:</strong>
                        <p>2x - 5y + 2 = 0</p>
                        <p>2x + 2 = 5y</p>
                        <p>y = 0,5x + 0,4</p>
                        <p>Все решения уравнения: (x; 0,5x + 0,4) </p>
                    </div>
                </div>
            </div>
            <div class="box properties">
                <h4>Свойства уравнений</h4>
                <div class="lighter_box"><p>Если обе части уравнения умножить или разделить на одно и то же отличное от нуля число, то получим уравнение, равносильное исходному</p></div>
                <div class="lighter_box"><p>Если перенести член уравнения с противоположным знаком из одной части уравнения в другую, то получим уравнение, равносильное исходному</p></div>
                <div class="lighter_box"><p>Если в левой или правой части уравнения привести подобные члены, то получим уравнение, равносильное исходному</p></div>
            </div>
        </section>
        <section class="systems_first_grade">
            <div class="theme_box">
                <div class="theme_text">Системы уравнений 1-ой степени</div>
            </div>
            <div class="box systems">
                <h4>Способы решения:</h4>
                <div class="flex_box">
                    <div class="lighter_box">
                        <h5>Способ подстановки</h5>
                        <p>1) Одно из неизвестных выразить (например, y) через другое неизвестное из любого уравнения системы</p>
                        <p>2) Полученное выражение подставить вместо этого неизвестного (y) в другое уравнение системы</p>
                        <p>3) Решить полученное уравнение с одним неизвестным x</p>
                        <p>4) Подставить найденное значение x в формулу для y, найти y</p>
                        <img class="sys-1" src="img/algebra_system-1.svg" alt="">
                    </div>
                    <div class="lighter_box">
                        <h5>Способ уравнивания коэффициентов</h5>
                        <p>1) Умножением на числа, отличные от нуля, уравнять коэффициенты при любом из неизвестных, в обоих уравнениях</p>
                        <p>2) Вычесть одно уравнение из другого</p>
                        <p>3) Решить полученное уравнение с одним неизвестным</p>
                        <p>4) Подставить найденное значение в любое уравнение системы и найти второе неизвестное</p>
                        <img class="sys-2" src="img/algebra_system-2.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_equals.php"><div>След. тема</div></a>
            </nav>
        </section>
    </div>
</body>
</html>