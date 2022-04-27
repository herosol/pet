<script type="text/javascript" src="<?= asset('js/commonJs.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/lightslider.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/lightgallery-all.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/main.js') ?>"></script>

<script type="text/javascript" src="<?= asset('js/lazyload.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/additional-methods.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/custom.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/custom-validation.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/jquery.validate.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/toastr.min.js') ?>"></script>

<script type="text/javascript">
    $(function() {
        $("img[lazy]").lazyload();
    });
    
	$(document).ready(function () {
    // =================lightgallery=============
    $(document).ready(function() {
        $('.imgGallery').lightGallery({
            thumbnail: true
        });
    });
    // ================end lightgallery=============

    $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            auto: true,
            loop: true,
            speed: 2500,
            pause: 8000,
            slideMargin: 0,
            // vertical: true,
            enableDrag: false,
            thumbMargin: 4,
            thumbItem: 4
        });
});

'use strict';
    $(window).load(function() {
        $(".miniSlider").delay(300).css("opacity", "1");
    });
</script>


