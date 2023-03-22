<div class="featureBg">
<div class="grey-bar wow fadeInUp marT155" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
		<h1>शोध निकाल</h1>		
    </div>
</div>
<div class="content" >
    <div class="middle" id=""><br><br>
		<?php if(count($profiles) != 0):?>
		
        <div class="col-md-12 coupleT wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
			<div class="row list-section" data-wow-duration="2s" data-wow-delay=".7s">
				<?php foreach ($profiles as $user): ?>
				
				<?php 
						$originalDate =  $user['date_of_birth'];									
						$newDate = date("d/m/Y", strtotime($originalDate));
						$regDate = $user['activate_date'];
						$created_date = date("d/m/Y", strtotime($regDate));
				?>
				<div class=" col-md-4 col-sm-4 col-xs-12">
					<div class="well well-section"> 
						<input type="hidden" name="enroll_no" value="<?php echo $user['enroll_reg_no'];  ?>">
						<p> <label>नोंदणी क्र : </label> <a href="#" class="code"><?php echo $user['enroll_reg_no'];  ?> </a>(<?php echo $user['last_name'];?>)</p>
						<div class="scrollDiv">
							<div class="col-md-5">						
								<a href="javascript:;" class="code" data="<?php echo $user['enroll_reg_no'];  ?>"><img data-lazy-src="<?php echo base_url('assets/profile_photos/').$user['profile_pic'];?>" alt="image" src="<?php echo base_url('assets/profile_photos/').$user['profile_pic'];?>" style=""></a>
								   
							</div>
							<div class="col-md-7">
								<p><br><label>नोंदणी दि: </label>
								<?php echo $created_date?><br> 
								<label>फि भरली दि: </label><br>
								<label>ऊंची: </label><?php echo $user['height_ft'];?>.<?php echo $user['height_inch'];?><br>
								<label>जन्मतारीख:</label><?php echo $user['date_of_birth'];?><br>
								<label>शिक्षण: </label> <?php echo $user['education'];?></p>				
							</div>						
							<div class="col-md-12">
								<p>
								<label>नोकरीचे ठिकाण: </label><?php echo $user['parents_reci_city']?> /<br> <label>salary : </label><?php echo $user['income'];?>/- <?php echo $user['income_type'];?>					
								<br>
								<label>पत्ता: </label><?php echo $user['parents_reci_city']?> </p>				
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php endforeach; ?>
		   </div> 
        </div> 
		<?php else :?>
		<div class="alert alert-danger myriad">Result Not Found</div>
		<?php endif;?>
        <div class="clearfix"></div>        
        <br>
        <br> <br>
        <br> <br>
    </div>    
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="user_detail_model" class="modal fade" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>				
                    <h4 class="modal-title">Details</h4>					
                </div>
                <div class="modal-body" id="user_detail_model_body">
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Close</button>
                </div>
            </div>
        </div>    
    </div>   
</div>
</div>