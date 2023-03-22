<div class="featureBg">
<div class="grey-bar fadeInUp marT155" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
        <h1> ªÉ¶É</h1>
    </div>
</div>
<div class="content success wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
    <div class="middle" id="">
        <br><br>
        <?php if(count($success_story) != 0):?>
        <div class="col-md-12 feature-cont coupleT wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">			
            <div class="table-responsive"> 				
                <table class="table">					
                    <thead class="bg-color">
                        <tr>
                            <th class="">Goorm Id</th>
                            <th class="">Marriage of this groom</th>
                            <th> Bride Id</th>
                            <th class="">Settled with this bride</th>
                        </tr>
                    </thead>
					
					<?php foreach($success_story as $success):?>
                    <tbody class="">
                        <tr>
                            <td class=""><?php echo $success['groom_reg_no'];?></td>
                            <td class=""><?php echo $success['groom_details'];?></td>
                            <td class=""> <?php echo $success['brides_reg_no'];?></td>
                            <td class=""> <?php echo $success['brides_details']?></td>
                        </tr>                       
                    </tbody>
					<?php endforeach;?>
                </table>				
            </div>			
        </div> 
		<?php else :?>
		<div class="alert alert-danger myriad">Result Not Found</div>
		<?php endif?>
		<span class="myriad"><?php  echo $this->pagination->create_links(); ?>	</span>	
		<div class="clearfix"></div>        
		<br><br> <br><br> <br>        
	</div>
</div>
</div>
