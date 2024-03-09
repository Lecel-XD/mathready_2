<!DOCTYPE html>
<html lang="en">
<head>
    <title>MATHREADY</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class="geom_triangles">
    <?php 
        @include('nav.php')
     ?> 
     <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Геометрия</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Треугольники</div>
            </div>
            <div class="box first">
                <img src="img/triangle-1.svg" alt="" class="triangle-1">
                <div>
                    <p><b class="yellow">A, B, C</b> – вершины</p>
                    <p><b class="yellow">AB, BC, AC</b> – стороны</p>
                    <p><b class="yellow">∠ABC, ∠BCA, ∠CAB</b> – углы</p>
                    <p><b class="yellow">P<sub class="yellow">△ABC</sub> (периметр)</b> = AB + BC + AC</p>
                    <p>Сумма углов треугольника равна 180°</p>
                    <p>Против большей стороны лежит больший угол и наоборот</p>
                    <p>Каждая сторона треугольника меньше суммы двух других сторон</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="box second">
                <div class="wrapper">
                    <img src="img/corner-in-triangle-1.svg" alt="" class="triangle_corners">
                    <h5>Медиана</h5>
                    <p class="first_definition">Отрезок, соединяющий вершину треугольника с серединой противоположной стороны</p>
                    <p>Медианы треугольника пересекаются в одной точке</p>
                </div>
                <div class="wrapper">
                    <img src="img/corner-in-triangle-2.svg" alt="" class="triangle_corners">
                    <h5>Биссектриса</h5>
                    <p class="first_definition">Отрезок биссектрисы угла треугольника, соединяющий вершину треугольника с точкой противоположной стороны</p>
                    <p>Биссектрисы треугольника пересекаются в одной точке</p>
                </div>
                <div class="wrapper">
                    <img src="img/corner-in-triangle-3.svg" alt="" class="triangle_corners">
                    <h5>Высота</h5>
                    <p class="first_definition">Перпендикуляр, проведённый из вершины треугольника к прямой, содержащей противоположную сторону</p>
                    <p>Высоты треугольника пересекаются в одной точке</p>
                </div>
                <div class="wrapper">
                    <img src="img/triangle-angle.svg" alt="" class="triangle_corners">
                    <h5>Внешний угол</h5>
                    <p>Угол, смежный с каким-нибудь углом этого треугольника</p>
                    <p>∠BCD = ∠CAB + ∠ABC</p>
                </div>
            </div>
            <div class="third">
                <div class="wrapper">
                    <img src="img/triangle-2.svg" alt="" class="triangle_corners">
                    <h5>Равнобедренный треугольник</h5>
                    <p>Углы при основании равны</p>
                    <p>Биссектриса, проведённая к основанию, является медианой и высотой</p>
                </div>
                <div class="wrapper">
                    <img src="img/triangle-3.svg" alt="" class="triangle_corners">
                    <h5>Равносторонний треугольник</h5>
                    <p>Все углы по 60°­­</p>
                    <p>Биссектрисы являются медианами и высотами одновременно</p>
                </div>
            </div>
        </section>
        <section class="right_triangle">
            <div class="theme_box">
                <div class="theme_text">Прямоугольный треугольник</div>
            </div>
            <div class="box">
                <div class="flex-box">
                    <div class="first">
                        <img src="img/triangle-4.svg" alt="" class="right_triangle">
                    </div>
                    <div class="second">
                        <p>AB, AC – катеты</p>
                        <p>BC – гипотенуза</p>
                        <p>Сумма двух острых углов равна 90°</p>
                        <p>Катет, лежащий против угла в 30°, равен половине гипотенузы, и наоборот</p>
                    </div>
                </div>
            </div>
            <div class="box right_triangle_equals">
                <h4 class="h4-med">Равенство прямоугольных треугольников</h4>
                <div class="theorem">Если катеты одного прямоугольного треугольника соответственно равны катетам другого, то такие треугольники равны</div>
                <div class="theorem">Если катет и прилежащий к нему острый угол одного прямоугольного треугольника соответственно равны катету и прилежащему к нему острому углу другого, то такие треугольники равны</div>
                <div class="theorem">Если гипотенуза и острый угол одного прямоугольного треугольника соответственно равны гипотенузе и острому углу другого, то такие треугольники равны</div>
                <div class="theorem">Если гипотенуза и катет одного прямоугольного треугольника соответственно равны гипотенузе и катету другого, то такие треугольники равны</div>
            </div>
        </section>
        <section class="triangle_main">
            <div class="theme_box">
                <div class="theme_text">Равенство треугольников</div>
            </div>
            <div class="box">
                <p>Если два треугольника равны, то элементы одного треугольника соответственно равны элементам другого треугольника</p>
                <p>В равных треугольниках против соответственно равных сторон лежат равные углы, и обратно: против соответственно равных углов лежат равные стороны</p>
                <div class="theorem theorem-1">Если две стороны и угол между ними одного треугольника соответственно равны двум сторонам и углу между ними другого треугольника, то такие треугольники равны</div>
                <div class="theorem">Если сторона и два прилежащих к ней угла одного треугольника соответственно равны стороне и двум прилежащим к ней углам другого треугольника, то такие треугольники равны</div>
                <div class="theorem">Если три стороны одного треугольника соответственно равны трём сторонам другого треугольника, то такие треугольники равны</div>
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