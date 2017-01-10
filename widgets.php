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
<link rel="stylesheet" href="css/separate/vendor/slick.min.css">
<link rel="stylesheet" href="css/separate/vendor/select2.min.css">
<link rel="stylesheet" href="css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="with-side-menu">

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
	                <li><a href="index.html"><span class="lbl">Default</span><span class="label label-custom label-pill label-danger">new</span></a></li>
	                <li><a href="dashboard-top-menu.html"><span class="lbl">Top menu</span></a></li>
	                <li><a href="side-menu-compact-full.html"><span class="lbl">Compact menu</span></a></li>
	                <li><a href="dashboard-addl-menu.html"><span class="lbl">Submenu</span></a></li>
	                <li><a href="side-menu-avatar.html"><span class="lbl">Menu with avatar</span></a></li>
	                <li><a href="side-menu-avatar.html"><span class="lbl">Compact menu with avatar</span></a></li>
	                <li><a href="dark-menu.html"><span class="lbl">Dark menu</span></a></li>
	                <li><a href="dark-menu-blue.html"><span class="lbl">Blue dark menu</span></a></li>
	                <li><a href="dark-menu-green.html"><span class="lbl">Green dark menu</span></a></li>
	                <li><a href="dark-menu-green-compact.html"><span class="lbl">Green compact dark menu</span></a></li>
	                <li><a href="dark-menu-ultramarine.html"><span class="lbl">Ultramarine dark menu</span></a></li>
	                <li><a href="asphalt-menu.html"><span class="lbl">Asphalt top menu</span></a></li>
	                <li><a href="side-menu-big-icon.html"><span class="lbl">Big menu</span></a></li>
	            </ul>
	        </li>
	        <li class="brown with-sub">
	            <span>
	                <i class="font-icon glyphicon glyphicon-tint"></i>
	                <span class="lbl">Skins</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	                <li><a href="theme-side-caesium-dark-caribbean.html"><span class="lbl">Caesium Dark Caribbean</span></a></li>
	                <li><a href="theme-side-tin.html"><span class="lbl">Tin</span></a></li>
	                <li><a href="theme-side-litmus-blue.html"><span class="lbl">Litmus Blue</span></a></li>
	                <li><a href="theme-rebecca-purple.html"><span class="lbl">Rebecca Purple</span></a></li>
	                <li><a href="theme-picton-blue.html"><span class="lbl">Picton Blue</span></a></li>
	                <li><a href="theme-picton-blue-white-ebony.html"><span class="lbl">Picton Blue White Ebony</span></a></li>
	            </ul>
	        </li>
	        <li class="purple with-sub">
	            <span>
	                <i class="font-icon font-icon-comments active"></i>
	                <span class="lbl">Messages</span>
	            </span>
	            <ul>
	                <li><a href="messenger.html"><span class="lbl">Messenger</span></a></li>
	                <li><a href="chat.html"><span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span></a></li>
	                <li><a href="chat-write.html"><span class="lbl">Write Message</span></a></li>
	                <li><a href="chat-index.html"><span class="lbl">Select User</span></a></li>
	            </ul>
	        </li>
	        <li class="red">
	            <a href="mail.html">
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
	                <li><a href="ui-form.html"><span class="lbl">Basic Inputs</span></a></li>
	                <li><a href="ui-buttons.html"><span class="lbl">Buttons</span></a></li>
	                <li><a href="ui-select.html"><span class="lbl">Select &amp; Tags</span></a></li>
	                <li><a href="ui-checkboxes.html"><span class="lbl">Checkboxes &amp; Radios</span></a></li>
	                <li><a href="ui-form-validation.html"><span class="lbl">Validation</span></a></li>
	                <li><a href="typeahead.html"><span class="lbl">Typeahead</span></a></li>
	                <li><a href="steps.html"><span class="lbl">Steps</span></a></li>
	                <li><a href="ui-form-input-mask.html"><span class="lbl">Input Mask</span></a></li>
	                <li><a href="ui-form-extras.html"><span class="lbl">Extras</span></a></li>
	            </ul>
	        </li>
	        <li class="blue-dirty">
	            <a href="tables.html">
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
	                <a href="datatables-net.html"><span class="lbl">Datatables.net</span></a></li>
	                <a href="bootstrap-datatables.html"><span class="lbl">Bootstrap Table</span></a></li>
	
	                <!--<li><a href="datatables.html"><span class="lbl">Default</span></a></li>
	                <li><a href="datatables-fixed-columns.html"><span class="lbl">Fixed Columns</span></a></li>
	                <li><a href="datatables-reorder-rows.html"><span class="lbl">Reorder Rows</span></a></li>
	                <li><a href="datatables-reorder-columns.html"><span class="lbl">Reorder Columns</span></a></li>
	                <li><a href="datatables-resize-columns.html"><span class="lbl">Resize Columns</span></a></li>
	                <li><a href="datatables-mobile.html"><span class="lbl">Mobile</span></a></li>
	                <li><a href="datatables-filter-control.html"><span class="lbl">Filters</span></a></li>-->
	            </ul>
	        </li>
	        <li class="green with-sub">
	            <span>
	                <i class="font-icon font-icon-widget"></i>
	                <span class="lbl">Components</span>
	            </span>
	            <ul>
	                <li><a href="widgets.html"><span class="lbl">Widgets</span></a></li>
	                <li><a href="elements.html"><span class="lbl">Bootstrap UI</span></a></li>
	                <li><a href="ui-datepicker.html"><span class="lbl">Date and Time Pickers</span></a></li>
	                <li><a href="multipicker.html"><span class="lbl">Multi Picker</span></a></li>
	                <li><a href="form-steps.html"><span class="lbl">Form Steps</span></a></li>
	                <li><a href="components-upload.html"><span class="lbl">Upload</span></a></li>
	                <li><a href="sweet-alerts.html"><span class="lbl">SweetAlert</span></a></li>
	                <li><a href="tabs.html"><span class="lbl">Tabs</span></a></li>
	                <li><a href="panels.html"><span class="lbl">Panels</span></a></li>
	                <li><a href="notifications.html"><span class="lbl">Notifications</span></a></li>
	                <li><a href="range-slider.html"><span class="lbl">Sliders</span></a></li>
	                <li><a href="editor-summernote.html"><span class="lbl">Editors</span></a></li>
	                <li><a href="nestable.html"><span class="lbl">Nestable</span></a></li>
	                <li><a href="blockui.html"><span class="lbl">BlockUI</span></a></li>
	                <li><a href="alerts.html"><span class="lbl">Alerts</span></a></li>
	                <li><a href="player.html"><span class="lbl">Players</span></a></li>
	            </ul>
	        </li>
	     <!--   <li class="gold">
	            <a href="#">
	                <i class="font-icon font-icon-speed"></i>
	                <span class="lbl">Performance</span>
	            </a>
	        </li>-->
	        <li class="pink-red">
	            <a href="activity.html">
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
	                <li><a href="profile.html"><span class="lbl">Version 1</span></a></li>
	                <li><a href="profile-2.html"><span class="lbl">Version 2</span></a></li>
	            </ul>
	        </li>
	        <li class="orange-red with-sub">
	            <span>
	                <i class="font-icon font-icon-help"></i>
	                <span class="lbl">Support</span>
	            </span>
	            <ul>
	                <li><a href="documentation.html"><span class="lbl">Docs (example)</span></a></li>
	                <li><a href="faq.html"><span class="lbl">FAQ Simple</span></a></li>
	                <li><a href="faq-search.html"><span class="lbl">FAQ Search</span></a></li>
	            </ul>
	        </li>
	        <li class="red">
	            <a href="contacts.html" class="label-right">
	                <i class="font-icon font-icon-contacts"></i>
	                <span class="lbl">Contacts</span>
	                <span class="label label-custom label-pill label-danger">35</span>
	            </a>
	        </li>
	        <li class="magenta opened">
	            <a href="scheduler.html">
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
	                <li><a href="email_templates.html"><span class="lbl">Email Templates</span></a></li>
	                <li><a href="blank.html"><span class="lbl">Blank</span></a></li>
	                <li><a href="empty.html"><span class="lbl">Empty List</span></a></li>
	                <li><a href="prices.html"><span class="lbl">Prices</span></a></li>
	                <li><a href="typography.html"><span class="lbl">Typography</span></a></li>
	                <li><a href="sign-in.html"><span class="lbl">Login</span></a></li>
	                <li><a href="sign-up.html"><span class="lbl">Register</span></a></li>
	                <li><a href="reset-password.html"><span class="lbl">Reset Password</span></a></li>
	                <li><a href="new-password.html"><span class="lbl">New Password</span></a></li>
	                <li><a href="error-404.html"><span class="lbl">Error 404</span></a></li>
	                <li><a href="error-500.html"><span class="lbl">Error 500</span></a></li>
	                <li><a href="cards.html"><span class="lbl">Cards</span></a></li>
	                <li><a href="avatars.html"><span class="lbl">Avatars</span></a></li>
	                <li><a href="ribbons.html"><span class="lbl">Ribbons</span></a></li>
	                <li><a href="icons-startui.html"><span class="lbl">Icons</span></a></li>
	                <li><a href="invoice.html"><span class="lbl">Invoice</span></a></li>
	                <li><a href="helpers.html"><span class="lbl">Helpers</span></a></li>
	            </ul>
	        </li>
	        <li class="blue-dirty">
	            <a href="list-tasks.html">
	                <i class="font-icon font-icon-notebook"></i>
	                <span class="lbl">Tasks</span>
	            </a>
	        </li>
	        <li class="aquamarine">
	            <a href="contacts-page.html">
	                <i class="font-icon font-icon-mail"></i>
	                <span class="lbl">Contact form</span>
	            </a>
	        </li>
	        <li class="blue">
	            <a href="files.html">
	                <i class="font-icon glyphicon glyphicon-paperclip"></i>
	                <span class="lbl">File Manager</span>
	            </a>
	        </li>
	        <li class="gold">
	            <a href="gallery.html">
	                <i class="font-icon font-icon-picture-2"></i>
	                <span class="lbl">Gallery</span>
	            </a>
	        </li>
	        <li class="red">
	            <a href="project.html">
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
	                <li><a href="charts-c3js.html"><span class="lbl">C3.js</span></a></li>
	                <li><a href="charts-peity.html"><span class="lbl">Peity</span></a></li>
	                <li><a href="charts-plottable.html"><span class="lbl">Plottable.js</span></a></li>
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

	<div class="page-content">
		<header class="page-content-header widgets-header">
			<div class="container-fluid">
				<div class="tbl tbl-outer">
					<div class="tbl-row">
						<div class="tbl-cell">
							<div class="tbl tbl-item">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="title">Pageviews</div>
										<div class="amount color-blue">20 750 000</div>
										<div class="amount-sm">20 750 000</div>
									</div>
									<div class="tbl-cell tbl-cell-progress">
										<div class="circle-progress-bar-typical size-56 pieProgress"
											 role="progressbar" data-goal="79"
											 data-barcolor="#00a8ff"
											 data-barsize="10"
											 aria-valuemin="0"
											 aria-valuemax="100">
											<span class="pie_progress__number">0%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tbl-cell">
							<div class="tbl tbl-item">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="title">Pages/Visit</div>
										<div class="amount">2,4</div>
										<div class="amount-sm">2,3</div>
									</div>
									<div class="tbl-cell tbl-cell-progress">
										<div class="circle-progress-bar-typical size-56 pieProgress"
											 role="progressbar" data-goal="75"
											 data-barcolor="#929faa"
											 data-barsize="10"
											 aria-valuemin="0"
											 aria-valuemax="100">
											<span class="pie_progress__number">0%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tbl-cell">
							<div class="tbl tbl-item">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="title">Visit Duration</div>
										<div class="amount">2m23s</div>
										<div class="amount-sm">2m10s</div>
									</div>
									<div class="tbl-cell tbl-cell-progress">
										<div class="circle-progress-bar-typical size-56 pieProgress"
											 role="progressbar" data-goal="75"
											 data-barcolor="#929faa"
											 data-barsize="10"
											 aria-valuemin="0"
											 aria-valuemax="100">
											<span class="pie_progress__number">0%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tbl-cell">
							<div class="tbl tbl-item">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="title">Revenue</div>
										<div class="amount">N/A</div>
										<div class="amount-sm">N/A</div>
									</div>
									<div class="tbl-cell tbl-cell-progress">
										<div class="circle-progress-bar-typical size-56 pieProgress"
											 role="progressbar" data-goal="75"
											 data-barcolor="#929faa"
											 data-barsize="10"
											 aria-valuemin="0"
											 aria-valuemax="100">
											<span class="pie_progress__number">0%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!--.page-content-header-->

		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-3 col-md-6">
					<section class="widget">
						<header class="widget-header-dark">Tasks Completed</header>
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
								<div class="circle-progress-bar-typical pieProgress"
									 role="progressbar" data-goal="79"
									 data-barcolor="#00a8ff"
									 data-barsize="10"
									 aria-valuemin="0"
									 aria-valuemax="100">
									<span class="pie_progress__number">0%</span>
								</div>
							</div>
							<div class="tab-pane" id="w-1-tab-2" role="tabpanel">
								<center>Tasks</center>
							</div>
							<div class="tab-pane" id="w-1-tab-3" role="tabpanel">
								<center>Event</center>
							</div>
						</div>
						<div class="widget-tabs-nav bordered">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#w-1-tab-1" role="tab">
										<i class="font-icon font-icon-chart-3"></i>
										Chart
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#w-1-tab-2" role="tab">
										<i class="font-icon font-icon-notebook-lines"></i>
										Tasks
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#w-1-tab-3" role="tab">
										<i class="font-icon font-icon-pin"></i>
										Event
									</a>
								</li>
							</ul>
						</div>
					</section><!--.widget-->

					<section class="widget top-tabs">
						<header class="widget-header-dark">Tasks Completed</header>
						<div class="widget-tabs-nav bordered">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#wt-1-tab-1" role="tab">
										<i class="font-icon font-icon-chart-3"></i>
										Chart
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#wt-1-tab-2" role="tab">
										<i class="font-icon font-icon-notebook-lines"></i>
										Tasks
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#wt-1-tab-3" role="tab">
										<i class="font-icon font-icon-pin"></i>
										Event
									</a>
								</li>
							</ul>
						</div>
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active" id="wt-1-tab-1" role="tabpanel">
								<div class="circle-progress-bar-typical pieProgress"
									 role="progressbar" data-goal="79"
									 data-barcolor="#00a8ff"
									 data-barsize="10"
									 aria-valuemin="0"
									 aria-valuemax="100">
									<span class="pie_progress__number">0%</span>
								</div>
							</div>
							<div class="tab-pane" id="wt-1-tab-2" role="tabpanel">
								<center>Tasks</center>
							</div>
							<div class="tab-pane" id="wt-1-tab-3" role="tabpanel">
								<center>Event</center>
							</div>
						</div>
					</section>

					<section class="widget">
						<header class="widget-header-dark">Tasks Completed</header>
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active" id="w-2-tab-1" role="tabpanel">
								<div class="circle-progress-bar-typical pieProgress"
									 role="progressbar" data-goal="79"
									 data-barcolor="#00a8ff"
									 data-barsize="10"
									 aria-valuemin="0"
									 aria-valuemax="100">
									<span class="pie_progress__number">0%</span>
								</div>
							</div>
							<div class="tab-pane" id="w-2-tab-2" role="tabpanel">
								<center>Tasks</center>
							</div>
							<div class="tab-pane" id="w-2-tab-3" role="tabpanel">
								<center>Event</center>
							</div>
						</div>
						<div class="widget-tabs-nav colored">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link green active" data-toggle="tab" href="#w-2-tab-1" role="tab">
										<i class="font-icon font-icon-chart-3"></i>
										Chart
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link blue" data-toggle="tab" href="#w-2-tab-2" role="tab">
										<i class="font-icon font-icon-notebook-lines"></i>
										Tasks
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link orange" data-toggle="tab" href="#w-2-tab-3" role="tab">
										<i class="font-icon font-icon-pin"></i>
										Event
									</a>
								</li>
							</ul>
						</div>
					</section><!--.widget-->
				</div>

				<div class="col-xxl-3 col-md-6">
					<section class="widget widget-tabs-compact">
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active" id="w-3-tab-1" role="tabpanel">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo tbl-cell-photo-64">
											<a href="#">
												<img src="img/avatar-1-128.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name font-16"><a href="#">Gerald Davidson</a></p>
											<p class="user-card-row-mail font-14"><a href="#">Company Founder</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="w-3-tab-2" role="tabpanel">
								<center>Content 2</center>
							</div>
							<div class="tab-pane" id="w-3-tab-3" role="tabpanel">
								<center>Content 3</center>
							</div>
						</div>
						<div class="widget-tabs-nav bordered">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#w-3-tab-1" role="tab">
										<i class="font-icon font-icon-heart"></i>
										2 719
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#w-3-tab-2" role="tab">
										<i class="font-icon font-icon-users-two"></i>
										5 386
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#w-3-tab-3" role="tab">
										<i class="font-icon font-icon-eye"></i>
										24 953
									</a>
								</li>
							</ul>
						</div>
					</section><!--.widget-tabs-compact-->

					<section class="widget widget-tabs-compact">
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active" id="w-4-tab-1" role="tabpanel">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo tbl-cell-photo-64">
											<a href="#">
												<img src="img/avatar-1-128.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name font-16"><a href="#">Gerald Davidson</a></p>
											<p class="user-card-row-mail font-14"><a href="#">Company Founder</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="w-4-tab-2" role="tabpanel">
								<center>Content 2</center>
							</div>
							<div class="tab-pane" id="w-4-tab-3" role="tabpanel">
								<center>Content 3</center>
							</div>
						</div>
						<div class="widget-tabs-nav colored">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link red active" data-toggle="tab" href="#w-4-tab-1" role="tab">
										<i class="font-icon font-icon-heart"></i>
										2 719
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link orange" data-toggle="tab" href="#w-4-tab-2" role="tab">
										<i class="font-icon font-icon-users-two"></i>
										5 386
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link blue" data-toggle="tab" href="#w-4-tab-3" role="tab">
										<i class="font-icon font-icon-eye"></i>
										24 953
									</a>
								</li>
							</ul>
						</div>
					</section><!--.widget-tabs-compact-->

					<section class="widget widget-time">
						<header class="widget-header-dark with-btn">
							Time is Money!
							<button type="button" class="widget-header-btn">
								<i class="font-icon font-icon-plus"></i>
							</button>
						</header>
						<div class="widget-time-content">
							<div class="count-item">
								<div class="count-item-number">05</div>
								<div class="count-item-caption">hour</div>
							</div>
							<div class="count-item divider">:</div>
							<div class="count-item">
								<div class="count-item-number">24</div>
								<div class="count-item-caption">min</div>
							</div>
							<div class="count-item divider">:</div>
							<div class="count-item">
								<div class="count-item-number">19</div>
								<div class="count-item-caption">sec</div>
							</div>
						</div>
					</section><!--.widget-time-->

					<section class="widget widget-time aquamarine">
						<header class="widget-header-dark with-btn">
							Time is Money!
							<button type="button" class="widget-header-btn">
								<i class="font-icon font-icon-plus"></i>
							</button>
						</header>
						<div class="widget-time-content">
							<div class="count-item">
								<div class="count-item-number">05</div>
								<div class="count-item-caption">hour</div>
							</div>
							<div class="count-item divider">:</div>
							<div class="count-item">
								<div class="count-item-number">24</div>
								<div class="count-item-caption">min</div>
							</div>
							<div class="count-item divider">:</div>
							<div class="count-item">
								<div class="count-item-number">19</div>
								<div class="count-item-caption">sec</div>
							</div>
						</div>
					</section><!--.widget-time-->

					<section class="widget top-tabs">
						<header class="widget-header-dark">Tasks Completed</header>
						<div class="widget-tabs-nav colored">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link green active" data-toggle="tab" href="#wt-2-tab-1" role="tab">
										<i class="font-icon font-icon-chart-3"></i>
										Chart
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link blue" data-toggle="tab" href="#wt-2-tab-2" role="tab">
										<i class="font-icon font-icon-notebook-lines"></i>
										Tasks
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link orange" data-toggle="tab" href="#wt-2-tab-3" role="tab">
										<i class="font-icon font-icon-pin"></i>
										Event
									</a>
								</li>
							</ul>
						</div>
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active" id="wt-2-tab-1" role="tabpanel">
								<div class="circle-progress-bar-typical pieProgress"
									 role="progressbar" data-goal="79"
									 data-barcolor="#00a8ff"
									 data-barsize="10"
									 aria-valuemin="0"
									 aria-valuemax="100">
									<span class="pie_progress__number">0%</span>
								</div>
							</div>
							<div class="tab-pane" id="wt-2-tab-2" role="tabpanel">
								<center>Tasks</center>
							</div>
							<div class="tab-pane" id="wt-2-tab-3" role="tabpanel">
								<center>Event</center>
							</div>
						</div>
					</section>
				</div>

				<div class="clearfix hidden-xxl-up"></div>

				<div class="col-xxl-3 col-md-6">
					<div class="row">
						<div class="col-xs-6">
							<section class="widget widget-simple-sm-fill">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-facebook"></i>
								</div>
								<div class="widget-simple-sm-fill-caption">98K Likes</div>
							</section>
						</div><!--.widget-simple-sm-fill-->
						<div class="col-xs-6">
							<section class="widget widget-simple-sm-fill red">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-server"></i>
								</div>
								<div class="widget-simple-sm-fill-caption">3 Servers</div>
							</section>
						</div><!--.widget-simple-sm-fill-->
					</div><!--.row-->

					<div class="row">
						<div class="col-xs-6">
							<section class="widget widget-simple-sm-fill green">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-facebook"></i>
								</div>
								<div class="widget-simple-sm-fill-caption">98K Likes</div>
							</section><!--.widget-simple-sm-fill-->
						</div>
						<div class="col-xs-6">
							<section class="widget widget-simple-sm-fill orange">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-server"></i>
								</div>
								<div class="widget-simple-sm-fill-caption">3 Servers</div>
							</section><!--.widget-simple-sm-fill-->
						</div>
					</div><!--.row-->

					<div class="row">
						<div class="col-xs-6">
							<section class="widget widget-simple-sm-fill purple">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-facebook"></i>
								</div>
								<div class="widget-simple-sm-fill-caption">98K Likes</div>
							</section><!--.widget-simple-sm-fill-->
						</div>
						<div class="col-xs-6">
							<section class="widget widget-simple-sm-fill grey">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-server"></i>
								</div>
								<div class="widget-simple-sm-fill-caption">3 Servers</div>
							</section><!--.widget-simple-sm-fill-->
						</div>
					</div><!--.row-->

					<div class="row">
						<div class="col-xs-6">
							<section class="widget widget-simple-sm">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-cloud-download color-green"></i>
								</div>
								<div class="widget-simple-sm-bottom">98K Likes</div>
							</section><!--.widget-simple-sm-->
						</div>
						<div class="col-xs-6">
							<section class="widget widget-simple-sm">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-bookmark color-purple"></i>
								</div>
								<div class="widget-simple-sm-bottom">
									<a href="#">760 Bookmarks</a>
								</div>
							</section><!--.widget-simple-sm-->
						</div>
					</div><!--.row-->

					<div class="row">
						<div class="col-xs-6">
							<section class="widget widget-simple-sm">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-twitter color-blue"></i>
								</div>
								<div class="widget-simple-sm-bottom">35K Followers</div>
							</section><!--.widget-simple-sm-->
						</div>
						<div class="col-xs-6">
							<section class="widget widget-simple-sm">
								<div class="widget-simple-sm-icon">
									<i class="font-icon font-icon-wp color-black-blue"></i>
								</div>
								<div class="widget-simple-sm-bottom">
									<a href="#">15 Themes</a>
								</div>
							</section><!--.widget-simple-sm-->
						</div>
					</div><!--.row-->

					<div class="row">
						<div class="col-xs-12">
							<section class="widget top-tabs widget-tabs-compact">
								<div class="widget-tabs-nav bordered">
									<ul class="tbl-row" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#w-3-tab-1" role="tab">
												<i class="font-icon font-icon-heart"></i>
												2 719
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#w-3-tab-2" role="tab">
												<i class="font-icon font-icon-users-two"></i>
												5 386
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#w-3-tab-3" role="tab">
												<i class="font-icon font-icon-eye"></i>
												24 953
											</a>
										</li>
									</ul>
								</div>
								<div class="tab-content widget-tabs-content">
									<div class="tab-pane active" id="w-3-tab-1" role="tabpanel">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo tbl-cell-photo-64">
													<a href="#">
														<img src="img/avatar-1-128.png" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<p class="user-card-row-name font-16"><a href="#">Gerald Davidson</a></p>
													<p class="user-card-row-mail font-14"><a href="#">Company Founder</a></p>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="w-3-tab-2" role="tabpanel">
										<center>Content 2</center>
									</div>
									<div class="tab-pane" id="w-3-tab-3" role="tabpanel">
										<center>Content 3</center>
									</div>
								</div>
							</section>

							<section class="widget top-tabs widget-tabs-compact">
								<div class="widget-tabs-nav colored">
									<ul class="tbl-row" role="tablist">
										<li class="nav-item">
											<a class="nav-link red active" data-toggle="tab" href="#wt-4-tab-1" role="tab">
												<i class="font-icon font-icon-heart"></i>
												2 719
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link orange" data-toggle="tab" href="#wt-4-tab-2" role="tab">
												<i class="font-icon font-icon-users-two"></i>
												5 386
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link blue" data-toggle="tab" href="#wt-4-tab-3" role="tab">
												<i class="font-icon font-icon-eye"></i>
												24 953
											</a>
										</li>
									</ul>
								</div>
								<div class="tab-content widget-tabs-content">
									<div class="tab-pane active" id="wt-4-tab-1" role="tabpanel">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo tbl-cell-photo-64">
													<a href="#">
														<img src="img/avatar-1-128.png" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<p class="user-card-row-name font-16"><a href="#">Gerald Davidson</a></p>
													<p class="user-card-row-mail font-14"><a href="#">Company Founder</a></p>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="wt-4-tab-2" role="tabpanel">
										<center>Content 2</center>
									</div>
									<div class="tab-pane" id="wt-4-tab-3" role="tabpanel">
										<center>Content 3</center>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>

				<div class="col-xxl-3 col-md-6">
					<section class="widget widget-weather">
						<div class="widget-weather-big">
							<div class="icon">
								<i class="font-icon font-icon-weather-clouds"></i>
							</div>
							<div class="info">
								<div class="degrees">29°</div>
								<div class="weather">Cloudy</div>
							</div>
						</div>
						<div class="widget-weather-content widget-weather-slider">
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">Now</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud"></i>
									<div class="degrees">29°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">10:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-circles"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">11:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-drops-lightning"></i>
									<div class="degrees">27°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">12:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-moon"></i>
									<div class="degrees">26°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">13:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-one-circle"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">14:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-sun"></i>
									<div class="degrees">15°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">15:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-one-drop"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">16:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-rain-snow"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">17:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-two-circles"></i>
									<div class="degrees">12°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">18:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-two-drops"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">19:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-cloud-two-snow"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">20:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-clound-lightning"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">21:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-funnel"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
							<div class="widget-weather-item">
								<div class="widget-weather-item-time">22:00</div>
								<div class="widget-weather-item-info">
									<i class="font-icon font-icon-weather-thermometer"></i>
									<div class="degrees">28°</div>
								</div>
							</div>
						</div>
					</section><!--.widget-weather-->

					<section class="box-typical box-typical-padding widget" style="color: #00a8ff; font-size: 1.75rem; text-align: center;">
						<i class="font-icon font-icon-weather-clouds"></i>
						<i class="font-icon font-icon-weather-cloud"></i>
						<i class="font-icon font-icon-weather-cloud-circles"></i>
						<i class="font-icon font-icon-weather-cloud-drops-lightning"></i>
						<i class="font-icon font-icon-weather-cloud-moon"></i>
						<i class="font-icon font-icon-weather-cloud-one-circle"></i>
						<i class="font-icon font-icon-weather-cloud-one-drop"></i>
						<i class="font-icon font-icon-weather-cloud-rain-snow"></i>
						<i class="font-icon font-icon-weather-cloud-sun"></i>
						<i class="font-icon font-icon-weather-cloud-two-circles"></i>
						<i class="font-icon font-icon-weather-cloud-two-drops"></i>
						<i class="font-icon font-icon-weather-cloud-two-snow"></i>
						<i class="font-icon font-icon-weather-clound-lightning"></i>
						<i class="font-icon font-icon-weather-sun"></i>
						<i class="font-icon font-icon-weather-snowflake"></i>
						<i class="font-icon font-icon-weather-snow"></i>
						<i class="font-icon font-icon-weather-rain"></i>
						<i class="font-icon font-icon-weather-one-snow"></i>
						<i class="font-icon font-icon-weather-moon-small-cloud"></i>
						<i class="font-icon font-icon-weather-moon-cloud-rain"></i>
						<i class="font-icon font-icon-weather-moon-cloud"></i>
						<i class="font-icon font-icon-weather-moon"></i>
						<i class="font-icon font-icon-weather-lightning"></i>
						<i class="font-icon font-icon-weather-house-water"></i>
						<i class="font-icon font-icon-weather-funnel"></i>
						<i class="font-icon font-icon-weather-drop"></i>
						<i class="font-icon font-icon-weather-sun-cloud"></i>
						<i class="font-icon font-icon-weather-sun-clouds"></i>
						<i class="font-icon font-icon-weather-sun-rain"></i>
						<i class="font-icon font-icon-weather-thermometer"></i>
						<i class="font-icon font-icon-weather-umbrella"></i>
						<i class="font-icon font-icon-weather-waves"></i>
					</section>
				</div>
			</div><!--.row-->

			<div class="row">
				<div class="col-xxl-5 col-xl-6 col-md-9">
					<section class="widget widget-chart-extra">
						<div class="widget-chart-extra-blue">
							<div class="widget-chart-extra-blue-title">Revenue</div>
							<div id="chart_line" class="chart"></div>
						</div>

						<div class="widget-chart-extra-inner">
							<div class="widget-chart-extra-section">
								<div class="widget-chart-extra-title">Inquiries</div>
								<div class="widget-chart-extra-bars">
									<div class="widget-chart-extra-bars-chart">
										<div class="widget-chart-extra-bars-chart-in">
											<div class="cstm-chart-bars">
												<div class="cstm-chart-bars-in">
													<div class="item">
														<div class="bar"><div style="height: 50%"></div></div>
														<div class="caption">A</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 60%"></div></div>
														<div class="caption">B</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 75%"></div></div>
														<div class="caption">C</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 42%"></div></div>
														<div class="caption">D</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 89%"></div></div>
														<div class="caption">E</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 95%"></div></div>
														<div class="caption">F</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 32%"></div></div>
														<div class="caption">G</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 47%"></div></div>
														<div class="caption">H</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 66%"></div></div>
														<div class="caption">I</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 81%"></div></div>
														<div class="caption">J</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 10%"></div></div>
														<div class="caption">K</div>
													</div>
													<div class="item">
														<div class="bar"><div style="height: 50%"></div></div>
														<div class="caption">L</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="widget-chart-extra-bars-txt">
										<div class="number">+142</div>
										<div class="caption">From last year</div>
									</div>
								</div>
							</div>
							<div class="widget-chart-extra-section">
								<div class="tbl widget-chart-extra-stat">
									<div class="tbl-row">
										<div class="tbl-cell">
											<div class="title">Gross Revenue</div>
											<div class="number">9,362.74</div>
										</div>
										<div class="tbl-cell">
											<div class="title">Net Revenue</div>
											<div class="number">6,734.89</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-chart-extra-->

					<section class="widget widget-chart-combo">
						<div class="widget-chart-combo-header">
							<div class="widget-chart-combo-header-left">
								<select class="select2 select2-white">
									<option>All Segments</option>
									<option>All Segments</option>
									<option>All Segments</option>
									<option>All Segments</option>
								</select>
							</div>
							<div class="widget-chart-combo-header-right">
								<input type="text" class="form-control" value="1 Jan 2015 – 1 Jan 2016">
								<button type="button" class="btn btn-grey">Reset</button>
							</div>
						</div>
						<div class="widget-chart-combo-content">
							<div class="widget-chart-combo-content-in">
								<div class="widget-chart-combo-content-title">Net New Conversions Over Time</div>
								<div id="chart_div" class="chart"></div>
								<ul class="chart-legend-list">
									<li>
										<div class="dot purple"></div>
										Culminate
									</li>
									<li>
										<div class="dot blue"></div>
										Mountly
									</li>
								</ul>
							</div>
						</div>
						<div class="widget-chart-combo-side">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="number">2739</div>
										Records Deployed
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="number">1049</div>
										Won Records
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="number">4,8%</div>
										Conversion Rate
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="number">12,1</div>
										Average Activity
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-chart-combo-->

					<section class="widget widget-activity">
						<header class="widget-header">
							Activity
							<span class="label label-pill label-primary">2</span>
						</header>
						<div>
							<div class="widget-activity-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p>
												<a href="#" class="semibold">Nina Jones</a>
												added a new product
												<a href="#">Free UI Kit</a>
											</p>
											<p>Just Now</p>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-activity-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/avatar-1-64.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p>
												<a href="#" class="semibold">James Smith</a>
												commpleted task
												<a href="#">Free PSD Template</a>
											</p>
											<p>40 minutes ago</p>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-activity-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/avatar-2-64.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p>
												<a href="#" class="semibold">Alex Clooney</a>
												commpleted task
												<a href="#">Sumu Website</a>
											</p>
											<p>1 hours ago</p>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-activity-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/avatar-3-64.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p>
												<a href="#" class="semibold">Nina Jones</a>
												added a new product
												<a href="#">Free UI Kit</a>
											</p>
											<p>Just Now</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-tasks-->

					<section class="widget widget-tasks">
						<header class="widget-header">
							Tasks
							<span class="label label-pill label-primary">8</span>
							<span class="label label-pill label-danger">29</span>
						</header>
						<div>
							<div class="widget-tasks-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">New websites for Symu.com</a></p>
											<p class="color-red">5 day delays</p>
										</div>
									</div>
								</div>
								<div class="btn-group widget-menu">
									<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="font-icon glyphicon glyphicon-option-vertical"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
							<div class="widget-tasks-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/avatar-3-64.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">New websites for Symu.com</a></p>
											<p class="color-red">5 day delays</p>
										</div>
									</div>
								</div>
								<div class="btn-group widget-menu">
									<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="font-icon glyphicon glyphicon-option-vertical"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
							<div class="widget-tasks-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/avatar-2-64.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">New websites for Symu.com</a></p>
											<p class="color-blue-grey-lighter">3 day left</p>
										</div>
									</div>
								</div>
								<div class="btn-group widget-menu">
									<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="font-icon glyphicon glyphicon-option-vertical"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
							<div class="widget-tasks-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/avatar-1-64.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">New websites for Symu.com</a></p>
											<p class="color-blue-grey-lighter">5 day left</p>
										</div>
									</div>
								</div>
								<div class="btn-group widget-menu">
									<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="font-icon glyphicon glyphicon-option-vertical"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-tasks-->
				</div>

				<div class="col-xxl-5 col-xl-6 col-md-9">
					<section class="widget widget-pie-chart">
						<div class="no-padding">
							<div class="tbl tbl-grid text-center">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-30">
										<div class="display-inline">
											<div class="chart-legend">
												<div class="circle red"></div>
												<div class="percent">8%<sup>14</sup></div>
												<div class="caption">TBK</div>
											</div>
											<div class="chart-legend">
												<div class="circle orange"></div>
												<div class="percent">41%<sup>134</sup></div>
												<div class="caption">Fluor Group</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-30">
										<div class="display-inline">
											<div class="chart-legend">
												<div class="circle purple"></div>
												<div class="percent">12%<sup>22</sup></div>
												<div class="caption">Fluor Corp</div>
											</div>
											<div class="chart-legend">
												<div class="circle blue"></div>
												<div class="percent">39%<sup>115</sup></div>
												<div class="caption">Bechtel</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-40">
										<div class="ggl-pie-chart-container">
											<div id="donutchart" class="ggl-pie-chart"></div>
											<div class="ggl-pie-chart-title">
												<div class="caption">Total</div>
												<div class="number">285</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-pie-chart-->

					<section class="widget widget-pie-chart">
						<div class="no-padding">
							<div class="tbl tbl-grid">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="ggl-pie-chart-container">
											<div id="donutchart2" class="ggl-pie-chart"></div>
											<div class="ggl-pie-chart-title">
												<div class="caption">Files</div>
												<div class="number">218</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-340px">
										<div class="col">
											<div class="chart-box-info">
												<div class="number">218</div>
												<div class="caption">Files</div>
											</div>
										</div>
										<div class="col">
											<div class="chart-box-info">
												<div class="number">715</div>
												<div class="caption">Gigabytes</div>
											</div>
										</div>
										<div class="chart-legend-tbl">
											<div class="title">Legend:</div>
											<div class="tbl">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-legend">
														<div class="dot orange"></div>
														Culminate <span class="color-blue-grey-lighter">(74 files)</span>
													</div>
													<div class="tbl-cell tbl-cell-value">283GB</div>
												</div>
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-legend">
														<div class="dot green"></div>
														Mountly <span class="color-blue-grey-lighter">(74 files)</span>
													</div>
													<div class="tbl-cell tbl-cell-value">23GB</div>
												</div>
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-legend">
														<div class="dot red"></div>
														Other <span class="color-blue-grey-lighter">(74 files)</span>
													</div>
													<div class="tbl-cell tbl-cell-value">173GB</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-pie-chart-->

					<section class="widget widget-pie-chart">
						<div class="widget-pie-chart-header">
							<div class="col-60">
								<div class="widget-pie-chart-header-title">Your Sales</div>
							</div>
							<div class="col-40">
								<div class="period">
									<div class="lbl">Period</div>
									<select class="select2 select2-white">
										<option>Last year</option>
										<option>Last year</option>
										<option>Last year</option>
									</select>
								</div>
							</div>
						</div>
						<div class="tbl tbl-grid">
							<div class="tbl-row">
								<div class="tbl-cell tbl-cell-60">
									<div class="ggl-pie-chart-container size-180">
										<div id="donutchart3" class="ggl-pie-chart"></div>
										<div class="ggl-pie-chart-title">
											<div class="caption">Total</div>
											<div class="number">1560</div>
										</div>
									</div>
								</div>
								<div class="tbl-cell tbl-cell-40">
									<ul class="chart-legend-list font-16">
										<li>
											<div class="dot blue"></div>
											Websites
										</li>
										<li>
											<div class="dot purple"></div>
											Logo
										</li>
										<li>
											<div class="dot red"></div>
											Social media
										</li>
										<li>
											<div class="dot orange"></div>
											Adwords
										</li>
										<li>
											<div class="dot green"></div>
											E-Commerce
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section><!--.widget-pie-chart-->

					<section class="widget widget-user">
						<div class="widget-user-bg" style="background-image: url('img/widget-user-bg.jpg')"></div>
						<div class="widget-user-photo">
							<img src="img/avatar-2-256.png" alt="">
						</div>
						<div class="widget-user-name">
							Carol Green
							<i class="font-icon font-icon-award"></i>
						</div>
						<div>Company Founder</div>
						<div class="widget-user-stat">
							<div class="item">
								<div class="number">75</div>
								<div class="caption">Materials</div>
							</div>
							<div class="item">
								<div class="number">42</div>
								<div class="caption">Discussions</div>
							</div>
							<div class="item">
								<div class="number">1.2K</div>
								<div class="caption">Followers</div>
							</div>
						</div>
					</section><!--.widget-user-->

					<div class="row">
						<div class="col-xl-6">
							<section class="widget widget-simple-sm">
								<div class="widget-simple-sm-statistic">
									<div class="number">1 426</div>
									<div class="caption color-blue">New orders</div>
								</div>
								<div class="widget-simple-sm-bottom statistic"><span class="arrow color-green">↑</span> 3% increase <strong>1w ago</strong></div>
							</section><!--.widget-simple-sm-->
						</div>
						<div class="col-xl-6">
							<section class="widget widget-simple-sm">
								<div class="widget-simple-sm-statistic">
									<div class="number">63 541</div>
									<div class="caption color-purple">Total sales gross</div>
								</div>
								<div class="widget-simple-sm-bottom statistic"><span class="arrow color-green">↑</span> 3% increase <strong>1w ago</strong></div>
							</section><!--.widget-simple-sm-->
						</div>
					</div><!--.row-->

					<div class="row">
						<div class="col-xl-6">
							<section class="widget widget-simple-sm">
								<div class="widget-simple-sm-statistic">
									<div class="number">852</div>
									<div class="caption color-red">New orders</div>
								</div>
								<div class="widget-simple-sm-bottom statistic"><span class="arrow color-green">↑</span> 3% increase <strong>1w ago</strong></div>
							</section><!--.widget-simple-sm-->
						</div>
						<div class="col-xl-6">
							<section class="widget widget-simple-sm">
								<div class="widget-simple-sm-statistic">
									<div class="number">87</div>
									<div class="caption color-green">Total sales gross</div>
								</div>
								<div class="widget-simple-sm-bottom statistic"><span class="arrow color-red">↓</span> 6% decrease <strong>1w ago</strong></div>
							</section><!--.widget-simple-sm-->
						</div>
					</div><!--.row-->

					<section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
						<article class="panel">
							<div class="panel-heading" role="tab" id="headingOne">
								<a data-toggle="collapse"
								   data-parent="#accordion"
								   href="#collapseOne"
								   aria-expanded="true"
								   aria-controls="collapseOne">
									Collapsible Group Item #1
									<i class="font-icon font-icon-arrow-down"></i>
								</a>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-collapse-in">
									<div class="user-card-row">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-photo">
												<a href="#">
													<img src="img/photo-64-2.jpg" alt="">
												</a>
											</div>
											<div class="tbl-cell">
												<p class="user-card-row-name"><a href="#">Maurico Estrella</a></p>
												<p class="user-card-row-location">Associate Creative Director @EF</p>
											</div>
										</div>
									</div>
									<header class="title">How a password changed my life</header>
									<p>«How could she do something like this to me?» said a voice in my head. All the time. Every day... <a href="#">More</a></p>
								</div>
							</div>
						</article>
						<article class="panel">
							<div class="panel-heading" role="tab" id="headingTwo">
								<a class="collapsed"
								   data-toggle="collapse"
								   data-parent="#accordion"
								   href="#collapseTwo"
								   aria-expanded="false"
								   aria-controls="collapseTwo">
									Collapsible Group Item #2
									<i class="font-icon font-icon-arrow-down"></i>
								</a>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-collapse-in">
									<div class="user-card-row">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-photo">
												<a href="#">
													<img src="img/avatar-3-64.png" alt="">
												</a>
											</div>
											<div class="tbl-cell">
												<p class="user-card-row-name"><a href="#">Michelle Lewis</a></p>
												<p class="user-card-row-location">Company Founder</p>
											</div>
										</div>
									</div>
									<header class="title">How a password changed my life</header>
									<p>«How could she do something like this to me?» said a voice in my head. All the time. Every day... <a href="#">More</a></p>
								</div>
							</div>
						</article>
						<article class="panel">
							<div class="panel-heading" role="tab" id="headingThree">
								<a class="collapsed"
								   data-toggle="collapse"
								   data-parent="#accordion"
								   href="#collapseThree"
								   aria-expanded="false"
								   aria-controls="collapseThree">
									Collapsible Group Item #3
									<i class="font-icon font-icon-arrow-down"></i>
								</a>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-collapse-in">
									<div class="user-card-row">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-photo">
												<a href="#">
													<img src="img/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl-cell">
												<p class="user-card-row-name"><a href="#">Maurico Estrella</a></p>
												<p class="user-card-row-location">Associate Creative Director @EF</p>
											</div>
										</div>
									</div>
									<header class="title">How a password changed my life</header>
									<p>«How could she do something like this to me?» said a voice in my head. All the time. Every day... <a href="#">More</a></p>
								</div>
							</div>
						</article>
					</section><!--.widget-accordion-->
				</div>
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/asPieProgress/jquery-asPieProgress.min.js"></script>
	<script src="js/lib/select2/select2.full.min.js"></script>
	<script type="text/javascript" src="js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script src="js/lib/slick-carousel/slick.min.js"></script>
	<script>
		$(function() {
			$(".circle-progress-bar").asPieProgress({
				namespace: 'asPieProgress',
				speed: 500
			});

			$(".circle-progress-bar").asPieProgress("start");


			$(".circle-progress-bar-typical").asPieProgress({
				namespace: 'asPieProgress',
				speed: 25
			});

			$(".circle-progress-bar-typical").asPieProgress("start");

			$('.widget-chart-combo-content-in, .widget-chart-combo-side').matchHeight();

			/* ==========================================================================
			 Widget weather slider
			 ========================================================================== */

			$('.widget-weather-slider').slick({
				arrows: false,
				dots: true,
				infinite: false,
				slidesToShow: 4,
				slidesToScroll: 4
			});
		});
	</script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.setOnLoadCallback(drawChart3);
		function drawChart3() {
			var data = google.visualization.arrayToDataTable([
				['Titles', 'Values'],
				['Websites', 17],
				['Logo', 8],
				['Social media', 12],
				['Adwords', 41],
				['E-Commerce', 39]
			]);

			var options = {
				legend: 'none',
				pieSliceText: 'none',
				chartArea: {
					width: '90%',
					height: '90%',
				},
				colors:['#46c35f','#fa424a','#e84f9a','#fdad2a','#00a8ff','#ac6bec'],
				slices: {
					0: { color: '#46c35f' },
					1: { color: '#fa424a' },
					2: { color: '#ac6bec' },
					3: { color: '#fdad2a' },
					4: { color: '#00a8ff' }
				},
				pieHole: 0.8,
				tooltip: { trigger: 'none' }
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
			chart.draw(data, options);
		}
	</script>
	<script type="text/javascript">
		google.charts.setOnLoadCallback(drawChart2);
		function drawChart2() {
			var data = google.visualization.arrayToDataTable([
				['Title', 'Values'],
				['TBK', 8],
				['Fluor Corp', 12],
				['Fluor Group', 41],
				['Bechtel', 39]
			]);

			var options = {
				legend: 'none',
				pieSliceText: 'none',
				chartArea: {
					width: '90%',
					height: '90%',
				},
				colors:['#46c35f','#fa424a','#e84f9a','#fdad2a','#00a8ff','#ac6bec'],
				slices: {
					0: { color: '#46c35f' },
					1: { color: '#fa424a' },
					2: { color: '#ac6bec' },
					3: { color: '#fdad2a' }
				},
				pieHole: 0.8,
				tooltip: { trigger: 'none' }
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
			chart.draw(data, options);
		}
	</script>
	<script type="text/javascript">
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Title', 'Values'],
				['TBK', 8],
				['Fluor Corp', 12],
				['Fluor Group', 41],
				['Bechtel', 39]
			]);

			var options = {
				legend: 'none',
				pieSliceText: 'none',
				chartArea: {
					width: '90%',
					height: '90%',
				},
				colors:['#fa424a','#ac6bec','#fdad2a','#00a8ff','#46c35f','#e84f9a'],
				slices: {
					0: { color: '#fa424a' },
					1: { color: '#ac6bec' },
					2: { color: '#fdad2a' },
					3: { color: '#00a8ff' }
				},
				pieHole: 0.8,
				tooltip: { trigger: 'none' }
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
		}
	</script>
	<script type="text/javascript">
		google.charts.setOnLoadCallback(drawVisualization);

		function drawVisualization() {
			var data = google.visualization.arrayToDataTable([
				['value1', 'value2', 'value3'],
				['X', 5, 50],
				['F', 25, 55],
				['A', 12, 50],
				['B', 3, 85],
				['C', 35, 90],
				['D', 15, 98],
				['E', 12, 70],
				['O', 5, 80],
				['M', 18, 110],
				['N', 40, 128],
				['K', 50, 120],
				['L', 22, 130]
			]);

			var options = {
				legend: 'none',
				tooltip: { trigger: 'none' },
				enableInteractivity: false,
				vAxis: {
					textStyle: {
						color: '#919fa9',
						fontName: 'Proxima Nova',
						fontSize: 11
					},
					baselineColor: '#eff1f2',
					ticks: [0,25,50,75,100,125,150],
					gridlines: {
						color: '#eff1f2',
						count: 7
					}
				},
				hAxis: {
					textStyle: {
						color: '#919fa9',
						fontName: 'Proxima Nova',
						fontSize: 11
					}
				},
				chartArea:{
					left: 30,
					top: 10,
					width:'100%',
					height: 175
				},
				lineWidth: 2,
				seriesType: 'bars',
				series: {
					0: { color: '#ac6bec' },
					1: {
						type: 'line',
						color: '#00a8ff',
						pointSize: 4,
						pointShapeType: 'circle'
					}
				}
			};

			var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		}
		$(window).resize(function(){
			drawVisualization();
		});
	</script>
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawBasic);

		function drawBasic() {

			var data = google.visualization.arrayToDataTable([
				['Month', 'Value'],
				['NOV', 2],
				['DEC', 6],
				['JAN', 5],
				['FEB', 7],
				['MAR', 5],
				['APR', 8]
			]);

			var options = {
				legend: 'none',
				areaOpacity: 0.18,
				tooltip: { trigger: 'none' },
				hAxis: {
					textStyle: {
						color: '#fff',
						fontName: 'Proxima Nova',
						fontSize: 11,
						bold: true
					},
					gridlines: 'null'
				},
				vAxis: {
					minValue: 0,
					textStyle: {
						color: '#fff',
						fontName: 'Proxima Nova',
						fontSize: 11,
						bold: true
					},
					baselineColor: '#16b4fc',
					ticks: [0,2,4,6,8,10,12],
					gridlines: {
						color: '#1ba0fc',
						count: 7
					},
				},
				lineWidth: 2,
				colors: ['#fff'],
				curveType: 'function',
				pointSize: 5,
				pointShapeType: 'circle',
				pointFillColor: '#f00',
				backgroundColor: {
					fill: '#008ffb',
					strokeWidth: 0
				},
				chartArea:{
					left: '10%',
					top: 5,
					width:'80%',
					height: 200
				}
			};

			var chart = new google.visualization.AreaChart(document.getElementById('chart_line'));

			chart.draw(data, options);
		}
		$(window).resize(function(){
			drawBasic();
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>