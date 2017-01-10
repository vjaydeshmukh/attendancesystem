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
<link rel="stylesheet" href="css/lib/summernote/summernote.css">
<link rel="stylesheet" href="css/separate/pages/editor.min.css">
<link rel="stylesheet" href="css/separate/vendor/select2.min.css">
<link rel="stylesheet" href="css/separate/pages/project.min.css">
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

	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-9 col-lg-12 col-xl-8 col-md-8">
					<section class="box-typical proj-page">
						<section class="proj-page-section proj-page-header">
							<div class="title">
								Logo Portal Banese
								<i class="font-icon font-icon-pencil"></i>
							</div>
							<div class="project">Project: <a href="#">Lorem Ipsum</a></div>
						</section><!--.proj-page-section-->

						<section class="proj-page-section">
							<div class="tbl proj-page-team">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-admin">
										<div class="avatar-preview avatar-preview-32">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-divider">
										<i class="font-icon font-icon-arrow-right"></i>
									</div>
									<div class="tbl-cell">
										<div class="avatar-preview avatar-preview-32">
											<a href="#">
												<img src="img/photo-64-1.jpg" alt="">
											</a>
										</div>
										<div class="avatar-preview avatar-preview-32">
											<a href="#">
												<img src="img/photo-64-3.jpg" alt="">
											</a>
										</div>
										<div class="avatar-preview avatar-preview-32">
											<a href="#">
												<img src="img/photo-64-4.jpg" alt="">
											</a>
										</div>
										<div class="avatar-preview avatar-preview-32">
											<a href="#">
												<img src="img/avatar-2-64.png" alt="">
											</a>
										</div>
										<div class="avatar-preview avatar-preview-32">
											<a href="#">
												<img src="img/avatar-1-64.png" alt="">
											</a>
										</div>
										<div class="avatar-preview avatar-preview-32">
											<a href="#">
												<img src="img/avatar-3-64.png" alt="">
											</a>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">3 days ago - 23 min read</div>
								</div>
							</div>
						</section><!--.proj-page-section-->

						<section class="proj-page-section">
							<div class="proj-page-main-controls">
								<div class="proj-page-main-controls-left">
									<button type="button" class="btn btn-select">Assign</button>
									<div class="select">
										<select class="select2 select2-white">
											<option>More</option>
											<option>More</option>
											<option>More</option>
											<option>More</option>
										</select>
									</div>
								</div>
								<div class="proj-page-main-controls-right">
									<button type="button" class="btn btn-select">Start Project</button>
									<button type="button" class="btn btn-select">Resolve Issue</button>
									<div class="select">
										<select class="select2 select2-white">
											<option>Workflow</option>
											<option>Workflow</option>
											<option>Workflow</option>
											<option>Workflow</option>
										</select>
									</div>
								</div>
							</div>

							<div class="proj-page-txt">
								<header class="proj-page-subtitle">
									<h3>Lorem Ipsum</h3>
								</header>
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
							</div>
						</section><!--.proj-page-section-->

						<section class="proj-page-section">
							<header class="proj-page-subtitle with-del">
								<h3>Checklist programming</h3>
								<button type="button" class="proj-page-del">
									<i class="font-icon font-icon-trash"></i>
								</button>
							</header>
							<div class="progress-with-amount progress-compact-style">
								<progress class="progress progress-success" value="25" max="100">25%</progress>
								<div class="progress-with-amount-number">25%</div>
							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="check-1">
									<label for="check-1">Check me out</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="check-2" checked>
									<label for="check-2">Check me out</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="check-3" disabled>
									<label for="check-3">Check me out</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="check-4" checked disabled>
									<label for="check-4">Check me out</label>
								</div>
							</div>
							<button type="button" class="btn btn-grey">Add checklist item</button>
						</section><!--.proj-page-section-->

						<section class="proj-page-add-txt">
							<input type="text" class="form-control"/>
							<button type="button" class="btn">Add</button>
							<button type="button" class="proj-page-del">
								<i class="font-icon font-icon-trash"></i>
							</button>
						</section><!--.proj-page-add-txt-->

						<section class="proj-page-section">
							<header class="proj-page-subtitle">
								<h3>Uploading</h3>
							</header>
							<div class="drop-zone">
								<!--
                                при перетаскиваении добавляем класс .dragover
                                <div class="drop-zone dragover">
                                -->
								<i class="font-icon font-icon-cloud-upload-2"></i>
								<div class="drop-zone-caption">Drag file to upload</div>
								<span class="btn btn-rounded btn-file">
									<span>Choose file</span>
									<input type="file" name="files[]" multiple>
								</span>
							</div>
							<ul class="uploading-list">
								<li class="uploading-list-item">
									<div class="uploading-list-item-wrapper">
										<div class="uploading-list-item-name">
											<i class="font-icon font-icon-cam-photo"></i>
											photo.png
										</div>
										<div class="uploading-list-item-size">7,5 mb</div>
										<button type="button" class="uploading-list-item-close">
											<i class="font-icon-close-2"></i>
										</button>
									</div>
									<progress class="progress" value="25" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 25%;">25%</span>
										</div>
									</progress>
									<div class="uploading-list-item-progress">37% done</div>
									<div class="uploading-list-item-speed">90KB/sec</div>
								</li>
								<li class="uploading-list-item">
									<div class="uploading-list-item-wrapper">
										<div class="uploading-list-item-name">
											<i class="font-icon font-icon-page"></i>
											task.doc
										</div>
										<div class="uploading-list-item-size">7,5 mb</div>
										<button type="button" class="uploading-list-item-close">
											<i class="font-icon-close-2"></i>
										</button>
									</div>
									<progress class="progress" value="50" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 50%;">50%</span>
										</div>
									</progress>
									<div class="uploading-list-item-progress">37% done</div>
									<div class="uploading-list-item-speed">90KB/sec</div>
								</li>
								<li class="uploading-list-item">
									<div class="uploading-list-item-wrapper">
										<div class="uploading-list-item-name">
											<i class="font-icon font-icon-cam-photo"></i>
											dashboard.png
										</div>
										<div class="uploading-list-item-size">7,5 mb</div>
										<button type="button" class="uploading-list-item-close">
											<i class="font-icon-close-2"></i>
										</button>
									</div>
									<progress class="progress" value="100" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 100%;">100%</span>
										</div>
									</progress>
									<div class="uploading-list-item-progress">Completed</div>
									<div class="uploading-list-item-speed">90KB/sec</div>
								</li>
							</ul>
						</section><!--.proj-page-section-->

						<section class="proj-page-attach-section scrollable-block">
							<div class="proj-page-attach-section-in">
								<header class="proj-page-subtitle">
									<h3>Attachments 1</h3>
								</header>
								<div class="proj-page-attach-grid">
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
									<div class="gd-doc">
										<div class="gd-doc-preview">
											<a href="#">
												<img src="img/doc.jpg" alt="">
												<span class="icon"><i class="font-icon font-icon-downloaded"></i></span>
											</a>
										</div>
										<div class="gd-doc-title">History Class Final</div>
										<div class="gd-doc-date">05/30/2014</div>
									</div>
								</div>
							</div>
						</section><!--.proj-page-attach-section-->

						<section class="proj-page-section">
							<header class="proj-page-subtitle">
								<h3>Attachments 2</h3>
							</header>
							<div class="proj-page-attach">
								<i class="font-icon font-icon-pdf"></i>
								<p class="name">Concept and UX.pdf</p>
								<p class="date">16:48, 02 dec 2016</p>
								<p>
									<a href="#">View</a>
									<a href="#">Download</a>
								</p>
							</div>
						</section><!--.proj-page-attach-section-->

						<section class="proj-page-section">
							<header class="proj-page-subtitle">
								<h3>Comments</h3>
							</header>
							<div class="comment-rows-container scrollable-block">
								<div class="comment-row-item">
									<div class="avatar-preview avatar-preview-32">
										<a href="#">
											<img src="img/photo-64-2.jpg" alt="">
										</a>
									</div>
									<div class="tbl comment-row-item-header">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-name">Tom Roy</div>
											<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
										</div>
									</div>
									<div class="comment-row-item-content">
										<p>This lorem ipsum generator is made for all the webdesigners, designers, webmasters and others who need lorem ipsum. Generator is made the way that everyone can use it, but especially for projects which need html markup. You can decide which html tags you want and our generator will generate just as you specified.
											Pretty cool, isn't it?</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number color-green">1</span>
										<i class="glyphicon glyphicon-menu-up"></i>
									</div>
								</div><!--.comment-row-item-->

								<div class="comment-row-item selected">
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
										<p>yeees!</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number">0</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
										<p>Very good message</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number color-red">-5</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
											<div class="tbl-cell tbl-cell-name">Tim Berkly</div>
											<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
										</div>
									</div>
									<div class="comment-row-item-content">
										<p>Hello!</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number">0</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
											<div class="tbl-cell tbl-cell-name">Mark Mo</div>
											<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
										</div>
									</div>
									<div class="comment-row-item-content">
										<p>This lorem ipsum generator is made for all the webdesigners, designers, webmasters and others who need lorem ipsum. Generator is made the way that everyone can use it, but especially for projects which need html markup. You can decide which html tags you want and our generator will generate just as you specified.
											Pretty cool, isn't it?</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number color-green">1</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
										<p>yes!</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number">0</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
										<p>How are you?</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number color-red">-5</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
											<div class="tbl-cell tbl-cell-name">Tom Boy</div>
											<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
										</div>
									</div>
									<div class="comment-row-item-content">
										<p>Refresh the page</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number">0</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
											<div class="tbl-cell tbl-cell-name">Mask Roy</div>
											<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
										</div>
									</div>
									<div class="comment-row-item-content">
										<p>This lorem ipsum generator is made for all the webdesigners, designers, webmasters and others who need lorem ipsum. Generator is made the way that everyone can use it, but especially for projects which need html markup. You can decide which html tags you want and our generator will generate just as you specified.
											Pretty cool, isn't it?</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number color-green">1</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
										<p>May be...</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number">0</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
										<p>Ok</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number color-red">-5</span>
										<i class="glyphicon glyphicon-menu-up"></i>
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
											<div class="tbl-cell tbl-cell-name">Leo Van</div>
											<div class="tbl-cell tbl-cell-date">04.07.15, 20:02 PM</div>
										</div>
									</div>
									<div class="comment-row-item-content">
										<p>Cool!</p>
										<button type="button" class="comment-row-item-action edit">
											<i class="font-icon font-icon-pencil"></i>
										</button>
										<button type="button" class="comment-row-item-action del">
											<i class="font-icon font-icon-trash"></i>
										</button>
									</div>
									<a href="#" class="comment-row-item-reply">Reply</a>
									<div class="comment-row-item-rating">
										<i class="glyphicon glyphicon-menu-down"></i>
										<span class="number">0</span>
										<i class="glyphicon glyphicon-menu-up"></i>
									</div>
								</div><!--.comment-row-item-->
							</div><!--.comment-rows-container-->

							<div class="leave-comment-block">
								<div class="avatar-preview avatar-preview-32">
									<img src="img/photo-64-2.jpg" alt="">
								</div>
								<div class="summernote-theme-1">
									<div class="summernote">This lorem ipsum generator is made for all the webdesigners, designers, webmasters and others who need lorem ipsum. Generator is made the way that everyone can use it, but especially for projects which need html markup. You can decide which html tags you want and our generator will generate just as you specified.
										Pretty cool, isn't it?</div>
								</div>
								<div class="viewable-access">
									<div class="btn-group choose">
										<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="font-icon font-icon-lock"></i>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-lock"></i>Action</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-lock"></i>Another action</a>
										</div>
									</div>
									<div class="lbl">Viewable by All Users</div>
								</div>

								<div class="chat-area-bottom">
									<button type="submit" class="btn btn-rounded float-left">Send</button>
									<button type="reset" class="btn btn-rounded btn-default float-left">Clear</button>
									<div class="dropdown dropdown-typical dropup attach">
										<a class="dropdown-toggle dropdown-toggle-txt"
										   id="dd-chat-attach"
										   data-target="#"
										   data-toggle="dropdown"
										   aria-haspopup="true"
										   aria-expanded="false">
											<span class="lbl">Attach</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-attach">
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-photo"></i>Photo</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-video"></i>Video</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-sound"></i>Audio</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-page"></i>Document</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-earth"></i>Map</a>
										</div>
									</div>
								</div><!--.chat-area-bottom-->
							</div><!--.leave-comment-block-->
						</section><!--.proj-page-attach-section-->
					</section><!--.proj-page-->
				</div>

				<div class="col-xxl-3 col-lg-12 col-xl-4 col-md-4">
					<section class="box-typical proj-page">
						<section class="proj-page-section proj-page-time-info">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">Time estimated</div>
									<div class="tbl-cell tbl-cell-time">4h 30m</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell">Time working</div>
									<div class="tbl-cell tbl-cell-time">2h 10m</div>
								</div>
							</div>
							<div class="progress-compact-style">
								<progress class="progress progress-success" value="65" max="100">65%</progress>
							</div>
						</section><!--.proj-page-section-->

						<section class="proj-page-section proj-page-labels">
							<header class="proj-page-subtitle padding-sm">
								<h3>Label</h3>
							</header>
							<a href="#" class="label label-light-grey">Default</a>
							<a href="#" class="label label-light-grey">Primary</a>
							<a href="#" class="label label-light-grey">Success</a>
							<a href="#" class="label label-light-grey">Info</a>
							<a href="#" class="label label-light-grey">Warning</a>
							<a href="#" class="label label-light-grey">Danger</a>
						</section><!--.proj-page-section-->

						<section class="proj-page-section proj-page-assigned">
							<header class="proj-page-subtitle padding-sm">
								<h3>Assigned to</h3>
							</header>
							<div class="user-card-row">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-photo">
										<a href="#">
											<img src="img/photo-64-2.jpg" alt="">
										</a>
									</div>
									<div class="tbl-cell">
										<p class="user-card-row-name"><a href="#">Tim Collins</a></p>
										<p class="color-blue-grey-lighter">Developer</p>
									</div>
								</div>
							</div>
						</section><!--.proj-page-section-->

						<section class="proj-page-section proj-page-people">
							<header class="proj-page-subtitle padding-sm">
								<h3>People</h3>
							</header>
							<div class="tbl tbl-people">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-lbl">Assignee</div>
									<div class="tbl-cell">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">Tim Collins</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-lbl">Reporter</div>
									<div class="tbl-cell">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">Tim Collins</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-lbl">Votes</div>
									<div class="tbl-cell"><a href="#"><span class="semibold">11</span> vote for this issue</a></div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-lbl">Watches</div>
									<div class="tbl-cell"><a href="#"><span class="semibold">56</span> start watching this issue</a></div>
								</div>
							</div>
						</section><!--.proj-page-section-->

						<section class="proj-page-section proj-page-dates">
							<header class="proj-page-subtitle padding-sm">
								<h3>Dates</h3>
							</header>
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-lbl">Created:</div>
									<div class="tbl-cell">5 days ago</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-lbl">Updates:</div>
									<div class="tbl-cell">6 days ago</div>
								</div>
							</div>
						</section><!--.proj-page-section-->

						<section class="proj-page-section">
							<header class="proj-page-subtitle padding-sm">
								<h3>Developers</h3>
							</header>
							<a href="#">Create branch</a>
						</section><!--.proj-page-section-->

						<section class="proj-page-section proj-page-agile">
							<header class="proj-page-subtitle padding-sm">
								<h3>Agile</h3>
							</header>
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">Future Sprint</div>
									<div class="tbl-cell"><a href="#">Sprit - Signature</a></div>
								</div>
							</div>
							<a href="#">View on Board</a>
						</section><!--.proj-page-section-->

						<section class="proj-page-section">
							<ul class="proj-page-actions-list">
								<li><a href="#"><i class="font-icon font-icon-check-square"></i>Create checklist</a></li>
								<li><a href="#"><i class="font-icon font-icon-alarm-2"></i>Due date</a></li>
								<li><a href="#"><i class="font-icon font-icon-archive"></i>Move to archive</a></li>
							</ul>
						</section><!--.proj-page-section-->
					</section><!--.proj-page-->
				</div>
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/select2/select2.full.min.js"></script>
	<script src="js/lib/summernote/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.summernote').summernote();
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>