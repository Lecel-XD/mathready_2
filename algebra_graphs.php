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
<body class="graphs">
    <?php 
        @include('nav.php')
     ?>
    <div class="container">
        <a name="first"></a>
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Декартова система координат</div>
            </div>
        </section>
        <section class="graph-about">
            <img class='graph-1' src="img/graph-1.svg" alt="">
            <div>
                <p><strong class="yellow">Ось абсцисс</strong> – ось x</p>
                <p><strong class="yellow">Ось ординат</strong> – ось y</p>
                <p><strong class="yellow">Область определения</strong> – множество значений x, при которых функция существует</p>
                <p><strong class="yellow">Область значений</strong> – множество значений, которые принимает y</p>
                <p><strong class="yellow">Функция возрастает</strong>, если при увеличении x увеличивается и y</p>
                <p><strong class="yellow">Функция убывает</strong>, если при увеличении x уменьшается y</p>
                <p><strong class="yellow">Функция чётная</strong>, если f(x) = f(-x)</p>
                <p><strong class="yellow">Функция нечётная</strong>, если f(x) = -f(-x)</p>
                <p>Функция y = f(x) – <strong class="yellow">периодическая</strong>, если существует такое T, не равное нулю, что для любого x из её области определения f(x + T) = f(x)</p>
                <p>Функции f(x) и g(x) называются <strong class="yellow">взаимно-обратными</strong>, если f(g(x)) = x</p>
                <a name='grade'></a>
            </div>
            
        </section>
        <section class="grade_func">
            <div class="theme_box">
                <div class="theme_text">Степенные функции</div>
            </div>
            <div class="box">
                <div class="lighter_box">
                    <h4>Линейная функция</h4>
                    <h5>y = kx + b</h5>
                    <div class="flex_box">
                        <div class="column">
                            <img class="linear" src="img/line_graph-3.svg" alt="">
                            <img class="linear" src="img/line_graph-1.svg" alt="">
                            <img class="linear" src="img/line_graph-2.svg" alt="">
                            <img class="linear" src="img/line_graph-4.svg" alt="">
                        </div>
                        <div class="text">
                            <p>Чем больше коэффициент k, тем более "резкий" график</p>
                            <p>Если k < 0, то график убывает</p>
                            <p>Коэффициент b отвечает за смещение по оси y</p>
                            <p>График – прямая</p>
                        </div>
                    </div>
                </div>
                <div class="lighter_box">
                    <h4>Четная степень</h4>
                    <h5>y = ax<sup>2</sup> + bx + c, y = ax<sup>4</sup> + bx + c и т.д.</h5>
                    <div class="flex_box">
                        <div class="column">
                            <img class="odd" src="img/odd-5.svg" alt="">
                            <img class="odd" src="img/odd-1.svg" alt="">
                            <img class="odd" src="img/odd-4.svg" alt="">
                            <img class="odd" src="img/odd-2.svg" alt="">
                            <img class="odd" src="img/odd-3.svg" alt="">
                            <img class="odd" src="img/odd-6.svg" alt="">
                        </div>
                        <div class="text">
                            <p>Чем больше степень, тем более "резкий" график</p>
                            <p>Если a < 0, то ветви параболы смотрят вниз</p>
                            <p>Коэффициент c отвечает за пересечение графика с осью y</p>
                            <p>Область определения: (-∞; +∞)</p>
                            <p>График – парабола</p>
                            <div class="container_with_fraction">
                                <p>x<sub>в</sub>(вершины) = -</p>
                                <div class="elem">
                                    <div class="fraction">
                                        <p>b</p>
                                        <hr>
                                        <p>2a</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lighter_box">
                    <h4>Нечетная степень</h4>
                    <h5>y = ax<sup>3</sup> + bx + c, y = ax<sup>5</sup> + bx + c и т.д.</h5>
                    <div class="flex_box">
                        <div class="column">
                            <img class="odd" src="img/neodd-3.svg" alt="">
                            <img class="odd" src="img/neodd-2.svg" alt="">
                            <img class="odd" src="img/neodd-1.svg" alt="">
                        </div>
                        <div class="text">
                            <p>Чем больше степень, тем более "резкий" график</p>
                            <p>Если a > 0, то график располагается в I и III четвертях</p>
                            <p>Если a < 0, то график располагается во II и IV четвертях</p>
                            <p>Область определения: (-∞; +∞)</p>
                        </div>
                    </div>
                </div>
                <div class="lighter_box">
                    <h4>Функция обратная пропорциональность</h4>
                    <div class="container_with_fraction">
                        <p>y = </p>
                        <div class="elem">
                            <div class="fraction">
                                <p>k</p>
                                <hr>
                                <p>x</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex_box">
                        <div class="column">
                            <img class="odd" src="img/reverse-4.svg" alt="">
                            <img class="odd" src="img/reverse-3.svg" alt="">
                            <img class="odd" src="img/reverse-2.svg" alt="">
                            <img class="odd" src="img/reverse-1.svg" alt="">
                        </div>
                        <div class="text">
                            <p>Функция – обратная пропорциональность</p>
                            <p>График – гипербола</p>
                            <p>Если k > 0, то график располагается в I и III четвертях</p>
                            <p>Если k < 0, то график располагается во II и IV четвертях</p>
                            <p>Область определения: (-∞; +∞)</p>
                        </div>
                    </div>
                </div>
                <div class="lighter_box">
                    <h4>Функция с корнем</h4>
                    <div class="flex_box">
                        <div class="column">
                            <img class="odd" src="img/root-graph-2.svg" alt="">
                            <img class="odd" src="img/root-graph-1.svg" alt="">
                        </div>
                        <div class="text">
                            <p>Если корень четной степени, то график состоит только из одной ветви параболы</p>
                            <p>Если корень гнчетной степени, то график состоит из двух ветвей параболы</p>
                        </div>
                    </div>
                </div>
            </div>
            <a name="show"></a>
        </section>
        <section class="indicate_func">
            <div class="theme_box">
                <div class="theme_text">Показательная функция</div>
            </div>
            <div class="box">
                <h4>показательная функция</h4>
                <h5>y = a<sup>x</sup></h5>
                <div class="flex_box">
                        <div class="column">
                            <img class="linear" src="img/show_func-1.svg" alt="">
                            <img class="linear" src="img/show_func-2.svg" alt="">
                        </div>
                        <div class="text">
                            <p>Если a > 1, то график возрастает</p>
                            <p>Если 0 < a < 1, то график убывает</p>
                        </div>
                    </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_log.php"><div>След. тема</div></a>
            </nav>
        </section>
    </div>
</body>
</html>