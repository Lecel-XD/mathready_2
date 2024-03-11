<!DOCTYPE html>
<html lang="en">
<head>
    <title>Прямые, углы, отрезки - MathReady</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class="geom_lines">
    <?php 
        @include('nav.php')
     ?> 
     <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Геометрия</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Прямые</div>
            </div>
            <div class="flex_cont">
                <div class="flex_item">
                    <p>Через любые две точки можно провести прямую, и притом только одну</p>
                    <p>Две прямые либо имеют только одну общую точку, либо не имеют общих точек</p>
                    <img src="img/line-1.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Из точки, не лежащей на прямой, можно провести перпендикуляр к этой прямой, и притом только один</p>
                    <img src="img/corner-7.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Перпендикуляр, проведённый из точки к прямой, меньше любой наклонной, проведённой из той же точки к этой прямой</p>
                    <img src="img/corner-9.svg" alt="" class="line">
                </div>
            </div>
            <h3 class="parallel">Параллельные прямые</h3>
            <div class="flex_cont parallel_cont">
                <div class="flex_item">
                    <p>Две прямые на плоскости называются параллельными, если они не пересекаются</p>
                    <img src="img/parallel-5.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Два отрезка называются параллельными, если они лежат на параллельных прямых</p>
                    <img src="img/parallel-4.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <P>Если при пересечении двух прямых секущей накрест лежащие углы равны, то прямые параллельны</P>
                    <img src="img/parallel-2.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Если при пересечении двух прямых секущей соответственные углы равны, то прямые параллельны</p>
                    <img src="img/parallel-1.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Если при пересечении двух прямых секущей сумма односторонних углов равна 180°, то прямые параллельны</p>
                    <img src="img/parallel-3.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Через точку, не лежащую на данной прямой, проходит только одна прямая, параллельная данной</p>
                    <img src="img/parallel-6.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Если прямая пересекает одну из двух параллельных прямых, то она пересекает и другую</p>
                    <img src="img/parallel-7.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Если две прямые параллельны третьей прямой, то они параллельны</p>
                    <img src="img/parallel-8.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Если стороны одного угла соответственно параллельны сторонам другого угла, то такие углы или равны, или в сумме составляют 180°</p>
                    <img src="img/parallel-9.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Если стороны одного угла соответственно перпендикулярны сторонам другого угла, то такие углы или равны, или в сумме составляют 180°</p>
                    <img src="img/parallel-10.svg" alt="" class="line">
                </div>
                <div class="flex_item">
                    <p>Все точки каждой из двух параллельных прямых равноудалены от другой прямой</p>
                    <img src="img/parallel-11.svg" alt="" class="line">
                </div>
            </div>
        </section>
        <section class="inclined">
            <div class="theme_box">
                <div class="theme_text">Наклонная (стр. 80)</div>
            </div>
        </section>
        <section class="corner">
            <div class="theme_box">
                <div class="theme_text">Углы</div>
            </div>
            <div class="box">
                <div class="wrapper">
                    <img src="img/corner-1.svg" alt="" class="line">
                    <h5>Прямой угол (90°)</h5>
                </div>
                <div class="wrapper">
                    <img src="img/corner-2.svg" alt="" class="line">
                    <h5>Острый угол ( < 90°)</p>
                </div>
                <div class="wrapper">
                    <img src="img/corner-3.svg" alt="" class="line">
                    <h5>Тупой угол ( > 90°)</h5>
                </div>
                <div class="wrapper">
                    <img src="img/corner-4.svg" alt="" class="line">
                    <h5>Развёрнутый угол (180°)</h5>
                </div>
            </div>
            <div class="box special_corners">
                <div class="wrapper">
                    <img src="img/corner-5.svg" alt="" class="line">
                    <h5>Смежные углы</h5>
                    <p>Их сумма равна 180°</p>
                </div>
                <div class="wrapper">
                    <img src="img/corner-6.svg" alt="" class="line">
                    <h5>Вертикальные углы</h5>
                    <p>Они равны</p>
                </div>
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <p>Каждая точка биссектрисы неразвёрнутого угла равноудалена от его сторон</p>
                    <p>Каждая точка, лежащая внутри угла и равноудалённая от сторон угла, лежит на его биссектрисе</p>
                    <img src="img/corner-10.svg" alt="">
                </div>
                <div class="el">
                    <p>Каждая точка серединного перпендикуляра к отрезку равноудалена от концов этого отрезка</p>
                    <img src="img/perpendicular-1.svg" alt="">
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