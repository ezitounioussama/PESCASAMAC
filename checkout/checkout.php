<?php require_once('../inc/header.php');
require_once('../inc/nav.php');
?>
<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<h1 class="sr-only">Checkout</h1>
<div class="relative mx-auto max-w-screen-2xl">
    <form action="delete.php" method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="bg-gray-50 py-12 md:py-24">
                <div class="mx-auto max-w-lg px-4 lg:px-8">
                    <div class="flex items-center">
                        <button type="submit" class="inline-flex items-center rounded border-2 border-red-500 bg-red-500 px-5 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-red-500 focus:outline-none focus:ring active:opacity-75">
                            Empty Cart

                            <svg class="ml-2 h-5 w-5 " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true">
                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </button>


                    </div>

                    <div class="mt-8">
                        <p class="text-2xl font-medium tracking-tight">:Total</p>
                        <p class="mt-1 text-sm text-gray-500">For the purchase of</p>
                    </div>

                    <div class="mt-12">
                        <div class="flow-root">
                            <ul class="-my-4 divide-y divide-gray-200">
                                <?php
                                if (is_array($fetch)) {
                                    $sn = 1;
                                    foreach ($fetch  as $data) {
                                ?>
                                        <li class="flex items-center justify-between py-4">

                                            <div class="flex items-start">
                                                <img alt="<?php echo $data['name']; ?>" src="../img/<?php echo $data['pic']; ?>" class="h-16 w-16 flex-shrink-0 rounded-lg object-cover" />

                                                <div class="ml-4">
                                                    <p class="text-sm"><?php echo $data['name']; ?></p>
                                                    <dl class="mt-1 space-y-1 text-xs text-gray-500">
                                                        <div>
                                                            <dt title="Delete" class="inline"><svg class="w-5 h-5 fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path d="M290.7 57.4L57.4 290.7c-25 25-25 65.5 0 90.5l80 80c12 12 28.3 18.7 45.3 18.7H288h9.4H512c17.7 0 32-14.3 32-32s-14.3-32-32-32H387.9L518.6 285.3c25-25 25-65.5 0-90.5L381.3 57.4c-25-25-65.5-25-90.5 0zM297.4 416H288l-105.4 0-80-80L227.3 211.3 364.7 348.7 297.4 416z" />
                                                                </svg></dt>

                                                        </div>
                                                    </dl>
                                                </div>


                                            </div>
                                            <div>
                                                <p class="text-sm"><?php echo $data['price']; ?>DH <small class="text-gray-500">x<?php echo $data['quantity']; ?></small>
                                                </p>
                                            </div>
                                        </li>

                                    <?php
                                        $sn++;
                                    }
                                } else { ?>

                                    <?php echo $fetch; ?>
                                <?php
                                }


                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <form>
        <div class="bg-white py-12 md:py-24">
            <div class="mx-auto max-w-lg px-4 lg:px-8">
                <div class="grid grid-cols-6 gap-4">
                    <div class="col-span-3">
                        <label class="mb-1 block text-sm text-gray-600" for="first_name">
                            First Name
                        </label>

                        <input class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm" type="text" id="first_name" />
                    </div>

                    <div class="col-span-3">
                        <label class="mb-1 block text-sm text-gray-600" for="last_name">
                            Last Name
                        </label>

                        <input class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm" type="text" id="last_name" />
                    </div>

                    <div class="col-span-6">
                        <label class="mb-1 block text-sm text-gray-600" for="email">
                            Email
                        </label>

                        <input class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm" type="email" id="email" />
                    </div>

                    <div class="col-span-6">
                        <label class="mb-1 block text-sm text-gray-600" for="phone">
                            Phone
                        </label>

                        <input class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm" type="tel" id="phone" />
                    </div>

                    <div class="col-span-6">
                        <label class="mb-1 block text-sm text-gray-600" for="Address">
                            Address
                        </label>

                        <input class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm" type="tel" id="Address" />
                    </div>



                    <div class="col-span-6 mt-5">
                        <button class="block w-full rounded-lg bg-blue-700 p-2.5 text-sm text-white">
                            Command
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
<? require_once('../inc/footer.php'); ?>