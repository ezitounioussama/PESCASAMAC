<!-- footer -->
<footer class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="flex justify-center text-teal-600 sm:justify-start">
                <a href="" class="flex">
                    <span class="inline-block h-12 w-32 rounded-lg"><img src="../img/logo pesca samac..png" class="w-32 h-12 rounded-lg" alt="" /></span>
                </a>
            </div>

            <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
                Copyright &copy; <span id="currentyear"></span> . All rights
                reserved.
            </p>
        </div>
    </div>
</footer>
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
</script>
</body>

</html>