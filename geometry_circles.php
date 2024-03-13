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
                    <p>В прямоугольной системе координат уравнение окружности радиуса r с центром в точке O (x<sub>0</sub>;y<sub>0</sub>) имеет вид (x - x<sub>0</sub>)<sup>2</sup> + (y - y<sub>0</sub>)<sup>2</sup> = r<sup>2</sup></p>
                    <p>π – отношение длины окружности к её диаметру. π ≈ 3,14</p>
                    <p>S = πR<sup>2</sup></p>
                    <div class="container_with_fraction">
                        <p>S = </p>
                        <div class="elem">
                            <div class="fraction">
                                <p>πR<sup>2</sup></p>
                                <hr>
                                <p>360</p>
                            </div>
                        </div>
                        <p>∙ α</p>
                    </div>
                    <p><strong class="yellow">Круговой сектор</strong> – называется часть круга, ограниченная дугой и двумя радиусами</p>
                    <p><strong class="yellow">Дуга сектора</strong> – дуга, которая ограничивает сектор</p>

                </div>
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <p>Диаметр, проведённый через середину хорды, перпендикулярен этой хорде</p>
                    <img src="img/circle-2.svg" alt="">
                </div>
                <div class="el">
                    <p><strong class="yellow">Концентрические окружности</strong> – окружности с общим центром и различными радиусами</p>
                    <img src="img/circle-4.svg" alt="">
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
        <section class="two_circles">
            <div class="theme_box">
                <div class="theme_text">Взаимное расположение двух окружностей</div>
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <p>Касаются внутренним образом</p>
                    <p>d = R - r и R > r</p>
                    <p>Точка касания лежит на прямой OO<sub>1</sub></p>
                    <img src="img/two_circles_3.svg" alt="">
                </div>
                <div class="el">
                    <p>Касаются внешним образом</p>
                    <p>d = R + r</p>
                    <p>Точка касания лежит на прямой OO<sub>1</sub></p>
                    <img src="img/two_circles_4.svg" alt="">
                </div>
                <div class="el">
                    <p>Пересекаются</p>
                    <p>R - r < d < R + r и R ≥ r</p>
                    <p>Точки пересечения не лежат на прямой OO<sub>1</sub></p>
                    <img src="img/two_circles_5.svg" alt="">
                </div>
                <div class="el">
                    <p>Одна окружность лежит внутри другой</p>
                    <p>d < R - r и R > r</p>
                    <img src="img/two_circles_1.svg" alt="">
                </div>
                <div class="el">
                    <p>Одна окружность лежит вне другой окружности</p>
                    <p>d > R + r</p>
                    <img src="img/two_circles_2.svg" alt="">
                </div>
            </div>
            <div class="box_center">
                <div class="text_center"><strong class="yellow">Общая касательная</strong> – прямая, проходящая через точку касания и перпендикулярная к прямой OO<sub>1</sub></div>
            </div>
            <div class="cont_with_el tangent">
                <div class="el">
                    <p><strong class="yellow">Внешняя</strong> общая касательная</p>
                    <img src="img/two_circles_6.svg" alt="">
                </div>
                <div class="el">
                    <p><strong class="yellow">Внутренняя</strong> общая касательная</p>
                    <img src="img/two_circles_7.svg" alt="">
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
            
            <div class="box final">
                <p class="theorem">В любом описанном четырёхугольнике суммы противоположных сторон равны. И наоборот: если суммы противоположных сторон выпуклого четырёхугольника равны, то в него можно вписать окружность</p>
                <p class="theorem">В любом вписанном четырёхугольнике сумма противоположных углов равна 180°. И наоборот: если сумма противоположных углов четырёхугольника равна 180°, то около него можно описать окружность</p>
            </div>
            <div class="right_polygon_inscribed">
                <h4 class="h4-med">Окружность и правильный многоугольник</h4>
                <div class="box inscribed_circle_second">
                    <div class="lighter_box">
                        <img src="img/inscribed-3.svg" alt="">
                        <p>Около любого правильного многоугольника можно описать окружность, и притом только одну</p>
                    </div>
                    <div class="lighter_box">
                        <img src="img/inscribed-4.svg" alt="">
                        <p>В любой правильный многоугольник можно вписать окружность, и притом только одну</p>
                    </div>
                    <div class="lighter_box">
                        <img src="img/inscribed-5.svg" alt="">
                        <p>Окружность, вписанная в правильный многоугольник, касается сторон многоугольника в их серединах</p>
                    </div>
                    <div class="lighter_box">
                        <img src="img/inscribed-6.svg" alt="">
                        <p>Центр окружности, описанной около правильного многоугольника, совпадает с центром окружности, вписанной в тот же многоугольник. Эта точка называется центром правильного многоугольника</p>
                    </div>
                </div>
                <div class="inscribed_right_polygon_formules">
                    <div class="container_with_fraction">
                        <p>S = </p>
                        <div class="elem">
                            <div class="fraction">
                                <p>1</p>
                                <hr>
                                <p>2</p>
                            </div>
                        </div>
                        <p>Pr</p>
                    </div>
                    <div class="container_with_fraction">
                        <p>a<sub>n</sub> = 2R sin</p>
                        <div class="elem">
                            <div class="fraction">
                                <p>180°</p>
                                <hr>
                                <p>n</p>
                            </div>
                        </div>
                        <p>Pr</p>
                    </div>
                    <div class="container_with_fraction">
                        <p>r = R cos</p>
                        <div class="elem">
                            <div class="fraction">
                                <p>180°</p>
                                <hr>
                                <p>n</p>
                            </div>
                        </div>
                        <p>Pr</p>
                    </div>
                    <div class="container_with_fraction">
                        <div class="elem">
                            <div class="fraction">
                                <p>P<sub>n</sub></p>
                                <hr>
                                <p>P'<sub>n</sub></p>
                            </div>
                        </div>
                        <p> = </p>
                        <div class="elem">
                            <div class="fraction">
                                <p>2R</p>
                                <hr>
                                <p>2R'</p>
                            </div>
                        </div>
                    </div>
                    <p>C = 2πR</p>
                </div>
            </div>
        </section>
        <section class="arc">
            <div class="theme_box">
                <div class="theme_text">Дуга. Центральный и вписанный угол</div>
            </div>
            <div class="box">
                <div class="wrapper">
                    <img class="corner_in_circle" src="img/corner_in_circle_1.svg" alt="">
                    <img class="corner_in_circle" src="img/corner_in_circle_2.svg" alt="">
                </div>
                <div class="wrapper second">
                    <p><strong class="yellow"></strong></p>
                    <p><strong class="yellow">Центральный угол</strong> – угол с вершиной в центре окружности. Равен дуге, на которую опирается</p>
                    <p>Сумма градусных мер двух дуг с общими концами равна 360°</p>
                    <p><strong class="yellow">Вписанный угол</strong> – угол, вершина которого лежит на окружности, а стороны пересекают окружность. Измеряется половиной дуги, на которую он опирается</p>
                    <p>Вписанные углы, опирающиеся на одну и ту же дугу, равны</p>
                    <p>Вписанный угол, опирающийся на полуокружность, — прямой</p>
                </div>
            </div>
            <div class="cont_with_el final">
                <div class="el">
                    <p>Угол между хордами окружности измеряется полусуммой двух дуг этой окружности, заключённых между сторонами угла и их продолжениями</p>
                    <img src="" alt="">
                </div>
                <div class="el">
                    <p>Угол между секущими окружности, пересекающимися в точке, внешней относительно этой окружности, измеряется полуразностью двух дуг этой окружности, заключённых внутри угла</p>
                    <img src="" alt="">
                </div>
                <div class="el">
                    <p>Угол между хордой и касательной к окружности измеряется половиной дуги этой окружности, заключённой внутри угла</p>
                    <img src="" alt="">
                </div>
                <div class="el">
                    <p>Угло между касательной к окружности и секущей, не проходящей через точку касания, измеряется полуразностью дуг этой окружности, на которые точкой касания делится дуга, заключённая внутри этого угла</p>
                    <img src="" alt="">
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