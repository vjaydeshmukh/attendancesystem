<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/lib/ion-range-slider/ion.rangeSlider.css">
<link rel="stylesheet" href="css/lib/ion-range-slider/ion.rangeSlider.skinHTML5.css">
<link rel="stylesheet" href="css/separate/elements/player.min.css">
<link rel="stylesheet" href="css/separate/vendor/fancybox.min.css">
<link rel="stylesheet" href="css/separate/pages/profile-2.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

	<header class="site-header">
	    <div class="container-fluid">
	
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="img/logo-2.png" alt="">
	            <img class="hidden-lg-up" src="img/logo-2-mob.png" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown dropdown-notification notif">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                            <div class="dropdown-menu-notif-header">
	                                Notifications
	                                <span class="label label-pill label-danger">4</span>
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-1.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Morgan</a> was bothering about something
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-2.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-3.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-4.jpg" alt="">
	                                    </div>
	                                    <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown dropdown-notification messages">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-messages"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-mail"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
	                            <div class="dropdown-menu-messages-header">
	                                <ul class="nav" role="tablist">
	                                    <li class="nav-item">
	                                        <a class="nav-link active"
	                                           data-toggle="tab"
	                                           href="#tab-incoming"
	                                           role="tab">
	                                            Inbox
	                                            <span class="label label-pill label-danger">8</span>
	                                        </a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link"
	                                           data-toggle="tab"
	                                           href="#tab-outgoing"
	                                           role="tab">Outbox</a>
	                                    </li>
	                                </ul>
	                                <!--<button type="button" class="create">
	                                    <i class="font-icon font-icon-pen-square"></i>
	                                </button>-->
	                            </div>
	                            <div class="tab-content">
	                                <div class="tab-pane active" id="tab-incoming" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something...</span>
	                                        </a>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="tab-outgoing" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burtons</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown dropdown-lang">
	                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <span class="flag-icon flag-icon-us"></span>
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right">
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ru"></span>Русский</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de"></span>Deutsch</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-it"></span>Italiano</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es"></span>Español</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-pl"></span>Polski</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-li"></span>Lietuviu</a>
	                            </div>
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span>Français</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-by"></span>Беларускi</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ua"></span>Українська</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-cz"></span>Česky</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ch"></span>中國</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        <div class="dropdown dropdown-typical">
	                            <div class="dropdown-menu" aria-labelledby="dd-header-sales">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-cogwheel"></span>
	                                <span class="lbl">Marketing automation</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
	                                <a class="dropdown-item" href="#">Current Search</a>
	                                <a class="dropdown-item" href="#">Search for Issues</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Recent issues</div>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                                <div class="dropdown-more">
	                                    <div class="dropdown-more-caption padding">more...</div>
	                                    <div class="dropdown-more-sub">
	                                        <div class="dropdown-more-sub-in">
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Import Issues from CSV</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Filters</div>
	                                <a class="dropdown-item" href="#">My Open Issues</a>
	                                <a class="dropdown-item" href="#">Reported by Me</a>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Manage filters</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Timesheet</div>
	                                <a class="dropdown-item" href="#">Subscribtions</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-social" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-share"></span>
	                                <span class="lbl">Social media</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-social">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a href="#" class="dropdown-toggle no-arr">
	                                <span class="font-icon font-icon-page"></span>
	                                <span class="lbl">Projects</span>
	                                <span class="label label-pill label-danger">35</span>
	                            </a>
	                        </div>
	
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-form-builder" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-pencil"></span>
	                                <span class="lbl">Form builder</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-form-builder">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown">
	                            <button class="btn btn-rounded dropdown-toggle" id="dd-header-add" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                Add
	                            </button>
	                            <div class="dropdown-menu" aria-labelledby="dd-header-add">
	                                <a class="dropdown-item" href="#">Quant and Verbal</a>
	                                <a class="dropdown-item" href="#">Real Gmat Test</a>
	                                <a class="dropdown-item" href="#">Prep Official App</a>
	                                <a class="dropdown-item" href="#">CATprer Test</a>
	                                <a class="dropdown-item" href="#">Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="help-dropdown">
	                            <button type="button">
	                                <i class="font-icon font-icon-help"></i>
	                            </button>
	                            <div class="help-dropdown-popup">
	                                <div class="help-dropdown-popup-side">
	                                    <ul>
	                                        <li><a href="#">Getting Started</a></li>
	                                        <li><a href="#" class="active">Creating a new project</a></li>
	                                        <li><a href="#">Adding customers</a></li>
	                                        <li><a href="#">Settings</a></li>
	                                        <li><a href="#">Importing data</a></li>
	                                        <li><a href="#">Exporting data</a></li>
	                                    </ul>
	                                </div>
	                                <div class="help-dropdown-popup-cont">
	                                    <div class="help-dropdown-popup-cont-in">
	                                        <div class="jscroll">
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div><!--.help-dropdown-->
	                        <a class="btn btn-nav btn-rounded btn-inline btn-danger-outline" href="http://themeforest.net/item/startui-premium-bootstrap-4-admin-dashboard-template/15228250">
	                            Buy Theme
	                        </a>
	                        <div class="site-header-search-container">
	                            <form class="site-header-search closed">
	                                <input type="text" placeholder="Search"/>
	                                <button type="submit">
	                                    <span class="font-icon-search"></span>
	                                </button>
	                                <div class="overlay"></div>
	                            </form>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="page-content">
		<div class="profile-header-photo">
			<div class="profile-header-photo-in">
				<div class="tbl-cell">
					<div class="info-block">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-9 col-xl-offset-3 col-lg-8 col-lg-offset-4 col-md-offset-0">
									<div class="tbl info-tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<p class="title">Dan Counsell</p>
												<p>Company Founder</p>
											</div>
											<div class="tbl-cell tbl-cell-stat">
												<div class="inline-block">
													<p class="title">23К</p>
													<p>Followers</p>
												</div>
											</div>
											<div class="tbl-cell tbl-cell-stat">
												<div class="inline-block">
													<p class="title">938</p>
													<p>Photos</p>
												</div>
											</div>
											<div class="tbl-cell tbl-cell-stat">
												<div class="inline-block">
													<p class="title">18</p>
													<p>Videos</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="change-cover">
				<i class="font-icon font-icon-picture-double"></i>
				Change cover
				<input type="file"/>
			</button>
		</div><!--.profile-header-photo-->

		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-lg-4">
					<aside class="profile-side">
						<section class="box-typical profile-side-user">
							<button type="button" class="avatar-preview avatar-preview-128">
								<img src="img/avatar-1-256.png" alt=""/>
								<span class="update">
									<i class="font-icon font-icon-picture-double"></i>
									Update photo
								</span>
								<input type="file"/>
							</button>
							<button type="button" class="btn btn-rounded">Send a Message</button>
							<div class="btn-group">
								<button type="button"
								        class="btn btn-rounded btn-primary-outline dropdown-toggle"
								        data-toggle="dropdown"
								        aria-haspopup="true"
								        aria-expanded="false">
									Follow
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
								</div>
							</div>
							<div class="bottom-txt">Standing: 154</div>
						</section>

						<section class="box-typical profile-side-stat">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<span class="number">9854</span>
										followers
									</div>
									<div class="tbl-cell">
										<span class="number">112</span>
										following
									</div>
								</div>
							</div>
						</section>

						<section class="box-typical">
							<header class="box-typical-header-sm bordered">About</header>
							<div class="box-typical-inner">
								<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper.</p>
							</div>
						</section>

						<section class="box-typical">
							<header class="box-typical-header-sm bordered">Recommendation</header>
							<div class="box-typical-inner">
								<p>All stream</p>
								<p>Connected Apps</p>
								<p>Photos</p>
								<p>Most recent</p>
							</div>
						</section>

						<section class="box-typical">
							<header class="box-typical-header-sm bordered">Info</header>
							<div class="box-typical-inner">
								<p class="line-with-icon">
									<i class="font-icon font-icon-pin-2"></i>
									New York
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-users-two"></i>
									Group1, Group2
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-case-3"></i>
									Symfony, PHP, JavaScript, Java, Android, SQL, OOP, OOD
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-learn"></i>
									VSU, Compiter Science, Master
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-github"></i>
									<a href="#">Nickname</a>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-earth"></i>
									<a href="#">example.com</a>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-calend"></i>
									Registered 8 month ago
								</p>
							</div>
						</section>

						<section class="box-typical">
							<header class="box-typical-header-sm bordered">Skills</header>
							<div class="box-typical-inner">
								<div class="progress-compact-style">
									<div class="progress-header">
										<div class="progress-lbl">AngularJS</div>
										<div class="progress-val">75%</div>
									</div>
									<progress class="progress progress-aquamarine" value="75" max="100">750%</progress>
								</div>
								<div class="progress-compact-style">
									<div class="progress-header">
										<div class="progress-lbl">Javascript</div>
										<div class="progress-val">100%</div>
									</div>
									<progress class="progress progress-danger" value="100" max="100">100%</progress>
								</div>
								<div class="progress-compact-style">
									<div class="progress-header">
										<div class="progress-lbl">Wordpress</div>
										<div class="progress-val">50%</div>
									</div>
									<progress class="progress progress-info" value="50" max="100">50%</progress>
								</div>
								<div class="progress-compact-style">
									<div class="progress-header">
										<div class="progress-lbl">HTML &amp; CSS</div>
										<div class="progress-val">10%</div>
									</div>
									<progress class="progress" value="10" max="100">10%</progress>
								</div>
							</div>
						</section>
					</aside><!--.profile-side-->
				</div>

				<div class="col-xl-9 col-lg-8">
					<section class="tabs-section">
						<div class="tabs-section-nav tabs-section-nav-left">
							<ul class="nav" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" href="#tabs-2-tab-1" role="tab" data-toggle="tab">
										<span class="nav-link-in">About me</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabs-2-tab-2" role="tab" data-toggle="tab">
										<span class="nav-link-in">Activity</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabs-2-tab-3" role="tab" data-toggle="tab">
										<span class="nav-link-in">Projects</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabs-2-tab-4" role="tab" data-toggle="tab">
										<span class="nav-link-in">Settings</span>
									</a>
								</li>
							</ul>
						</div><!--.tabs-section-nav-->

						<div class="tab-content no-styled profile-tabs">
							<div role="tabpanel" class="tab-pane active" id="tabs-2-tab-1">
								<form class="box-typical">
									<input type="text" class="write-something" placeholder="What`s on your mind"/>
									<div class="box-typical-footer">
										<div class="tbl">
											<div class="tbl-row">
												<div class="tbl-cell">
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-earth"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-picture"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-calend"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-video-fill"></i>
													</button>
												</div>
												<div class="tbl-cell tbl-cell-action">
													<button type="submit" class="btn btn-rounded">Send</button>
												</div>
											</div>
										</div>
									</div>
								</form><!--.box-typical-->

								<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">Tim Collins</a></div>
													<div class="color-blue-grey-lighter">3 days ago - 23 min read</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="font-icon font-icon-share"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Subminted a new post</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									</div>
									<div class="box-typical-footer profile-post-meta">
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-heart"></i>
											45 Like
										</a>
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-comment"></i>
											18 Comment
										</a>
									</div>
									<div class="comment-rows-container hover-action scrollable-block">
										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/photo-64-2.jpg" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Eric Fox</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Vasilisa</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Yes!</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Vasilisa</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
												<div class="comment-row-item quote">
													<div class="avatar-preview avatar-preview-32">
														<a href="#">
															<img src="img/photo-64-2.jpg" alt="">
														</a>
													</div>
													<div class="tbl comment-row-item-header">
														<div class="tbl-row">
															<div class="tbl-cell tbl-cell-name">Adam Oliver</div>
															<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
														</div>
													</div>
													<div class="comment-row-item-content">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p>
													</div>
												</div><!--.comment-row-item-->
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/photo-64-2.jpg" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Henry Olson</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/photo-64-2.jpg" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Henry Olson</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Vasilisa</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>No!</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Vasilisa</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed...</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/photo-64-2.jpg" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Roger Dunn</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/photo-64-2.jpg" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Lorem ipsum dolor sit amet</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Vasilisa</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Yes!</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Vasilisa</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->

										<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="img/photo-64-2.jpg" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">Eric Fox</div>
													<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div><!--.comment-row-item-->
									</div><!--.comment-rows-container-->
									<input type="text" class="write-something" placeholder="Leave a comment"/>
									<div class="box-typical-footer">
										<div class="tbl">
											<div class="tbl-row">
												<div class="tbl-cell">
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-earth"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-picture"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-calend"></i>
													</button>
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-video-fill"></i>
													</button>
												</div>
												<div class="tbl-cell tbl-cell-action">
													<button type="submit" class="btn btn-rounded">Send</button>
												</div>
											</div>
										</div>
									</div>
								</article>

								<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">Tim Collins</a></div>
													<div class="color-blue-grey-lighter">3 days ago - 23 min read</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="font-icon font-icon-share"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Added 4 new pictures</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="profile-post-gall-fluid profile-post-gall-grid" data-columns>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="img/gall-img-1.jpg">
													<img src="img/gall-img-1.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="img/gall-img-2.jpg">
													<img src="img/gall-img-2.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="img/gall-img-3.jpg">
													<img src="img/gall-img-3.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="img/gall-img-4.jpg">
													<img src="img/gall-img-4.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="img/gall-img-5.jpg">
													<img src="img/gall-img-5.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-1" href="img/gall-img-6.jpg">
													<img src="img/gall-img-6.jpg" alt="">
												</a>
											</div>
										</div>
									</div>
									<div class="box-typical-footer profile-post-meta">
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-heart"></i>
											45 Like
										</a>
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-comment"></i>
											18 Comment
										</a>
									</div>
								</article>

								<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">Tim Collins</a></div>
													<div class="color-blue-grey-lighter">3 days ago - 23 min read</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="font-icon font-icon-share"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Added a new video</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="cstm-video-player" style="background-image: url('img/player-photo-b.jpg');">
											<div class="cstm-video-player-hover">
												<i class="font-icon font-icon-play"></i>
											</div>
											<div class="cstm-video-player-controls">
												<div class="cstm-video-player-progress">
													<div class="downloaded" style="width:75%"></div>
													<div class="played" style="width:35%"></div>
												</div>
												<div class="cstm-video-player-controls-left">
													<button type="button" class="cstm-video-player-btn">
														<i class="font-icon font-icon-play"></i>
													</button>
													<button type="button" class="cstm-video-player-btn">
														<i class="font-icon font-icon-player-next"></i>
													</button>
													<button type="button" class="cstm-video-player-btn">
														<i class="font-icon font-icon-player-sound"></i>
													</button>
												</div>
												<div class="cstm-video-player-controls-right">
													<button type="button" class="cstm-video-player-btn">
														<i class="font-icon font-icon-player-subtitres"></i>
													</button>
													<button type="button" class="cstm-video-player-btn">
														<i class="font-icon font-icon-player-settings"></i>
													</button>
													<button type="button" class="cstm-video-player-btn">
														<i class="font-icon font-icon-player-wide-screen"></i>
													</button>
													<button type="button" class="cstm-video-player-btn">
														<i class="font-icon font-icon-player-full-screen"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="box-typical-footer profile-post-meta">
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-heart"></i>
											45 Like
										</a>
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-comment"></i>
											18 Comment
										</a>
									</div>
								</article>

								<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">Tim Collins</a></div>
													<div class="color-blue-grey-lighter">3 days ago - 23 min read</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="font-icon font-icon-share"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Is listening to the Evernote</p>
										<div class="minimalistic-player">
											<div class="tbl minimalistic-player-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-action">
														<button type="button">
															<i class="font-icon font-icon-play-square"></i>
														</button>
													</div>
													<div class="tbl-cell tbl-cell-action">
														<button type="button">
															<i class="font-icon font-icon-play-prev-square"></i>
														</button>
													</div>
													<div class="tbl-cell tbl-cell-action">
														<button type="button">
															<i class="font-icon font-icon-play-next-square"></i>
														</button>
													</div>
													<div class="tbl-cell tbl-cell-caption">Kylie Minogue  – Slow 2015</div>
													<div class="tbl-cell tbl-cell-time">-04:01</div>
												</div>
											</div>
											<div class="progress">
												<div style="width: 25%"></div>
											</div>
											<div class="progress sound">
												<div style="width: 50%"><div class="handle"></div></div>
											</div>
										</div>
									</div>
									<div class="box-typical-footer profile-post-meta">
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-heart"></i>
											45 Like
										</a>
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-comment"></i>
											18 Comment
										</a>
									</div>
								</article>

								<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">Tim Collins</a></div>
													<div class="color-blue-grey-lighter">3 days ago - 23 min read</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="font-icon font-icon-share"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Created an album collection</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="profile-post-gall-fluid profile-post-gall-grid" data-columns>
											<div class="col">
												<a class="fancybox" rel="gall-2" href="img/gall-img-1.jpg">
													<img src="img/gall-img-1.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-2" href="img/gall-img-2.jpg">
													<img src="img/gall-img-2.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-2" href="img/gall-img-3.jpg">
													<img src="img/gall-img-3.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-2" href="img/gall-img-4.jpg">
													<img src="img/gall-img-4.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-2" href="img/gall-img-5.jpg">
													<img src="img/gall-img-5.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-2" href="img/gall-img-6.jpg">
													<img src="img/gall-img-6.jpg" alt="">
												</a>
											</div>
											<div class="col">
												<a class="fancybox" rel="gall-2" href="img/gall-img-7.jpg">
													<img src="img/gall-img-7.jpg" alt="">
												</a>
											</div>
										</div>
									</div>
									<div class="box-typical-footer profile-post-meta">
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-heart"></i>
											45 Like
										</a>
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-comment"></i>
											18 Comment
										</a>
									</div>
								</article>

								<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">Tim Collins</a></div>
													<div class="color-blue-grey-lighter">3 days ago - 23 min read</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="font-icon font-icon-share"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Scheduled a meeting whith <a href="#">Elen Adarna</a></p>
										<div class="tbl profile-post-card">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/100x100.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<p class="title"><a href="#">Telling Your Kife Story: Memoir Workshop Series</a></p>
													<p>Monday, July 06, 2015 – Thuesday, July 07, 2015</p>
													<p>SF Bay Theater</p>
													<p>San Francisco, California, USA</p>
												</div>
											</div>
										</div>
									</div>
									<div class="box-typical-footer profile-post-meta">
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-heart"></i>
											45 Like
										</a>
										<a href="#" class="meta-item">
											<i class="font-icon font-icon-comment"></i>
											18 Comment
										</a>
									</div>
								</article>
							</div><!--.tab-pane-->
							<div role="tabpanel" class="tab-pane" id="tabs-2-tab-2">
								<section class="box-typical box-typical-padding">
									Activity
								</section>
							</div><!--.tab-pane-->
							<div role="tabpanel" class="tab-pane" id="tabs-2-tab-3">
								<section class="box-typical box-typical-padding">
									Projects
								</section>
							</div><!--.tab-pane-->
							<div role="tabpanel" class="tab-pane" id="tabs-2-tab-4">
								<section class="box-typical profile-settings">
									<section class="box-typical-section">
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">Name</label>
											</div>
											<div class="col-xl-4">
												<input class="form-control" type="text" value="Dan Counsell"/>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">Position</label>
											</div>
											<div class="col-xl-4">
												<input class="form-control" type="text" value="Company founder"/>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">About</label>
											</div>
											<div class="col-xl-6">
												<textarea rows="2" class="form-control">Maecenas sed diam eget risus varius blandit sit amet non magna.
