<?php if(!$site->footerOne()->value() && !$site->footerTwo()->value() && !$site->footerThree()->value() && !$site->copyright()->value()) : ?>

    <footer></footer>

<?php else : ?>
<section class="footer bg-dark" role="footer">
    <div class="conwrap container-fluid">
        <div class="container">
            <div class="row">
                <?php if($site->footerOne()->kirbytext()->value()) : ?>
                    <div class="col-12 col-md-4">
                        <?= $site->footerOne()->kirbytext() ?>
                    </div>
                <?php endif; ?>
                <?php if($site->footerTwo()->kirbytext()->value()) : ?>
                    <div class="col-12 col-md-4">
                        <?= $site->footerTwo()->kirbytext() ?>
                    </div>
                <?php endif; ?>
                <?php if($site->footerThree()->kirbytext()->value()) : ?>
                    <div class="col-12 col-md-4">
                        <?= $site->footerThree()->kirbytext() ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <span class="copyright"><?= $site->copyright()->kirbytext() ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>



<!-- Bootstrap core JavaScript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="assets/js/jarallax-element.min.js"></script>
<script src="assets/js/jarallax-video.min.js"></script>

<!-- Custom scripts -->
<script src="assets/js/webs.js"></script>

</body>

</html>
