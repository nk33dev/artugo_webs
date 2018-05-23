<?php
// 2DO
// get # of images
// set columns accordingly
?>

<section class="p-0" id="galerie">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <?php foreach($page->children()->find('galerie')->galerieImgs()->yaml() as $image) : ?>
              <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?= $page->children()->find('galerie')->contentUrl() .  "/" . $image ?>" title="<?= $page->children()->find('galerie')->files()->find($image)->caption()->value() ?>">
                  <img class="img-fluid" src="<?= $page->children()->find('galerie')->contentUrl() .  "/" . $image ?>">
                  <div class="portfolio-box-caption">
                    <div class="portfolio-box-caption-content">
                      <!-- <div class="project-category text-faded">
                        Category
                      </div>
                      <div class="project-name">
                        Project Name
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
