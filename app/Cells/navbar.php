<nav class="bg-white dark:bg-gray-900 fixed left-0 right-0 top-0 z-30 shadow-sm">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <?= view_cell("LogoCell") ?>
        <button data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none  dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="<?= base_url('/') ?>"
                        class="block py-2 px-3  <?= uri_string() === '' ? 'text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 md:dark:text-white-500' ?>  rounded md:bg-transparent  md:p-0 dark:text-gray-300"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="<?= url_to('about_us') ?>"
                        class="block py-2 px-3  <?= uri_string() === 'about' ? 'text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900' ?>  rounded md:bg-transparent  md:p-0 dark:text-gray-300 "
                        aria-current="page">About</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        <label class="flex items-center me-5 cursor-pointer justify-between">
                            <span class=" text-gray-900 dark:text-white">
                                <i
                                    class="mdi mdi-theme-light-dark mr-8 text-xl md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"></i>
                            </span>
                            <input type="checkbox" class="sr-only peer toggle_theme">
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer  dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                        </label>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<!-- drawer component -->
<div id="drawer-navigation"
    class="fixed top-0 left-0 z-60 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu
    </h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="<?= base_url('/') ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="mdi mdi-home-variant"></i>
                    <span class="ms-3">Home</span>
                </a>
            </li>
            <li>
                <a href="<?= url_to('about_us') ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="mdi mdi-information-variant"></i>
                    <span class="ms-3">About</span>
                </a>
            </li>
            <li class="hover:bg-gray-100 dark:hover:bg-gray-700 group p-1.5 rounded-lg">
                <a href="#"
                    class="block py-2 px-3 text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:text-white md:dark:hover:bg-transparent hover:bg-gray-100 dark:hover:bg-gray-700">
                    <label class="flex items-center me-5 cursor-pointer justify-between">
                        <span class=" text-gray-900 dark:text-white">
                            <i
                                class="mdi mdi-theme-light-dark mr-8 text-xl md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"></i>
                        </span>
                        <input type="checkbox" class="sr-only peer toggle_theme">
                        <div
                            class="relative w-11 h-6 bg-gray-200 rounded-full peer  dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                    </label>
                </a>
            </li>

        </ul>
    </div>
</div>




<script>

    const setTheme = () => {
        const localTheme = localStorage.getItem('theme') || false

        if (localTheme) {

            if (localTheme === 'light') {
                $('html').removeClass('dark')
            }

            if (localTheme === 'dark') {
                $('html').addClass('dark')
                $('.toggle_theme').attr('checked', true)
            }
        }


        const theme = document.querySelectorAll('.toggle_theme')

        theme.forEach(item => {
            item.addEventListener('change', (e) => {

                if (!item.checked) {
                    $('html').removeClass('dark')
                    localStorage.removeItem('theme')
                    return
                }

                $('html').addClass('dark')
                localStorage.setItem('theme', 'dark')
            })
        })
    }

    setTheme()
</script>