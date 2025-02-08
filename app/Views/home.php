<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container mx-auto md:pt-24 p-4 md:px-16 pt-8 mb-32 space-y-8">
    <p class="text-4xl "> Welcome to Home </p>
    <?= view_cell("ThemeCell") ?>

</div>
<?= $this->endSection() ?>