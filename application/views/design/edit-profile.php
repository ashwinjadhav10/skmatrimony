<div class="featureBg">
<div class="grey-bar marT155">
    <div class="middle" id="">
        <h1>¡òÉä]õÉä ¤Énù±ÉhÉä</h1>
    </div>
</div>
<div class="content success">
    <div class="middle" id="">
        <br><br>
        
        <div class="col-md-12 coupleT photo">
           <div class="edit-profile text-center">
               <img src="<?php echo base_url('assets/profile_photos/'.$profile_pic[0]['profile_pic']);?>" >
            </div>
			
			<form action="<?php echo site_url("profile-photo/".$profile_pic[0]["enroll_id"])?>" method="post"  enctype="multipart/form-data">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="edit-profile-btn text-center ">
				<input type="hidden" class="hide_img" name="hide_img" value="<?php echo $profile_pic[0]['profile_pic'];?>"> 
                <input class="myriad " type="file" name="userFile"  id="userFile">
                <input class="myriad btn btn-default upload-btn" type="submit" value="Upload Image" name="submit">
            </div>
			</form>	
            <div class="clearfix"></div>  
        </div> 
              <div class="clearfix"></div>  
        <br><br> 
    </div>
</div>
</div>