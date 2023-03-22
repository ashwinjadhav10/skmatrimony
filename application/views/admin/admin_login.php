
<div class="container-fluid">
    <div class="col-md-3" style="padding:0px;">
     
    </div>
    <div class="" style="padding:0px">
        <div class="left-panel">
            <div class="content-wrap">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div style="color:white;"><?php if($error = $this->session->flashdata('error')): ?>
                    <?= $error ?> 
                    <?php endif; ?>
                    </div>
                    <br>
                    <div class="panel panel-default panel-table anand-log">                       
                        <div class="panel-body data-section">
                          <?php echo form_open('admin_panel/signin',array('class'=>'form-horizontal')); ?>
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<legend>Admin Login</legend>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<?php echo form_label('Username', 'inputEmail',array('class'=>'col-lg-4')); ?>
										<div class="col-lg-8">
											<?php
											$data = array(
												'name'        => 'username',  
												'id'          => 'username',
												'class'       => 'form-control',
												'placeholder' => 'Email',
												'value'       => set_value('username') 
											);
											echo form_input($data);
											?>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class=col-lg-12>
									<?php echo form_error('username'); ?>
								</div> 
								<div class="clearfix"></div>
							</div>
							<div class=row>
								<div class=col-lg-12>
									<div class="form-group">
										<?php echo form_label('Password', 'inputPassword',array('class'=>'col-lg-4')); ?>
										<div class="col-lg-8">
											<?php
											$data = array(
												'name'        => 'password',
												'id'          => 'password',
												'class'       => 'form-control',
												'placeholder' => 'Password'
											);
											echo form_password($data);
											?>
										</div>
									</div>                                         
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12">
									<?php echo  form_error('password'); ?>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col col-xs-4 ">
										<?php echo form_submit('mysubmit','Login',array('class'=>'btn btn-primary')); ?>
										<?php echo form_close(); ?>
									</div>
								</div>
							</div>
							<!--                            <a><span style="padding-left: 176px;" >Reset Password </span></a>-->
						</div>   
					</div>
					<div class="clearfix"></div>
				</div> 
                <div class="col-md-3"></div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>