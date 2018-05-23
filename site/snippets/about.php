<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">
                    <?= $page->children()->find('about')->displaytitle()->html() ?>
                </h2>
                <hr class="light my-4">
                <p class="mb-4">
                    <?= $page->children()->find('about')->text()->html() ?>
                </p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
</section>