Vestibulum id ligula porta felis euismod semper.</textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">Recomendation</label>
											</div>
											<div class="col-xl-6">
												<input class="form-control" type="text" value="All stream, Connected Apps, Photos, Most recent"/>
											</div>
										</div>
									</section>
									<section class="box-typical-section">
										<header class="box-typical-header-sm">Info</header>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">
													<i class="font-icon font-icon-pin-2"></i>
													City
												</label>
											</div>
											<div class="col-xl-4">
												<input class="form-control" type="text" value="New York"/>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">
													<i class="font-icon font-icon-users-two"></i>
													Group
												</label>
											</div>
											<div class="col-xl-4">
												<input class="form-control" type="text" value="Group1, Group2"/>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">
													<i class="font-icon font-icon-case-3"></i>
													Code
												</label>
											</div>
											<div class="col-xl-6">
												<input class="form-control" type="text" value="Symfony, PHP, JavaScript, Java, Android, SQL, OOP, OOD"/>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">
													<i class="font-icon font-icon-learn"></i>
													Edication
												</label>
											</div>
											<div class="col-xl-6">
												<input class="form-control" type="text" value="VSU, Compiter Science, Master"/>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">
													<i class="font-icon font-icon-github"></i>
													Github
												</label>
											</div>
											<div class="col-xl-4">
												<input class="form-control" type="text" value="Nickname"/>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">
													<i class="font-icon font-icon-earth"></i>
													Web
												</label>
											</div>
											<div class="col-xl-4">
												<input class="form-control" type="text" value="example.com"/>
											</div>
										</div>
									</section>
									<section class="box-typical-section">
										<header class="box-typical-header-sm">Skills</header>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">AngularJS</label>
											</div>
											<div class="col-xl-4">
												<div class="range-settings range-slider-simple range-slider-aquamarine">
													<input type="text" id="range-slider-1" name="example_name" value="" />
													<div class="range-settings-percent">30%</div>
													<div class="range-setting-actions">
														<button type="button">
															<i class="font-icon font-icon-pencil"></i>
														</button>
														<button type="button" class="del">
															<i class="font-icon font-icon-trash"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">Javascript</label>
											</div>
											<div class="col-xl-4">
												<div class="range-settings range-slider-simple range-slider-red">
													<input type="text" id="range-slider-2" name="example_name" value="" />
													<div class="range-settings-percent">30%</div>
													<div class="range-setting-actions">
														<button type="button">
															<i class="font-icon font-icon-pencil"></i>
														</button>
														<button type="button" class="del">
															<i class="font-icon font-icon-trash"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">Wordpress</label>
											</div>
											<div class="col-xl-4">
												<div class="range-settings range-slider-simple range-slider-purple">
													<input type="text" id="range-slider-3" name="example_name" value="" />
													<div class="range-settings-percent">30%</div>
													<div class="range-setting-actions">
														<button type="button">
															<i class="font-icon font-icon-pencil"></i>
														</button>
														<button type="button" class="del">
															<i class="font-icon font-icon-trash"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">HTML &amp; CSS</label>
											</div>
											<div class="col-xl-4">
												<div class="range-settings range-slider-simple">
													<input type="text" id="range-slider-4" name="example_name" value="" />
													<div class="range-settings-percent">30%</div>
													<div class="range-setting-actions">
														<button type="button">
															<i class="font-icon font-icon-pencil"></i>
														</button>
														<button type="button" class="del">
															<i class="font-icon font-icon-trash"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">
													<a href="#">Add new skill</a>
												</label>
											</div>
											<div class="col-xl-4">
												<div class="input-group">
													<input type="text" class="form-control" value="Logo design">
													<span class="input-group-btn">
														<button class="btn btn-grey" type="button">Add</button>
													</span>
												</div>
											</div>
										</div>
									</section>
									<section class="box-typical-section profile-settings-btns">
										<button type="submit" class="btn btn-rounded">Save Changes</button>
										<button type="button" class="btn btn-rounded btn-grey">Cancel</button>
									</section>
								</section>
							</div><!--.tab-pane-->
						</div><!--.tab-content-->
					</section><!--.tabs-section-->
				</div>
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/salvattore/salvattore.min.js"></script>
	<script src="js/lib/ion-range-slider/ion.rangeSlider.js"></script>
	<script src="js/lib/fancybox/jquery.fancybox.pack.js"></script>
	<script>
		$(document).ready(function() {
			$(".fancybox").fancybox({
				padding: 0,
				openEffect	: 'none',
				closeEffect	: 'none'
			});

			$("#range-slider-1").ionRangeSlider({
				min: 0,
				max: 100,
				from: 30,
				hide_min_max: true,
				hide_from_to: true
			});

			$("#range-slider-2").ionRangeSlider({
				min: 0,
				max: 100,
				from: 30,
				hide_min_max: true,
				hide_from_to: true
			});

			$("#range-slider-3").ionRangeSlider({
				min: 0,
				max: 100,
				from: 30,
				hide_min_max: true,
				hide_from_to: true
			});

			$("#range-slider-4").ionRangeSlider({
				min: 0,
				max: 100,
				from: 30,
				hide_min_max: true,
				hide_from_to: true
			});

		});
	</script>

<script src="js/app.js"></script>
</body>
</html>