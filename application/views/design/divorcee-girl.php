<div class="featureBg">
<div class="grey-bar wow fadeInUp marT155" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
		<h1>PÉ]õº{ÉÉä]õÒiÉ - ´ÉvÉÚ</h1>		
    </div>
</div>
<div class="content wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
    <div class="middle" id="">
        <br><br>
        <?php if(count($maratha_divorcee_girl) != 0):?>
		<div class="row list-section" data-wow-duration="2s" data-wow-delay=".7s">
			<?php foreach ($maratha_divorcee_girl as $udgirls): ?>
				
				<?php 
						$originalDate =  $udgirls['date_of_birth'];									
						$newDate = date("d/m/Y", strtotime($originalDate));
						$regDate = $udgirls['activate_date'];
						$created_date = date("d/m/Y", strtotime($regDate));
				?>
				<div class=" col-md-4 col-sm-4 col-xs-12">
					<div class="well well-section"> 
						<input type="hidden" name="enroll_no" value="<?php echo $udgirls['enroll_reg_no'];  ?>">
						<p> <label>नोंदणी क्र : </label> <a href="#" class="code"><?php echo $udgirls['enroll_reg_no'];  ?> </a>(<?php echo $udgirls['last_name'];?>)</p>
						<div class="scrollDiv">
							<div class="col-md-5">						
								<a href="javascript:;" class="code" data="<?php echo $udgirls['enroll_reg_no'];  ?>"><img data-lazy-src="<?php echo base_url('assets/profile_photos/').$udgirls['profile_pic'];?>" alt="image" src="<?php echo base_url('assets/profile_photos/').$udgirls['profile_pic'];?>" style=""></a>
								   
							</div>
							<div class="col-md-7">
								<p><br><label>नोंदणी दि: </label>
								<?php echo $created_date?><br> 
								<label>फि भरली दि: </label><br>
								<label>ऊंची: </label><?php echo $udgirls['height_ft'];?>.<?php echo $udgirls['height_inch'];?><br>
								<label>जन्मतारीख:</label><?php echo $udgirls['date_of_birth'];?><br>
								<label>शिक्षण: </label> <?php echo $udgirls['education'];?></p>				
							</div>						
							<div class="col-md-12">
								<p>
								<label>नोकरीचे ठिकाण: </label><?php echo $udgirls['parents_reci_city']?> /<br> <label>salary : </label><?php echo $udgirls['income'];?>/- <?php echo $udgirls['income_type'];?>					
								<br>
								<label>पत्ता: </label><?php echo $udgirls['parents_reci_city']?> </p>				
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div> 
        <!--<div class="col-md-12 feature-cont coupleT wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s">
            <div class="table-responsive"> 
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
                    <?php foreach ($maratha_divorcee_girl as $udgirls): ?>
					<?php $originalDate =  $udgirls['date_of_birth'];	$newDate = date("d/m/Y", strtotime($originalDate));	
						  $regDate = $udgirls['activate_date']; $created_date = date("d/m/Y", strtotime($regDate));		
					?>
                    <tbody>
                        <tr>
							<input type="hidden" name="enroll_no" value="<?php echo $udgirls['enroll_reg_no'];  ?>">
                            <td><a href="#" class="code"><?php echo $udgirls['enroll_reg_no'];  ?></a></td> 
                            <td><?php echo $created_date;?></td>
                            <td><?php echo $udgirls['height_ft']?>.<?php echo $udgirls['height_inch']?></td>
                            <td><?php echo $newDate;?></td>
                            <td  class="text-uppercase "><?php echo $udgirls['education'];?></td>
                            <td  class="text-uppercase"><?php echo $udgirls['occupation']; ?> <?php echo $udgirls['occu_state'];?>/<br> salary : <?php echo $udgirls['income'];?> <?php echo $udgirls['income_type'];?></td>
                            <td  class="text-uppercase"><?php echo $udgirls['parents_reci_city']?> </td>
                        </tr>                        
                    </tbody>
					<?php endforeach;?>
                </table>
            </div>
        </div>-->
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