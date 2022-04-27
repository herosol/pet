<?php echo getBredcrum(ADMIN, array('#' => 'Contact us')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Contact us</strong></h2>
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
        <h3> Main</h3>
        <div class="form-group">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="banner_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                        <input type="text" name="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="first_form_heading" class="control-label"> First Form Heading <span class="symbol required">*</span></label>
                            <input type="text" name="first_form_heading" value="<?= $row['first_form_heading']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="field_text1" class="control-label"> First Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="field_text1" value="<?= $row['field_text1']?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="field_text2" class="control-label"> Second Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="field_text2" value="<?= $row['field_text2']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="field_text3" class="control-label"> Third Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="field_text3" value="<?= $row['field_text3']?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="field_text4" class="control-label"> Fourth Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="field_text4" value="<?= $row['field_text4']?>" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="second_form_heading" class="control-label"> Second Form Heading <span class="symbol required">*</span></label>
                            <input type="text" name="second_form_heading" value="<?= $row['second_form_heading']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="scnd_field_text1" class="control-label"> First Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="scnd_field_text1" value="<?= $row['scnd_field_text1']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="asdsa" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="asdsa" value="<?= $row['asdsa']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="scnd_field_text2" class="control-label"> Second Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="scnd_field_text2" value="<?= $row['scnd_field_text2']?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="scnd_field_text3" class="control-label"> Third Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="scnd_field_text3" value="<?= $row['scnd_field_text3']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="fasdas" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="fasdas" value="<?= $row['fasdas']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="scnd_field_text4" class="control-label"> Fourth Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="scnd_field_text4" value="<?= $row['scnd_field_text4']?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="scnd_field_text5" class="control-label"> Fifth Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="scnd_field_text5" value="<?= $row['scnd_field_text5']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="scnd_field_text6" class="control-label"> Sixth Field Text <span class="symbol required">*</span></label>
                            <input type="text" name="scnd_field_text6" value="<?= $row['scnd_field_text6']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                            <input type="text" name="button_text" value="<?= $row['button_text']?>" class="form-control" required>
                        </div>
                    </div>
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