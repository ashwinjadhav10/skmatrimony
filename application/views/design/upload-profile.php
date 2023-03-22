<?php $this->load->view('design/includes/header');?>
<div class="featureBg">
<div class="grey-bar wow fadeInUp marT155" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
        <h1>¡òÉä]õÉä ¤Énù±ÉhÉä</h1>
    </div>
</div>
<div class="content success wow fadeIn " data-wow-duration="2s" data-wow-delay=".5s">
    <div class="middle" id=""><br><br>
        <div class="col-md-12 coupleT photo feature-cont paddTB50">
            <?php echo validation_errors(); ?>
            <?php if($this->session->flashdata('success')) :?>
            <?php echo '<div class="alert alert-success myriad">'.$this->session->flashdata('success').'</div>'?>
            <?php endif; ?>
            
            <?php if($this->session->flashdata('error')) :?>
            <?php echo '<div class="alert alert-danger myriad">'.$this->session->flashdata('error').'</div>'?>
            <?php endif; ?>
            
            <form class="form-default wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s" id="upload" action="<?php echo site_url("edit-profile");?>" method="post">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <div class="form-group">
                    <div class="col-md-1">
                        <label class="control-label" for="idAny">Id:</label>                        
                    </div>
                    <div class="col-md-4">
                        <input id="idAny" class="form-control" type="text" name="idAny" placeholder="e.g : MB12346">
                    </div>
                    <div class="col-md-7">
                        <label class="control-label" for="eg" style="font-weight:normal;">(E.g : MB12346, MG12347, MBD12348, MGD12349)</label>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-1">
                        <label class="control-label" for="phMail">Email Id:</label>                   
                    </div>
                    <div class="col-md-4">
                        <input id="phMail" class="form-control" type="text" name="phMail" placeholder="Enter register email id E.g : abcd@example.com ">
                    </div>
                    <div class="col-md-7">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <button type="submit" id="phSumit" class="btn btn-default commonBtn">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div> 
        <div class="clearfix"></div>        
        <br><br> <br><br> <br>        
    </div>
</div>
</div>
<?php $this->load->view('design/includes/footer');?>