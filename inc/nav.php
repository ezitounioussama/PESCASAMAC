<div class="bg-blue-700 px-4 py-3 text-white">
    <p class="text-center text-md font-medium band_font font-bold">
        Frais de livraison offerts au-dessus de 500DH de commande.
    </p>
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

                <a href="#P.congeles" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    P.congelés
                </a>

                <a href="#Saumons" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    Saumons
                </a>

                <a href="#Fruit" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    Fruit de mer
                </a>
                <a href="#Contact" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-600">
                    Contactez nous
                </a>
            </nav>

            <div class="ml-8 flex items-center">
                <div class="flex items-center">
                    <span>
                        <a href="/cart" class="block border-b-4 border-transparent p-6 hover:border-blue-600">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>

                            <span class="sr-only">Cart</span>
                        </a>
                    </span>
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
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#P.Congeles">P.Congeles</a>
                    </li>

                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#Sumons">Sumons</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#Fruit">Fruit de mer</a>
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