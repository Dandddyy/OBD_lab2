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
    body {
        background-image: url("../background.jpg");
        color: #ffffff;
    }

    button {
        background-color: #303030;
        color: white;
        padding 15px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        border-radius: 7px;
        border: 1px solid #606060;
    }

    input, textarea {
        background-color: #303030;
        color: white;
        padding 15px 32px;
        display: inline-block;
        font-size: 16px;
        border-radius: 7px;
        border: 1px solid #606060;
    }

    form {
        padding-left: 20px;
    }

    h2 {
        text-align: center;
    }

</style>
<body>
<div class="block1"
     style="width: 40%; background-color: #101010; position: absolute; top: 20px; left: 30%; border-radius: 30px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
    <h2>Requests</h2>
    <form action="../find_request/find1.php" method="post">
        <h3>Знайти продукти, що постачає компанія (назва):</h3>
        <input type="text" name="company_name"><br><br>
        <button type="submit">Find</button>
    </form>
    <br>
    <form action="../find_request/find2.php" method="post">
        <h3>Знайти продукти дорожчі за (ціна):</h3>
        <input type="number" name="price"><br><br>
        <button type="submit">Find</button>
    </form>
    <br>
    <form action="../find_request/find3.php" method="post">
        <h3>Знайти продукти дешевші за (ціна):</h3>
        <input type="number" name="price"><br><br>
        <button type="submit">Find</button>
    </form>
    <br>
    <form action="../find_request/find4.php" method="post">
        <h3>Знайти кур'єра, що доставляв замовлення з ID:</h3>
    <input type="number" name="order_id"><br><br>
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
    </form>
    <br>
    <form action="../find_request/find9.php" method="post">
        <h3>Знайти постачальника, що постачає більше ніж (кількість продуктів):</h3>
        <input type="number" name="count"><br><br>
        <button type="submit">Find</button>
    </form>
    <br><br>
    <form action="../index.php" style="text-align: center; padding-bottom: 30px; padding-left: 0px">
        <button type="submit">Cancel</button>
    </form>
</div>
</body>
