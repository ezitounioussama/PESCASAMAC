<?php
require_once('../inc/header.php');
require_once('../inc/nav.php');
require_once('../inc/db.php');

$id = $_GET['id'];

$sql = "SELECT * FROM p_frait WHERE id = '$id'";
$featured = mysqli_query($conn, $sql);

?>

<section>
  <div class="relative mx-auto max-w-screen-xl px-4 py-8">
    <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
      <?php while ($product = mysqli_fetch_assoc($featured)) : ?>
        <span class="hidden" id="id"><?= $product['id']; ?></span>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
          <img alt="<?= $product['name']; ?>" src="img/<?= $product['pic']; ?>" class="aspect-square w-full rounded-xl object-cover" id="myIMG" />
          <!-- <div class="grid grid-cols-2 gap-4 lg:mt-4">
            <img alt="Les Paul" src="../img/second.jpg" class="aspect-square w-full rounded-xl object-cover" id="altIMG" />
          </div> -->





        </div>

        <div class="sticky top-0">
          <strong class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600">
            ******
          </strong>

          <div class="mt-8 flex justify-left">
            <div class="max-w-[55ch]">
              <h1 class="text-2xl font-bold"><?= $product['name']; ?></h1>
            </div>
          </div>

          <!-- <details class="group relative mt-4">
              <summary class="block">
                <div>
                  <div class="prose max-w-none group-open:hidden">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ipsa veniam dicta beatae eos ex error culpa delectus rem
                      tenetur, architecto quam nesciunt, dolor veritatis nisi
                      minus inventore, rerum at recusandae?
                    </p>
                  </div>

                  <span
                    class="mt-4 cursor-pointer text-sm font-medium underline group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0"
                  >
                    Read More
                  </span>
                </div>
              </summary>

              <div class="prose max-w-none pb-6">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                  veniam dicta beatae eos ex error culpa delectus rem tenetur,
                  architecto quam nesciunt, dolor veritatis nisi minus
                  inventore, rerum at recusandae?
                </p>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat nam sapiente nobis ea veritatis error consequatur nisi
                  exercitationem iure laudantium culpa, animi temporibus non!
                  Maxime et quisquam amet. A, deserunt!
                </p>
              </div>
            </details> -->

          <form class="mt-8">
            <fieldset <?php if (!$product['c1'] && !$product['c2'] && !$product['c3'] && !$product['c4']) {
                        echo "hidden";
                      } ?>>
              <legend class="mb-3 text-sm font-medium">Calibre</legend>

              <div class="flow-root">
                <div class="-m-0.5 flex flex-wrap">
                  <select class="relative w-full rounded-lg border-gray-200 p-2.5 text-sm font-normal focus:z-10" id="country" name="country" autocomplete="country-name">
                    <option value="" selected>Choisir une option :</option>

                    <option value="2" <?php if (!($product['c1'])) {
                                        echo "hidden";
                                      } ?>><?= $product['c1']; ?></option>
                    <option value="3" <?php if (!($product['c2'])) {
                                        echo "hidden";
                                      } ?>><?= $product['c2']; ?></option>
                    <option value="4" <?php if (!($product['c3'])) {
                                        echo "hidden";
                                      } ?>><?= $product['c3']; ?></option>
                    <option value="5" <?php if (!($product['c4'])) {
                                        echo "hidden";
                                      } ?>><?= $product['c4']; ?></option>
                  </select>
                </div>
              </div>
            </fieldset>

            <fieldset class="mt-8" <?php if (!$product['t1'] && !$product['t2'] && !$product['t3'] && !$product['t4']) {
                                      echo "hidden";
                                    } ?>>
              <legend class="mb-3 text-sm font-medium">
                Choisissez le traitement
              </legend>

              <div class="flow-root">
                <div class="-m-0.5 flex flex-wrap">
                  <select id="myselection" class="relative w-full rounded-lg border-gray-200 p-2.5 text-sm focus:z-10">
                    <option value="" selected>Choisir une option :</option>
                    <option value="2" <?php if (!($product['t1'])) {
                                        echo "hidden";
                                      } ?>><?= $product['t1']; ?></option>
                    <option value="3" <?php if (!($product['t2'])) {
                                        echo "hidden";
                                      } ?>><?= $product['t2']; ?></option>
                    <option value="4" <?php if (!($product['t3'])) {
                                        echo "hidden";
                                      } ?>><?= $product['t3']; ?></option>
                    <option value="5" <?php if (!($product['t4'])) {
                                        echo "hidden";
                                      } ?>><?= $product['t4']; ?></option>
                  </select>
                  <script>
                    if (($('#id').html() == 5)) {
                      $('#myselection').change(function() {
                        if ($("#myselection option:selected").text() == "Entier") {
                          $('#myIMG').attr('src', "img/<?= $product['pic']; ?>");
                        } else {
                          $('#myIMG').attr('src', "img/Espadon en longe.jpg");
                        }
                      })


                    }



                    // if ($product['id'] = 5) {
                    //   
                    // } else {
                    //   echo "";
                    // }
                  </script>
                </div>
              </div>
            </fieldset>

            <div class="mt-8 flex">
              <div>
                <label for="quantity" class="sr-only">Qty</label>

                <input type="number" id="quantity" min="1" value="1" class="w-12 rounded border-gray-200 py-3 text-center text-xs [-moz-appearance:_textfield] [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none" />
              </div>

              <button type="submit" class="ml-3 block capitalize rounded bg-blue-700 px-5 py-3 text-xs font-medium text-white hover:bg-blue-600">
                Ajouter au panier
              </button>
            </div>
          </form>
        </div>
      <?php endwhile ?>

    </div>
  </div>
</section>

<?php require_once('../inc/footer.php'); ?>