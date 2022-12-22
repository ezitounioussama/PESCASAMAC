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
$payment = $_POST['payment'];
$ttl_price = $_POST['ttl_price'];
// traitements
$id = $_POST['id'];


if (isset($_POST['Command'])) {

    for ($i = 0; $i < count($id); $i++) {

        $productName = $_POST['product_name'][$i];
        $productCalibre = $_POST['product_calibre'][$i];
        $productTraitement = $_POST['product_traitement'][$i];
        $productPrice = $_POST['product_price'][$i];
        $productQuantity = $_POST['product_quantity'][$i];

        $sql = "INSERT INTO `tbl_orders`(`id`,`first_name`, `last_name`, `email`, `phone`, `adresse` , `frais`, `payment`,`product_name`,`product_calibre`, `product_trtmt`,`product_price`,`product_quantity` ) 
    VALUES (`id`,'$userFirstName','$userLastName','$userEmail','$userPhone','$userAddress','$frais', '$payment','$productName','$productCalibre','$productTraitement','$productPrice','$productQuantity')";

        $result = $conn->query($sql);
    }
    if ($result == TRUE) {

        mysqli_query($conn, "DELETE FROM cart");

        if (isset($userLastName))
            $sql = "SELECT first_name,last_name, email ,phone ,adresse ,frais, payment ,GROUP_CONCAT(product_name separator '<br>')
             AS products_list,GROUP_CONCAT(product_calibre separator '<br>') 
             AS products_calibre ,GROUP_CONCAT(product_price separator '<br>') 
             AS price ,GROUP_CONCAT(product_quantity separator '<br>') 
             AS qty FROM  tbl_orders WHERE last_name= '$userLastName'";


        $result = $conn->query($sql); ?>
        <div class="m-3 flex ">
            <button id="download" class="group relative inline-flex items-center overflow-hidden rounded bg-indigo-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-indigo-500">
                <span class="absolute right-0 translate-x-full transition-transform group-hover:-translate-x-4">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>

                <span class="text-sm font-medium transition-all group-hover:mr-4">
                    Telecharger votre bon de commande
                </span>
            </button>
        </div>
        <div class="border border-black rounded-xl p-3 m-8">
            <section id="invoice">
                <div class="flex items-center">


                    <a href="../" class="flex">
                        <span class="inline-block h-12 w-32 rounded-lg"><img src="../img/logo pesca samac..png" class="w-32 h-12 rounded-lg" alt="" /></span>
                    </a>
                </div>
                <div class="max-w-screen-xl  py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
                    <?php while ($row = $result->fetch_assoc()) {
                        $nm = $row['first_name'];
                        $ln = $row['last_name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $addresse = $row['adresse'];
                        $frais = $row['frais'];
                        $payment = $row['payment'];
                        $p_name = $row['products_list'];
                        $calibre = $row['products_calibre'];
                        $prc = $row['price'];
                        $qty = $row['qty'];
                    }; ?>
                    <header>
                        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl Capitalize">
                            Bon Commande de Monsieur <?php echo $nm . ' ' . $ln ?>
                        </h2>
                    </header>

                    <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">

                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="capitalize   py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        full name
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> full name </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $nm . ' ' . $ln ?> </span>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="  py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Email
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> email </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $email ?> </span>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="  py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Phone
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> phone </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $phone ?> </span>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="  py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Address
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> address </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $addresse ?> </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">

                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="  py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Product List
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> Product List </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $p_name ?> </span>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="  py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Products Calibre
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> Products Calibre </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $calibre ?> </span>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="  py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Price
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> Price </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $prc ?> </span>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="  py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Quantity
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> Quantity </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $qty ?> </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block overflow-hidden group">
                                <div class="relative pt-3 bg-white">
                                    <h3 class="  py-2 text-left font-bold text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Total
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> Total </span>

                                        <span class="tracking-wider text-gray-900"> <?php echo $ttl_price ?>DH </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div>
                        <p class="pb-2 pt-5  text-left font-bold text-gray-900">Type de votre paiment : &nbsp;<?php echo $payment ?></p>
                    </div>

                    <div>
                        <p class="pb-2 pt-5 text-left font-bold text-gray-900">Les Frais de livraisons : <?php echo $frais ?>DH</p>
                    </div>
                    <?php
                    $Tprc = $ttl_price + $frais;
                    ?>
                    <div>
                        <p class="pb-2 pt-5 text-left font-bold text-gray-900">Total Price + Frais : &nbsp;<?php echo $Tprc ?>DH</p>
                    </div>
                </div>
            </section>



        </div>
<?php



    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
<script>
    window.onload = function() {
        document.getElementById('download').addEventListener("click", () => {
            const invoice = this.document.getElementById('invoice');
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 0,
                filename: 'bon_de_Command.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait'
                }
            };
            html2pdf().from(invoice).set(opt).save();
        })
    }
</script>
<?php

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
