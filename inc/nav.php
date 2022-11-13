<div class="bg-blue-700 px-4 py-3 text-white">
    <p class="text-center text-xl font-medium band_font font-bold">
        Frais de livraison offerts au-dessus de 500DH de commande.
    </p>
</div>

<div class="share-container floating">
    <ul class="share-link">
        <li>
            <img src="../img/phone.svg" alt="phone" class="w-6 h-6" />&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="tel:+212663628206" class="capitalize">Appelez-nous</a>
        </li>
        <li>
            <img src="../img/whatsapp.svg" class="w-6 h-6" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://wa.me/212663628206?text=Just%20a%20test" target="_blank" class="capitalize">Whatsapp</a>
        </li>
        <li>
            <img src="../img/email.svg" alt="mail" class="w-6 h-6" />&nbsp;&nbsp;&nbsp;&nbsp;
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

            <a href="../" class="flex">
                <span class="inline-block h-12 w-32 rounded-lg"><img src="../img/logo pesca samac..png" class="w-32 h-12 rounded-lg" alt="" /></span>
            </a>
        </div>

        <div class="flex flex-1 items-center justify-end">
            <nav class="hidden lg:flex lg:gap-4 lg:text-md lg:font-bold lg:uppercase lg:tracking-wide lg:text-gray-500">
                <a href="../p_frais/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    P.frais
                </a>

                <a href="../p_congele/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    P.congelés
                </a>
                <a href="../accompagnement/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    Accompagnement
                </a>
                <a href="#Saumons" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    Saumons
                </a>

                <a href="../fruitDeMer/home.php" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    Fruit de mer
                </a>
                <a href="#Contact" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    Contactez nous
                </a>
            </nav>

            <?php
            include("../inc/db.php");
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
                            $msg = "No Data Found";
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
                        <div class="px-3 py-3 border border-blue-600 flex items-center justify-center text-center rounded-lg ">
                            <div>
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog relative w-auto pointer-events-none">
                            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Cart</h5>
                                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body relative p-4">
                                    <!-- products in the cart -->
                                    <?php
                                    if (is_array($fetch)) {
                                        $sn = 1;
                                        foreach ($fetch  as $data) {
                                    ?>
                                            <div class="flex items-start pt-4 pb-4">

                                                <!-- <img alt="Tee" src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=830&q=80" class="h-16 w-16 rounded-lg border-2 border-black object-cover" /> -->

                                                <div class="ml-4">
                                                    <h3 class="text-sm"><?php echo $data['name']; ?></h3>

                                                    <dl class="mt-1 space-y-1 text-xs text-gray-500">
                                                        <div>
                                                            <dt class="inline ">Price: <?php echo $data['price']; ?></dt>

                                                        </div>

                                                        <div>
                                                            <dt class="inline">Qte :</dt>
                                                            <dd class="inline"><?php echo $data['quantity']; ?></dd>
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
                                    } ?>
                                    <!-- end of products -->
                                    <div class="space-y-4 text-center">


                                        <a href="#" class="block w-full rounded-full bg-blue-500 p-4 text-sm font-medium text-yellow-50 hover:ring-1 hover:ring-rose-900">
                                            Checkout
                                        </a>


                                    </div>
                                </div>
                                <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                    <button type="button" class="px-6 py-2.5
          bg-purple-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-purple-700 hover:shadow-lg
          focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-purple-800 active:shadow-lg
          transition
          duration-150
          ease-in-out" data-bs-dismiss="modal">Close</button>

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
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="../p_frais/home.php">P.frais</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="../p_congele/home.php">P.Congeles</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="../accompagnement/home.php">Accompagnement</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#Sumons">Sumons</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="../fruitDeMer/home.php">Fruit de mer</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#Contact">Contactez Nous</a>
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