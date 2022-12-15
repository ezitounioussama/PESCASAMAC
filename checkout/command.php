<?php
require_once('../inc/header.php');
require_once('../inc/nav.php');
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

        mysqli_query($conn, "DELETE FROM cart");

        if (isset($userLastName))
            $sql = "SELECT first_name,last_name, email ,phone ,adresse ,frais ,GROUP_CONCAT(product_name separator '<br>')
             AS products_list,GROUP_CONCAT(product_calibre separator '<br>') 
             AS products_calibre ,GROUP_CONCAT(product_price separator '<br>') 
             AS price ,
             SUM(cast(product_price as float)*product_quantity) as ttl_price   FROM  tbl_orders WHERE last_name= '$userLastName'";


        $result = $conn->query($sql); ?>
        <table class="min-w-full divide-y-2 divide-gray-200 text-sm">
            <thead>
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">
                        full name
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">
                        email
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">
                        phone
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">
                        address
                    </th>

                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <?php while ($row = $result->fetch_assoc()) {
                    $nm = $row['first_name'];
                    $ln = $row['last_name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $addresse = $row['adresse'];
                    $frais = $row['frais'];
                    $p_name = $row['products_list'];
                    $calibre = $row['products_calibre'];
                    $prc = $row['price'];
                    $Tprc = $row['ttl_price'];
                }; ?>
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        <?php echo $nm . ' ' . $ln ?>
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        <?php echo $email ?>
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <?php echo $phone ?>
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <?php echo $addresse ?>
                    </td>

                </tr>
            </tbody>
        </table>
        <table class="min-w-full divide-y-2 divide-gray-200 text-sm">
            <thead>
                <tr>

                    <th class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">
                        Products list
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">
                        Calibre
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">
                        Price
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">
                        Total
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <?php echo $p_name ?>
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <?php echo $calibre ?>
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $prc ?></td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $Tprc ?>DH</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div>
            <p class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900"><?php echo $frais ?></p>
        </div>
        <div>
            <p class="whitespace-nowrap px-4 py-2 text-left font-bold text-gray-900">Total Price + Frais : &nbsp;<?php echo $Tprc ?></p>
        </div>

<?php



    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}




require_once('../inc/footer.php');























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
