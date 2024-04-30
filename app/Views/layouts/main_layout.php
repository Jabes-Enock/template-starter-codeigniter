<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta tags -->
    <?= $this->renderSection("metaTags") ?>
    <meta name="author" content="Template">
    <!-- SEO -->
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <!-- mobile -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1d4ed8">
    <meta name="format-detection" content="telephone-no">
    <!-- location -->
    <meta name="geo.region" content="BR-SP">
    <meta name="geo.placename" content="São Paulo">

    <!-- open graph -->
    <meta property="og:title" content="Template">
    <meta property="og:description" content="Template for codeIgniter project ">
    <meta property="og:image" content="https://your-host.com/assets/img/vector.png">
    <meta property="og:url" content="https://jyour-host.com/">
    <meta property="og:type" content="website">
    <!-- cache -->
    <!-- <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0"> -->


    <!--Ícones Material Design-->
    <link rel="stylesheet" href="<?= base_url('assets/css/materialdesignicons.min.css') ?>">
    <!-- flowbite -->
    <link href="<?= base_url('libs/2.3.flowbite.min.css') ?>" rel="stylesheet" />
    <!-- tailwind -->
    <link rel="stylesheet" href="<?= base_url('assets/css/tailwind.css') ?>">
    <!-- jQuery -->
    <script type="text/javascript" src="<?= base_url('libs/jquery-3.7.0.min.js') ?>"></script>
    <!-- axios cdn -->
    <script src="<?= base_url('libs/jquery-3.7.0.min.js') ?>"></script>
    <!-- axios config -->
    <script type="text/javascript" src="<?= base_url('libs/axiosConfig.js') ?>"></script>
    <!-- sweetAlert -->
    <script src="<?= base_url('libs/sweetAlert2.js') ?>"></script>


    <!-- favicon -->
    <!-- <link rel="icon" type="image" href="<?= base_url('assets/img/vector.png') ?>"> -->
    <link rel="icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon" />


    <!-- page config -->
    <title><?= $this->renderSection("title") ?></title>
</head>

<body class="dark:bg-gray-900  dark:text-white">
    <div id="before-page-init" class="max-w-screen h-screen  grid place-items-center">
        <div class="text-center">
            <div role="status">
                <svg aria-hidden="true"
                    class="inline w-14 h-14 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <div class="page-loaded hidden ">
        <?= view_cell('NavbarCell') ?>
        <div class="pt-16 md:pt-8">
            <?= $this->renderSection('content') ?>
        </div>
        <?= view_cell('FooterCell') ?>
    </div>
    <script src="<?= base_url('libs/flowbite.min.js') ?>"></script>

    <script>
        window.addEventListener('load', () => {
            $('#before-page-init').addClass('hidden')
            $('.page-loaded').removeClass('hidden')
        })
    </script>
</body>

</html>