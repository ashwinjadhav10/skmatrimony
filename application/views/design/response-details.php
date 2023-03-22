<div class="content wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
        <br><br>
		
        <div class="col-md-12 feature-cont coupleT">
			<?php if($this->session->flashdata('success')) :?>
				<?php echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'?>
			<?php endif; ?>

			<?php if($this->session->flashdata('error')) :?>
				<?php echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'?>
			<?php endif; ?>
			
            <div class="table-responsive wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s"> 
                <table class="table">
                    <thead class="bg-color">
                        <tr>
                            <th class="regiW">xÉÉånùhÉÒ Gò.</th>
                            <th class="dateW">xÉÉånùhÉÒ Ênù.</th>
                            <th> >ÆðSÉÒ </th>
                            <th class="dobW">VÉx¨É iÉÉ®úÒJÉ</th>
                            <th class="educW">Ê¶ÉIÉhÉ </th>
                            <th class="workW">xÉÉäEò®úÒSÉä Ê`öEòÉhÉ</th>
                            <th class="addW">{ÉkÉÉ</th>
                        </tr>
                    </thead>
					<?php foreach ($resp as $uboys): ?>
                    <tbody>
						<?php 
									$originalDate =  $uboys['date_of_birth'];
									$newDate = date("d-m-Y", strtotime($originalDate));
							?>
                        <tr>
							<input type="hidden" name="enroll_no" value="<?php echo $uboys['enroll_reg_no']; ?>">
                            <td><a href="#" class="code"><?php echo $uboys['enroll_reg_no'];  ?></a></td>                    
                            <td><?php echo $uboys['created_date']?></td>
                            <td><?php echo $uboys['height_ft']?>.<?php echo $uboys['height_inch']?></td>
                            <td><?php echo $uboys['date_of_birth'];?></td>
                            <td  class="text-uppercase "><?php echo $uboys['education'];?></td>
                            <td  class="text-uppercase"><?php echo $uboys['occupation']; ?> <?php echo $uboys['occu_state'];?>/<br> salary : <?php echo $uboys['income'];?> <?php echo $uboys['income_type'];?></td>
                            <td  class="text-uppercase"><?php echo $uboys['parents_reci_city']?> </td>
                        </tr>                        
                    </tbody>
					<?php endforeach;?>
                </table>
            </div>
        </div> 
        <div class="clearfix"></div>
      
    </div>
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