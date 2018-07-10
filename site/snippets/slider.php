<?php
    $slides = $page->children()->find('slider')->children()->visible();
    $slidecnt = $page->children()->find('slider')->children()->visible()->count();
    $index = 0;
?>


<div class="theme-slider text-center text-white d-flex" <?php e($page->children()->find('slider')->sliderHeight()->bool(), 'data-fullheight="1"'); ?>>
    <div class="row">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <?php if(count($slides) > 1) : ?>
                <ol class="carousel-indicators">
                    <?php for($i=0; $i < $slidecnt; $i++) : ?>
                        <li data-target="#carouselIndicators" data-slide-to="<?= $i ?>" <?php if($i === 0) : echo 'class="active"'; endif; ?>></li>
                    <?php endfor; ?>
                </ol>
            <?php endif(); ?>
            <div class="carousel-inner">
                <?php foreach ($slides as $slide) : ?>
                    <div class="carousel-item<?php if($index === 0) : echo ' active'; endif; ?>" style="background-image: url('<?= $slide->contentUrl() .  "/" . $slide->slideImg()->value() ?>')" <?php e($page->children()->find('slider')->sliderHeight()->bool(), 'data-fullheight="1"'); ?>>
                        <div class="row d-flex justify-content-center">
                            <div class="col-8 align-self-center">
                                <div class="carousel-caption d-block">
                                    <h3><?= $slide->slideTitle() ?></h3>
                                    <hr>
                                    <?= $slide->slideText()->kirbytext() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $index++; ?>
                <?php endforeach; ?>
            </div>

            <?php if(count($slides) > 1) : ?>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
