<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?= showMsg(); ?>
    <?php // getBredcrum(ADMIN, array('#' => 'Add/Update FAQ)); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> <?= $page_title?></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/productbrands'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action="" name="frmFaq" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label" for="status"> Status <span class="symbol required">*</span></label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" <?php
                            if (isset($row->status) && '1' == $row->status) {
                                echo 'selected';
                            }
                            ?>>Active</option>
                            <option value="0" <?php
                            if (isset($row->status) && '0' == $row->status) {
                                echo 'selected';
                            }
                            ?>>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="category_id" class="control-label">Button Link<span class="symbol required">*</span></label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value=''>-- Select --</option>
                            <?php
                            foreach ($categories as $index => $cat) { ?>
                                <option value="<?= $cat->id ?>" <?= ($row->category_id == $cat->id) ? 'selected' : '' ?>> <?= $cat->title ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label"> Brand Name <span class="symbol required">*</span></label>
                        <input type="text" name="title" value="<?php if (isset($row->title)) echo $row->title; ?>" class="form-control" required autofocus>
                    </div>
                </div>

                <hr class="hr-short">
                <div class="form-group text-right">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php else: ?>
        <?= showMsg(); ?>
        <div class="row margin-bottom-10">
            <div class="col-md-6">
                <h2 class="no-margin"><i class="entypo-list"></i> Product Brands</h2>
            </div>
            <div class="col-md-6 text-right">
                <a href="<?= site_url(ADMIN . '/productbrands/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
            </div>
        </div>
        <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    <th width="10%" class="text-center">Sr #</th>
                    <th>Title</th>
                    <th>Product Category</th>
                    <th width="10%" class="text-center">Status</th>
                    <th width="10%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($rows) > 0): $count = 0; ?>
                    <?php foreach ($rows as $row): ?>
                        <tr class="odd gradeX">
                            <td class="text-center"><?= ++$count; ?></td>
                            <td><b><?= $row->title; ?></b></td>                     
                            <td><b><?= get_product_cat_name($row->category_id); ?></b></td>                     
                            <td class="text-center"><?= get_member_active_status($row->status); ?></td>
                            <td class="text-center">
                                <a href="<?= site_url(ADMIN.'/productbrands/manage/'.$row->id); ?>">Edit</a> |
                                <a href="<?= site_url(ADMIN.'/productbrands/delete/'.$row->id); ?>" onclick="return confirm('Your are about to delete this record. Press OK to continue.');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <?php endif; ?>