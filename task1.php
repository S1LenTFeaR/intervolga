<?php 
    include_once 'header.html';
    include 'funcs.PHP';
?>

<?php
    /*
    Проблемы я вижу такие:
    1) Про переменную $a сказано, что в ней хранится текст новости, но не указано полний ли текст или его часть.
    2) Переменная $link ссылку на полный текст новости, но там может быть несколько новостей. 
    Если так, то благодаря переменной $a мы знаем, где начинается новость, но не знаем, где заканчивается.
    Что может пойти не так:
    1) Если в переменной $a полный текст, то можно без проблем производить манипуляции с ним,
    а если текст не полный, будет захвачена не одна лишь новость, а также и весть текст после неё.
    */
?>

<section>
    <div class="container-xxl">
        <h2>Первые 180 символов новости</h2>
        <!--Функция из файла funcs.PHP(Отвечает за логику) -->
        <?php echo task1(); ?>
    </div>
</section>
