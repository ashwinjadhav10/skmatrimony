<div class="featureBg">
<div class="grey-bar wow fadeInUp marT155" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
        <h1>´É®ú </h1>
    </div>
</div>
<div class="content wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s"> 
    <div class="middle" id="">
        <br><br>
        <?php if(count($maratha_boys) != 0):?>
        <div class=" coupleT wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
			<div class="row list-section" data-wow-duration="2s" data-wow-delay=".7s">
			<?php foreach ($maratha_boys as $uboys): ?>
				
				<?php 
						$originalDate =  $uboys['date_of_birth'];									
						$newDate = date("d/m/Y", strtotime($originalDate));
						$regDate = $uboys['activate_date'];
						$created_date = date("d/m/Y", strtotime($regDate));
				?>
				<div class=" col-md-4 col-sm-4 col-xs-12">
					<div class="well well-section"> 
						<input type="hidden" name="enroll_no" value="<?php echo $uboys['enroll_reg_no'];  ?>">
						<p> <label>नोंदणी क्र : </label> <a href="#" class="code"><?php echo $uboys['enroll_reg_no'];  ?> </a>(<?php echo $uboys['last_name'];?>)</p>
						<div class="scrollDiv">
							<div class="col-md-5">						
								<a href="#" class="code" data="<?php echo $uboys['enroll_reg_no'];  ?>"><img data-lazy-src="<?php echo base_url('assets/profile_photos/').$uboys['profile_pic'];?>" alt="image" src="<?php echo base_url('assets/profile_photos/').$uboys['profile_pic'];?>" style=""></a>
								   
							</div>
							<div class="col-md-7">
								<p><br><label>नोंदणी दि: </label>
								<?php echo $created_date?><br> 
								<label>फि भरली दि: </label><br>
								<label>ऊंची: </label><?php echo $uboys['height_ft'];?>.<?php echo $uboys['height_inch'];?><br>
								<label>जन्मतारीख:</label><?php echo $uboys['date_of_birth'];?><br>
								<label>शिक्षण: </label> <?php echo $uboys['education'];?></p>				
							</div>						
							<div class="col-md-12">
								<p>
								<label>नोकरीचे ठिकाण: </label><?php echo $uboys['parents_reci_city']?> /<br> salary : <?php echo $uboys['income'];?>/- <?php echo $uboys['income_type'];?>					
								<br>
								<label>पत्ता: </label><?php echo $uboys['parents_reci_city']?> </p>				
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
		<span class="myriad"><?php  echo $this->pagination->create_links(); ?>	</span>	
        <div class="clearfix"></div> 
		
		<br>
        <br> <br>
        <br> <br>        
    </div>	
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1" id="user_detail_model" class="modal fade" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                    <h4 class="modal-title">Member Details</h4>
                </div>
                <div class="modal-body" id="user_detail_model_body">
                </div>
            </div>
        </div>    
    </div>  
</div>
</div>