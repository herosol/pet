<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php require_once('includes/header.php'); ?>
    <main index>
    <section class="outer_banner" style="background:url(<?= get_site_image_src("images", $content['image1'], '1000p_'); ?>)">
        <div class="contain">
            <div class="cntnt text-center">
                <h1><?=$content['banner_heading']?></h1>
            </div>
        </div>
    </section>
    <section class="abt_sec">
        <div class="contain">
            <div class="flex">
                <div class="colL">
                    <div class="heading-cntnt">
                        <h3><?=$content['loj_colored_heading']?></h3>
                        <h2><?=$content['loj_heading']?></h2>
                        <div class="image_small_icon">
                            <img src="<?= asset('images/title_img.png') ?>" alt="">
                        </div>
                    </div>
                    <?=$content['loj_detail']?>
                    <div class="bTn">
                        <a href="<?=base_url($content['loj_button_link'])?>" class="webBtn roundBtn">
                        <span><?=$content['loj_button_title']?></span></a>
                    </div>
                </div>
                <div class="colR">
                    <div class="inner flex">
                        <div class="image1">
                            <img data-original="<?= get_site_image_src("images/", $content['image2'], ''); ?>" src="" alt="" lazy>
                        </div>
                        <div class="image2">
                            <img data-original="<?= get_site_image_src("images/", $content['image3'], ''); ?>" src="" alt="" lazy>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="candidate">
            <div class="contain">
                <div class="cntnt text-center">
                    <div class="heading-cntnt text-center">
                        <h3><?=$content['more_about_us_colored_heading']?></h3>
                        <h2><?=$content['more_about_us_heading']?></h2>
                        <div class="image_small_icon">
                            <img src="<?=asset('images/title_img.png')?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="col">
                        <div class="inner">
                            <h4><?=$content['more_about_us_left_card_heading']?></h4>
                            <?=$content['more_about_us_left_card_desc']?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image">
                            <img data-original="<?= get_site_image_src("images", $content['image4'], 'thumb_'); ?>" src="" alt="" lazy>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h4><?=$content['more_about_us_right_card_heading']?></h4>
                            <?=$content['more_about_us_right_card_desc']?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="we-offer">
            <div class="contain">
                <div class="flex">
                    <div class="colL">
                        <div class="cntnt">
                            <div class="heading-cntnt">
                                <h3><?=$content['wwrb_color_heading']?></h3>
                                <h2><?=$content['wwrb_heading']?></h2>
                                <div class="image_small_icon">
                                    <img src="<?= asset('images/title_img.png') ?>" alt="">
                                </div>
                            </div>
                            <?=$content['wwrb_desc']?>
                        </div>
                        
                    </div>
                    <div class="colR">
                        <ul>
                           
                            <li>
                                <div class="_inner flex">
                                    <div class="icon-img">
                                         <img src="<?= get_site_image_src("images/", $content['image5'], 'thumb_'); ?>"  alt="">
                                    </div>
                                    <div class="inner-cntnt">
                                        <h4><?=$content['wwrb_card_heading1']?></h4>
                                        <p><?=$content['wwrb_card_heading1']?></p>
                                    </div>
                                </div>
                                
                            </li>
                            <li>
                                <div class="_inner flex">
                                    <div class="icon-img">
                                         <img src="<?= get_site_image_src("images/", $content['image6'], 'thumb_'); ?>"  alt="">
                                    </div>
                                    <div class="inner-cntnt">
                                        <h4><?=$content['wwrb_card_heading2']?></h4>
                                        <p><?=$content['wwrb_card_heading2']?></p>
                                    </div>
                                </div>
                                
                            </li>
                            
                        </ul>
                    </div>
                </div>
                
            </div>
            
        </section>
        <section class="team">
            <div class="contain">
                <div class="text-center">
                    <div class="heading-cntnt text-center">
                        <h3><?=$content['sec5_color_heading']?></h3>
                        <h2><?=$content['sec5_heading']?></h2>
                        <div class="image_small_icon">
                            <img src="<?=asset('images/title_img.png')?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex_row flex">
                    <?php foreach($owners as $index => $o): ?>
                        <div class="col">
                            <div class="image">
                                <img data-original="<?= get_site_image_src("owners/", $o->image, 'thumb_'); ?>" src="" alt="" lazy>
                            </div>
                            <div class="cntnt">
                                <div class="cntnt_inner">
                                    <h3><?=$o->name?></h3>
                                    <h6><?=$o->designation?></h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section class="team team_sec">
            <div class="contain">
                <div class="other_team">
                    <div class="text-center">
                        <div class="heading-cntnt text-center">
                            <h3><?=$content['sec6_color_heading']?></h3>
                            <h2><?=$content['sec6_heading']?></h2>
                            <div class="image_small_icon">
                                <img src="<?=asset('images/title_img.png')?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex_row flex">
                        <?php foreach($members as $index => $m): ?>
                            <div class="col">
                                <div class="image">
                                    <img data-original="<?= get_site_image_src("owners/", $m->image, 'thumb_'); ?>" src="" alt="" lazy>
                                </div>
                                <div class="cntnt">
                                    <div class="cntnt_inner">
                                        <h3><?=$m->name?></h3>
                                        <h6><?=$m->designation?></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta_sec" >
            <div class="contain">
                <div class="cta_blk" style="background:url(<?= get_site_image_src("images/", $content['image7'], '1000p_'); ?>)">
                    <div class="cntnt text-center">
                        <div class="heading-cntnt text-center">
                            <h3> <?=$content['sayhello_heading_colored']?></h3>
                            <h2> <?=$content['sayhello_heading']?></h2>
                            <div class="image_small_icon">
                                <img src="<?= asset('images/title_img.png') ?>" alt="">
                            </div>
                        </div>
                        <p> <?=$content['sayhello_detail']?></p>
                        <div class="bTn">
                            <a href="<?=base_url($content['sayhello_button_link'])?>" class="webBtn roundBtn">
                            <span> <?=$content['sayhello_button_title']?></span></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="testimonial we-offer">
            <div class="contain">
                <div class="heading-cntnt text-center">
                    <h3><?=$content['testimonials_heading']?></h3>
                    <h2><?=$content['testimonials_desc']?></h2>
                </div>
                <div id="owl-testi"  class="owl-carousel owl-theme">
                    <?php foreach($testimonials as $index => $t): ?>
                        <div class="item">
                            <div class="inner">
                                <div class="comnt_testi">
                                    <p><?=$t->detail?></p>
                                </div>
                                <div class="flex">
                                    <div class="testi_icon">
                                        <img src="<?= get_site_image_src("testimonials", $t->image, 'thumb_'); ?>" />
                                    </div>
                                    <h5><?=$t->name?></h5>
                                </div>
                                
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>