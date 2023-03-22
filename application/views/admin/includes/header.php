<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shobha kumbhar, Vadhu Var Suchak Kendra, Pune </title>
    <meta charset="UTF-8">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#B51621">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#B51621">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,600,600i,700,800,900|Roboto:400,500,700" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> 	
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/common.css');?>">
    </head>
    <body>
        <div class="">
            <nav class="navbar navbar-default" id="admin"> 
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""><img src="<?php echo base_url();?>assets/images/title.png" width="300px"></a>
						<!--<h1 class="text-right sub-title">´ÉvÉÖ´É®ú ºÉÚSÉEò Eåòpù </h1>-->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><img src="<?php echo base_url();?>assets/images/user-icon.png">Welcome <?php echo $this->session->userdata("user_name"); ?> </a></li>
							<?php if($this->session->userdata("user_name")): ?>
                            <li><a href="<?php echo site_url("admin_panel/logout")?>">Logout</a></li>
							<?php endif;?>
                        </ul>
                    </div>
					<div class="col-md-4 col-sm-12 col-xs-12 pull-right">
                        <?php echo form_open('search-profile', 'method="post"');   ?>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <br>
        				<?php if($this->session->userdata("user_name")): ?>
                        <div class="search-bar col-md-9 col-sm-8 col-xs-8">                       
                            <input name="search" type="text" id="search" class="form-control" placeholder="Search Reg no." />
						</div>
						<div class="col-md-3 col-sm-4 col-xs-4">
							 <input name="submit" type="submit" class="btn btn-primary" value="Search" />
						</div> 
						<?php endif;?>
						
                        
                        <?php echo form_close();?>
                        <div class="clearfix"></div>
                        <br>
                    </div>
                    <div class="clearfix"></div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>  
  <main>