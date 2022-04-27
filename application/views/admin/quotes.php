<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Add/Update Quotes')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-chat "></i> Message </h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo base_url('admin/quotes'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <div class="clearfix"></div>
        <div class="panel-body">

            <div class="row">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td><strong>Name : </strong></td>
                            <td><?php echo ucfirst($row->fname).' '.ucfirst($row->lname); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Email : </strong></td>
                            <td><?php echo $row->email; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Phone : </strong></td>
                            <td><?php echo $row->phone; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Requested Transport Date : </strong></td>
                            <td><?= date("D, d M Y", strtotime($row->resquested_transport_date)); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Pickup Location City : </strong></td>
                            <td><?php echo $row->pickup_city; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Pickup Location Zip : </strong></td>
                            <td><?php echo $row->pickup_zip; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Ending Location City : </strong></td>
                            <td><?php echo $row->ending_city; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Ending Location Zip: </strong></td>
                            <td><?php echo $row->ending_zip; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Message : </strong></td>
                            <td><?php echo $row->message; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Recieved At : </strong></td>
                            <td><?= date("D, d M Y", strtotime($row->created_date)); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <br>
        </div>
        <div class="clearfix"></div>
    </div>
<?php else: ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array("#" => "Quotes")); ?>

    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-chat" aria-hidden="true"></i> Manage <strong> Quotes</strong></h2>
        </div>
        <div class="col-md-6 text-right">
    <!--            <a href="<?php echo base_url('admin/what/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>-->
        </div>
    </div>
    <br>
    <form method="post" action="<?=base_url('admin/quotes/deleteAll')?>">
        <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    <th width="" class="text-center no_order" style="">
                        <button type="submit" onclick="return confirm('Are you sure to delete?');" name="delete_selected" class="btn btn-sm btn-danger">Delete</button>
                    </th>
                    <th width="5%" class="text-center">Sr#</th>
                    <th width="" class="text-center">Name</th>
                    <th width="" class="text-center">Email, Phone</th>
                    <th width="" class="text-center">Requested Transport Date</th>
                    <th width="" class="text-center">Pickup Location City, Zip</th>
                    <th width="" class="text-center">Ending Location City, Zip</th>
                    <th width="" class="text-center">Date</th>
                    <th width="" class="text-center">Status</th>
                    <th width="" class="text-center">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($rows) > 0): $count = 0; ?>
                    <?php foreach ($rows as $row): ?>
                        <?php $time = strtotime($row->created_date); ?>
                        <tr  class="odd gradeX status_tr">
                            <td class="text-center">
                                <input type="checkbox" name="checkbox_id[]" class="select_checkbox" value="<?= $row->id ?>">
                            </td>
                            <td class="text-center"><?php echo ++$count; ?></td>
                            <td class="text-center"><?= ucfirst($row->fname).' '.ucfirst($row->lname) ?></td>
                            <td class="text-center"><?= $row->email ?><br><?= $row->phone ?></td>
                            <td class="text-center"><?= date("D, d M Y", strtotime($row->resquested_transport_date)); ?></td>
                            <td class="text-center"><?= $row->pickup_city ?><br><?= $row->pickup_zip ?></td>
                            <td class="text-center"><?= $row->ending_city ?><br><?= $row->ending_zip ?></td>
                            <td class="text-center"><?php echo date("D, d M Y", $time); ?></td>
                            <td class="text-center"><?= get_contact_seen_status($row->status)?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-primary" role="menu" style="right:0 !important;left:inherit">
                                        <li><a href="<?php echo base_url(); ?>admin/quotes/manage/<?php echo $row->id; ?>/<?php echo $row->slug; ?>">View</a></li>
                                        <li><a href="<?php echo base_url(); ?>admin/quotes/delete/<?php echo $row->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </form>
<?php endif; ?>