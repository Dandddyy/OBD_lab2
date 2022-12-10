<?php

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Shop</title>
</head>
<style>
    body {
        background-image: url("background.jpg");
        color: #ffffff;
    }

    th, td {
        padding: 10px;
        border-radius: 2px;
    }

    th {
        background: #303030;
        color: #ffffff;
        border: 1px solid #606060;
    }

    td {
        background: #606060;
    }

    table {
        padding-left: 20px;
    }

    form {
        padding-left: 20px;
    }

    h3 {
        text-align: center;
    }

    a {
        text-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
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

</style>
<body>
<div class="block1"
     style="width: 60%; background-color: #101010; position: absolute; top: 20px; left: 20%; border-radius: 30px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
    <h3>Order</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Customer ID</th>
            <th>Product ID</th>
            <th>Courier ID</th>
            <th>Quantity</th>
            <th>Date Get</th>
            <th>Date Arrived</th>
            <th>Payment Method</th>
        </tr>

        <?php
        $order = mysqli_query($connect, 'SELECT * FROM `order`');
        $order = mysqli_fetch_all($order);
        foreach ($order as $order){
            ?>
            <tr>
                <td><?= $order[0] ?></td>
                <td><?= $order[1] ?></td>
                <td><?= $order[2] ?></td>
                <td><?= $order[3] ?></td>
                <td><?= $order[4] ?></td>
                <td><?= $order[5] ?></td>
                <td><?= $order[6] ?></td>
                <td><?= $order[7] ?></td>
                <td><a style="color: #6dcfcf;" href="form/update_form_order.php?id=<?= $order[0] ?>">Update</a></td>
                <td><a style="color: #e37249;" href="vendorr/delete_order.php?id=<?= $order[0] ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <form action="form/order_form.php">
        <button type="submit">Add new Order</button>
    </form>
    <hr style="background-color: white; width: 96%; ">
    <table>
        <h3>Customer</h3>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>E-Mail</th>
            <th>Address</th>
        </tr>

        <?php
        $customer = mysqli_query($connect, 'SELECT * FROM `customer`');
        $customer = mysqli_fetch_all($customer);
        foreach ($customer as $customer) {
            ?>
            <tr>
                <td><?= $customer[0] ?></td>
                <td><?= $customer[1] ?></td>
                <td><?= $customer[2] ?></td>
                <td><?= $customer[3] ?></td>
                <td><?= $customer[4] ?></td>
                <td><a style="color: #6dcfcf;" href="form/update_form_customer.php?id=<?= $customer[0] ?>">Update</a>
                </td>
                <td><a style="color: #e37249;" href="vendorr/delete_customer.php?id=<?= $customer[0] ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <form action="form/customer_form.php">
        <button type="submit">Add new Customer</button>
    </form>
    <hr style="background-color: white; width: 96%; ">
    <table>
        <h3>Courier</h3>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>E-Mail</th>
        </tr>

        <?php
        $courier = mysqli_query($connect, 'SELECT * FROM `courier`');
        $courier = mysqli_fetch_all($courier);
        foreach ($courier as $courier) {
            ?>
            <tr>
                <td><?= $courier[0] ?></td>
                <td><?= $courier[1] ?></td>
                <td><?= $courier[2] ?></td>
                <td><?= $courier[3] ?></td>
                <td><a style="color: #6dcfcf;" href="form/update_form_courier.php?id=<?= $courier[0] ?>">Update</a></td>
                <td><a style="color: #e37249;" href="vendorr/delete_courier.php?id=<?= $courier[0] ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <form action="form/courier_form.php">
        <button type="submit">Add new Courier</button>
    </form>
    <hr style="background-color: white; width: 96%; ">
    <table>
        <h3>Product</h3>
        <tr>
            <th>ID</th>
            <th>Supplier ID</th>
            <th>Product</th>
            <th>Type</th>
            <th>Price</th>
        </tr>

        <?php
        $product = mysqli_query($connect, 'SELECT * FROM `product`');
        $product = mysqli_fetch_all($product);
        foreach ($product as $product) {
            ?>
            <tr>
                <td><?= $product[0] ?></td>
                <td><?= $product[1] ?></td>
                <td><?= $product[2] ?></td>
                <td><?= $product[3] ?></td>
                <td><?= $product[4] ?> UAH</td>
                <td><a style="color: #6dcfcf;" href="form/update_form_product.php?id=<?= $product[0] ?>">Update</a></td>
                <td><a style="color: #e37249;" href="vendorr/delete_product.php?id=<?= $product[0] ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <form action="form/product_form.php">
        <button type="submit">Add new Product</button>
    </form>
    <hr style="background-color: white; width: 96%; ">
    <table>
        <h3>Supplier</h3>
        <tr>
            <th>ID</th>
            <th>Company</th>
            <th>Phone Number</th>
            <th>E-Mail</th>
            <th>Address</th>
        </tr>

        <?php
        $supplier = mysqli_query($connect, 'SELECT * FROM `supplier`');
        $supplier = mysqli_fetch_all($supplier);
        foreach ($supplier as $supplier) {
            ?>
            <tr>
                <td><?= $supplier[0] ?></td>
                <td><?= $supplier[1] ?></td>
                <td><?= $supplier[2] ?></td>
                <td><?= $supplier[3] ?></td>
                <td><?= $supplier[4] ?></td>
                <td><a style="color: #6dcfcf;" href="form/update_form_supplier.php?id=<?= $supplier[0] ?>">Update</a>
                </td>
                <td><a style="color: #e37249;" href="vendorr/delete_supplier.php?id=<?= $supplier[0] ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <form action="form/supplier_form.php">
        <button type="submit">Add new Supplier</button>
    </form>
    <hr style="background-color: white; width: 96%; ">
    <form action="form/request.php" style="text-align: center; padding-bottom: 30px; padding-left: 0px"><br><br>
        <button style="font-size: x-large" type="submit">Requests</button>
    </form>
</div>
</body>
</html>
