<!DOCTYPE html>
<html lang="en">
<head>
    <title>Окружности - MathReady</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class="geom_circles">
    <?php 
        @include('nav.php')
     ?> 
     <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Геометрия</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Окружность</div>
            </div>
            <div class="box first">
                <img src="img/circle-1.svg" alt="" class="triangle-1">
                <div>
                    <p><b class="yellow">Окружность</b> – геометрическая фигура, состоящая из всех точек плоскости, расположенных на заданном расстоянии от данной точки</p>
                    <p><strong class="yellow">Круг</strong> – часть плоскости, ограниченная окружностью</p>
                    <p><b class="yellow">AO, OB</b> – радиусы</p>
                    <p><b class="yellow">AB</b> – диаметр</p>
                    <p><b class="yellow">CD</b> – хорда</p>
                </div>
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <p>Диаметр, проведённый через середину хорды, перпендикулярен этой хорде</p>
                    <img src="img/circle-2.svg" alt="">
                </div>
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <p>Секущая – прямая, имеющая с окружностью две общие точки</p>
                    <img src="img/tangent-2.svg" alt="">
                </div>
                <div class="el">
                    <p>Касательная – прямая, имеющая с окружностью одну общую точку – точку касания</p>
                    <p>Касательная к окружности перпендикулярна к радиусу, проведённому в точку касания</p>
                    <img src="img/tangent-1.svg" alt="">
                </div>
                <div class="el">
                    <p>Отрезки касательных к окружности, проведённые из одной точки, равны и составляют равные углы с прямой, проходящей через эту точку и центр окружности</p>
                    <img src="img/circle-3.svg" alt="">
                </div>
            </div>
        </section>
        <section class="inscribed_circle">
            <div class="theme_box">
                <div class="theme_text">Вписанная и описанная окружности</div>
            </div>
            <div class="box inscribed_circle_first">
                <div class="lighter_box">
                    <img src="img/inscribed-2.svg" alt="">
                    <p>Около любого треугольника можно описать окружность, и притом только одну</p>
                </div>
                <div class="lighter_box">
                    <img src="img/inscribed-1.svg" alt="">
                    <p>В любой треугольник можно вписать окружность, и притом только одну</p>
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