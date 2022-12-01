<?php

require_once '../config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Requests</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<form action="../find_request/find1.php" method="post">
    <h3>Знайти продукти, що постачає компанія (назва):</h3>
    <input type="text" name="company_name"><br><br>
    <button type="submit">Find</button>
</form><br>
<form action="../find_request/find2.php" method="post">
    <h3>Знайти кур'єрів, що доставляли продукт з типом:</h3>
    <input type="text" name="type"><br><br>
    <button type="submit">Find</button>
</form><br>
<form action="../find_request/find3.php" method="post">
    <h3>Знайти клієнта, що сплачував методом (card/cash):</h3>
    <input type="text" name="payment_method"><br><br>
    <button type="submit">Find</button>
</form><br>
<form action="../find_request/find4.php" method="post">
    <h3>Знайти постачальника, що постачав продукт дорожче за:</h3>
    <input type="number" name="price"><br><br>
    <button type="submit">Find</button>
</form><br>
<form action="../find_request/find5.php" method="post">
    <h3>Знайти замовлення, що замовив клієнт з номером телефона:</h3>
    <input type="number" name="phone_number"><br><br>
    <button type="submit">Find</button>
</form><br>
<form action="../find_request/find6.php" method="post">
    <h3>Знайти клієнта, що замовляв продукти тільки від постачальника з ID:</h3>
    <input type="number" name="supplier_id"><br><br>
    <button type="submit">Find</button>
</form><br>
<form action="../find_request/find7.php" method="post">
    <h3>Знайти клієнта, що замовляв всі ті продукти що і клієнт з ім'ям:</h3>
    <input type="text" name="name"><br><br>
    <button type="submit">Find</button>
</form><br>
<form action="../find_request/find8.php" method="post">
    <h3>Знайти клієнта, що замовляв всі ті і тільки ті продукти що і клієнт з ім'ям:</h3>
    <input type="text" name="name"><br><br>
    <button type="submit">Find</button>
</form><br>
<form action="../find_request/find9.php" method="post">
    <h3>Знайти постачальника, що постачає більше ніж (кількість продуктів):</h3>
    <input type="number" name="count"><br><br>
    <button type="submit">Find</button>
</form><br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>
