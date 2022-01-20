<?php helper('html'); ?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title><?php esc($title) ?></title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/vendor/bootstrap-reboot.min.css" rel="stylesheet">
        <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <?= $this->include('templates/header') ?>
        </header>
        <main>
            <?= $this->renderSection('content') ?>
        </main>
        <footer>
            <?= $this->include('templates/footer') ?>
        </footer>
        <script type="module" src="assets/js/vendor/bootstrap.min.js"></script>
        <script type="module" src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script type="module" src="assets/js/vendor/editor.js"></script>
        <script type="module" src="assets/js/scripts.js"></script>
    </body>
</html>