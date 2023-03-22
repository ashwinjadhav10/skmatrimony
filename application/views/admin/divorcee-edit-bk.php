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
							<h4 class="text-center">Brides Divorcee Edit page</h4> 
						</div>
						<hr>
						<div class="col-md-6">
							<h4>Personal Information</h4>
						</div>
						<div class="clearfix"></div>
						<?php echo validation_errors('<p class="alert alert-danger">'); ?>
						<?php foreach($maratha_divorcee_girl as $girl_d):?>
						<form action="<?php echo site_url("divcgirl-save/".$girl_d['enroll_id']);?>" method="post">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						    <div class="form-group col-md-6">
							    <label for="usr">Brides ID:</label>								
							    <input type="text" class="form-control" name="enroll_reg_no" id="enroll_reg_no" value="<?php echo $girl_d['enroll_reg_no'];?>">
						    </div>
						    <div class="form-group col-md-6">
							    <label for="text">Brides Name</label>								
							    <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $girl_d['last_name']?>">
							</div>						   
							<div class="form-group col-md-6">
								<label for="text">Brides Dob</label>								
								<input type="text" class="form-control" name="dob" id="dob" value="<?php echo $girl_d['date_of_birth'];?>">
							</div>
							<div class="form-group col-md-6">
								<label for="text">Brides Test</label>
								<input type="text" class="form-control" name="test" id="test" value="">
							</div>
						    <div class="form-group col-md-12">							   
								<input type="submit" class="btn btn-md btn-success pull-right" id="submit" value="Update">
							</div>
							<div class="clearfix"></div>
						</form>
						<?php endforeach;?>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>            
	</div>
	<div class="clearfix"></div>
</div>
