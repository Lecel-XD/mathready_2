<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATHREADY</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="sass/style.css">
</head>
<body class="ineq">
    <?php 
        @include('nav.php')
     ?>
     <div class="container">
        <a name="first"></a>
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Свойства неравенств</div>
            </div>
        </section>
        <section class="ineq_properties">
            <div class="box">► Члены неравенства можно переносить с противоположными знаками из одной части неравенства в другую</div>
            <div class="box">► В неравенстве можно приводить подобные члены</div>
            <div class="box">► При умножении (или делении) неравенства на положительное число знак неравенства сохраняется</div>
            <div class="box">► При умножении (или делении) неравенства на отрицательное число знак неравенства меняется на противоположный</div>
            <div class="box">► Решение неравенства записывается ввиде интервала(ов). Круглые скобки при строгом неравенстве, квадратные при нестрогом</div>
            <a name="kinds"></a>
        </section>
        <section class="ineq_kinds">
            <div class="theme_box">
                <div class="theme_text">Виды неравенств</div>
                </div>
                <div class="box">
                    <div class="lighter_box">
                        <h4>Неравенства 1-ой степени</h4>
                        <p class="example">kx + b < 0 или kx + b > 0</p>
                        <p>1) Переносим свободный член в правую часть неравенства</p>
                        <p>2) Делим обе части неравенства на коэффициент при неизвестном k</p>
                        <p>3) Записываем ответ ввиде интервала</p>
                        <div class="sample">
                            <p>-2x - 4 ≥ 0</p>
                            <p>-2x ≥ 4</p>
                            <p>x ≤ 2</p>
                            <img class="ineq-1" src="img/ineq-1.svg" alt="">
                            <p>Ответ: (-∞; 2]</p>
                        </div>
                    </div>
                    <div class="lighter_box">
                        <h4>Неравенства 2-ой степени</h4>
                        <p class="example">ax<sup>2</sup> + bx + c > 0 или ax<sup>2</sup> + bx + c < 0</p>
                        <p>1) Переносим все члены неравенства в левую часть и приводим подобные члены</p>
                        <p>2) Приравниваем неравенство к нулю и находим корни уравнения</p>
                        <p>3) Отмечаем корни на координатной прямой. Если коэффициент a положительный, то знаки чередуются, начиная с плюса, справа налево</p>
                        <img class="ineq-3" src="img/ineq-3.svg" alt="">
                        <p>Ответ: x ∈ (-∞; 1) ⋃ ( 2; +∞)</p>
                    </div>
                    <div class="lighter_box">
                        <h4>Рациональные неравенства</h4>
                        <p>1) Переносим все члены неравенства в левую часть и приводим подобные члены</p>
                        <p>Есть 2 способа решения рационального неравенства</p>
                        <p>► Находим нули числителя и знаменателя. Отмечаем их на координатной прямой. При этом нули знаменателя должны быть не включены (выколоты)</p>
                        <p>► Умножаем числитель и знаменатель между собой и получаем равносильное неравенство. Находим нули и с помощью метода интервалов решаем неравенство</p>
                    </div>
                    <div class="lighter_box">
                        <h4>Неравенства, содержащие |x|</h4>
                        <p>Можно разбить неравенство на системы неравенст, ориентируясь на свойства модуля</p>
                        <img class="ineq-2" src="img/ineq-2.svg" alt="">
                    </div>
            </div>
            <a name="interval"></a>
        </section>
        <section class="interval_method">
            <div class="theme_box">
                <div class="theme_text">Метод интервалов</div>
            </div>
            <div class="term">Применим, когда неравенство разложено на множители</div>
            <div class="box">
                <div class="lighter_box">
                    <h4>Если все множители находятся в первой степени</h4>
                    <img src="img/ineq-4.svg" alt="" class="ineq-4">
                    <p>Ответ: x ∈ (1; 2) ⋃ (3; +∞)</p>
                </div>
                <div class="lighter_box">
                    <h4>Если не все множители находятся в первой степени</h4>
                    <img src="img/ineq-5.svg" alt="" class="ineq-5">
                    <p>Ответ: x ∈ (2; 3)</p>
                </div>
            </div>
            <a name="change"></a>
        </section>
        <section class="change_unnown">
            <div class="theme_box">
                <div class="theme_text">Замена неизвестного при решении неравенств</div>
            </div>
            <div class="box">
                <img src="img/ineq-6.svg" alt="" class="ineq-6">
                <p>Объединив решения, получаем ответ</p>
                <p>Ответ: x ∈ [-1; 0] ⋃ [4; 5]</p>
            </div>
            <a name="systems"></a>
        </section>
        <section class="systems">
            <div class="theme_box">
                <div class="theme_text">Системы неравенств</div>
            </div>
            <div class="term">Для того, чтобы решить систему линейных неравенств, надо решить каждое неравенство этой системы, а затем найти общую часть (пересечение) полученных множеств решений – она и будет множеством всех решений данной системы</div>
            <div class="box">
                <img src="img/ineq-7.svg" alt="" class="ineq-7">
                <p>Ответ: x ∈ (-∞; 1) ⋃ (5; 10)</p>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_graphs.php"><div>След. тема</div></a>
            </nav>
        </section>
     </div>
</body>
</html>