<div class="featureBg">
<div class="grey-bar fadeInUp marT155" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
		<h1>PÉ]õº{ÉÉä]õÒiÉ - ´É®ú</h1>			
    </div>
</div>
<div class="content wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
    <div class="middle" id="">
        <br><br>
        <?php if(count($maratha_divorcee_boy) != 0):?>
        <div class="col-md-12 coupleT wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
			<div class="row list-section" data-wow-duration="2s" data-wow-delay=".7s">
			<?php foreach ($maratha_divorcee_boy as $udboys): ?>
				
				<?php 
						$originalDate =  $udboys['date_of_birth'];									
						$newDate = date("d/m/Y", strtotime($originalDate));
						$regDate = $udboys['activate_date'];
						$created_date = date("d/m/Y", strtotime($regDate));
				?>
				<div class=" col-md-4 col-sm-4 col-xs-12">
					<div class="well well-section"> 
						<input type="hidden" name="enroll_no" value="<?php echo $udboys['enroll_reg_no'];  ?>">
						<p> <label>नोंदणी क्र : </label> <a href="#" class="code"><?php echo $udboys['enroll_reg_no'];  ?> </a>(<?php echo $udboys['last_name'];?>)</p>
						<div class="scrollDiv">
							<div class="col-md-5">						
								<a href="javascript:;" class="code" data="<?php echo $udboys['enroll_reg_no'];  ?>"><img data-lazy-src="<?php echo base_url('assets/profile_photos/').$udboys['profile_pic'];?>" alt="image" src="<?php echo base_url('assets/profile_photos/').$udboys['profile_pic'];?>" style=""></a>
								   
							</div>
							<div class="col-md-7">
								<p><br><label>नोंदणी दि: </label>
								<?php echo $created_date?><br> 
								<label>फि भरली दि: </label><br>
								<label>ऊंची: </label><?php echo $udboys['height_ft'];?>.<?php echo $udboys['height_inch'];?><br>
								<label>जन्मतारीख:</label><?php echo $udboys['date_of_birth'];?><br>
								<label>शिक्षण: </label> <?php echo $udboys['education'];?></p>				
							</div>						
							<div class="col-md-12">
								<p>
								<label>नोकरीचे ठिकाण: </label><?php echo $udboys['parents_reci_city']?> /<br> salary : <?php echo $udboys['income'];?>/- <?php echo $udboys['income_type'];?>					
								<br>
								<label>पत्ता: </label><?php echo $udboys['parents_reci_city']?> </p>				
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php endforeach; ?>
				</div> 
            <!--<div class="table-responsive"> 
                <table class="table">
                    <thead class="bg-color">
                        <tr>
                            <th class="regiW">xÉÉånùhÉÒ Gò.</th>
                            <th class="dateW">xÉÉånùhÉÒ Ênù.</th>
                            <th>>ÆðSÉÒ </th>
                            <th class="dobW">VÉx¨É iÉÉ®úÒJÉ</th>
                            <th class="educW">Ê¶ÉIÉhÉ </th>
                            <th class="workW">xÉÉäEò®úÒSÉä Ê`öEòÉhÉ</th>
                            <th class="addW">{ÉkÉÉ</th>
                        </tr>
                    </thead>
                    <?php foreach ($maratha_divorcee_boy as $udboys): ?>
					
                    <tbody>
                        <tr>
							<input type="hidden" name="enroll_no" value="<?php echo $udboys['enroll_reg_no'];  ?>">
                            <td><a href="#" class="code"><?php echo $udboys['enroll_reg_no'];  ?></a></td> 
							<?php $originalDate =  $udboys['date_of_birth']; $newDate = date("d/m/Y", strtotime($originalDate));
								  $regDate = $udboys['activate_date']; $created_date = date("d/m/Y", strtotime($regDate));?>
                            
                            <td><?php echo $created_date;?></td>
                            <td><?php echo $udboys['height_ft']?>.<?php echo $udboys['height_inch']?></td>
                            <td><?php echo $udboys['date_of_birth'];?></td>
                            <td  class="text-uppercase "><?php echo $udboys['education'];?></td>
                            <td  class="text-uppercase"><?php echo $udboys['occupation']; ?> <?php echo $udboys['occu_city'];  ?>, <?php echo $udboys['occu_state'];?>/<br> salary : <?php echo $udboys['income'];?> <?php echo $udboys['income_type'];?></td>
                            <td  class="text-uppercase"><?php echo $udboys['parents_reci_city']?> </td>
                        </tr>                        
                    </tbody>
					<?php endforeach;?>
                </table>
            </div>-->
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
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" data-backdrop="static" data-keyboard="false" id="user_detail_model" class="modal fade" style="display: none;">
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