<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header'); ?>
    <main index>
        <section class="banner" id="banner" style="background:url(<?= get_site_image_src("images", $content['image1'], ''); ?>)">
            <div class="contain">
                <div class="content">
                    
                    <h1><?=$content['banner_heading_left']?> <em><?=$content['banner_heading_mid']?></em> <?=$content['banner_heading_right']?></h1>
                    <h4><?=$content['banner_detail']?></h4>
                    <div class="bTn">
                        <a href="<?= base_url($content['banner_button_link_left']) ?>" class="webBtn roundBtn"><?=$content['banner_button_title_left']?></a>
                        <a href="<?= base_url($content['banner_button_link_right']) ?>" class="webBtn roundBtn colorBtn">
                        <span><?=$content['banner_button_title_right']?></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="we-offer" id="we-offer">
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
                                         <img data-original="<?= get_site_image_src("images/", $content['image2'], 'thumb_'); ?>" src="" alt="" lazy>
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
                                         <img data-original="<?= get_site_image_src("images/", $content['image3'], 'thumb_'); ?>" src="" alt="" lazy>
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
        <section class="video_sec">
            <div class="videoBlk abt_video">
				<video poster="<?= get_site_image_src("images/", $content['poster'], 'thumb_'); ?>">
					<source src="<?= get_site_image_src("images/", $content['video'], ''); ?>" type="video/mp4">
				</video>
				<div class="videoBtn fa-play"></div>
			</div>
        </section>
        <section class="we-offer count_sec">
            <div class="contain">
                <div class="counter_sec">
                    <div class="heading-cntnt text-center">
                        <h3><?=$content['dm_color_heading']?></h3>
                        <h2><?=$content['dm_heading']?></h2>
                        <div class="image_small_icon">
                            <img src="<?= asset('images/title_img.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="flex" id="counter">
                        <?php for($i=1; $i<=4; $i++): ?>
                            <div class="col">
                                <div class="inner">
                                    <h1><span class="count" data-count="<?=$content['dm_card_heading'.$i]?>">0</span>+</h1>
                                    <h4><?=$content['dm_card_desc'.$i]?></h4>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                
            </div>
            <div class="image_bottom">
                <img data-original="<?= get_site_image_src("images/", $content['image4'], ''); ?>" src="" alt="" lazy>
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
                            <a href="<?=base_url($content['loj_button_link'])?>" class="webBtn roundBtn colorBtn">
                            <span><?=$content['loj_button_title']?></span></a>
                        </div>
                    </div>
                    <div class="colR">
                        <div class="inner flex">
                            <div class="image1">
                                <img data-original="<?= get_site_image_src("images/", $content['image5'], ''); ?>" src="" alt="" lazy>
                            </div>
                            <div class="image2">
                                <img data-original="<?= get_site_image_src("images/", $content['image6'], ''); ?>" src="" alt="" lazy>
                            </div>
                        </div>
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
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>