<?php
    include_once 'DB_connect.php';
    //Запрос данных из БД по возрастанию населения
    $query = $mysqli->query("SELECT * FROM Country ORDER BY coun_population") or die($mysqli->error);
    //Добавление данных в БД
    if(isset($_POST['save']))
    {
        $name = $_POST['name'];
        $population = $_POST['population'];
        $currency = $_POST['currency'];

        $mysqli->query("INSERT INTO Country (coun_name, coun_population, coun_currency) VALUES('$name', '$population', '$currency')") or 
            die(mysqli_error($mysqli));
        header("Location: task5.php");
    }
?>