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
    <meta name="mobile-web-app-capable" content="yes">
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
    <link href="<?= base_url('libs/3.1.2.flowbite.min.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('libs/3.1.2.flowbite.min.js') ?>"></script>
    <!-- tailwind -->
    <link rel="stylesheet" href="<?= base_url('assets/css/tailwind.css') ?>">
    <!-- jQuery -->
    <script type="text/javascript" src="<?= base_url('libs/jquery-3.7.0.min.js') ?>"></script>

    <!-- favicon -->
    <link rel="icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon" />

    <!-- page config -->
    <title><?= $this->renderSection("title") ?></title>
</head>

<body class="dark:bg-gray-900  dark:text-white">
    <div id="before-page-init" class="max-w-screen h-screen  grid place-items-center">
        <?= view_cell('SpinnerCell') ?>
    </div>
    <div class="page-loaded hidden ">
        <?= view_cell('NavbarCell') ?>
        <div class="pt-16 md:pt-8">
            <?= $this->renderSection('content') ?>
        </div>
        <?= view_cell('FooterCell') ?>
    </div>


    <script>
        addEventListener('load', () => {
            $('#before-page-init').addClass('hidden')
            $('.page-loaded').removeClass('hidden')
        })
    </script>
</body>

</html>