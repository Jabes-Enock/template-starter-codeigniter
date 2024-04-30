<nav class="bg-white dark:bg-gray-900 fixed left-0 right-0 top-0 z-50 shadow-sm">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="<?= base_url('/') ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="<?= base_url('assets/img/vector.svg') ?>" class="h-8 md:h-10" alt="Logo Jabes Reis" />
            <div class=" dark:text-white flex  md:hidden lg:flex flex-col">
                <span class="text-lg md:text-xl font-thin whitespace-nowrap">Template</span>
                <span class="text-[6px] md:text-[8px] font-thin whitespace-nowrap dark:text-white">Template
                    starter</span>
            </div>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
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
                    <a href="<?= base_url('/about') ?>"
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
                            <input type="checkbox" class="sr-only peer" id="toggle_theme">
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





<script>

    const setTheme = () => {
        const localTheme = localStorage.getItem('theme') || false

        if (localTheme) {
            if (localTheme === 'light') {
                $('html').removeClass('dark')
            }

            if (localTheme === 'dark') {
                $('html').addClass('dark')
                $('#toggle_theme').attr('checked', true)
            }
        }

        const theme = document.getElementById('toggle_theme')
        theme.addEventListener('change', (e) => {

            if (!theme.checked) {
                $('html').removeClass('dark')
                localStorage.removeItem('theme')
                return
            }

            $('html').addClass('dark')
            localStorage.setItem('theme', 'dark')
        })
    }

    setTheme()
</script>