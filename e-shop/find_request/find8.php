<?php
namespace Dompdf;
require '../config/connect.php';
require '../dompdf/autoload.inc.php';

$dompdf = new Dompdf;
$dompdf->setPaper("A4", "landscape");

$name = $_POST['name'];

$table = mysqli_query($connect, "SELECT *
FROM `customer`
WHERE (`customer`.`customer_id` IN
(SELECT X.`customer_id`
 FROM `order` X
 WHERE `customer`.`name` != '$name' AND (NOT EXISTS
    (SELECT `order`.`product_id`
     FROM `order` INNER JOIN `customer` ON `order`.`customer_id`=`customer`.`customer_id`
     WHERE  `customer`.`name` = '$name' AND `order`.`product_id` NOT IN
       (SELECT  `order`.`product_id`
        FROM `order`
        WHERE X.`customer_id` = `order`.`customer_id`
)))))

AND (`customer`.`customer_id` NOT IN
(SELECT Y.`customer_id` 
 FROM `order` Y
 WHERE (EXISTS
     (SELECT  `order`.`product_id`
        FROM `order`
        WHERE Y.`customer_id` = `order`.`customer_id` AND `order`.`product_id` NOT IN
            (SELECT `order`.`product_id`
     FROM `order` INNER JOIN `customer` ON `order`.`customer_id`=`customer`.`customer_id`
     WHERE  `customer`.`name` = '$name')
))))");
$table = mysqli_fetch_all($table);
$check = 0;

$html = "<h3>Find a customer who ordered all and only those products that the customer $name ordered</h3>";

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
        padding-top: 30px;
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
<div class="block1" align="center"
     style="width: 50%; background-color: #101010; position: absolute; top: 20px; left: 25%; border-radius: 30px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>E-Mail</th>
            <th>Address</th>
        </tr>
        <?php
        $iter = 0;
        $kol = 0;
        foreach ($table as $table){
            if($check != $table[0]){
                $check = $table[0];
                ?>
                <tr>
                    <td><?= $mass[0 + $iter] = $table[0] ?></td>
                    <td><?= $mass[1 + $iter] = $table[1] ?></td>
                    <td><?= $mass[2 + $iter] = $table[2] ?></td>
                    <td><?= $mass[3 + $iter] = $table[3] ?></td>
                    <td><?= $mass[4 + $iter] = $table[4] ?></td>
                </tr>
                <?php
                $iter += 5;
                $kol += 1;
            }
        }
        ?>
    </table>
    <br><br>
    <form action="../index.php" style="text-align: center; padding-bottom: 30px; padding-left: 0px">
        <button type="submit">Home</button>
    </form>
</div>
</body>
<?php
$it = 0;
for($i = 0; $i < $kol ; $i++){

    $html .= "ID: $mass[$it] <br>";
    $it += 1;
    $html .= "Name: $mass[$it] <br>";
    $it += 1;
    $html .= "Phone Number: $mass[$it] <br>";
    $it += 1;
    $html .= "E-Mail: $mass[$it] <br>";
    $it += 1;
    $html .= "Address: $mass[$it] <br>";
    $it += 1;
    $html .= "------------------------ <br>";
}

$date = date("Y-m-d-H-i-s");
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->addInfo("Find a customer who ordered all and only those products that the customer $name ordered", "$date.pdf");
$output = $dompdf->output();
file_put_contents("$date.pdf", $output);

?>