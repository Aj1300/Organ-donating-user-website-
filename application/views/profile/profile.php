     <!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Orgon |profile page</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_PATH?>/public/userassetes/public/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_PATH?>/public/userassetes/public/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_PATH?>/public/userassetes/public/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_PATH?>/public/userassetes/public/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?=SITE_PATH?>/public/userassetes/public/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?=SITE_PATH?>/public/userassetes/public/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?=SITE_PATH?>/public/userassetes/public/assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="#"><img class="d-inline-block me-3" src="" alt="" ><h1>Orgon</h1></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link" href="<?php echo SITE_PATH."/index.php/home";?>">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo SITE_PATH."/index.php/Donoradd";?>">Be a donor</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo SITE_PATH."/index.php/Organrequest";?>">Request organ</a></li>
              <li class="nav-item"><a class="nav-link fw-bold active" aria-current="page" href="<?php echo SITE_PATH."/index.php/Profile";?>">Profile</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo SITE_PATH."/index.php/Aboutus";?>">About us</a></li>
    		  <li class="nav-item"><a class="nav-link" href="<?php echo SITE_PATH."/index.php/Logout";?>">Logout</a></li>

            </ul>
          </div>
        </div>
      </nav>
	 <section class="py-0">
       
        <!--/.bg-holder-->
        <div class="container position-relative">
          <div class="row align-items-center">

        </div>
      </section>
      <section class="py-8">
        <div class="bg-holder" style="background-image:url(<?=SITE_PATH?>/public/userassetes/public/assets/img/illustrations/services-bg.png);background-position:center left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url(<?=SITE_PATH?>/public/userassetes/public/assets/img/illustrations/dot-2.png);background-position:center right;background-size:auto;margin-left:-180px;margin-top:20px;">
        </div>
        <!--/.bg-holder-->

        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-3 text-center">
              <h2 class="fw-bold">Profile</h2>
              <hr class="w-25 mx-auto text-dark" style="height:2px;" />
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-9 col-xl-8 text-center">
			<center>
    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Name</label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $data->US_Name; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" name="email" id="email" value="<?php echo $data->US_Email; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" name="phonenumber" id="phonenumber" value="<?php echo $data->US_Phone; ?>">
				</div>
			</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Address</label>
					<input type="name" class="form-control" id="address" name="address" value="<?php echo $data->US_Address; ?>">
				</div>
			</div></center>
		</div>
	</div>
</div>
</div>
</div>
</div>

<style type="text/css">
body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


</style>

<script type="text/javascript">

</script>
      </section><br><br><br><br><br><br>

      <!-- <section> close ============================-->
      <!-- ============================================-->
