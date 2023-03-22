<!-- Modal -->
<div class="modal-bg-content ">
    <?php foreach($profiles as $details): ?>
    <div class="col-md-6 col-sm-6 text-center">
        <?php $img = $details['profile_pic'];
        if($img == "") 
        {?>
           <img src="<?php echo base_url('assets/profile_photos/no-preview.jpg'); ?>" width="100%" style="max-width:200px;">
        <?php }
        else
        {?>
        <img class="img-resp" src="<?php echo base_url('assets/profile_photos/').$details['profile_pic'];?>">
        <?php } ?>        
        <div class="visible-xs"><br></div>	
		<h3><?php echo $details["enroll_reg_no"];?>(<?php echo $details['last_name'];?>)</h3>
    </div>
	
    <div class="col-md-6 col-sm-6">
		
        <div class="table-responsive">
            <table class="table" width="100%" >				
                <tbody>
                    <tr>
                        <td>Date of birth : </td>
                        <td><?php echo $details['date_of_birth']; ?> </td>
                    </tr>
                    <tr>
                        <td>Marital Status : </td>
                        <td><?php echo $details['gender']; ?> </td>
                    </tr>
                    <tr>
                        <td>Caste:</td>
                        <td><?php echo $details['sub_cast']; ?>	</td>
                    </tr>
                    <tr>
                        <td>height : </td>
                        <td><?php echo $details['height_ft']." ft ".$details['height_inch']." inch "; ?> </td>
                    </tr>
                    <tr>
                        <td>Education:</td>
                        <td><?php echo $details['education']; ?> </td>
                    </tr>
                    <tr>
                        <td>Occupation : </td>
                        <td><?php echo $details['occupation']." / ".$details['income']." ".$details['income_type']?> </td>
                    </tr>
                    <tr>
                        <td>Blood group/weight :</td>
                        <td><?php echo $details['blood_group']." / ".$details['weight']."KG"; ?> </td>
                    </tr>
                    <tr>
                        <td>complexion :</td>
                        <td><?php echo $details['complexion']; ?> </td>
                    </tr>
                    <tr>
                        <td>Spectacle/lens : </td>
                        <td><?php echo $details['spectacles']." / ".$details['lens'] ?> </td>
                    </tr>
                    <tr>
                        <td>Mangal : </td>
                        <td><?php echo $details['mangal']; ?></td>
                    </tr>
                    <tr>
                        <td>Gotra &amp; devak : </td>
                        <td><?php echo $details['gotra_devak']; ?></td>
                    </tr>
                    <tr>
                        <td>Birth place :</td>
                        <td><?php echo $details['birth_place']; ?></td>
                    </tr>
					<tr>
                        <td>Birth time :</td>
                        <td><?php echo $details['birth_time']; ?></td>
                    </tr>
                    <tr>
                        <td>Horo details :</td>
                        <td class="text-wrap"><?php echo "rashi: ".$details['rashi']." / nakshtra: ".$details['nakshtra']." / charan: ".$details['charan'] ." / nadi :".$details['nadi'] ." /gan : ".$details['gan']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>
</div><br>
<div class="">
    <div class="col-md-6 col-sm-6 left">
        <div class="modal-bg-content">
            <div class="col-md-12 m12">
                <h5>FAMILY BACKGROUND</h5>
                <div class="table-responsive">
                    <table class="table" >
                        <tbody>
                            <tr>
                                <td>Father : </td>
                                <td><?php echo $details['father']; ?>	</td>
                            </tr>
                            <tr>
                                <td>Mother : </td>
                                <td><?php echo $details['mother']; ?> </td>
                            </tr>
                            <tr>
                                <td>Mama : </td>
                                <td><?php echo $details['mama_surname']; ?></td>
                            </tr>
                            <tr>
                                <td>Relatives : </td>
                                <td><?php echo $details['relatives_surname']; ?> </td>
                            </tr>
                            <tr>
                                <td>Native place :</td>
                                <td><?php echo $details['native_taluka']." / ".$details['native_distict']; ?> </td>
                            </tr>
                            <tr>
                                <td>Parents residing in :</td>
                                <td><?php echo $details['parents_reci_city']; ?></td>
                            </tr>
                            <tr>
                                <td>Brother :</td>
                                <td><?php echo $details['brothers']." - ".$details['married_brothers']." Married"; ?></td>
                            </tr>
                            <tr>
                                <td>Sister :</td>
                                <td><?php echo $details['sisters']." - ".$details['married_sisiters']." Married "; ?></td>
                            </tr>
                            <tr>
                                <td>Family wealth :  </td>
                                <td><?php echo $details['family_wealth']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><div class="clearfix"></div>
        </div>
        <div class="visible-xs"><br></div>
    </div>
    <div class="col-md-6 col-sm-6 right">
        <div class="modal-bg-content">
            <div class="col-md-12 m12">
                <h5>EXPECTATION</h5>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Age difference upto :<?php echo $details['age_difference']." years "; ?> </td>
                                <td>Expected height : <?php echo $details['exp_min_ft']." ft ".$details['exp_min_inch']." inch "; ?></td>
                            </tr>
                            <tr>
                                <td>Education : </td>
                                <td><?php echo $details['exp_education']; ?> </td>
                            </tr>
                            <tr>
                                <td>Occupation : </td>
                                <td><?php echo $details['exp_occup']; ?></td>
                            </tr>
                            <tr>
                                <td>Preferred city :</td>
                                <td><?php echo $details['pref_city']; ?></td>
                            </tr>
                            <tr>
                                <td>Expected caste :</td>
                                <td><?php echo $details['exp_cast']; ?></td>
                            </tr>
                            <tr>
                                <td>Divorcee : <?php echo $details['exp_divorcee']; ?></td>
                                <td>mangal : <?php echo $details['exp_managl']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php endforeach; ?>

