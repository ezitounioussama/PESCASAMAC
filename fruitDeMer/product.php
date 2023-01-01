<?php
require_once('../inc/header.php');
require_once('../inc/nav.php');
require_once('../inc/db.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';

$sql = "SELECT * FROM tbl_products WHERE id = '$id'";
$featured = mysqli_query($conn, $sql);

?>
<script src="../fruitDeMer/assests/traitments.js" defer></script>
<section>
  <div class="relative mx-auto max-w-screen-xl px-4 py-8">
    <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
      <?php while ($product = mysqli_fetch_assoc($featured)) : ?>
        <span class="hidden" id="id"><?= $product['id']; ?></span>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
          <img alt="<?= $product['name']; ?>" src="../img/<?= $product['pic']; ?>" class="aspect-square w-full rounded-xl object-cover" id="myIMG" />
        </div>

        <div class="sticky top-0">
          <div class="mt-8 flex justify-between">
            <div class="max-w-[55ch]">
              <h1 class="text-2xl font-bold"><?= $product['name']; ?></h1>
            </div>
            <div class="text-lg font-bold flex ">
              <p id="prc"></p><span id="currency"></span>
            </div>
          </div>

          <div class="group relative mt-4">
            <div class="block">
              <div>
                <div class="prose max-w-none group-open:hidden">
                  <p>
                    <?= $product['description']; ?>
                  </p>
                </div>

              </div>
            </div>

          </div>

          <form class="mt-8" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input class="hidden" type="text" name="product_name" id="product_name" value="<?= $product['name']; ?>">
            <input class="hidden" type="text" name="pic" id="product_name" value="../img/<?= $product['pic']; ?>">
            <input type="hidden" name="price" id="p1" value="<?= $product['price']; ?>">
            <input type="hidden" name="p2" id="p2" value="<?= $product['p2']; ?>">
            <input type="hidden" name="p3" id="p3" value="<?= $product['p3']; ?>">
            <input type="hidden" name="p4" id="p4" value="<?= $product['p4']; ?>">
            <input type="hidden" name="p5" id="p5" value="<?= $product['p5']; ?>">
            <input type="hidden" name="product_price" id="product_price">
            <fieldset <?php if (!$product['c1'] && !$product['c2'] && !$product['c3'] && !$product['c4'] && !$product['c5']) {
                        echo "hidden";
                      } ?>>
              <legend class="mb-3 text-xl font-medium" id="legend"></legend>

              <div class="flow-root">

                <div class="-m-0.5 flex flex-wrap justify-right">

                  <select id="mycalibre" class="relative w-full rounded-lg  p-2.5 text-sm font-normal focus:z-10" name="selcalibre" autocomplete="country-name">

                    <option value="" selected>Choisir une option</option>

                    <option value="<?= $product['c1']; ?>" <?php if (!($product['c1'])) {
                                                              echo "hidden";
                                                            } ?>><?= $product['c1']; ?></option>
                    <option value="<?= $product['c2']; ?>" <?php if (!($product['c2'])) {
                                                              echo "hidden";
                                                            } ?>><?= $product['c2']; ?></option>
                    <option value="<?= $product['c3']; ?>" <?php if (!($product['c3'])) {
                                                              echo "hidden";
                                                            } ?>><?= $product['c3']; ?></option>
                    <option value="<?= $product['c4']; ?>" <?php if (!($product['c4'])) {
                                                              echo "hidden";
                                                            } ?>><?= $product['c4']; ?></option>
                    <option value="<?= $product['c5']; ?>" <?php if (!($product['c5'])) {
                                                              echo "hidden";
                                                            } ?>><?= $product['c5']; ?></option>

                  </select>


                </div>
              </div>
            </fieldset>



            <div class="flex justify-center align-center my-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-7 h-7 fill-red-600 hidden mr-1" id="svg">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z" />
              </svg><span id="trtm" class="text-xl font-bold text-red-600 capitalize"></span>
            </div>

            <div class="mt-8 flex">
              <div>
                <label for="quantity" class="sr-only">Qty</label>

                <input type="number" id="quantity" name="qty" min="1" value="1" class="w-12 rounded border-gray-200 py-3 text-center text-xs [-moz-appearance:_textfield] [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none" />
              </div>

              <button type="submit" id="add" name="add" class="ml-3 block capitalize rounded bg-blue-700 px-5 py-3 text-xs font-medium text-white hover:bg-blue-600">
                Ajouter au panier
              </button>
            </div>
          </form>
        </div>
      <?php endwhile ?>
      <?php

      if (isset($_POST["add"])) {
        $product_name = $_POST["product_name"];
        $qte = $_POST["qty"];
        $price = $_POST["product_price"];
        $product_pic = $_POST["pic"];
        $calibre = $_POST["selcalibre"];

        $sql = "INSERT INTO `cart`(`name`, `price`, `quantity`,`pic`, `calibre`,`traitement`) VALUES ('$product_name','$price',$qte ,'$product_pic','$calibre','')";
        if (mysqli_query($conn, $sql)) { ?>
          <script>
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('Product Added successfully');
            location.replace("home.php");
          </script>
        <?php

        } else { ?>
          <script>
            alertify.set('notifier', 'position', 'top-right');
            alertify.error('Product already in cart');
          </script>
      <?php echo "<div class='grid max-h-full place-content-center bg-white'>
                  <div class='text-center'>
                  <strong class='text-9xl font-black text-gray-200'>404</strong>

        <h1 class='text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl'>
          Uh-oh!
        </h1>

        

        <a
          href='home.php'
          class='mt-6 inline-block rounded bg-indigo-600 px-5 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring'
        >
    Go Back Home
  </a>
</div>
</div>";
        }

        mysqli_close($conn);
      }
      ?>
    </div>
  </div>
</section>

<?php require_once('../inc/footer.php'); ?>