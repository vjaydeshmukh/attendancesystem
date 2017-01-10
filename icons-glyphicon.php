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
<link rel="stylesheet" href="css/separate/pages/others.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu-addl-full">

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

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <ul class="side-menu-list">
	        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Dashboard</span>
	            </span>
	            <ul>
	                <li><a href="index.php"><span class="lbl">Default</span><span class="label label-custom label-pill label-danger">new</span></a></li>
	                <li><a href="dashboard-top-menu.php"><span class="lbl">Top menu</span></a></li>
	                <li><a href="side-menu-compact-full.php"><span class="lbl">Compact menu</span></a></li>
	                <li><a href="dashboard-addl-menu.php"><span class="lbl">Submenu</span></a></li>
	                <li><a href="side-menu-avatar.php"><span class="lbl">Menu with avatar</span></a></li>
	                <li><a href="side-menu-avatar.php"><span class="lbl">Compact menu with avatar</span></a></li>
	                <li><a href="dark-menu.php"><span class="lbl">Dark menu</span></a></li>
	                <li><a href="dark-menu-blue.php"><span class="lbl">Blue dark menu</span></a></li>
	                <li><a href="dark-menu-green.php"><span class="lbl">Green dark menu</span></a></li>
	                <li><a href="dark-menu-green-compact.php"><span class="lbl">Green compact dark menu</span></a></li>
	                <li><a href="dark-menu-ultramarine.php"><span class="lbl">Ultramarine dark menu</span></a></li>
	                <li><a href="asphalt-menu.php"><span class="lbl">Asphalt top menu</span></a></li>
	                <li><a href="side-menu-big-icon.php"><span class="lbl">Big menu</span></a></li>
	            </ul>
	        </li>
	        <li class="brown with-sub">
	            <span>
	                <i class="font-icon glyphicon glyphicon-tint"></i>
	                <span class="lbl">Skins</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.php"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.php"><span class="lbl">Madison Caribbean</span></a></li>
	                <li><a href="theme-side-caesium-dark-caribbean.php"><span class="lbl">Caesium Dark Caribbean</span></a></li>
	                <li><a href="theme-side-tin.php"><span class="lbl">Tin</span></a></li>
	                <li><a href="theme-side-litmus-blue.php"><span class="lbl">Litmus Blue</span></a></li>
	                <li><a href="theme-rebecca-purple.php"><span class="lbl">Rebecca Purple</span></a></li>
	                <li><a href="theme-picton-blue.php"><span class="lbl">Picton Blue</span></a></li>
	                <li><a href="theme-picton-blue-white-ebony.php"><span class="lbl">Picton Blue White Ebony</span></a></li>
	            </ul>
	        </li>
	        <li class="purple with-sub">
	            <span>
	                <i class="font-icon font-icon-comments active"></i>
	                <span class="lbl">Messages</span>
	            </span>
	            <ul>
	                <li><a href="messenger.php"><span class="lbl">Messenger</span></a></li>
	                <li><a href="chat.php"><span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span></a></li>
	                <li><a href="chat-write.php"><span class="lbl">Write Message</span></a></li>
	                <li><a href="chat-index.php"><span class="lbl">Select User</span></a></li>
	            </ul>
	        </li>
	        <li class="red">
	            <a href="mail.php">
	                <i class="font-icon glyphicon glyphicon-send"></i>
	                <span class="lbl">Mail</span>
	            </a>
	        </li>
	        <li class="gold with-sub">
	            <span>
	                <i class="font-icon font-icon-edit"></i>
	                <span class="lbl">Forms</span>
	            </span>
	            <ul>
	                <li><a href="ui-form.php"><span class="lbl">Basic Inputs</span></a></li>
	                <li><a href="ui-buttons.php"><span class="lbl">Buttons</span></a></li>
	                <li><a href="ui-select.php"><span class="lbl">Select &amp; Tags</span></a></li>
	                <li><a href="ui-checkboxes.php"><span class="lbl">Checkboxes &amp; Radios</span></a></li>
	                <li><a href="ui-form-validation.php"><span class="lbl">Validation</span></a></li>
	                <li><a href="typeahead.php"><span class="lbl">Typeahead</span></a></li>
	                <li><a href="steps.php"><span class="lbl">Steps</span></a></li>
	                <li><a href="ui-form-input-mask.php"><span class="lbl">Input Mask</span></a></li>
	                <li><a href="ui-form-extras.php"><span class="lbl">Extras</span></a></li>
	            </ul>
	        </li>
	        <li class="blue-dirty">
	            <a href="tables.php">
	                <span class="glyphicon glyphicon-th"></span>
	                <span class="lbl">Tables</span>
	            </a>
	        </li>
	        <li class="magenta with-sub">
	            <span>
	                <span class="glyphicon glyphicon-list-alt"></span>
	                <span class="lbl">Datatables</span>
	            </span>
	            <ul>
	                <a href="datatables-net.php"><span class="lbl">Datatables.net</span></a></li>
	                <a href="bootstrap-datatables.php"><span class="lbl">Bootstrap Table</span></a></li>
	
	                <!--<li><a href="datatables.php"><span class="lbl">Default</span></a></li>
	                <li><a href="datatables-fixed-columns.php"><span class="lbl">Fixed Columns</span></a></li>
	                <li><a href="datatables-reorder-rows.php"><span class="lbl">Reorder Rows</span></a></li>
	                <li><a href="datatables-reorder-columns.php"><span class="lbl">Reorder Columns</span></a></li>
	                <li><a href="datatables-resize-columns.php"><span class="lbl">Resize Columns</span></a></li>
	                <li><a href="datatables-mobile.php"><span class="lbl">Mobile</span></a></li>
	                <li><a href="datatables-filter-control.php"><span class="lbl">Filters</span></a></li>-->
	            </ul>
	        </li>
	        <li class="green with-sub">
	            <span>
	                <i class="font-icon font-icon-widget"></i>
	                <span class="lbl">Components</span>
	            </span>
	            <ul>
	                <li><a href="widgets.php"><span class="lbl">Widgets</span></a></li>
	                <li><a href="elements.php"><span class="lbl">Bootstrap UI</span></a></li>
	                <li><a href="ui-datepicker.php"><span class="lbl">Date and Time Pickers</span></a></li>
	                <li><a href="multipicker.php"><span class="lbl">Multi Picker</span></a></li>
	                <li><a href="form-steps.php"><span class="lbl">Form Steps</span></a></li>
	                <li><a href="components-upload.php"><span class="lbl">Upload</span></a></li>
	                <li><a href="sweet-alerts.php"><span class="lbl">SweetAlert</span></a></li>
	                <li><a href="tabs.php"><span class="lbl">Tabs</span></a></li>
	                <li><a href="panels.php"><span class="lbl">Panels</span></a></li>
	                <li><a href="notifications.php"><span class="lbl">Notifications</span></a></li>
	                <li><a href="range-slider.php"><span class="lbl">Sliders</span></a></li>
	                <li><a href="editor-summernote.php"><span class="lbl">Editors</span></a></li>
	                <li><a href="nestable.php"><span class="lbl">Nestable</span></a></li>
	                <li><a href="blockui.php"><span class="lbl">BlockUI</span></a></li>
	                <li><a href="alerts.php"><span class="lbl">Alerts</span></a></li>
	                <li><a href="player.php"><span class="lbl">Players</span></a></li>
	            </ul>
	        </li>
	     <!--   <li class="gold">
	            <a href="#">
	                <i class="font-icon font-icon-speed"></i>
	                <span class="lbl">Performance</span>
	            </a>
	        </li>-->
	        <li class="pink-red">
	            <a href="activity.php">
	                <i class="font-icon font-icon-zigzag"></i>
	                <span class="lbl">Activity</span>
	            </a>
	        </li>
	        <li class="blue with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Profile</span>
	            </span>
	            <ul>
	                <li><a href="profile.php"><span class="lbl">Version 1</span></a></li>
	                <li><a href="profile-2.php"><span class="lbl">Version 2</span></a></li>
	            </ul>
	        </li>
	        <li class="orange-red with-sub">
	            <span>
	                <i class="font-icon font-icon-help"></i>
	                <span class="lbl">Support</span>
	            </span>
	            <ul>
	                <li><a href="documentation.php"><span class="lbl">Docs (example)</span></a></li>
	                <li><a href="faq.php"><span class="lbl">FAQ Simple</span></a></li>
	                <li><a href="faq-search.php"><span class="lbl">FAQ Search</span></a></li>
	            </ul>
	        </li>
	        <li class="red">
	            <a href="contacts.php" class="label-right">
	                <i class="font-icon font-icon-contacts"></i>
	                <span class="lbl">Contacts</span>
	                <span class="label label-custom label-pill label-danger">35</span>
	            </a>
	        </li>
	        <li class="magenta opened">
	            <a href="scheduler.php">
	                <i class="font-icon font-icon-calend"></i>
	                <span class="lbl">Calendar</span>
	            </a>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <span class="glyphicon glyphicon-duplicate"></span>
	                <span class="lbl">Pages</span>
	            </span>
	            <ul>
	                <li><a href="email_templates.php"><span class="lbl">Email Templates</span></a></li>
	                <li><a href="blank.php"><span class="lbl">Blank</span></a></li>
	                <li><a href="empty.php"><span class="lbl">Empty List</span></a></li>
	                <li><a href="prices.php"><span class="lbl">Prices</span></a></li>
	                <li><a href="typography.php"><span class="lbl">Typography</span></a></li>
	                <li><a href="sign-in.php"><span class="lbl">Login</span></a></li>
	                <li><a href="sign-up.php"><span class="lbl">Register</span></a></li>
	                <li><a href="reset-password.php"><span class="lbl">Reset Password</span></a></li>
	                <li><a href="new-password.php"><span class="lbl">New Password</span></a></li>
	                <li><a href="error-404.php"><span class="lbl">Error 404</span></a></li>
	                <li><a href="error-500.php"><span class="lbl">Error 500</span></a></li>
	                <li><a href="cards.php"><span class="lbl">Cards</span></a></li>
	                <li><a href="avatars.php"><span class="lbl">Avatars</span></a></li>
	                <li><a href="ribbons.php"><span class="lbl">Ribbons</span></a></li>
	                <li><a href="icons-startui.php"><span class="lbl">Icons</span></a></li>
	                <li><a href="invoice.php"><span class="lbl">Invoice</span></a></li>
	                <li><a href="helpers.php"><span class="lbl">Helpers</span></a></li>
	            </ul>
	        </li>
	        <li class="blue-dirty">
	            <a href="list-tasks.php">
	                <i class="font-icon font-icon-notebook"></i>
	                <span class="lbl">Tasks</span>
	            </a>
	        </li>
	        <li class="aquamarine">
	            <a href="contacts-page.php">
	                <i class="font-icon font-icon-mail"></i>
	                <span class="lbl">Contact form</span>
	            </a>
	        </li>
	        <li class="blue">
	            <a href="files.php">
	                <i class="font-icon glyphicon glyphicon-paperclip"></i>
	                <span class="lbl">File Manager</span>
	            </a>
	        </li>
	        <li class="gold">
	            <a href="gallery.php">
	                <i class="font-icon font-icon-picture-2"></i>
	                <span class="lbl">Gallery</span>
	            </a>
	        </li>
	        <li class="red">
	            <a href="project.php">
	                <i class="font-icon font-icon-case-2"></i>
	                <span class="lbl">Project</span>
	            </a>
	        </li>
	        <li class="brown with-sub">
	            <span>
	                <span class="font-icon font-icon-chart"></span>
	                <span class="lbl">Charts</span>
	            </span>
	            <ul>
	                <li><a href="charts-c3js.php"><span class="lbl">C3.js</span></a></li>
	                <li><a href="charts-peity.php"><span class="lbl">Peity</span></a></li>
	                <li><a href="charts-plottable.php"><span class="lbl">Plottable.js</span></a></li>
	            </ul>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <span class="font-icon font-icon-burger"></span>
	                <span class="lbl">Nested Menu</span>
	            </span>
	            <ul>
	                <li><a href="#"><span class="lbl">Level 1</span></a></li>
	                <li><a href="#"><span class="lbl">Level 1</span></a></li>
	                <li class="with-sub">
	                    <span>
	                        <span class="lbl">Level 2</span>
	                    </span>
	                    <ul>
	                        <li><a href="#"><span class="lbl">Level 2</span></a></li>
	                        <li><a href="#"><span class="lbl">Level 2</span></a></li>
	                        <li class="with-sub">
	                            <span>
	                                <span class="lbl">Level 3</span>
	                            </span>
	                            <ul>
	                                <li><a href="#"><span class="lbl">Level 3</span></a></li>
	                                <li><a href="#"><span class="lbl">Level 3</span></a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	        </li>
	    </ul>
	
	    <section>
	        <header class="side-menu-title">Tags</header>
	        <ul class="side-menu-list">
	            <li>
	                <a href="#">
	                    <i class="tag-color green"></i>
	                    <span class="lbl">Website</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color grey-blue"></i>
	                    <span class="lbl">Bugs/Errors</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color red"></i>
	                    <span class="lbl">General Problem</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color pink"></i>
	                    <span class="lbl">Questions</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color orange"></i>
	                    <span class="lbl">Ideas</span>
	                </a>
	            </li>
	        </ul>
	    </section>
	</nav><!--.side-menu-->

	<nav class="side-menu-addl">
		<ul class="side-menu-addl-list">
			<li>
				<a href="icons-startui.php">
					<span class="tbl-row">
						<span class="tbl-cell tbl-cell-caption">StartUI</span>
						<span class="tbl-cell tbl-cell-num">98</span>
					</span>
				</a>
			</li>
			<li>
				<a href="icons-fontawesome.php">
                <span class="tbl-row">
                    <span class="tbl-cell tbl-cell-caption">Font Awesome</span>
                    <span class="tbl-cell tbl-cell-num">500+</span>
                </span>
				</a>
			</li>
			<li>
				<a href="icons-glyphicon.php">
                <span class="tbl-row">
                    <span class="tbl-cell tbl-cell-caption">Glyphicon</span>
                    <span class="tbl-cell tbl-cell-num">271</span>
                </span>
				</a>
			</li>
			<li>
				<a href="icons-flags.php">
                <span class="tbl-row">
                    <span class="tbl-cell tbl-cell-caption">Flags</span>
                    <span class="tbl-cell tbl-cell-num">249</span>
                </span>
				</a>
			</li>
		</ul>
	</nav>

	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Glyphicon Icons</h2>
							<div class="subtitle">Welcome to Ultimate Dashboard</div>
						</div>
					</div>
				</div>
			</header>

			<section class="card">
				<div class="card-block">
					<p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. <a href="http://glyphicons.com/" target="_blank">Glyphicons</a> Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to <a href="http://glyphicons.com/" target="_blank">Glyphicons</a> whenever possible.</p>
					<div class="bs-glyphicons">
						<ul class="bs-glyphicons-list">
							<li> <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-asterisk</span> </li> <li> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-plus</span> </li> <li> <span class="glyphicon glyphicon-euro" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-euro</span> </li> <li> <span class="glyphicon glyphicon-eur" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eur</span> </li> <li> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-minus</span> </li> <li> <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cloud</span> </li> <li> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-envelope</span> </li> <li> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pencil</span> </li> <li> <span class="glyphicon glyphicon-glass" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-glass</span> </li> <li> <span class="glyphicon glyphicon-music" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-music</span> </li> <li> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-search</span> </li> <li> <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-heart</span> </li> <li> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-star</span> </li> <li> <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-star-empty</span> </li> <li> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-user</span> </li> <li> <span class="glyphicon glyphicon-film" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-film</span> </li> <li> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th-large</span> </li> <li> <span class="glyphicon glyphicon-th" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th</span> </li> <li> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th-list</span> </li> <li> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ok</span> </li> <li> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-remove</span> </li> <li> <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span> </li> <li> <span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span> </li> <li> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-off</span> </li> <li> <span class="glyphicon glyphicon-signal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-signal</span> </li> <li> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cog</span> </li> <li> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-trash</span> </li> <li> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-home</span> </li> <li> <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-file</span> </li> <li> <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-time</span> </li> <li> <span class="glyphicon glyphicon-road" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-road</span> </li> <li> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-download-alt</span> </li> <li> <span class="glyphicon glyphicon-download" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-download</span> </li> <li> <span class="glyphicon glyphicon-upload" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-upload</span> </li> <li> <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-inbox</span> </li> <li> <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-play-circle</span> </li> <li> <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-repeat</span> </li> <li> <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-refresh</span> </li> <li> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-list-alt</span> </li> <li> <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-lock</span> </li> <li> <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-flag</span> </li> <li> <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-headphones</span> </li> <li> <span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-volume-off</span> </li> <li> <span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-volume-down</span> </li> <li> <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-volume-up</span> </li> <li> <span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-qrcode</span> </li> <li> <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-barcode</span> </li> <li> <span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tag</span> </li> <li> <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tags</span> </li> <li> <span class="glyphicon glyphicon-book" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-book</span> </li> <li> <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bookmark</span> </li> <li> <span class="glyphicon glyphicon-print" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-print</span> </li> <li> <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-camera</span> </li> <li> <span class="glyphicon glyphicon-font" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-font</span> </li> <li> <span class="glyphicon glyphicon-bold" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bold</span> </li> <li> <span class="glyphicon glyphicon-italic" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-italic</span> </li> <li> <span class="glyphicon glyphicon-text-height" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-height</span> </li> <li> <span class="glyphicon glyphicon-text-width" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-width</span> </li> <li> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-align-left</span> </li> <li> <span class="glyphicon glyphicon-align-center" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-align-center</span> </li> <li> <span class="glyphicon glyphicon-align-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-align-right</span> </li> <li> <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-align-justify</span> </li> <li> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-list</span> </li> <li> <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-indent-left</span> </li> <li> <span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-indent-right</span> </li> <li> <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span> </li> <li> <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-picture</span> </li> <li> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-map-marker</span> </li> <li> <span class="glyphicon glyphicon-adjust" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-adjust</span> </li> <li> <span class="glyphicon glyphicon-tint" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tint</span> </li> <li> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-edit</span> </li> <li> <span class="glyphicon glyphicon-share" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-share</span> </li> <li> <span class="glyphicon glyphicon-check" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-check</span> </li> <li> <span class="glyphicon glyphicon-move" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-move</span> </li> <li> <span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-step-backward</span> </li> <li> <span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span> </li> <li> <span class="glyphicon glyphicon-backward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-backward</span> </li> <li> <span class="glyphicon glyphicon-play" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-play</span> </li> <li> <span class="glyphicon glyphicon-pause" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pause</span> </li> <li> <span class="glyphicon glyphicon-stop" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-stop</span> </li> <li> <span class="glyphicon glyphicon-forward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-forward</span> </li> <li> <span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span> </li> <li> <span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-step-forward</span> </li> <li> <span class="glyphicon glyphicon-eject" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eject</span> </li> <li> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span> </li> <li> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span> </li> <li> <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span> </li> <li> <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span> </li> <li> <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span> </li> <li> <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span> </li> <li> <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-question-sign</span> </li> <li> <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-info-sign</span> </li> <li> <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-screenshot</span> </li> <li> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span> </li> <li> <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span> </li> <li> <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span> </li> <li> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span> </li> <li> <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span> </li> <li> <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span> </li> <li> <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span> </li> <li> <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-share-alt</span> </li> <li> <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-resize-full</span> </li> <li> <span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-resize-small</span> </li> <li> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span> </li> <li> <span class="glyphicon glyphicon-gift" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-gift</span> </li> <li> <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-leaf</span> </li> <li> <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fire</span> </li> <li> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eye-open</span> </li> <li> <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eye-close</span> </li> <li> <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span> </li> <li> <span class="glyphicon glyphicon-plane" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-plane</span> </li> <li> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-calendar</span> </li> <li> <span class="glyphicon glyphicon-random" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-random</span> </li> <li> <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-comment</span> </li> <li> <span class="glyphicon glyphicon-magnet" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-magnet</span> </li> <li> <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span> </li> <li> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span> </li> <li> <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-retweet</span> </li> <li> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span> </li> <li> <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-folder-close</span> </li> <li> <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-folder-open</span> </li> <li> <span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span> </li> <li> <span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span> </li> <li> <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hdd</span> </li> <li> <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span> </li> <li> <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bell</span> </li> <li> <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-certificate</span> </li> <li> <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span> </li> <li> <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span> </li> <li> <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-right</span> </li> <li> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-left</span> </li> <li> <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-up</span> </li> <li> <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-down</span> </li> <li> <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span> </li> <li> <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span> </li> <li> <span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span> </li> <li> <span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span> </li> <li> <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-globe</span> </li> <li> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-wrench</span> </li> <li> <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tasks</span> </li> <li> <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-filter</span> </li> <li> <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-briefcase</span> </li> <li> <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span> </li> <li> <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-dashboard</span> </li> <li> <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-paperclip</span> </li> <li> <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span> </li> <li> <span class="glyphicon glyphicon-link" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-link</span> </li> <li> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-phone</span> </li> <li> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pushpin</span> </li> <li> <span class="glyphicon glyphicon-usd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-usd</span> </li> <li> <span class="glyphicon glyphicon-gbp" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-gbp</span> </li> <li> <span class="glyphicon glyphicon-sort" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort</span> </li> <li> <span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span> </li> <li> <span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span> </li> <li> <span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span> </li> <li> <span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span> </li> <li> <span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span> </li> <li> <span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span> </li> <li> <span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-unchecked</span> </li> <li> <span class="glyphicon glyphicon-expand" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-expand</span> </li> <li> <span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span> </li> <li> <span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span> </li> <li> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-log-in</span> </li> <li> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-flash</span> </li> <li> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-log-out</span> </li> <li> <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-new-window</span> </li> <li> <span class="glyphicon glyphicon-record" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-record</span> </li> <li> <span class="glyphicon glyphicon-save" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-save</span> </li> <li> <span class="glyphicon glyphicon-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-open</span> </li> <li> <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-saved</span> </li> <li> <span class="glyphicon glyphicon-import" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-import</span> </li> <li> <span class="glyphicon glyphicon-export" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-export</span> </li> <li> <span class="glyphicon glyphicon-send" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-send</span> </li> <li> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span> </li> <li> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span> </li> <li> <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span> </li> <li> <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span> </li> <li> <span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span> </li> <li> <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-credit-card</span> </li> <li> <span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-transfer</span> </li> <li> <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cutlery</span> </li> <li> <span class="glyphicon glyphicon-header" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-header</span> </li> <li> <span class="glyphicon glyphicon-compressed" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-compressed</span> </li> <li> <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-earphone</span> </li> <li> <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span> </li> <li> <span class="glyphicon glyphicon-tower" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tower</span> </li> <li> <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-stats</span> </li> <li> <span class="glyphicon glyphicon-sd-video" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sd-video</span> </li> <li> <span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hd-video</span> </li> <li> <span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-subtitles</span> </li> <li> <span class="glyphicon glyphicon-sound-stereo" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span> </li> <li> <span class="glyphicon glyphicon-sound-dolby" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span> </li> <li> <span class="glyphicon glyphicon-sound-5-1" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span> </li> <li> <span class="glyphicon glyphicon-sound-6-1" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span> </li> <li> <span class="glyphicon glyphicon-sound-7-1" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span> </li> <li> <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span> </li> <li> <span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span> </li> <li> <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span> </li> <li> <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span> </li> <li> <span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span> </li> <li> <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span> </li> <li> <span class="glyphicon glyphicon-cd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cd</span> </li> <li> <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-save-file</span> </li> <li> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-open-file</span> </li> <li> <span class="glyphicon glyphicon-level-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-level-up</span> </li> <li> <span class="glyphicon glyphicon-copy" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-copy</span> </li> <li> <span class="glyphicon glyphicon-paste" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-paste</span> </li> <li> <span class="glyphicon glyphicon-alert" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-alert</span> </li> <li> <span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-equalizer</span> </li> <li> <span class="glyphicon glyphicon-king" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-king</span> </li> <li> <span class="glyphicon glyphicon-queen" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-queen</span> </li> <li> <span class="glyphicon glyphicon-pawn" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pawn</span> </li> <li> <span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bishop</span> </li> <li> <span class="glyphicon glyphicon-knight" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-knight</span> </li> <li> <span class="glyphicon glyphicon-baby-formula" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-baby-formula</span> </li> <li> <span class="glyphicon glyphicon-tent" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tent</span> </li> <li> <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-blackboard</span> </li> <li> <span class="glyphicon glyphicon-bed" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bed</span> </li> <li> <span class="glyphicon glyphicon-apple" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-apple</span> </li> <li> <span class="glyphicon glyphicon-erase" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-erase</span> </li> <li> <span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hourglass</span> </li> <li> <span class="glyphicon glyphicon-lamp" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-lamp</span> </li> <li> <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-duplicate</span> </li> <li> <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-piggy-bank</span> </li> <li> <span class="glyphicon glyphicon-scissors" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-scissors</span> </li> <li> <span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bitcoin</span> </li> <li> <span class="glyphicon glyphicon-btc" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-btc</span> </li> <li> <span class="glyphicon glyphicon-xbt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-xbt</span> </li> <li> <span class="glyphicon glyphicon-yen" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-yen</span> </li> <li> <span class="glyphicon glyphicon-jpy" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-jpy</span> </li> <li> <span class="glyphicon glyphicon-ruble" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ruble</span> </li> <li> <span class="glyphicon glyphicon-rub" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-rub</span> </li> <li> <span class="glyphicon glyphicon-scale" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-scale</span> </li> <li> <span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ice-lolly</span> </li> <li> <span class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ice-lolly-tasted</span> </li> <li> <span class="glyphicon glyphicon-education" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-education</span> </li> <li> <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-option-horizontal</span> </li> <li> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-option-vertical</span> </li> <li> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-hamburger</span> </li> <li> <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-modal-window</span> </li> <li> <span class="glyphicon glyphicon-oil" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-oil</span> </li> <li> <span class="glyphicon glyphicon-grain" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-grain</span> </li> <li> <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sunglasses</span> </li> <li> <span class="glyphicon glyphicon-text-size" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-size</span> </li> <li> <span class="glyphicon glyphicon-text-color" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-color</span> </li> <li> <span class="glyphicon glyphicon-text-background" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-background</span> </li> <li> <span class="glyphicon glyphicon-object-align-top" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-top</span> </li> <li> <span class="glyphicon glyphicon-object-align-bottom" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-bottom</span> </li> <li> <span class="glyphicon glyphicon-object-align-horizontal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-horizontal</span> </li> <li> <span class="glyphicon glyphicon-object-align-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-left</span> </li> <li> <span class="glyphicon glyphicon-object-align-vertical" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-vertical</span> </li> <li> <span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-right</span> </li> <li> <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-triangle-right</span> </li> <li> <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-triangle-left</span> </li> <li> <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-triangle-bottom</span> </li> <li> <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-triangle-top</span> </li> <li> <span class="glyphicon glyphicon-console" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-console</span> </li> <li> <span class="glyphicon glyphicon-superscript" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-superscript</span> </li> <li> <span class="glyphicon glyphicon-subscript" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-subscript</span> </li> <li> <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-left</span> </li> <li> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-right</span> </li> <li> <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-down</span> </li> <li> <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-up</span> </li> </ul> </div>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

<script src="js/app.js"></script>
</body>
</html>