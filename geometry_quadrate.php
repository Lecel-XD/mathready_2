<!DOCTYPE html>
<html lang="en">
<head>
    <title>Четырёхугольники - MathReady</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class="quadrate">
    <?php 
        @include('nav.php')
     ?> 
    <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Геометрия</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Четырёхугольники</div>
            </div>
            <div class="box first">
                <img src="img/quad-1.svg" alt="">
                <div><strong class="yellow">Сумма углов</strong> выпуклого четырёхугольника равна 360°</div>
            </div>
        </section>
        <section class="parallelogram">
            <div class="theme_box">
                <div class="theme_text">Параллелограмм</div>
            </div>
            <div class="box flex">
                <img class="parallelogram-1" src="img/parallelogram-1.svg" alt="">
                <div>
                    <p><strong class="yellow">Параллелограмм</strong> – четырёхугольник, у которого противоположные стороны попарно параллельны</p>
                    <p>В параллелограмме противоположные стороны равны и противоположные углы равны</p>
                    <p>Диагонали параллелограмма точкой пересечения делятся пополам</p>
                    <p>Если в четырёхугольнике две стороны равны и параллельны, то этот четырёхугольник – параллелограмм</p>
                    <p>Если в четырёхугольнике противоположные стороны попарно равны, то этот четырёхугольник – параллелограмм</p>
                    <p>Если в четырёхугольнике диагонали пепресекаются и точкой пересечения делятся пополам, то этот четырёхугольник – параллелограмм</p>
                    <p>S = ah</p>
                </div>
            </div>
        </section>
        <section class="rectangle">
            <div class="theme_box">
                <div class="theme_text">Прямоугольник</div>
            </div>
            <div class="box flex">
                <img class="parallelogram-1" src="img/rectangle-1.svg" alt="">
                <div>
                    <p><strong class="yellow">Прямоугольник</strong> – параллелограмм, у которого все углы прямые</p>
                    <p><strong class="yellow">Диагонали</strong> прямоугольника равны</p>
                    <p>Если в параллелограмме диагонали равны, то этот параллелограмм – прямоугольник</p>
                    <p>S = ab</p>
                </div>
            </div>
        </section>
        <section class="rhombus">
            <div class="theme_box">
                <div class="theme_text">Ромб</div>
            </div>
            <div class="box flex">
                <img class="parallelogram-1" src="img/rhombus-1.svg" alt="">
                <div>
                    <p><strong class="yellow">Ромб</strong> – параллелограмм, у которого все стороны равны</p>
                    <p><strong class="yellow">Диагонали</strong> ромба взаимно перпендикулярны и делят его углы пополам</p>
                </div>
            </div>
        </section>
        <section class="quad">
            <div class="theme_box">
                <div class="theme_text">Квадрат</div>
            </div>
            <div class="box flex">
                <img class="parallelogram-1" src="img/quad-2.svg" alt="">
                <div>
                    <p><strong class="yellow">Квадрат</strong> – прямоугольник, у которого все стороны равны</p>
                    <p>Все углы квадрата прямые</p>
                    <p><strong class="yellow">Диагонали</strong> квадрата равны, взаимно перпендикулярны, точкой пересечения делятся пополам и делят углы квадрата пополам</p>
                    <p>S = a<sup>2</sup></p>
                </div>
            </div>
        </section>
        <section class="trapezoid">
            <div class="theme_box">
                <div class="theme_text">Трапеция</div>
            </div>
            <div class="box flex">
                <img class="parallelogram-1" src="img/trapezoid-1.svg" alt="">
                <div>
                    <p><strong class="yellow">Трапеция</strong> – четырёхугольник, у которого две стороны параллельны, а две другие не параллельны</p>
                    <p><strong class="yellow">Площадь</strong> трапеции равна произведению полусуммы её оснований на высоту</p>
                    <p><strong class="yellow">Средняя линия</strong> трапеции – отрезок, соединяющий середины её боковых сторон. Она параллельна основаниям и равна их полусумме</p>
                </div>
            </div>
            <div class="cont_with_el">
                <div class="el">
                    <h5>Равнобедренная трапеция</h5>
                    <p>Боковые стороны равны</p>
                    <img src="img/trapezoid-2.svg" alt="">
                </div>
                <div class="el">
                    <h5>Прямоугольная трапеция</h5>
                    <p>Один из углов прямой</p>
                    <img src="img/trapezoid-3.svg" alt="">
                </div>
                </div>
            </div>
        </section>
     </div>
</body>
</html>