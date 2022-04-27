<?php echo getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?php echo base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> Main Banner</h3>
            <div class="form-group">
                <div class="col-md-4">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image1']) ? base_url().UPLOAD_PATH.'images/'.$row['image1'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image1" accept="image/*" <?php if(empty($row['image1'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="banner_heading_left" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="banner_heading_left" value="<?= $row['banner_heading_left'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="banner_heading_mid" class="control-label"> Hightlighted <span class="symbol required">*</span></label>
                            <input type="text" name="banner_heading_mid" value="<?= $row['banner_heading_mid'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="banner_heading_right" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="banner_heading_right" value="<?= $row['banner_heading_right'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="banner_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                            <textarea name="banner_detail" rows="2" class="form-control" ><?= $row['banner_detail'] ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="banner_button_title_left" class="control-label">Button Text<span class="symbol required">*</span></label>
                            <input type="text" name="banner_button_title_left" id="banner_button_title_left" value="<?= $row['banner_button_title_left'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="banner_button_link_left" class="control-label">Button Link<span class="symbol required">*</span></label>
                            <select name="banner_button_link_left" id="banner_button_link_left" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach ($pages as $index => $page) { ?>
                                    <option value="<?= $index ?>" <?= ($row['banner_button_link_left'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="banner_button_title_right" class="control-label">Button Text<span class="symbol required">*</span></label>
                            <input type="text" name="banner_button_title_right" id="banner_button_title_right" value="<?= $row['banner_button_title_right'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="banner_button_link_right" class="control-label">Button Link<span class="symbol required">*</span></label>
                            <select name="banner_button_link_right" id="banner_button_link_right" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach ($pages as $index => $page) { ?>
                                    <option value="<?= $index ?>" <?= ($row['banner_button_link_right'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Section 2</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="wwrb_color_heading" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                            <input type="text" name="wwrb_color_heading" value="<?= $row['wwrb_color_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="wwrb_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="wwrb_heading" value="<?= $row['wwrb_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="wwrb_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                            <textarea name="wwrb_desc" id="wwrb_desc" rows="6" class="form-control ckeditor" required=""><?= $row['wwrb_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php for($i = 1; $i <= 2; $i++):?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Card <?=$i?> Image 
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?=get_site_image_src("images", $row['image'.($i+1)]) ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image<?=($i+1)?>" accept="image/*" <?php if(empty($row['image'.($i+1)])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="wwrb_card_heading<?=$i?>" class="control-label"> Card <?=$i?> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="wwrb_card_heading<?=$i?>" id="wwrb_card_heading<?=$i?>" value="<?= $row['wwrb_card_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="wwrb_card_desc<?=$i?>" class="control-label"> Card <?=$i?> Short Description <span class="symbol required">*</span></label>
                                <textarea name="wwrb_card_desc<?=$i?>" id="wwrb_card_desc<?=$i?>" rows="3" class="form-control" required=""><?= $row['wwrb_card_desc'.$i] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>

            <h3> Section 3</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Video Poster
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['poster']) ? getImageSrc(UPLOAD_PATH . "images/", $row['poster']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="poster" accept="image/*" <?php if (empty($row['poster'])) {
                                                                                                    echo 'required=""';
                                                                                                } ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Upload Video Here</label>
                        <input type="file" name="video" accept="image/*" <?php if (empty($row['video'])) { echo 'required=""'; } ?>>

                        <br/>
                        <?php if(!empty($row['video'])): ?>
                            <video src="<?= getImageSrc(UPLOAD_PATH . "images/", $row['video'])?>" width="300" controls>
                            </video>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <h3>Section 4</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="dm_color_heading" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                            <input type="text" name="dm_color_heading" value="<?= $row['dm_color_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="dm_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="dm_heading" value="<?= $row['dm_heading'] ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php for($i = 1; $i <= 4; $i++):?>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="dm_card_heading<?=$i?>" class="control-label"> Card <?=$i?> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="dm_card_heading<?=$i?>" id="dm_card_heading<?=$i?>" value="<?= $row['dm_card_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="dm_card_desc<?=$i?>" class="control-label"> Card <?=$i?> Short Description <span class="symbol required">*</span></label>
                                <textarea name="dm_card_desc<?=$i?>" id="dm_card_desc<?=$i?>" rows="3" class="form-control" required=""><?= $row['dm_card_desc'.$i] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>

            <h3> Section 5</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image4']) ? base_url().UPLOAD_PATH.'images/'.$row['image4'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image4" accept="image/*" <?php if(empty($row['image4'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3> Section 6</h3>
            <div class="form-group">
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="loj_colored_heading" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                            <input type="text" name="loj_colored_heading" value="<?= $row['loj_colored_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="loj_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="loj_heading" value="<?= $row['loj_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="loj_detail" class="control-label"> Detail <span class="symbol required">*</span></label>
                            <textarea name="loj_detail" rows="4" class="form-control ckeditor" ><?= $row['loj_detail'] ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="loj_button_title" class="control-label">Button Text<span class="symbol required">*</span></label>
                            <input type="text" name="loj_button_title" id="loj_button_title" value="<?= $row['loj_button_title'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="loj_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                            <select name="loj_button_link" id="loj_button_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach ($pages as $index => $page) { ?>
                                    <option value="<?= $index ?>" <?= ($row['loj_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Right Upper Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image5']) ? base_url().UPLOAD_PATH.'images/'.$row['image5'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image5" accept="image/*" <?php if(empty($row['image5'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Left Lower Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image6']) ? base_url().UPLOAD_PATH.'images/'.$row['image6'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image6" accept="image/*" <?php if(empty($row['image6'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h3> Section 6</h3>
            <div class="form-group">
                <div class="col-md-4">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image7']) ? base_url().UPLOAD_PATH.'images/'.$row['image7'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image7" accept="image/*" <?php if(empty($row['image7'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="sayhello_heading_colored" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                            <input type="text" name="sayhello_heading_colored" value="<?= $row['sayhello_heading_colored'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="sayhello_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="sayhello_heading" value="<?= $row['sayhello_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="sayhello_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                            <textarea name="sayhello_detail" rows="2" class="form-control" ><?= $row['sayhello_detail'] ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="sayhello_button_title" class="control-label">Button Text<span class="symbol required">*</span></label>
                            <input type="text" name="sayhello_button_title" id="sayhello_button_title" value="<?= $row['sayhello_button_title'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="sayhello_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                            <select name="sayhello_button_link" id="sayhello_button_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach ($pages as $index => $page) { ?>
                                    <option value="<?= $index ?>" <?= ($row['sayhello_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Section 7</h3>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="testimonials_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="testimonials_heading" value="<?= $row['testimonials_heading'] ?>" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="testimonials_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                    <textarea name="testimonials_desc" id="testimonials_desc" class="form-control" rows="2" required=""><?= $row['testimonials_desc'] ?></textarea>
                </div>
            </div>


            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>