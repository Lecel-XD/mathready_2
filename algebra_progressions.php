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
<body class="progressions">
    <?php 
        @include('nav.php')
     ?>
    <a name="arifmetic"></a>
    <div class="container">
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Арифметическая и геометрическая прогрессия</div>
            </div>
            <div class="box">
                <div class="progression_column">
                    <h4>Арифметическая прогрессия</h4>
                    <p>Это прогрессия, где каждый следующий член равен сумме предыдущего с фиксированным для прогрессии числом d</p>
                    <p>Пример: 1, 3, 5, 7, 9, ...; d = 2</p>
                    <p>d - <strong class="yellow">разность</strong> арифметической прогрессии</p>
                    
                    <div class="progression_formules">
                        <p class="progression_formule">Формулы n-го члена арифметической прогрессии:</p>
                        <p>a<sub>n</sub> =  a<sub>1</sub> + (n - 1)d</p>
                        <p>a<sub>n</sub> =  a<sub>m</sub> + (n - m)d</p>
                    </div>
                    <div class="progression_formules">
                        <p class="progression_formule">Сумма n членов арифметической прогрессии</p>
                        <div class="container_with_fraction">
                            <p class="elem">S<sub>n</sub> = </p>
                            <div class="fraction elem">
                                <p>(a<sub>1</sub> + a<sub>n</sub>)</p>
                                <hr>
                                <p>2</p>
                            </div>
                            <p class="elem"> · n =</p>
                            <div class="fraction elem">
                                <p>2a<sub>1</sub> + (n-1)d</p>
                                <hr>
                                <p>2</p>
                            </div>
                            <p class="elem"> · n</p>
                        </div>
                    </div>
                    <div class="progression_property">
                        <p class='property_header'>Основное свойство арифметической прогрессии</p>
                        <p class="property_text">Каждый член арифметической прогрессии, начиная со второго, есть среднее арифметическое соседних</p>
                        <div class="container_with_fraction">
                            <p class="elem">a<sub>n</sub> = </p>
                            <div class="fraction elem">
                                <p>a<sub>n-1</sub> + a<sub>n_1</sub></p>
                                <hr>
                                <p>2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progression_column">
                    <h4>Геометрическая прогрессия</h4>
                    <p>Это прогрессия, где каждый следующий член равен произведению предыдущего и фиксированного для прогрессии числа q</p>
                    <p>Пример: 1, 4, 16, 64, ...; q = 4</p>
                    <p>q - <strong class="yellow">знаменатель</strong> геометрической прогрессии</p>
                    
                    <div class="progression_formules">
                        <p class="progression_formule">Формулы n-го члена геометрической прогрессии:</p>
                        <p>b<sub>n</sub> = b<sub>1</sub>q<sup>n-1</sup></p>
                        <p>b<sub>n+1</sub> = b<sub>n</sub>q</p>
                    </div>
                    <div class="progression_formules">
                        <p class="progression_formule">Сумма первых n членов геометрической прогрессии</p>
                        <div class="container_with_fraction">
                            <p class="">S<sub>n</sub> = b<sub>1</sub></p>
                            <p class="elem">
                                <div class="fraction">
                                    <p>q<sup>n</sup> - 1</p>
                                    <hr>
                                    <p>q - 1</p>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="progression_property">
                        <p class="property_header">Основное свойство геометрической прогрессии</p>
                        <p class="property_text">Квадрат каждого члена геометрической прогрессии, начиная со второго, равен произведению соседних</p>
                        <p>b<sup>2</sup><sub>n</sub> = b<sub>n-1</sub> ∙ b<sub>n+1</sub></p>
                    </div>
                </div>
            </div>
            <a name="infinite"></a>
        </section>
        <section class="infinite_geometric_progression_box">
            <div class="theme_box">
                <div class="theme_text">Бесконечно убывающая геометрическая прогрессия</div>
            </div>
            <div class="box box-2">
                <p><strong class="yellow">Бесконечно убывающая геометрическая прогрессия</strong> – это геометрическая прогрессия, у которой модуль знаменателя меньше единицы</p>
                <p class="yellow center">|q| < 1</p>
                <p><strong class="yellow">Суммой</strong> бесконечной геометрической прогрессии называют число, к которому стремится сумма её первых n членов при n→∞</p>
                
                <div class="container_with_fraction">
                    <p class="elem">S = </p>
                    <p class="elem">
                        <div class="fraction">
                            <p>b<sup>1</sup></p>
                            <hr>
                            <p>1 - q</p>
                        </div>
                    </p>
                </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_equals.php"><div>След. тема</div></a>
            </nav>
        </section>
    </div>
</body>
</html>