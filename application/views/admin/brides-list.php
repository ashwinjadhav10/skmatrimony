<div class="container-fluid">
    <div class="col-md-3" style="padding:0px;">
        <?php $this->load->view("admin/includes/sidebar");?>
    </div>
    <div class="col-md-9" style="padding:0px">
        <div class="left-panel">
            <div class="content-wrap">
				<?php if(count($maratha_girls) != 0):?>
                <div class="col-md-12">
                    <div class="panel panel-default panel-table">                       
                        <div class="panel-body">
							<?php if($this->session->flashdata('success')) :?>
								<?php echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'?>
							<?php endif; ?>

							<?php if($this->session->flashdata('error')) :?>
								<?php echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'?>
							<?php endif; ?>														
							<table class="table table-striped table-bordered table-list">
                                <thead>
                                    <tr>   
										<th class="hidden-xs">Brides ID</th>
                                        <th>Brides Name</th>
										<th>Date Of Birth</th>
                                        <th>Photo</th>
										<th><em class="fa fa-cog"></em></th>
                                    </tr> 
                                </thead>
								<?php foreach($maratha_girls as $girls):?>
                                <tbody>
                                    <tr>  
										<td class="hidden-xs"><?php echo $girls['enroll_reg_no'];?></td>
                                        <td><?php echo $girls['last_name'];?></td>
                                        <td><?php echo $girls['date_of_birth'];?></td>
										<td><img src="<?php echo base_url("assets/profile_photos/".$girls['profile_pic']);?>" width="50px" height="50px"></td>
										<td>
                                            <a class="btn btn-default" href="<?php echo site_url("brides-edit/".$girls['enroll_id']);?>"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger del_photo" id="<?php echo $girls['enroll_id'];?>" href="<?php echo site_url("delete-user/".$girls['enroll_id']);?>"><em class="fa fa-trash"></em></a>
                                            <?php if($girls['active_status'] == "0") : ?>
                                            <a class="btn btn-success" href="<?php echo site_url("activate-user/".$girls['enroll_id']);?>">Activate</a>
                                            <?php else : ?>
                                            <a class="btn btn-danger" href="<?php echo site_url("deactivate-user/".$girls['enroll_id']);?>">Dectivate</a>
                                            <?php endif;?>
                                        </td>
                                    </tr>                                    
                                </tbody>
								<?php endforeach;?>
                            </table>
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