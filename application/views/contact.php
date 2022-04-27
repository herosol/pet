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
    <section class="cmnForm">
    <div class="contain">
        <div class="flex testiForm">
           <div class="colL">
				<div class="heading">
					<h3><?=$content['heading']?></h3>
					<p><?=$content['detail']?></p>
				</div>
				<ul class="contactLst flex">
					<li>
						<h5>
							<span class="fi-map-marker"></span>
							<em><?=$content['l_heading_1']?></em>
						</h5>
						<p><?=$content['l_detail_1']?></p>
					</li>
					<li>
						<h5>
							<span class="fi-phone"></span>
							<em><?=$content['l_heading_2']?></em>
						</h5>
						<a href="tel:<?=$content['l_detail_2']?>"><?=$content['l_detail_2']?></a>
					</li>
                    
					<li>
						<h5>
							<span class="fi-envelope"></span>
							<em><?=$content['l_heading_3']?></em>
						</h5>
						<a href="mailto:<?=$content['l_detail_3']?>"><?=$content['l_detail_3']?></a>
					</li>
			   </ul>
           </div>
           <div class="colR">
            <form action="" method="POST" class="formAjax" id="">
               <h3><?=$content['form_heading']?></h3>
                    <div class="row formRow">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-6">
                       <div class="txtGrp">
                            <label><?=$content['field_text1']?></label>
                            <input type="text" name="name" id="name" value="" class="txtBox"></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-6">
                        <div class="txtGrp">
                            <label><?=$content['field_text2']?></label>
                            <input type="text" name="email" id="email" value="" class="txtBox"></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-6">
                        <div class="txtGrp">
                            <label><?=$content['field_text3']?></label>
                            <input type="text" name="phone" id="phone" value="" class="txtBox"></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-6">
                        <div class="txtGrp">
                            <label><?=$content['field_text4']?></label>
                            <input type="text" name="subject" id="subject" value="" class="txtBox"></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-6">
                            <div class="txtGrp">
                            <label><?=$content['field_text5']?></label>
                            <textarea class="txtBox" name="msg" id="msg"></textarea></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-6 text-center">
                            <button type="submit" class="webBtn colorBtn roundBtn"><i class="spinner hidden"></i><?=$content['button_text']?></button>
                        </div>
                    </div>
                </form>
			</div>
        </div>
        
    </div>
</section>
    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>