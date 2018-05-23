<section class="jarallax" id="parallax" data-jarallax data-speed="0.2" <?php e($page->children()->find('parallax')->parallaxImageOverlay()->bool(), 'data-overlay="1"'); ?>>

    <div class="container">

        <img class="jarallax-img" src="<?= $page->children()->find('parallax')->contentUrl() .  "/" . $page->children()->find('parallax')->parallaxImage()->value() ?>" alt="">

        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-heading text-white">
                    <?= $page->children()->find('parallax')->displaytitle()->html() ?>
                </h2>
                <p class="text-white"><?= $page->children()->find('parallax')->textLeft()->html() ?></p>
            </div>
        </div>
    </div>

</section>
