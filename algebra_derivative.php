<!DOCTYPE html>
<html lang="en">
<head>
    <title>MATHREADY</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class='derivative_main'>
    <?php 
        @include('nav.php')
     ?> 
     <div class="container">
        <a name="first"></a>
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Производная функция</div>
            </div>
        </section>
        <section class="derivative">
            <div class="box first">
                <div class="flex_box">
                    <p><strong class="yellow">Производная</strong> – это скорость изменения функции</p>
                    <p>Производная функции f(x) в точке x<sub>0</sub> равна угловому коэффициенту касательной, проведённой к графику функции в точке x<sub>0</sub></p>
                    <p>Производная равна тангенсу угла наклона касательной</p>
                    <p>f(x<sub>0</sub>) = tgα = k</p>
                    <p>Если f(x) > 0, то функция возрастает</p>
                    <p>Если f(x) < 0, то функция убывает</p>
                    <p>В точке максимума производная функция равна нулю и меняет знак с "плюса" на "минус"</p>
                    <p>В точке минимума производная тоже равна нулю и меняет знак с "минуса" на "плюс"</p>
                </div>
                <img src="" alt="">
            </div>
            <div class="box">
                <img src="" alt="">
                <div class="flex_box">
                    <p>Точки a, d, f – точки минимума функции y = f(x). В этих точках f'(x) = 0</p>
                    <p>Точки c, e – точки максимума функции y = f(x)</p>
                    <p>В точке c производная не существует</p>
                    <p>В точке e f'(x) = 0</p>
                    <p>Точка b – точка перегиба функции y = f(x)</p>
                    <p>В точке b f'(x) = 0</p>
                </div>
            </div>
            <div class="box">
                <h4>Таблица производных</h4>
                <img src="" alt="">
            </div>
        </section>
        <section class="antiderivative">
            <div class="theme_box">
                <div class="theme_text">Первообразная функция</div>
            </div>
            <div class="box">
                <p><strong class="yellow">Первообразная функции y = f(x)</strong> – функция F(x), для которой f(x) является производной</p>
                <p>Функции вида y = F(x) + C образуют множество первообразных функции y = f(x)</p>
                <p><strong class="yellow">Криволинейная трапеция</strong> – фигура, ограниченная графиком непрерывной функции y = f(x), осью X и прямыми x = a, x = b</p>
                <p>Площадь криволинейной трапеции вычисляется по формуле Ньютона-Лейбница:</p>
                <p>S = F(b) - F(a)</p>
            </div>
            <div class="box">
                <img src="" alt="">
            </div>
        </section>

     </div>
</body>
</html>