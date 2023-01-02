<?php require_once('../inc/header.php');
require_once('../inc/nav.php');
require_once('inc/fetchData.php');
?>

<div class="loader-wrapper bg-blue-500">
  <span class="loader"><span class="loader-inner"></span></span>
</div>
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:items-start">
      <div class="lg:col-span-3">


        <div class="mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
          <?php echo $deleteMsg ?? ''; ?>
          <?php
          if (is_array($fetchData)) {
            $sn = 1;
            foreach ($fetchData as $data) {
          ?>
              <a href='<?php echo "product.php?id=" . $data["id"]; ?>' class="relative block bg-white">

                <img alt="<?php echo $data['name']; ?>" src="../img/<?php echo $data['pic']; ?>" class="h-56 w-full rounded-bl-3xl rounded-tr-3xl object-cover sm:h-72" />
                <div class="p-6">


                  <h3 class="mt-4 text-lg font-bold"><?php echo $data['name']; ?></h3>



                  <button type="button" class="mt-4 flex w-full items-center justify-center rounded-xl bg-blue-600 text-white px-8 py-4">
                    <span class="text-sm font-bold capitalize"> choix de préparation</span>


                  </button>
                </div>
              </a>
            <?php
              $sn++;
            }
          } else { ?>

            <?php echo $fetchData; ?>
          <?php
          } ?>

        </div>
      </div>
    </div>
  </div>
</section>

<script>
  window.addEventListener('resize', () => {
    const desktopScreen = window.innerWidth < 768

    document.querySelector('details').open = !desktopScreen
  })
</script>




<?php require_once('../inc/footer.php'); ?>