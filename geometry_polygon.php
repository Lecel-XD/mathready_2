<!DOCTYPE html>
<html lang="en">
<head>
    <title>Многоугольники - MathReady</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class='polygons'>
    <?php 
        @include('nav.php');
     ?>
    <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Геометрия</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Многоугольники</div>
            </div>
            <div class="box convex_polygon">
                <img class="convex" src="img/polygon-1.svg" alt="">
                <div>
                    <p>Многоугольник называется <strong class="yellow">выпуклым</strong>, если он лежит по одну сторону от каждой прямой, проходящей через две его соседние вершины</p>
                    <p><strong class="yellow">Сумма углов</strong> выпуклого n-угольника равна (n - 2) · 180°</p>
                    <p><strong class="yellow">Внешний угол</strong> выпуклого многоугольника – угол, смежный с углом многоугольника</p>
                    <p><strong class="yellow">Сумма внешних углов</strong> выпуклого многоугольника, взятых по одному по каждой вершине равна 360°</p>
                    <p><strong class="yellow">Диагональ многоугольника</strong> – отрезок, соединяющий любые две несоседние вершины</p>
                    <div class="container_with_fraction">
                        <p><strong class="yellow">Количество диагоналей выпуклого n-угольника: </strong></p>
                        <div class="elem">
                            <div class="fraction">
                                <p>n (n - 3)</p>
                                <hr>
                                <p>2</p>
                            </div>
                        </div>
                    </div>
                    <p>Равные многоугольники имеют равные площади</p>
                    <p>Если многоугольник составлен из нескольких многоугольников, то его площадь равна сумме площадей этих многоугольников</p>
                    <p>Если площади двух многоугольников равны, то эти многоугольники называются <strong class="yellow">равновеликими</strong></p>
                    <p>Если один многоугольник разрезан на несколько многоугольников и из них составлен другой многоугольник, то такие многоугольники называются <strong class="yellow">равносоставленными</strong></p>
                </div>
            </div>
        </section>
        <section class="right_polygon">
            <div class="theme_box">
                <div class="theme_text">Правильный многоугольник</div>
            </div>
            <div class="box">
                <p><strong class="yellow">Правильный многоугольник</strong> – многоугольник, у которого все углы равны и все стороны равны</p>
                <div class="container_with_fraction">
                    <p>α<sub>n</sub> = </p>
                    <div class="elem">
                        <div class="fraction">
                            <p>n - 2</p>
                            <hr>
                            <p>n</p>
                        </div>
                    </div>
                    <p> ∙ 180°</p>
                </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="geometry_main.php"><div>В категорию</div></a>
                <a href="algebra_units.php"><div>След. тема</div></a>
            </nav>
        </section>
    </div>
</body>
</html>