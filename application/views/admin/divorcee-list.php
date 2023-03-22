<div class="container-fluid">
    <div class="col-md-3" style="padding:0px;">
        <?php $this->load->view("admin/includes/sidebar");?>
    </div>
    <div class="col-md-9" style="padding:0px">
        <div class="left-panel">
            <div class="content-wrap">
				<?php if(count($maratha_divorcee_girl) != 0):?>
                <div class="col-md-12">
                    <div class="panel panel-default panel-table">                       
                        <div class="panel-body">
							<?php if($this->session->flashdata('success')) :?>
								<?php echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'?>
							<?php endif; ?>

							<?php if($this->session->flashdata('error')) :?>
								<?php echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'?>
							<?php endif; ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                        <tr>                                       
                                            <th class="hidden-xs">Divorcee ID</th>
                                            <th>Title</th>
                                            <th>Dob</th>
                                            <th>Photo</th>
                                             <th><em class="fa fa-cog"></em></th>
                                        </tr> 
                                    </thead>
                                    <?php foreach($maratha_divorcee_girl as $girl_d):?>
                                    <tbody>
                                        <tr>                                        
                                            <td class="hidden-xs"><?php echo $girl_d['enroll_reg_no']?></td>
                                            <td><?php echo $girl_d['last_name'];?></td>
                                            <td><?php echo $girl_d['date_of_birth'];?></td>
                                            <td><img src="<?php echo base_url('assets/profile_photos/'.$girl_d['profile_pic']);?>" width="50px" height="50px"></td>
                                            <td>
                                                <a class="btn btn-default" href="<?php echo site_url("brides-edit/".$girl_d['enroll_id']);?>"><em class="fa fa-pencil"></em></a>
                                                <a class="btn btn-danger del_photo" id="<?php echo $girl_d['enroll_id'];?>"><em class="fa fa-trash"></em></a>
                                               <?php if($girl_d['active_status'] == 0) {  ?>
                                                <a class="btn btn-success" href="<?php echo site_url("activate-user/".$girl_d['enroll_id']);?>">Activate</a>
                                                <?php } else { ?>
                                                <a class="btn btn-danger" href="<?php echo site_url("deactivate-user/".$girl_d['enroll_id']);?>">Dectivate</a>
                                                <?php }?>
                                            </td>
                                        </tr>                                    
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                        <hr>  
						<div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-4">
                                    <!-- <button type="button" class="btn btn-sm btn-primary btn-create">Add New</button>-->
                                </div>
                                <div class="col col-xs-8">
                                    <?php  echo $this->pagination->create_links(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php else :?>
					<div class="alert alert-danger">Result Not Found</div>
				<?php endif;?>
                <div class="clearfix"></div>
            </div>            
        </div>
    </div>
    <div class="clearfix"></div>
</div>