<!DOCTYPE html>
<html lang="en">
<head>
    <title>Стереометрия – MathReady</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class="stereo_planes">
    <?php 
        @include('nav.php')
     ?> 
     <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Геометрия</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Стереометрия. Аксиомы</div>
            </div>
            <p class="left"><strong class="yellow">Стереометрия</strong> – раздел геометрии, в котором изучаются свойства фигур в пространстве</p>
            <p class="left">Основные фигуры стереометрии – точки, прямые и плоскости</p>
        </section>
        <section class="stereo-about">
            <div class="theme_box">
                <div class="theme_text">Плоскость</div>
            </div>
            <div class="flex_cont">
                <div class="flex_item">
                    <div class="theorem">Через любые три точки, не лежащие на одной прямой, проходит плоскость, и притом только одна</div>
                    <img src="img/axiom-1.svg" alt="" class="stereo">
                </div>
                <div class="flex_item">
                    <div class="theorem">Если две точки прямой лежат в плоскости, то все точки прямой лежат в этой плоскости</div>
                    <img src="img/axiom-2.svg" alt="" class="stereo">
                </div>
                <div class="flex_item">
                    <div class="theorem">Через прямую и не лежащую на ней точку проходит плоскость, и притом только одна</div>
                    <img src="img/theorem-1.svg" alt="" class="stereo">
                </div>
                <div class="flex_item">
                    <div class="theorem">Через две пересекающиеся прямые проходит плоскость, и притом только одна</div>
                    <img src="img/theorem-2.svg" alt="" class="stereo">
                </div>
                <div class="flex_item">
                    <div class="theorem">Если две плоскости имеют общую точку, то они имеют общую прямую, на которой лежат все общие точки этих плоскостей</div>
                    <img src="img/axiom-3.svg" alt="" class="stereo">
                </div>
            </div>
        </section>
        <section class="line_plane">
            <div class="theme_box">
                <div class="theme_text">Прямая и плоскость</div>
            </div>
            <p class="left">Две прямые в пространстве называются <strong class="yellow">параллельными</strong>, если они лежат в одной плоскости и не пересекаются</p>
            <div class="cont_with_el">
                <div class="el">
                    <img src="img/lines_planes_3.svg" alt="">
                    <p>Через любую точку пространства, не лежащую на данной прямой, проходит прямая, параллельная данной, и притом только одна</p>
                </div>
                <div class="el">
                    <img src="img/lines_planes_6.svg" alt="">
                    <p>Если одна из параллельных прямых пересекает данную плоскость, то и другая прямая пересекает эту плоскость</p>
                </div>
                <div class="el">
                    <img src="img/lines_planes_4.svg" alt="">
                    <p>Если две прямые параллельны третьей прямой, то они параллельны</p>
                </div>
                <div class="el">
                    <img src="img/lines_planes_5.svg" alt="">
                    <p>Прямая и плоскость называются <strong class="yellow">параллельными</strong>, если они не имеют общих точек</p>
                </div>
                <div class="el">
                    <img src="img/lines_planes_2.svg" alt="">
                    <p>Если прямая, не лежащая в данной плоскости, параллельна какой-нибудь прямой, лежащей в этой плоскости, то она параллельна данной плоскости</p>
                </div>
                <div class="el">
                    <img src="img/lines_planes_1.svg" alt="">
                    <p>Если плоскость проходит через данную прямую, параллельную другой плоскости, и пересекает эту плоскость, то линия пересечения плоскостей параллельна данной прямой</p>
                </div>
                <div class="el">
                    <img src="img/lines_planes_2.svg" alt="">
                    <p>Если одна из двух параллельных прямых параллельна данной плоскости, то другая прямая либо также параллельна данной плоскости, либо лежит в этой плоскости</p>
                </div>
            </div>
            <p class="left">Две прямые в пространстве называются <strong class="yellow">скрещивающимися</strong>, если они не лежат в одной плоскости</p>
            <div class="cont_with_el">
                <div class="el">
                    <img src="img/lines_planes_7.svg" alt="">
                    <p>Если одна из двух прямых лежит в некоторой плоскости, а другая прямая пересекает эту плоскость в точке, не лежащей на первой прямой, то эти прямые скрещивающиеся</p>
                </div>
                <div class="el">
                    <img src="img/lines_planes_8.svg" alt="">
                    <p>Через каждую из двух скрещивающихся прямых проходит плоскость, параллельная другой прямой, и притом только одна</p>
                </div>
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <img src="img/perpendicular_lines_planes_3.svg" alt="">
                    <p>Прямая называется перпендикулярной к плоскости, если она перпендикулярна к любой прямой, лежащей в этой плоскости</p>
                </div>
                <div class="el">
                    <img src="img/perpendicular_lines_planes_2.svg" alt="">
                    <p>Если одна из двух параллельных прямых перпендикулярна к плоскости, то и другая прямая перпендикулярна к этой плоскости. Если две прямые перпендикулярны к плоскости, то они параллельны</p>
                </div>
                <div class="el">
                    <img src="img/perpendicular_lines_planes_4.svg" alt="">
                    <p>Если прямая перпендикулярна к двум пересекающимся прямым, лежащим в плоскости, то она перпендикулярна к этой плоскости</p>
                </div>
                <div class="el">
                    <img src="img/perpendicular_lines_planes_1.svg" alt="">
                    <p>Через любую точку пространства проходит прямая, перпендикулярная к данной плоскости, и притом только одна</p>
                </div>
            </div>
        </section>
        <section class="parallel_planes">
            <div class="theme_box">
                <div class="theme_text">Параллельные плоскости</div>
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <img src="img/parallel_planes_3.svg" alt="">
                    <p>Две плоскости называются <strong class="yellow">параллельными</strong>, если они не пересекаются</p>
                </div>
                <div class="el">
                    <img src="img/parallel_planes_4.svg" alt="">
                    <p>Если две пересекающиеся прямые одной плоскости соответственно параллельны двум прямым другой плоскости, то эти плоскости параллельны</p>
                </div>
                <div class="el">
                    <img src="img/parallel_planes_1.svg" alt="">
                    <p>Отрезки параллельных прямых, заключённые между параллельными плоскостями, равны</p>
                </div>
                <div class="el">
                    <img class="parallel_planes_2" src="img/parallel_planes_2.svg" alt="">
                    <p>Если две параллельные плоскости пересечены третьей, то линии их пересечения параллельны</p>
                </div>
            </div>
        </section>
        <section class="perpendicular_planes">
            <div class="theme_box">
                <div class="theme_text">Перпендикулярные плоскости</div>
            </div>
            <div class="box">
                <img src="img/perpendicular_planes_1.svg" alt="">
                <div class="flex_box">
                    <p>Две пересекающиеся плоскости называются <strong class="yellow">перпендикулярными (взаимно перпендикулярными)</strong>, если уол между ними равен 90°</p>
                    <p>Если одна из двух плоскостей проходит через прямую, перпендикулярную к другой плоскости, то такие плоскости перпендикулярны</p>
                    <p>Плоскость, перпендикулярная к прямой, по которой перпесекаются две данные плоскости, перпендикулярна к каждой из этих плоскостей</p>
                </div>
            </div>
        </section>
     </div>
</body>
</html>