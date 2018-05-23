<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Open Graph Meta Tags  -->
    <meta property="og:title" content="<?= $site->facebookTitel()->html() ?>" />
    <meta property="og:description" content="<?= $site->facebookDescription()->html() ?>" />
    <meta property="og:image" content="<?= $page->url() .  "/content/" . $site->facebookImage()->value() ?>" />
    
    
    <title>
        <?= $site->title()->html() ?> |
            <?= $page->title()->html() ?>
    </title>
    <meta name="description" content="<?= $site->description()->html() ?>">

    <!-- Bootstrap styles -->
    <?= css('assets/vendor/bootstrap/css/bootstrap.min.css') ?>

    <!-- Parallax styles -->
    <?= css('assets/js/jarallax.css') ?>

    <!-- Lightbox CSS -->
    <?= css('assets/vendor/magnific-popup/magnific-popup.css') ?>

    <!-- Custom styles -->
    <?= css('assets/css/main.min.css') ?>

    <!-- Custom fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

</head>

<body id="page-top">
