<div class="container">
    <div class="col-md-3" style="padding:0px;">
        <?php $this->load->view("admin/includes/sidebar");?>
    </div>
    <div class="col-md-9" style="padding:0px">
        <div class="left-panel">
            <div class="content-wrap">
                <div class="col-md-12">
                    <div class="panel panel-default panel-table">                       
                        <div class="panel-body">							
							<h4 class="text-center">Grooms Edit page</h4> 
						</div>
						<hr>
						<div class="col-md-6">
							<h4>Personal Information</h4>
						</div>
						<div class="clearfix"></div>
						<?php foreach($grm_edit as $boys):?>
						<?php echo validation_errors('<p class="alert alert-danger">'); ?>
						<form action="<?php echo site_url("groom-save/".$boys['enroll_id']);?>" method="post">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						    <div class="form-group col-md-6">
							    <label for="usr">Grooms ID:</label>								
							    <input type="text" class="form-control" name="enroll_reg_no" id="enroll_reg_no" value="<?php echo $boys['enroll_reg_no'];?>">
						    </div>
						    <div class="form-group col-md-6">
							    <label for="text">Grooms Name</label>								
							    <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $boys['last_name']?>">
							</div>						   
							<div class="form-group col-md-6">
								<label for="text">Grooms Dob</label>								
								<input type="text" class="form-control" name="dob" id="dob" value="<?php echo $boys['date_of_birth'];?>">
							</div>
							<div class="form-group col-md-6">
								<label for="text">Grooms Test</label>
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
