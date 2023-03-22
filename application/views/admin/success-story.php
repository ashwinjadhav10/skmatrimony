<div class="container-fluid">
    <div class="col-md-3" style="padding:0px;">
        <?php $this->load->view("admin/includes/sidebar");?>
    </div>
    <div class="col-md-9" style="padding:0px">
        <div class="left-panel">
            <div class="content-wrap">
				<?php if(count($success_story)!= 0): ?>
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
                                            <th>Groom Reg no</th>
                                            <th>Groom Detail</th>
                                            <th>Bridge Reg no</th>
                                            <th>Bridge Details</th>
                                            <th><em class="fa fa-cog"></em></th>
                                        </tr> 
                                    </thead>								
                                    <?php foreach($success_story as $storys):?>									
                                    <tbody>
                                        <tr> 																				
                                            <td><?php echo $storys['groom_reg_no']; ?></td>
                                            <td><?php echo $storys['groom_details']; ?></td>
                                            <td><?php echo $storys['brides_reg_no']; ?></td>
                                            <td><?php echo $storys['brides_details']; ?></td>                                        
                                            <td>
                                                <a href="<?php echo base_url("edit-story/".$storys['success_id']);?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                                <!--<a class="btn btn-danger"><em class="fa fa-trash"></em></a>-->
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
                                <div class="col-md-4 col-xs-4">
                                     <a href="<?php echo base_url("add-story");?>" class="btn btn-success">Add New</a>
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
				<a href="<?php echo base_url("add-story");?>" class="btn btn-success">Add New</a>
				<?php endif;?>
                <div class="clearfix"></div>
            </div>            
        </div>
    </div>
    <div class="clearfix"></div>
</div>