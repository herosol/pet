<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header'); ?>
    <main index>
    <section class="outer_banner" style="background:url(<?= get_site_image_src("images", $content['image1'], ''); ?>)">
        <div class="contain">
            <div class="cntnt text-center">
                <h1><?=$content['banner_heading']?></h1>
            </div>
        </div>
    </section>
    <section class="event_slider_sec">
       <div class="contain">
            <div class="owl-carousel owl-theme event_slider">
                <?php foreach($services as $index => $s): ?>
                    <div class="inner">
                        <div class="image">
                            <img src="<?= get_site_image_src("services", $s->image, 'thumb_'); ?>" src="" alt="" >
                        </div>
                        <div class="cntnt">
                            <h4><?=$s->tagline?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
       </div>
   </section>
   <section class="service_cntnt">
       <div class="contain">
           <div class="flex">
               <div class="colL">
                    <div class="inner">
                        <div class="heading-cntnt">
                            <h3><?=$content['wwd_color_heading']?></h3>
                            <h2><?=$content['wwd_heading']?></h2>
                            <div class="image_small_icon">
                                <img src="<?=asset('images/title_img.png')?>" alt="">
                            </div>
                        </div>
                        <?=$content['wwd_desc']?>
                    </div>
               </div>
               <div class="colR">
                   <h4><?=$content['wwd_faqs_heading']?></h4>
                    <?php foreach($faqs as $index => $f): ?>
                        <div class="acc">
                            <h4><?=$f->question?></h4>
                            <div class="content">
                                <div class="innerContent">
                                    <p><?=$f->answer?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <hr>

                    <h4><?=$content['wwd_after_faqs_heading']?></h4>
                    <div class="image">
                        <img src="<?= get_site_image_src("images", $content['image2'], 'thumb_'); ?>"  alt="" >
                    </div>
                    
               </div>
           </div>
            
       </div>
   </section>
    
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>