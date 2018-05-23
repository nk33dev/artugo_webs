<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach($page->children()->find('services')->children()->visible() as $child) : ?>
                 <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                    <i class="<?= $child->serviceIcon() ?> text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3"><?= $child->serviceTitle() ?></h3>
                    <p class="text-muted mb-0"><?= $child->serviceText() ?></p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
