<!doctype html>
<html class="fixed">
	
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Beta PC | Admin</title>
		<meta name="description" content="Your PC our responsibility"/>
    <meta name="keywords" content="Beta PC"/>
    <meta name="author" content="Beta PC"/>


    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Beta PC"/>
    <meta property="og:url" content="www.mrrobi.tech/"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Beta PC"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/> <!-- 'article' for single page  -->
    <meta property="og:image"
        content="<?php echo $baseurl;?>assets/img/logo.png"/> <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends here -->

    <!-- desktop bookmark -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $baseurl;?>assets/img/favicon.ico">
    <meta name="theme-color" content="#ffffff">

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon"  href="<?php echo $baseurl;?>assets/img/favicon.ico"/>  <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="<?php echo $baseurl;?>assets/img/favicon.ico"/> <!-- this icon shows in browser toolbar -->

<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/animate/animate.css">

		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->		
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/select2/css/select2.css" />		
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />	
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />	
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />	
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />	
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/dropzone/basic.css" />	
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/dropzone/dropzone.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />	
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/summernote/summernote-bs4.css" />		
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/codemirror/theme/monokai.css" />
		<!-- Specific Page Vendor CSS -->		
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/select2/css/select2.css" />		
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />		
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/vendor/datatables/media/css/dataTables.bootstrap4.css" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/css/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo $baseurl; ?>dash/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo $baseurl; ?>dash/vendor/modernizr/modernizr.js"></script>		
		<script src="<?php echo $baseurl; ?>dash/master/style-switcher/style.switcher.localstorage.js"></script>
		<script src="https://kit.fontawesome.com/d6062a4230.js" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		a.isDisabled {
			color: currentColor;
			cursor: not-allowed;
			opacity: 0.5;
			text-decoration: none;
		}
		</style>
	</head>
	<body>
	
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="<?php echo $baseurl; ?>" class="logo">					
					<img src="<?php echo $baseurl; ?>assets/img/logo.png" width="75" height="35" alt="Porto Admin" />
					</a>					
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>					</div>
				</div>
				<?php $this->session->set_userdata('prev',$_SERVER['REQUEST_URI']); ?>
				<div class="header-right">
				<span class="separator"></span>
				<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<!-- <figure class="profile-picture">
								<img src="img/%21logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/%21logged-user.jpg" />
							</figure> -->
							<div class="profile-info" data-lock-name="<?php echo $this->session->userdata('name') ?>" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo $this->session->userdata('name') ?></span>
								<span class="role"><?php echo $this->session->userdata('email') ?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
								</li> -->
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
								</li> -->
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo $baseurl; ?>welcome/ses_clear"><i class="fas fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            CSE Project Show
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            
				            <div class="sidebar-widget widget-tasks">
				                
				                
				                <div class="widget-content">
				                    <ul class="list-unstyled m-0">
				                        <li ><a href="<?php echo $baseurl; ?>ad">Dashboard</a></li>
				
				                    </ul>
				                </div>
				            </div>
				<hr class="dotted short">
				            <div class="sidebar-widget widget-tasks">
				                <div class="widget-header">
				                    <h6>Projects Details</h6>
				                    <div class="widget-toggle">+</div>
				                </div>
				                
				                <div class="widget-content">
				                    <ul class="list-unstyled m-0">
				                       
				                        <li ><a href="<?php echo $baseurl; ?>ad/cpu">Processor</a></li>
				                        <li><a href="<?php echo $baseurl; ?>ad/mboard">Motherboard</a></li>
				                        <li><a href="<?php echo $baseurl; ?>ad/ram">RAM</a></li>
				                        <li><a href="<?php echo $baseurl; ?>ad/gpu">Graphics Card</a></li>
				                        <li><a href="<?php echo $baseurl; ?>ad/psu">Power Supply</a></li>
				                        <li><a href="<?php echo $baseurl; ?>ad/ssd">SSD</a></li>
				                        <li><a href="<?php echo $baseurl; ?>ad/hdd">HDD</a></li>
										<li><a href="<?php echo $baseurl; ?>ad/casing">Casing</a></li>
				                        
				                    </ul>
				                </div>
				            </div>
				<hr class="dotted short">
				                        
				           <div class="sidebar-widget widget-tasks">
				                
				                
				                <div class="widget-content">
				                    <ul class="list-unstyled m-0">
				                        <!-- <li><a href="<?php echo $baseurl; ?>dashboard/challanges">View as Gust</a></li> -->
				
				                    </ul>
				                </div>
				            </div>
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->
	
				
				
				
				<!-- end: page -->
				
		