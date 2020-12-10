<?php 
    include_once 'header.html';
    include_once 'db_connect.php'; //Файл подключения к БД
    require_once 'db_process.php'; //Файл взаимодействия с БД
?>
<!-- Вывод стран в таблице на сайт -->
<section>
    <div class="container-xxl">
        <table class="table">
            <!-- Шапка -->
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Население</th>
                    <th>Валюта</th>
                </tr>
            </thead>
            <!-- Данные -->
            <?php   
                while($row = $query->fetch_assoc())
                {?>
                    <tr>
                        <td> <?php echo $row['coun_name']; ?> </td>
                        <td> <?php echo $row['coun_population']; ?> </td>
                        <td> <?php echo $row['coun_currency']; ?> </td>
                    </tr> <?php 
                }
            ?>
        </table>
    </div>
</section>
<!-- Форма -->
<section>
    <div class="container-xxl">
        <form action="DB_process.php" method="POST">
            <div class="row">
                <!-- 3 поля -->
                <div class="col-4">
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" name="name" class="form-control btn-outline-dark" placeholder="Название страны" required />
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Население</label>
                        <input type="number" name="population" class="form-control btn-outline-dark" placeholder="Население" required />
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label>Валюта</label>
                        <input type="text" name="currency" class="form-control btn-outline-dark" placeholder="Валюта" required />
                    </div>
                </div>
                <!-- Кнопка -->
                <div class="col-1">
                    <div class="form-group">
                        <label></label>
                        <input type="submit" name="save" class="btn btn-dark mb-3" value="Сохранить">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>