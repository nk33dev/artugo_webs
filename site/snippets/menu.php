<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?= site()->title() ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php foreach($pages->first()->children()->visible() as $p): ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#<?php echo $p->slug() ?>" data-target="<?php echo $p->slug() ?>"><?php echo $p->title()->html() ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</nav>
