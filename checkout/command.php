<?php
require_once('../inc/db.php');
//  product data
$productName = $_POST['product_name'];
$productCalibre = $_POST['product_calibre'];
$productTraitement = $_POST['product_traitement'];
$productPrice = $_POST['product_price'];
$productQuantity = $_POST['product_quantity'];
//  user data
$userFirstName = $_POST['first_name'];
$userLastName = $_POST['last_name'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone'];
$userAddress = $_POST['address'];
$frais = $_POST['frais'];
// traitements
$id = $_POST['id'];


if (isset($_POST['Command'])) {

    for ($i = 0; $i < count($id); $i++) {

        $productName = $_POST['product_name'][$i];
        $productCalibre = $_POST['product_calibre'][$i];
        $productTraitement = $_POST['product_traitement'][$i];
        $productPrice = $_POST['product_price'][$i];
        $productQuantity = $_POST['product_quantity'][$i];

        $sql = "INSERT INTO `tbl_orders`(`id`,`first_name`, `last_name`, `email`, `phone`, `adresse` , `frais`,`product_name`,`product_calibre`, `product_trtmt`,`product_price`,`product_quantity` ) 
    VALUES (`id`,'$userFirstName','$userLastName','$userEmail','$userPhone','$userAddress','$frais','$productName','$productCalibre','$productTraitement','$productPrice','$productQuantity')";

        $result = $conn->query($sql);
    }
    if ($result == TRUE) {

        echo "New record created successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}





























// if (isset($_POST['Command'])) {
//     foreach ($productName as $id) {
//         echo $id;
//     }
//     echo "<br>";
//     foreach ($productCalibre as $id) {
//         echo $id;
//     }
//     echo "<br>";
//     foreach ($productTraitement as $id) {
//         echo $id;
//     }
//     echo "<br>";
//     foreach ($productPrice as $id) {
//         echo $id;
//     }
//     echo "<br>";
//     foreach ($productQuantity as $id) {
//         echo $id;
//     }
//     echo "<br>";
//     echo $userFirstName;
//     echo "<br>";
//     echo $userLastName;
//     echo "<br>";
//     echo $userEmail;
//     echo "<br>";
//     echo $userAddress;
//     echo "<br>";
//     echo $userPhone;
//     echo "<br>";
//     echo $frais;
// }
