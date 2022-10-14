<?php require_once('../inc/header.php');
require_once('../inc/nav.php');
require_once('inc/fetchData.php');
?>


<!--  sec products -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<section>
  <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold">Poissons frais</h2>

    <div class="mt-4">
      <?php echo $deleteMsg ?? ''; ?>
      <div class="swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide">
            <?php
            if (is_array($fetchData)) {
              $sn = 1;
              foreach ($fetchData as $data) {
            ?>
                <a href="index.html" class="group block overflow-hidden rounded-lg">
                  <img alt="Toy" src="../img/<?php echo $data['pic']; ?>" class="h-56 w-full object-cover transition-transform duration-500 group-hover:scale-105 lg:h-72 rounded-lg" />

                  <div class="p-6">
                    <!-- <a href="index.html"
                      class="inline-blolg text-white bg-blue-600 px-3 py-1 text-xs font-medium"
                    >
                      New
                    </a href="index.html"> -->

                    <h5 class="mt-4 text-lg font-bold"><?php echo $data['name']; ?></h5>

                    <!-- <p class="mt-2 text-sm font-medium text-gray-600">$14.99</p> -->

                    <button name="add" type="button" class="mt-4 flex w-full items-center justify-center rounded-lg text-white bg-blue-600 px-8 py-4">
                      <a href="index.html" class="text-sm font-medium"> Choix des options </a href="index.html">

                      <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                      </svg>
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
          </li>


        </ul>

        <div class="swiper-pagination !relative !bottom-0 mx-auto mt-8 max-w-3xl"></div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8">
    <div class="mt-4">
      <div class="swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide">
            <a href="index.html" class="group block overflow-hidden rounded-lg">
              <img alt="Toy" src="../img/forth.jpg" class="h-56 w-full object-cover transition-transform duration-500 group-hover:scale-105 lg:h-72 rounded-lg" />

              <div class="p-6">
                <!-- <a href="index.html"
                        class="inline-blolg text-white bg-blue-600 px-3 py-1 text-xs font-medium"
                      >
                        New
                      </a href="index.html"> -->

                <h5 class="mt-4 text-lg font-bold">P-frais</h5>

                <!-- <p class="mt-2 text-sm font-medium text-gray-600">$14.99</p> -->

                <button name="add" type="button" class="mt-4 flex w-full items-center justify-center rounded-lg text-white bg-blue-600 px-8 py-4">
                  <a href="index.html" class="text-sm font-medium"> Choix des options </a href="index.html">

                  <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                </button>
              </div>
            </a>

          </li>


        </ul>

        <div class="swiper-pagination !relative !bottom-0 mx-auto mt-8 max-w-3xl"></div>
      </div>
    </div>
  </div>
</section>

<?php require_once('../inc/footer.php'); ?>