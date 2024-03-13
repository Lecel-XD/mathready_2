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
                    <p><strong class="yellow">Выпуклым многоугольник</strong> – многоугольник, лежащий по одну сторону от каждой прямой, проходящей через две его соседние вершины</p>
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
                    <p><strong class="yellow">Равновеликие многоугольники</strong> – многоугольники с равными площадями</p>
                    <p>Если один многоугольник разрезан на несколько многоугольников и из них составлен другой многоугольник, то такие многоугольники называются <strong class="yellow">равносоставленными</strong></p>
                    <p><strong class="yellow">Одноимённые многоугольники</strong> – многоугольники с одинаковым числом углов, а следовательно, и сторон</p>
                </div>
            </div>
        </section>
        <section class="right_polygon">
            <div class="theme_box">
                <div class="theme_text">Правильный многоугольник</div>
            </div>
            <div class="box">
                <p class="text"><strong class="yellow">Правильный многоугольник</strong> – многоугольник, у которого все углы равны и все стороны равны</p>
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
        <section class="polygon_similarity">
            <div class="theme_box">
                <div class="theme_text">Подобные многоугольники</div>
            </div>
            <div class="theorem">Многоугольник F<sub>1</sub> называется подобным одноимённому многоугольнику F, если углы многоугольника F<sub>1</sub> соответственно равны углам многоугольника F, а их сходственные стороны пропорциональны</div>
            <div class="box">
                
                <p><strong class="yellow">Коэффициент подобия многоугольников</strong> – отношение их сходственных сторон</p>
                <p>Если два многоугольника подобны и коэффициенты подобия равен единице, то такие многоугольники равны</p>
                <p>Отношение периметров двух подобных многоугольников равно коэффициенту подобия многоугольников</p>
                <p>Отношение прощадей двух подобных многоугольников равно квадрату коэффициента подобия</p>
                <p>Фигура F<sub>1</sub> называется подобной фигуре F, если она равна некоторой фигуре F*, гомотетичной фигуре F</p>
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