<?php 
    include_once 'header.html';
    include_once 'funcs.PHP';
?>

<section>
    <div class="container-xxl">
        <div class="row">
            <div class="col-6">
                <h2>Массив на 100 элементов</h2>
            </div>
            <div class="col-6 col text-right">
                <h2>Количество попарно равных</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <!-- Функция выполнения рассчетов (файл: funcs.PHP) -->
                <?php $pairs = task4(); ?>
            </div>
            <div class="col-6 col text-right">
                <!-- Количество попарно равных -->
                <h1 style="color: rgb(223, 223, 223)"><?php echo $pairs; ?></h1>
            </div>
        </div>
    </div>
</section>