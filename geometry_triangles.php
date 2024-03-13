<!DOCTYPE html>
<html lang="en">
<head>
    <title>Треугольники - MathReady</title>
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
                <div class="triangle_definition">
                    <div class="lighter_box">
                        <p>∠A + ∠B + ∠C = 180°</p>
                        <p><strong>P</strong> = a + b + c</p>
                        <div class="container_with_fraction">
                            <p><strong>S</strong> = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>ah</p>
                                    <hr>
                                    <p>2</p>
                                </div>
                            </div>
                        </div>
                        <div class="container_with_fraction heronFormule">
                            <p><strong>S</strong> = </p>
                            <img class="heronRoot" src="img/heronRoot.svg" alt="">
                            <p>, при p =</p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>a + b + c</p>
                                    <hr>
                                    <p>2</p>
                                </div>
                            </div>
                        </div>
                        <div class="container_with_fraction heronFormule">
                            <p><strong>S</strong> = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>1</p>
                                    <hr>
                                    <p>2</p>
                                </div>
                            </div>
                            <p>ab sin C</p>
                        </div>
                        <div class="container_with_fraction heronFormule">
                            <div class="elem">
                                <div class="fraction">
                                    <p>a</p>
                                    <hr>
                                    <p>sin A</p>
                                </div>
                            </div>
                            <p> = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>b</p>
                                    <hr>
                                    <p>sin B</p>
                                </div>
                            </div>
                            <p> = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>c</p>
                                    <hr>
                                    <p>sin C</p>
                                </div>
                            </div>
                        </div>
                        <p>a<sup>2</sup> = b<sup>2</sup> + c<sup>2</sup> - 2bc cos A</p>
                        <p><strong>S</strong> = pr, где p – полупериметр, r – радиус вписанной окружности</p>
                    </div>
                    <p>Против большей стороны лежит больший угол и наоборот</p>
                    <p>Каждая сторона треугольника меньше суммы двух других сторон</p>
                    <p><strong class="yellow">Средняя линия</strong> – отрезок, соединяющий середины двух сторон треугольника. Параллельна основанию и равна половине этого основания</p>
                    <p>Если угол одного треугольника равен углу другого треугольника, то площади этих треугольников относятся как произведения сторон, заключающих равные углы</p>
                    <p>Египетский треугольник – треугольник со сторонами 3, 4, 5</p>
                    
                </div>
            </div>
            <div class="cont_with_el tri-second">
                <div class="el">
                    <p>Точка пересечения серединных перпендикуляров к сторонам треугольника равноудалена от всех его вершин</p>
                    <img src="img/perpendicular-2.svg" alt="">
                </div>
                <div class="el">
                    <p>Если высоты двух треугольников равны, то их площади относятся как основания</p>
                    <div>
                        <img class="simHeightsTri" src="img/similarHeightsTriangle-1.svg" alt="">
                        <img class="simHeightsTri" src="img/similarHeightsTriangle-2.svg" alt="">
                    </div>
                    <img class="simHeightsTriText" src="img/similarHeightsTriangleText.svg" alt="">
                </div>
            </div>
            <div class="box triangle_equals">
                <h4 class="h4-med">Равенство треугольников</h4>
                <div class="triangle_equals_flex">
                    <div class="theorem">По 2-ум сторонам и углу между ними</div>
                    <div class="theorem">По стороне и 2-ум прилежащим к ней углам</div>
                    <div class="theorem">По 3-ём сторонам</div>
                </div>
                <p>Если два треугольника равны, то элементы одного треугольника соответственно равны элементам другого треугольника</p>
                <p>В равных треугольниках против соответственно равных сторон лежат равные углы, и обратно: против соответственно равных углов лежат равные стороны</p>
            </div>
            <div class="box triangles_similarity">
                <h4 class="h4-med">Подобие треугольников</h4>
                <h4 class="theorem_first">Два треугольника называются <strong class="yellow">подобными</strong>, если их углы соответственно равны и стороны одного треугольника пропорциональны сходственным сторонам другого треугольника</h4>
                <p>k – коэффициент подобия – отношение сходственных сторон подобных треугольников</p>
                <p>Отношение площадей двух подобных треугольников равно квадрату коэффициента подобия</p>
                <h4 class="h4-med h4-med_second">Признаки подобия</h4>
                <div class="triangle_similarity_flex">
                    <div class="theorem">По 2-ум углам</div>
                    <div class="theorem">По 2-ум пропорциональным сторонам и углу между ними</div>
                    <div class="theorem">По 3-ём пропорциональным сторонам</div>
                </div>
            </div>
            <div class="second">
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
                    <p>Биссектрисы треугольника пересекаются в одной точке. Эта точка равноудалена от всех сторон треугольника и является центром вписанной окружности</p>
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
                    <p>Внешний угол треугольника больше любого внутреннего угла этого треугольника, не смежного с ним</p>
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
                        <p>Гипотенуза всегда больше катета</p>
                        <p>Сумма двух острых углов равна 90°</p>
                        <p>Катет, лежащий против угла в 30°, равен половине гипотенузы, и наоборот</p>
                        <p>Площадь прямоугольного треугольника равна половине произведения его катетов</p>
                        <p>Теорема Пифагора: Квадрат гипотенузы равен сумме квадратов катетов</p>
                    </div>
                </div>
            </div>
            <div class="box right_triangle_equals">
                <h4 class="h4-med">Равенство прямоугольных треугольников</h4>
                <div class="right_triangle_equals_flex">
                    <div class="theorem">По 2-ум катетам</div>
                    <div class="theorem">По катету и прилежащему к нему острому углу</div>
                    <div class="theorem">По гипотенузе и острому углу</div>
                    <div class="theorem">По гипотенузе и катету</div>
                </div>
            </div>
            <div class="box average_proporcional">
                <div class="average_proporcional_flex">
                    <img class="average_proporcional_img" src="img/average_proporcional_img.svg" alt="">
                    <div class="average_proporcional_el">
                        <h4 class="h4-med">Среднее пропорциональное (среднее геометрическое)</h4>
                        <p>Отрезок XY называется <strong class="yellow">средним пропорциональным (средним геометрическим)</strong> для отрезков AC и BH, если <img class="average_img_1" src="img/average_proporcional_2.svg" alt=""></p>
                        <p>Высота прямоугольного треугольника, проведённая из вершины прямого угла, есть среднее пропорциональное для отрезков, на которые делится гипотенуза этой высотой</p>
                        <img class="average_img" src="img/average_proporcional_1.svg" alt="">
                        <p>Катет прямоугольного треугольника есть среднее пропорциональное для гипотенузы и отрезка гипотенузы, заключённого между катетом и высотой, проведённой из вершины прямого угла</p>
                        <img class="average_img_2" src="img/average_proporcional_3.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="trig_in_right_triangle_box box">
                <h4 class="h4-med">Sin, cos, tg, ctg</h4>
                <div class="trig_in_right_triangle_flex">
                    <img src="img/trig_in_right_triangle.svg" alt="">
                    <div class="trig_in_right_triangle_wrapper">
                        <div class="container_with_fraction">
                            <p>sin α = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>b</p>
                                    <hr>
                                    <p>c</p>
                                </div>
                            </div>
                        </div>
                        <div class="container_with_fraction">
                            <p>cos α = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>a</p>
                                    <hr>
                                    <p>c</p>
                                </div>
                            </div>
                        </div>
                        <div class="container_with_fraction">
                            <p>tg α = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>b</p>
                                    <hr>
                                    <p>a</p>
                                </div>
                            </div>
                        </div>
                        <div class="container_with_fraction">
                            <p>ctg α = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>a</p>
                                    <hr>
                                    <p>b</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <p>Медиана прямоугольного треугольника, проведённая из вершины прямого угла, равна половине гипотенузы</p>
                    <img src="img/right_triangle.svg" alt="">
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