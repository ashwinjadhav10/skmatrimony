<div class="container-fluid">
	<div class="col-md-3" style="padding:0px;">
		<?php $this->load->view("admin/includes/sidebar");?>
	</div>
	<div class="col-md-9" style="padding:0px">
		<div class="left-panel">
			<div class="content-wrap">
                <div class="col-md-12">
                    <div class="panel panel-default panel-table">                       
                        <div class="panel-body">							
							<h4 class="text-center">Add New Success Story</h4> 
						</div>
						<hr>
						<!--<div class="col-md-6">
							<h4>Personal Information</h4>
						</div>-->
						<div class="clearfix"></div>
		
						<?php echo validation_errors('<p class="alert alert-danger">'); ?>
						
						<form action="<?php echo base_url("admin_panel/add_new_story");?>" method="post">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							
							<h4 class="col-md-6">Groom details</h4> 
							<div class="clearfix"></div>
							<div class="form-group col-md-6">
								<label for="text">Groom Reg Id</label>								
								<input type="text" class="form-control" name="groom_reg_no" id="groom_reg_no" value="">
							</div>
							<div class="form-group col-md-6">
								<label for="text">Groom Details</label>								
							    <input type="text" class="form-control" name="groom_details" id="groom_details" value="">
						    </div>	
							<h4 class="col-md-6">Brides details</h4> 
							<div class="clearfix"></div>
						    <div class="form-group col-md-6">
							    <label for="text">Brides Reg Id</label>							    
							    <input type="text" class="form-control" name="brides_reg_no" id="bride_reg_no" value="">
							</div>	
							<div class="form-group col-md-6">
							   <label for="text">Brides Details</label>
							   <input type="text" class="form-control" name="brides_details" id="brides_details" value="">
						    </div>
						    <div class="form-group col-md-12">
							   <input type="submit" class="btn btn-md btn-success pull-right" id="submit" value="submit">
						    </div>
							<div class="clearfix"></div>
						</form>
						
					</div>
				</div>
				<div class="clearfix"></div>
			</div>            
		</div>
	</div>
	<div class="clearfix"></div>
</div>