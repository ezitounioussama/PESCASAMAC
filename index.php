<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Tailwind Framework CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

  <!-- taiwlidn modal -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <!-- end modal here -->
  <!-- Main Style -->
  <link rel="stylesheet" href="style.css" />
  <!-- Javascript -->
  <script src="script.js" defer></script>
  <!-- Font-Awesome CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Airplane JS -->
  <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
  <title>Pesca Samac</title>
</head>
<!-- <scPript>
    tailwind.config = {
      theme: {
        container: {
          center: true,

          // Optional
          padding: {
            DEFAULT: "1rem",
            sm: "1.5rem",
            lg: "2rem",
          },
        },
      },
    };
  </script> -->
<div class="loader-wrapper bg-blue-500">
  <span class="loader"><span class="loader-inner"></span></span>
</div>
<!-- ALERT -->
<div class="bg-blue-700 px-4 py-3 text-white">
  <p class="text-center text-xl font-medium band_font font-bold">
    Frais de livraison offerts au-dessus de 500DH de commande.
  </p>
</div>

<body class="min-h-screen">
  <!-- <a
      href="https://api.whatsapp.com/send?phone=212663628206"
      class="floating"
      target="_blank"
    >
      <i class="fa fa-whatsapp my-float"></i>
    </a>
    <a
      class="button_font floating_b rounded border border-current px-8 py-3 text-sm font-medium capitalize bg-gray-200 transition hover:-rotate-2 hover:scale-110 focus:outline-none focus:ring active:text-indigo-500"
      href="#"
    >
      Discutez avec nous
    </a> -->
  <!-- <p class="button_font floating_b">Discutez avec nous</p> -->
  <div class="share-container floating">
    <ul class="share-link">
      <li>
        <img src="img/icons8-ringer-volume.gif" alt="phone" class="w-8 h-8" />&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="tel:+212663628206" class="capitalize">Appelez-nous</a>
      </li>
      <li>
        <img src="img/icons8-whatsapp.gif" class="w-8 h-8" />
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://wa.me/212663628206?text=Just%20a%20test" target="_blank" class="capitalize">Whatsapp</a>
      </li>

      <li>
        <img src="img/icons8-instagram.gif" class="w-8 h-8" />
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/pescasamac/" target="_blank" class="capitalize">Instagram</a>
      </li>
      <li>
        <img src="img/icons8-gmail-logo.gif" alt="mail" class="w-8 h-8" />&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="mailto:Pesca.Samac@gmail.com" class="capitalize">Envoyez nous un message</a>&nbsp
      </li>

    </ul>
    <div class="social-link">
      <img class="send" src="https://i.postimg.cc/CMfVgsSQ/send.png" alt="send" />
      <img class="close" src="https://i.postimg.cc/LsCMHyJr/close.png" alt="close" />
    </div>
  </div>
  <!-- NAVBAR -->

  <header class="border-b border-gray-100 body_font">
    <div class="mx-auto flex h-16 max-w-screen-2xl items-center justify-between sm:px-6 lg:px-8">
      <div class="flex items-center">
        <button type="button" class="navbar-burger p-2 sm:mr-4 lg:hidden">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>

        <a href="" class="flex">
          <span class="inline-block h-12 w-32 rounded-lg"><img src="img/logo pesca samac..png" class="w-32 h-12 rounded-lg" alt="" /></span>
        </a>
      </div>

      <div class="flex flex-1 items-center justify-end">
        <nav class="hidden lg:flex lg:gap-4 lg:text-md lg:font-bold  lg:tracking-wide lg:text-gray-500">
          <a href="p_frais/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
            P.frais
          </a>

          <a href="p_congele/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
            P.congelés
          </a>
          <a href="accompagnement/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
            Accompagnement et poisson mariné
          </a>
          <a href="chair_araignee/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
            chair d'araignee
          </a>

          <a href="fruitDeMer/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
            Fruit de mer
          </a>
          <a href="crustaces/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
            Crustaces
          </a>
        </nav>
        <?php
        include("inc/db.php");
        $db = $conn;
        $tableName = "cart";
        $columns = ['*'];
        $fetch  = fetch($db, $tableName, $columns);
        function fetch($db, $tableName, $columns)
        {
          if (empty($db)) {
            $msg = "Database connection error";
          } elseif (empty($columns) || !is_array($columns)) {
            $msg = "columns Name must be defined in an indexed array";
          } elseif (empty($tableName)) {
            $msg = "Table Name is empty";
          } else {
            $columnName = implode(", ", $columns);
            $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY name DESC";
            $result = $db->query($query);
            if ($result == true) {
              if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
              } else {
                $msg = "<div class='items-center sm:flex'>
                            <span
                              class='inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full text-white mb-3'
                            >
                              <img src='img/empty-cart.png' alt='empty-cart' class='h-8 w-8'/>
                            </span>
                        
                            <p class='mt-3 text-lg font-medium sm:mt-0 sm:ml-3'>
                              Cart is empty!
                            </p>
                          </div>";
              }
            } else {
              $msg = mysqli_error($db);
            }
          }
          return $msg;
        }
        ?>
        <div class="ml-8 flex items-center">
          <div class="flex items-center">
            <!-- Button trigger modal -->
            <button type="button" class="m-6 inline-flex relative w-fit" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="absolute inline-block top-0 right-0 bottom-auto left-auto translate-x-2/4 -translate-y-1/2 rotate-0 skew-x-0 skew-y-0 scale-x-100 scale-y-100 p-2.5 text-xs bg-blue-500 rounded-full z-10"></div>
              <div class="px-3 py-3 border border-blue-600 flex items-center justify-center text-center rounded-lg">
                <div>
                  <!-- <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg> -->
                  <img src="img/carts.png" alt="cart" class="h-4 w-4" />
                </div>
              </div>
            </button>

            <!-- Modal -->
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                  <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <!-- <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Cart</h5> -->

                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
                      </svg>
                    </button>
                  </div>
                  <div class="modal-body relative p-4">
                    <!-- products in the cart -->
                    <?php
                    if (is_array($fetch)) {
                      $sn = 1;
                      foreach ($fetch  as $data) {
                    ?>
                        <div class="flex items-start pt-4 pb-4 ">

                          <img alt="<?php echo $data['name']; ?>" src="img/<?php echo $data['pic']; ?>" class="h-16 w-16 rounded-lg border-2 border-black object-cover" />

                          <div class="ml-4">
                            <h3 class="text-sm"><?php echo $data['name']; ?></h3>

                            <dl class="mt-1 space-y-1 text-xs text-gray-500">
                              <div>
                                <dt class="inline ">Price: <span class="price"><?php echo $data['price']; ?></span> MAD</dt>

                              </div>

                              <div>
                                <dt class="inline">Qte :</dt>
                                <dd class="inline" class="qty"><?php echo $data['quantity']; ?></dd>
                              </div>

                              <div>

                                <dd class="inline" class="qty"><?php echo $data['calibre']; ?></dd>
                              </div>
                              <div>
                                <dt class="inline"><?php echo $data['traitement'];
                                                    ?></dt>
                              </div>
                            </dl>
                          </div>

                        </div>
                      <?php
                        $sn++;
                      }
                    } else { ?>

                      <?php echo $fetch; ?>
                    <?php
                    }

                    require('inc/totalPrice.php');
                    ?>

                    <div class='space-y-4 text-center'>
                      <p class='block mb-2 w-full border border-black rounded-md text-black p-4 text-sm font-medium '>
                        Total : <span class="text-md font-bold" id="total"><?php echo $sum; ?>&nbsp;DH</span>
                      </p>
                    </div>
                    <!-- end of products -->

                  </div>
                  <div class="modal-footer p-4 border-t border-gray-200 rounded-b-md">
                    <div class="space-y-4 text-center">
                      <a class="block rounded-full border border-blue-500 px-8 py-3 text-sm font-medium text-blue-600" href="checkout/checkout.php">
                        CheckOut/Modify your Cart
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- mobile nav -->
      <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
          <div class="flex items-center mb-8">
            <div class="flex-1 md:flex md:items-center md:gap-12">
              <a class="block text-lg text-white transition hover:text-white/75" href="">
                <h1 class="text-gray-600">
                  <span class="square"> &nbsp;</span>Pesca Samac
                </h1>
              </a>
            </div>
            <button class="navbar-close">
              <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <div>
            <ul>
              <li class="mb-1">
                <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="p_frais/home.php">P.frais</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="p_congele/home.php">P.Congeles</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="accompagnement/home.php">Accompagnement et poisson mariné</a>
              </li>

              <li class="mb-1">
                <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="chair_araignee/home.php">chair d'araignee</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="fruitDeMer/home.php">Fruit de mer</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="crustaces/home.php">Crustaces</a>
              </li>
            </ul>
          </div>
          <div class="mt-auto">
            <p class="my-4 text-xs text-center text-gray-400">
              &copy;<span id="currentyearMobile"></span>&nbsp; All rights
              reserved.
            </p>
          </div>
        </nav>
      </div>
      <!--mobile nav ends here -->
  </header>
  <!-- Carousel -->

  <div id="controls-carousel" class="relative" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-[450px]">
      <!-- Item 1 -->
      <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
        <img src="img/slider pesca 2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
      </div>
      <!-- Item 2 -->
      <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
        <img src="img/slider pesca 1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
      </div>
      <!-- Item 3 -->
      <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
        <img src="img/slider pesca 4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
      </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>

  <!-- Carousel Ends here -->

  <!-- PRODUCTS SECTION START HERE -->
  <h2 class="text-2xl font-bold text-blue-800 md:text-3xl text-center m-5 body_font capitalize">
    Catalogue pesca samac
  </h2>
  <div class="flex justify-evenly flex-wrap m-5 ">
    <div class="relative rounded-lg bg-[url(img/first.webp)] swing bg-cover bg-center bg-no-repeat px-4 pb-4 pt-56 sm:px-6 sm:pb-6 sm:pt-64 mb-5 sm:mb-5">
      <span class="absolute inset-0 bg-gray-900/25 rounded-lg"></span>

      <div class="relative text-center w-72">
        <h3 class="button_font text-2xl font-bold uppercase tracking-wider text-white sm:text-3xl">
          fruit de mer
        </h3>

        <!-- <p class="mt-1 text-white/95">1951-2022. Unchanged. Unmatched.</p> -->
        <div class="flex justify-center">
          <a href="fruitDeMer/home.php" class="button_font mt-6 block bg-blue-600 rounded-lg px-12 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
            découvrir
          </a>
        </div>
      </div>
    </div>
    <div class="relative rounded-lg bg-[url(img/second.jpg)] swing bg-cover bg-center bg-no-repeat px-4 pb-4 pt-56 sm:px-6 sm:pb-6 sm:pt-64 mb-5 sm:mb-5">
      <span class="absolute inset-0 bg-gray-900/25 rounded-lg"></span>

      <div class="relative text-center w-72">
        <h3 class="button_font text-2xl font-bold uppercase tracking-wider text-white sm:text-3xl">
          chair d'araignee
        </h3>

        <!-- <p class="mt-1 text-white/95">1951-2022. Unchanged. Unmatched.</p> -->

        <div class="flex justify-center">
          <a href="chair_araignee/home.php" class="button_font mt-6 block bg-blue-600 rounded-lg px-12 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
            découvrir
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-evenly flex-wrap m-5">
    <div class="relative rounded-lg bg-[url(img/PoissonCongele.png)] swing bg-cover bg-center bg-no-repeat px-4 pb-4 pt-56 sm:px-6 sm:pb-6 sm:pt-64 mb-5 sm:mb-5">
      <span class="absolute inset-0 bg-gray-900/25 rounded-lg"></span>

      <div class="relative text-center w-72">
        <h3 class="button_font text-2xl font-bold uppercase tracking-wider text-white sm:text-3xl">
          Poisson Congelés
        </h3>

        <!-- <p class="mt-1 text-white/95">1951-2022. Unchanged. Unmatched.</p> -->

        <div class="flex justify-center">
          <a href="p_congele/home.php" class="button_font mt-6 block bg-blue-600 rounded-lg px-12 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
            découvrir
          </a>
        </div>
      </div>
    </div>
    <div class="relative rounded-lg bg-[url(img/PoissonFrais.jpeg)] swing bg-cover bg-center bg-no-repeat px-4 pb-4 pt-56 sm:px-6 sm:pb-6 sm:pt-64 mb-5 sm:mb-5">
      <span class="absolute inset-0 bg-gray-900/25 rounded-lg"></span>

      <div class="relative text-center w-72">
        <h3 class="button_font text-2xl font-bold uppercase tracking-wider text-white sm:text-3xl">
          Poisson Frais
        </h3>

        <!-- <p class="mt-1 text-white/95">1951-2022. Unchanged. Unmatched.</p> -->

        <div class="flex justify-center">
          <a href="p_frais/home.php" class="button_font mt-6 block bg-blue-600 rounded-lg px-12 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
            découvrir
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-evenly flex-wrap m-5">
    <div class="relative rounded-lg bg-[url(img/Tarama.png)] swing bg-cover bg-center bg-no-repeat px-4 pb-4 pt-56 sm:px-6 sm:pb-6 sm:pt-64 mb-5 sm:mb-5">
      <span class="absolute inset-0 bg-gray-900/25 rounded-lg"></span>

      <div class="relative text-center w-72">
        <h3 class="button_font text-2xl font-bold uppercase tracking-wider text-white sm:text-3xl">
          Tarama
        </h3>

        <!-- <p class="mt-1 text-white/95">1951-2022. Unchanged. Unmatched.</p> -->

        <div class="flex justify-center">
          <a href="tarama/home.php" class="button_font mt-6 block bg-blue-600 rounded-lg px-12 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
            découvrir
          </a>
        </div>
      </div>
    </div>
    <div class="relative rounded-lg bg-[url(img/Accompagnement.png)] swing bg-cover bg-center bg-no-repeat px-4 pb-4 pt-56 sm:px-6 sm:pb-6 sm:pt-64 mb-5 sm:mb-5">
      <span class="absolute inset-0 bg-gray-900/25 rounded-lg"></span>

      <div class="relative text-center w-72">
        <h3 class="button_font text-2xl font-bold uppercase text-white sm:text-3xl">
          Accompagnement et poisson mariné

        </h3>

        <!-- <p class="mt-1 text-white/95">1951-2022. Unchanged. Unmatched.</p> -->

        <div class="flex justify-center">
          <a href="accompagnement/home.php" class="button_font mt-6 block bg-blue-600 rounded-lg px-12 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
            découvrir
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="flex justify-evenly flex-wrap m-5">
    <div class="relative rounded-lg bg-[url(img/Crustaces.jpg)] swing bg-cover bg-center bg-no-repeat px-4 pb-4 pt-56 sm:px-6 sm:pb-6 sm:pt-64 mb-5 sm:mb-5">
      <span class="absolute inset-0 bg-gray-900/25 rounded-lg"></span>

      <div class="relative text-center w-72">
        <h3 class="button_font text-2xl font-bold uppercase tracking-wider text-white sm:text-3xl">
          Crustacés
        </h3>

        <!-- <p class="mt-1 text-white/95">1951-2022. Unchanged. Unmatched.</p> -->

        <div class="flex justify-center">
          <a href="crustaces/home.php" class="button_font mt-6 block bg-blue-600 rounded-lg px-12 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
            découvrir
          </a>
        </div>
      </div>
    </div>
    <div class="relative rounded-lg bg-[url(img/Coquillage.png)] swing bg-cover bg-center bg-no-repeat px-4 pb-4 pt-56 sm:px-6 sm:pb-6 sm:pt-64 mb-5 sm:mb-5">
      <span class="absolute inset-0 bg-gray-900/25 rounded-lg"></span>

      <div class="relative text-center w-72">
        <h3 class="button_font text-2xl font-bold uppercase tracking-wider text-white sm:text-3xl">
          Coquillage
        </h3>

        <!-- <p class="mt-1 text-white/95">1951-2022. Unchanged. Unmatched.</p> -->

        <div class="flex justify-center">
          <a href="coquillage/home.php" class="button_font mt-6 block bg-blue-600 rounded-lg px-12 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
            découvrir
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End of section products -->

  <!-- Start of Contact letter -->
  <div class="mx-auto max-w-5xl px-4 py-8">
    <section class="rounded-lg bg-blue-100 p-8">
      <div class="grid grid-cols-1 gap-12 sm:grid-cols-3 sm:items-center">
        <blockquote class="sm:col-span-2">
          <p class="ml-11 text-2xl font-bold tracking-tight capitalize sm:text-3xl mb-3 body_font text-blue-800">
            Notre services :
          </p>
          <p class="text-gring-offset-warm-gray-500 mx-auto mt-4 max-w-lg mb-3 text-xl p_font rounded-lg bg-blue-100">
            Notre gamme de produits : Filet et pavés de poisson frais ,
            Conditionnés, Sous-vide, Prêts à cuisiner. Nous mettons à jour les
            quantités du Lundi au Mercredi selon les arrivages.
            <span class="text-orange-600 font-bold">
              N'hésitez pas a checker notre site chaque lundi
            </span>
            ou à
            <span class="text-orange-600 font-bold">Nous écrire</span> si vous
            avez une question , Notre service client est à votre service.
          </p>
        </blockquote>
        <img alt="Man" src="img/notre service.jpg" class="aspect-square w-full rounded-lg object-cover" />
      </div>
    </section>
  </div>

  <!-- End of Contact letter -->

  <!-- Start of livraison part -->
  <div class="mx-auto max-w-5xl px-4 py-8">
    <section class="rounded-lg bg-blue-100 p-8">
      <div class="grid grid-cols-1 gap-12 sm:grid-cols-3 sm:items-center">
        <img alt="service la livraison" src="img/livraison.png" class="aspect-square w-full rounded-lg" />

        <blockquote class="sm:col-span-2">
          <p class="text-2xl font-bold tracking-tight sm:text-3xl mb-3 body_font text-blue-800">
            Service la Livraison :
          </p>
          <p class="font-small p_font">Nous livrons sur :</p>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Casablanca</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Mohammadia</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Bouznika</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Skhirat</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Rabat</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Kenitra</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Tanger</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Tetouan</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>Marrakech</strong>
            </p>
          </cite>
          <cite class="mt-2 inline-flex items-center not-italic">
            <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
            <p class="text-md uppercase text-orange-600 sm:ml-3">
              <strong>ElJadida</strong>
            </p>
          </cite>
          <p class="font-small mt-2 p_font">
            - Minimum de la commande 399DH. <br />
            - Frais de livraison 30DH sur Casablanca.<br />
            - Frais de livraison hors Casablanca 49DH. <br />
            - La commande offerte au-dessus de 500DH.
          </p>
        </blockquote>
      </div>
    </section>
  </div>
  <!-- End of letter part -->

  <!-- footer -->
  <footer class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex justify-center text-teal-600 sm:justify-start">
          <a href="" class="flex">
            <span class="inline-block h-12 w-32 rounded-lg"><img src="img/logo pesca samac..png" class="w-32 h-12 rounded-lg" alt="" /></span>
          </a>
        </div>

        <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
          Copyright &copy; <span id="currentyear"></span> . All rights
          reserved.
        </p>
      </div>
    </div>
  </footer>
  <script src="//instant.page/5.1.1" type="module" integrity="sha384-MWfCL6g1OTGsbSwfuMHc8+8J2u71/LA8dzlIN3ycajckxuZZmF+DNjdm7O6H3PSq"></script>
  <script>
    // Burger menus
    document.addEventListener("DOMContentLoaded", function() {
      // open
      const burger = document.querySelectorAll(".navbar-burger");
      const menu = document.querySelectorAll(".navbar-menu");

      if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
          burger[i].addEventListener("click", function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle("hidden");
            }
          });
        }
      }

      // close
      const close = document.querySelectorAll(".navbar-close");
      const backdrop = document.querySelectorAll(".navbar-backdrop");

      if (close.length) {
        for (var i = 0; i < close.length; i++) {
          close[i].addEventListener("click", function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle("hidden");
            }
          });
        }
      }

      if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
          backdrop[i].addEventListener("click", function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle("hidden");
            }
          });
        }
      }
    });

    $(window).on("load", function() {
      $(".loader-wrapper").fadeOut("slow");
    });
  </script>
</body>

</html>