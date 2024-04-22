   <!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Orgon | donation&amp;requesting website</title>


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
      
	 
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
     <br><br>
    <div class="row">
                           
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">request Details</div>
                <div class="card-body">
                    <form action="<?=base_url();?>Organrequest/save" method="post" id=donoradd>
                        <!-- Form Group (username)-->
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">name</label>
                                <input class="form-control" id="name"id="floatingInput" name="name"  type="text" placeholder="Enter your name" >
                            </div>
							
                            <div class="col-md-6">
		                    <label for="small mb-1">organ</label>
                                <input type="text" class="form-control"  id="organ" name="organ"
                                    placeholder="organ you are requesting">
                            </div>
							
                        </div>
                        <!-- Form Group (email address)-->
						
                        <div class="row gx-3 mb-3">
						
                        <!-- Form Row-->
                        <div class="col-md-6">
                           <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Requesting Date</label>
                                <input class="form-control" id="name"id="floatingInput" name="date"  type="date" placeholder="Enter your name" >
                            </div>
							
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control"id="location" name="location" type="text" placeholder="Enter your location" >
                            </div>
                        </div>
						<br><br>
						 <label class="small mb-1" for="status">Status</label>
                            <div class="form-floating mb-3">
								

								<select class="form-select form-select-sm mb-3" id="status" name="status" aria-label="select your status">
                                <option selected>Status</option>
                                <option value="1">active</option>
                                <option value="2">inactive</option>
                            </select>
                            </div>
						</div>
						<br>
                        <!-- Save changes button-->
			            <input type="hidden" id="DO_Id" class="form-control" name="DO_Id" >
                        <button class="btn btn-primary" type="submit" style ="Float:right;">Submit</button>
                    </form>
                
            </div>
        </div>
    </div>
</div>

<style type="text/css">
body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
</style>
