<footer>
    <div class="contain">
        <div class="flexRow flex">
            <div class="col">
                <h5><?=$site_settings->site_first_section_heading?></h5>
                <p><?=$site_settings->site_footer_text?></p>
            </div>
            <div class="col">
                <h5><?=$site_settings->site_second_section_heading?></h5>
                <ul class="lst">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li><a href="<?=base_url()?>services">Services</a></li>
                    <li><a href="<?=base_url()?>about-us">About Us</a></li>
                    <li><a href="<?=base_url()?>contact-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="col">
                <h5><?=$site_settings->site_third_section_heading?></h5>
                <ul class="lst">
                    <li><a href="tel:<?=$site_settings->site_phone?>">Call : <?=$site_settings->site_phone?></a></li>
                    <li><a href="mailto:<?=$site_settings->site_email?>">Mail : <?=$site_settings->site_email?></a></li>
                    <li>Address : <?=$site_settings->site_address?></li>
                </ul>
            </div>
            <div class="col">
                <h5><?=$site_settings->site_fourth_section_heading?></h5>
                <form action="<?= base_url('newsletter')?>" method="post" autocomplete="off" class="formAjax" id="newsletterFrm">
                    <label for="email"><?=$site_settings->site_field_heading?></label>
                    <div class="txtGrp relative">
                        <input type="email" name="email" id="email" class="txtBox" placeholder="<?=$site_settings->site_field_text?>">
                        <button type="submit"><i class="fi-arrow-right fi-2x"></i></button>
                    </div>
                </form>
                <h5><?=$site_settings->site_after_field_heading?></h5>
                <ul class="social flex">
                    <li><a href="<?=$site_settings->site_instagram?>" target="_blank" style="display: block;"><img src="<?=asset('images/social-instagram.svg')?>" alt=""></a></li>
                    <li><a href="<?=$site_settings->site_facebook?>" target="_blank" style="display: block;"><img src="<?=asset('images/social-facebook.svg')?>" alt=""></a></li>
                    <li><a href="<?=$site_settings->site_youtube?>" target="_blank" style="display: block;"><img src="<?=asset('images/social-youtube.svg')?>" alt=""></a></li>
                    <li><a href="<?=$site_settings->site_twitter?>" target="_blank" style="display: block;"><img src="<?=asset('images/social-twitter.svg')?>" alt=""></a></li>
                   
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright relative">
        <div class="contain">
            <div class="inner">
                <p><?=$site_settings->site_copyright?></p>
            </div>
        </div>
    </div>
</footer>


<!-- Main Js -->
<?php $this->load->view('includes/commonjs'); ?>