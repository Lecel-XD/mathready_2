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
                        </div>
                        <div class="text">
                            <p>Чем больше степень, тем более "резкий" график</p>
                            <p>Если a < 0, то ветви графика смотрят вниз</p>
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
                    <h5>y = x<sup>3</sup> + bx + c, y = x<sup>5</sup> + bx + c и т.д.</h5>
                    <div class="flex_box">
                        <div class="column">
                            <img class="odd" src="img/odd-5.svg" alt="">
                            <img class="odd" src="img/odd-1.svg" alt="">
                            <img class="odd" src="img/odd-4.svg" alt="">
                            <img class="odd" src="img/odd-2.svg" alt="">
                            <img class="odd" src="img/odd-3.svg" alt="">
                        </div>
                        <div class="text">
                            <p>Чем больше степень, тем более "резкий" график</p>
                            <p>Если a < 0, то график располагается в I и III четвертях</p>
                            <p>Если a < 0, то график располагается во II и IV четвертях</p>
                            <p></p>
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
                    <h4>Функция обратная пропорциональность</h4>
                </div>
                <div class="lighter_box">
                    <h4>Функция с корнем</h4>
                </div>
            </div>
        </section>
    </div>
</body>
</html>