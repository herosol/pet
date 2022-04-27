<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Add/Update Products')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Add/Update <strong>Products</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo base_url(ADMIN . '/products'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action="" name="frmNewsletter" role="form" class="form-horizontal blog-form" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="">
                                <div class="panel-heading col-md-12">
                                    <div class="panel-title"><h3>Basic Information</h3></div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Product Category</label>
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
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Product Brands</label>
                                                <select name="brand_id" id="brand_id" class="form-control" required>
                                                    <option value=''>-- Select --</option>
                                                    <?php
                                                    foreach ($brands as $index => $brand) { ?>
                                                        <option value="<?= $brand->id ?>" <?= ($row->brand_id == $brand->id) ? 'selected' : '' ?>> <?= $brand->title ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Type</label>
                                                <select name="phone_type" id="phone_type" class="form-control" required>
                                                    <option value=''>-- Select --</option>
                                                    <?php
                                                    foreach ($phone_types as $index => $type) { ?>
                                                        <option value="<?= $type->id ?>" <?= ($row->phone_type == $type->id) ? 'selected' : '' ?>> <?= $type->title ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Available</label>
                                                <select name="available" id="available" class="form-control" required>
                                                    <option value=''>-- Select --</option>
                                                    <?php
                                                    foreach (availability() as $index => $avail) { ?>
                                                        <option value="<?= $index ?>" <?= ($row->available == $index) ? 'selected' : '' ?>> <?= $avail ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Product Title</label>
                                                <input type="text" name="title" value="<?=$row->title?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Vendor</label>
                                                <input type="text" name="vendor" value="<?=$row->vendor?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Product Price</label>
                                                <input type="text" name="price" value="<?=price_format($row->price)?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Product Discount</label>
                                                <input type="text" name="discount" value="<?=price_format($row->discount)?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label">Short Description</label>
                                                <textarea  rows="8" class="form-control ckeditor" name="short_description" required><?=$row->description?></textarea>
                                            </div>
                                        </div>
                                    </div>                                  
                                    <div class="clearfix"></div>
                                </div>
                                
                               
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading col-md-12" style="padding: 5.5px 10px"><i class="fa fa-eye" aria-hidden="true"></i> Display Options</div>
                                <div class="panel-body" style="padding: 15.5px 0px">                    

                                    <div class="col-md-7">
                                        <h5>Active</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="btn-group" id="status" data-toggle="buttons">
                                            <label class="btn btn-default btn-on btn-sm <?php if($row->status == 1){echo 'active';}?>">
                                            <input type="radio" value="1" name="status"<?php if($row->status == 1){echo 'checked';}?>><i class="fa fa-check" aria-hidden="true"></i></label>
                                          
                                            <label class="btn btn-default btn-off btn-sm <?php if($row->status == 0){echo 'active';}?>">
                                            <input type="radio" value="0" name="status" <?php if($row->status == 0){echo 'checked';}?>><i class="fa fa-times" aria-hidden="true"></i></label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading col-md-12" style="padding: 5.5px 10px"><i class="fa fa-eye" aria-hidden="true"></i> Is Featured</div>
                                <div class="panel-body" style="padding: 15.5px 0px">                    

                                    <div class="col-md-7">
                                        <h5>Is Featured</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="btn-group" id="is_featured" data-toggle="buttons">
                                            <label class="btn btn-default btn-on btn-sm <?php if($row->is_featured == 1){echo 'active';}?>">
                                            <input type="radio" value="1" name="is_featured"<?php if($row->is_featured == 1){echo 'checked';}?>><i class="fa fa-check" aria-hidden="true"></i></label>
                                          
                                            <label class="btn btn-default btn-off btn-sm <?php if($row->is_featured == 0){echo 'active';}?>">
                                            <input type="radio" value="0" name="is_featured" <?php if($row->is_featured == 0){echo 'checked';}?>><i class="fa fa-times" aria-hidden="true"></i></label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading col-md-12" style="padding: 5.5px 10px"><i class="fa fa-picture-o"></i> Thumbnail </div>
                                <div class="panel-body thumbnail_blog" style="padding: 10px" id="imgDiv">
                                    <img src="<?= !empty($row->image) ? get_site_image_src("products", $row->image) : '' ?>" style="width: 100%; cursor: pointer;" id="newImg">
                                    <input type="file" name="image" accept="image/*" id="imgInput">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading col-md-12" style="padding: 5.5px 10px"><i class="fa fa-picture-o"></i> Gallery Images </div>
                                <div class="panel-body thumbnail_blog" style="padding: 10px" id="">
                                    <input type="file" name="gallery_images[]" accept="image/*" id="" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-12">                
                    <hr class="hr-short">
                    <div class="form-group text-right">
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
<?php else: ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Manage Products')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Manage <strong>Products</strong></h2>
        </div>
         <div class="col-md-6 text-right">
            <a href="<?= base_url(ADMIN . '/products/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th class="text-center">Sr#</th>
                <th width="10%">Image</th>
                <th width="15%">Title</th>
                <th width="15%">Product Category, Product Brand, Type</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Available</th>
                <th>Vendor</th>
                <th>Featued</th>
                <th>Status</th>
                <th>created date</th>
                <th class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($products) > 0): $count = 0; ?>
                <?php foreach ($products as $prod):  ?>                    
                    <tr class="odd gradeX">
                        <td class="text-center"><?= ++$count; ?></td>
                        <td>
                            <?php
                                if(empty($prod->image)){
                            ?>
                                    <img src="<?=base_url();?>adminassets/images/no_image.jpg" style="width: 100px">
                            <?php
                                }
                                else{
                            ?>
                                    <img src="<?=get_site_image_src("products/", $prod->image, '100p_')?>" style="width: 100px">
                            <?php
                                }
                            ?>
                        </td>
                        <td><b><?= $prod->title ?></b></td>
                        <td>
                            <b><?= get_product_cat_name($prod->category_id) ?></b><br/>
                            <b><?= get_product_brand_name($prod->brand_id) ?></b><br/>
                            <b><?= get_phone_type($prod->phone_type) ?></b>
                        </td>
                        <td><b><?= price_format($prod->price) ?></b></td>
                        <td><b><?= price_format($prod->discount) ?></b></td>
                        <td><b><?= get_available($prod->available) ?></b></td>
                        <td><b><?= $prod->vendor ?></b></td>
                        <td><b><?= yes_no_status($prod->is_featured) ?></b></td>
                        <td><b><?=get_active_status($prod->status)?></b></td>
                       <td><b><?= format_date($prod->created_date,'M d Y h:i:s A'); ?></b></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= base_url(ADMIN); ?>/products/manage/<?= $prod->id; ?>">Edit</a></li>
                                    <?php if(access(10)):?>
                                        <li><a href="<?= base_url(ADMIN); ?>/products/delete/<?= $prod->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    <?php endif?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>
<script src="<?= base_url('adminassets/js/jquery-3.4.1.js'); ?>"></script>
<script type="text/javascript">
    $(document).on('click', '.add_recipe', function(e) {
        e.preventDefault();
          $ad = $(".recipe_clone:first").clone();
          $ad.find("input").val("");
          $ad.find("textarea").html("");
          var i=0;      
          $('.recipe_container').append($ad);
          $(".remove_recipe").each(function(){
            console.log($(this));
                $(this).click(function(e){
                    e.preventDefault(); 
                    $(this).parent().remove();
                });
          });
     });
    $('.add_new_cat').click(function(e){
        $(".category_new").toggle();
    });
    jQuery(document).on('change', '#imgInput', function () {

                var preview = jQuery(this).closest("#imgDiv").find("#newImg");
                console.log(preview);
                var oFReader = new FileReader();
                oFReader.readAsDataURL(jQuery(this)[0].files[0]);
                oFReader.addEventListener("load", function () {
                    preview.attr('src',oFReader.result);
                }, false);
    });
    $(document).on('click', '#add_category', function (event) {
            event.preventDefault();
            var cat_name=$("#cat_name").val();
            console.log("<?php echo base_url('admin/products/add_category'); ?>");
            $.ajax({
                    url: "<?php echo base_url('admin/products/add_category'); ?>",
                    data: {cat_name:cat_name },
                    type: "post",
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                        if(response.status==true){
                            $(".site_categories").append('<li><input type="radio" name="categories" value="'+response.cat_id+'" checked="checked"> <span>'+cat_name+'</span></li>');
                            $('.category_new').hide();
                            $('#cat_name').val("");
                        }
                        
                      },
                      error: function(response)
                   {
                    console.log(response);
                   }
          });
        });
</script>