<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        @include('nav.php')
     ?>
    <section class="container first_cont">
        <h1>алгебра</h1>
        <h2>10-11 класс</h2>
        <div class="theme_box">
            <div class="theme_text">Виды чисел</div>
        </div>
        <div class="numbers_box">
            <div class="number_box">
                <p>Натуральные числа - используются при счёте предметов (N)</p>
                <p>N = {1, 2, 3, ...}</p>
            </div>
            <div class="number_box">
                <p>Целые числа - натуральные числа, отрицательные и нуль (Z)</p>
                <p>Z = {..., -2, -1, 0, 1, 2, ...}</p>
            </div>
            <div class="number_box">
                <p>Рациональные числа - обыкновенные дроби (Q)</p>
                <div class="rational_number">
                    <p>a</p>
                    <span></span>
                    <p>b</p>
                </div>
                <p>a ∈ N, b ≠ 0</p>
            </div>
            <div class="number_box">
                <p>Иррациональные числа - бесконечные непериодические десятичные дроби (I)</p>
                <p>π = 3,1415926...</p>
            </div>
            <div class="number_box">
                <p>Действительные (вещественные) числа - рациональные и иррациональные числа (R)</p>
                <p>R = {I + Q}</p>
            </div>
            <div class="number_box">
                <p>Комплексные числа - множество чисел C</p>
                <p>C = {x + iy, где x ∈ R и y ∈ R}, где - i мнимая единица</p>
                <img src="" alt="">
            </div>
        </div>
    </section>
    <section class="progressions">
        <div class="theme_box">
            <div class="theme_text">Арифметическая и геометрическая прогрессия</div>
        </div>
        <div class="box">
            <div class="arifmetic_progression_column">
                <p>арифметическая прогрессия</p>
                <p>Это прогрессия, где каждый следующий член равен сумме предыдущего с фиксированным для прогрессии числом d</p>
                <p>Пример: 1, 3, 5, 7, 9, ...; d = 2</p>
                <p>d - разность арифметической прогрессии</p>
                <div class="arifmetic_progression_formule">
                    <p>Формулы n-го члена арифметической прогрессии:</p>
                    <p>a<sub>n</sub> =  a<sub>1</sub> + (n - 1)d</p>
                    <p>a<sub>n</sub> =  a<sub>m</sub> + (n - m)d</p>
                </div>
                <div class="arifmetic_progression_summ">
                    <p>Сумма n членов арифметической прогрессии</p>
                    <img src="" alt="">
                </div>
                <div class="arifmetic_progression_property">
                    <p>Основное свойство арифметической прогрессии</p>
                    <p>Каждый член арифметической прогрессии, начиная со второго, есть среднее арифметическое соседних</p>
                    <img src="" alt="">
                </div>
            </div>
            <div class="geometric_progression_column">
                <p>Геометрическая прогрессия</p>
                <p>Это прогрессия, где каждый следующий член равен произведению предыдущего и фиксированного для прогрессии числа q</p>
                <p>Пример: 1, 4, 16, 64, ...; q = 4</p>
                <p>q - знаменатель геометрической прогрессии</p>
                <div class="geometric_progression_formule">
                    <p>Формулы n-го члена геометрической прогрессии:</p>
                    <p>b<sub>n</sub> = b<sub>1</sub>q<sup>n-1</sup></p>
                    <p>b<sub>n+1</sub> = b<sub>n</sub>q</p>
                </div>
                <div class="geometric_progression_summ">
                    <p>Сумма первых n членов геометрической прогрессии</p>
                    <img src="" alt="">
                </div>
                <div class="geometric_progression_property">
                    <p>Основное свойство геометрической прогрессии</p>
                    <p>Квадрат каждого члена геометрической прогрессии, начиная со второго, равен произведению соседних</p>
                    <p>b<sup>2</sup><sub>n</sub> = b<sub>n-1</sub> ∙ b<sub>n+1</sub></p>
                </div>
            </div>
        </div>
        <div class="infinite_geometric_progression_box">
            <p>Бесконечно убывающая геометрическая прогрессия</p>
            <p>Это геометрическая прогрессия, у которой модуль знаменателя меньше единицы</p>
            <img src="" alt="">
            <p>Суммой бесконечной геометрической прогрессии называют число, к которому стремится сумма её первых n членов при n→∞</p>
        </div>
    </section>

</body>
</html>