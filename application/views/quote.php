<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header'); ?>
    <main index>
        <section class="quote_form">
            <div class="contain">
                <div class="text-center">
                    <h1><?=$content['banner_heading']?></h1>
                </div>
                <form action="" method="POST" class="formAjax" id="">
                    <div class="quote_blk">
                        <h4><?=$content['first_form_heading']?></h4>
                        <div class="row formRow">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['field_text1']?></label>
                                    <input type="text" name="fname" value="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['field_text2']?></label>
                                    <input type="text" name="lname" value="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['field_text3']?></label>
                                    <input type="text" name="phone" value="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['field_text4']?></label>
                                    <input type="text" name="email" value="" class="txtBox">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="quote_blk">
                        <h4><?=$content['second_form_heading']?></h4>
                        <div class="row formRow">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['scnd_field_text1']?></label>
                                    <input type="text" name="resquested_transport_date" value="" class="txtBox datepicker">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                    <h3><?=$content['asdsa']?></h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['scnd_field_text2']?></label>
                                    <input type="text" name="pickup_city" value="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['scnd_field_text3']?></label>
                                    <input type="text" name="pickup_zip" value="" class="txtBox">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                    <h3><?=$content['fasdas']?></h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['scnd_field_text4']?></label>
                                    <input type="text" name="ending_city" value="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                    <label><?=$content['scnd_field_text5']?></label>
                                    <input type="text" name="ending_zip" value="" class="txtBox">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                    <h3><?=$content['scnd_field_text6']?></h3>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                    <textarea class="txtBox" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-6 text-center">
                                <button type="submit" class="webBtn colorBtn roundBtn lgBtn"><?=$content['button_text']?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
<?php $this->load->view('includes/footer'); ?>
</body>
</html>