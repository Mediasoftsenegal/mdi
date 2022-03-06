
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="assets/img/logo-icon.png" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu mega-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="row no-gutters">
                                            <div class="col-sm-2 p-20">
                                                <h4>UI Kit</h4>
                                                <ul>
                                                    <li class="nav-link">
                                                        <a href="ui-alerts.html">Alerts</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="ui-button.html">Buttons</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="ui-cards.html">Cards</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="ui-carousel.html">Carousel</a>
                                                    </li>

                                                    <li class="nav-link">
                                                        <a href="ui-dropdowns.html">Dropdowns</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="ui-list-group.html">List Group</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="ui-modals.html">Modals</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="ui-progressbars.html">Progress Bars</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="ui-tabs.html">Tabs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2 p-20">
                                                <h4>Pages</h4>
                                                <ul>
                                                    <li class="nav-link">
                                                        <a href="page-account-settings.html">Account Settings</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="page-clients.html">Clients</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="page-contacts.html">Contacts</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="page-gallery.html">Gallery</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="page-pricing.html">Pricing</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="page-task-list.html">Task List</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="page-404.html">404</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="page-500.html">500</a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a href="page-coming-soon.html">Coming Soon</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4 p-20">
                                                <h4>Contact Us</h4>
                                                <div>
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="Password1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="Email1" placeholder="Enter Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="Message" id="Textarea1" rows="3"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="chart-wrap">
                                                    <div class="p-20">
                                                        <h4 class="mb-1">Page Views</h4>
                                                        <p>Daily page visitors</p>
                                                        <h2 class="text-primary font-xxl mt-2">80+</h2>
                                                    </div>
                                                    <div class="apexchart-wrapper">
                                                        <div id="pageview"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link " id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop Down
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-link" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item nav-link" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item nav-link" href="javascript:void(0)">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti ti-email"></i>
                                    </a>
                                    <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                        <ul>
                                            <li class="dropdown-header bg-gradient p-4 text-white text-left">Messages
                                                <label class="label label-info label-round">6</label>
                                                <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                    <span class="font-13"> Mark all as read</span></a>
                                            </li>
                                            <li class="dropdown-body">
                                                <ul class="scrollbar scroll_dark max-h-240">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user3">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Brianing Leyon</p>
                                                                    <small>You will sail along until you...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/01.jpg" alt="user">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Jimmyimg Leyon</p>
                                                                    <small>Okay</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/02.jpg" alt="user2">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Brainjon Leyon</p>
                                                                    <small>So, make the decision...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/04.jpg" alt="user4">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Smithmin Leyon</p>
                                                                    <small>Thanks</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user5">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Jennyns Leyon</p>
                                                                    <small>How are you</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/06.jpg" alt="user6">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Demian Leyon</p>
                                                                    <small>I like your themes</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a class="font-13" href="javascript:void(0)"> View All messages </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-bell"></i>
                                        <span class="notify">
                                                    <span class="blink"></span>
                                        <span class="dot"></span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                        <ul>
                                            <li class="dropdown-header bg-gradient p-4 text-white text-left">Notifications
                                                <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                    <span class="font-13"> Clear all</span></a>
                                            </li>
                                            <li class="dropdown-body min-h-240 nicescroll">
                                                <ul class="scrollbar scroll_dark max-h-240">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md">
                                                                        <span>HY</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">New registered user</p>
                                                                    <small>Just now</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-success">
                                                                        <span>GM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">New invoice received</p>
                                                                    <small>22 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-danger">
                                                                        <span>FR</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Server error report</p>
                                                                    <small>7 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-info">
                                                                        <span>HT</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Database report</p>
                                                                    <small>1 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md">
                                                                        <span>DE</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Order confirmation</p>
                                                                    <small>2 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a class="font-13" href="javascript:void(0)"> View All Notifications
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link search" href="javascript:void(0)">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <div class="search-wrapper">
                                        <div class="close-btn">
                                            <i class="ti ti-close"></i>
                                        </div>
                                        <div class="search-content">
                                            <form>
                                                <div class="form-group">
                                                    <i class="ti ti-search magnifier"></i>
                                                    <input type="text" class="form-control autocomplete" placeholder="Search Here" id="autocomplete-ajax" autofocus="autofocus">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/img/avtar/02.jpg" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    <h4 class="text-white mb-0">Alice Williams</h4>
                                                    <small class="text-white">Henry@example.com</small>
                                                </div>
                                                <a href="#" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                                class="zmdi zmdi-power"></i></a>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                                <span class="badge badge-primary ml-auto">6</span>
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-compass pr-2 text-warning"></i> Need help?</a>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <a class="bg-light p-3 text-center d-block" href="#">
                                                        <i class="fe fe-mail font-20 text-primary"></i>
                                                        <span class="d-block font-13 mt-2">My messages</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="bg-light p-3 text-center d-block" href="#">
                                                        <i class="fe fe-plus font-20 text-primary"></i>
                                                        <span class="d-block font-13 mt-2">Compose new</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">Personal</li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Dashboards</span>
                                    <span class="nav-label label label-danger">9</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li> <a href='index.html'>Default</a> </li>
                                    <li> <a href='index-ecommerce.html'>Ecommerce</a> </li>
                                    <li> <a href='index-car-dealer.html'>Car Dealer</a> </li>
                                    <li> <a href='index-stock-market.html'>Stock Market</a> </li>
                                    <li> <a href='index-dating.html'>Dating</a> </li>
                                    <li> <a href='index-job-portal.html'>Job Portal</a> </li>
                                    <li> <a href='index-crm.html'>CRM</a> </li>
                                    <li> <a href='index-real-estate.html'>Real Estate</a> </li>
                                    <li> <a href='index-crypto-currency.html'>Crypto Currency</a> </li>
                                </ul>
                            </li>
                            <li><a href="app-chat.html" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Chat</span></a> </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-calendar"></i><span class="nav-title">Calendar</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Full Calendar</a> </li>
                                    <li> <a href='calendar-list.html'>Calendar List</a> </li>
                                </ul>
                            </li>
                            <li><a href="mail-inbox.html" aria-expanded="false"><i class="nav-icon ti ti-email"></i><span class="nav-title">Mail</span></a> </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-bag"></i> <span class="nav-title">UI Kit</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="ui-alerts.html">Alerts</a> </li>
                                    <li> <a href="ui-accordions.html">Accordions</a> </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Buttons</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Default Buttons</a> </li>
                                            <li> <a href="ui-button-icon.html">Icon Buttons</a> </li>
                                            <li> <a href="ui-button-block.html">Block Buttons</a> </li>
                                            <li> <a href="ui-button-social.html">Social Buttons</a> </li>
                                            <li> <a href="ui-button-groups.html">Group Buttons</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="ui-badges.html">Badges</a> </li>
                                    <li> <a href="ui-cards.html">Cards</a> </li>
                                    <li> <a href="ui-carousel.html">Carousel</a> </li>
                                    <li> <a href="ui-dropdowns.html">Dropdowns</a> </li>

                                    <li> <a href="ui-grid.html">Grid</a> </li>
                                    <li> <a href="ui-list-group.html">List Group</a> </li>
                                    <li> <a href="ui-lightbox.html">Light Box</a> </li>
                                    <li> <a href="ui-modals.html">Modals</a> </li>
                                    <li> <a href="ui-media.html">Media</a> </li>
                                    <li> <a href="ui-nestable-list.html">Nestable List</a> </li>
                                    <li> <a href="ui-pagination.html">Pagination</a> </li>
                                    <li> <a href="ui-progressbars.html">Progress Bars</a> </li>

                                    <li> <a href="ui-sweet-alert.html">Sweet Alert</a> </li>
                                    <li> <a href="ui-tabs.html">Tabs</a> </li>
                                    <li> <a href="ui-nav.html">Nav</a> </li>
                                    <li> <a href="ui-tooltips-popovers.html">Tooltips & Popovers</a> </li>
                                    <li> <a href="ui-typography.html">Typography</a> </li>
                                    <li> <a href="ui-toastr.html">Toastr</a> </li>
                                    <li> <a href="ui-video.html">Video</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-info"></i><span class="nav-title">Icons</span> </a>
                                <ul aria-expanded="false">
                                    <li> <a href="icons-cryptocurrency.html">Cryptocurrency Icons</a> </li>
                                    <li> <a href="icons-drip.html">Drip Icons</a> </li>
                                    <li> <a href="icons-dash.html">Dash Icons</a> </li>
                                    <li> <a href="icons-feather.html">Feather Icons</a> </li>
                                    <li> <a href="icons-fontawesome.html">Font Awesome</a> </li>
                                    <li> <a href="icons-ion.html">Ion Icons</a> </li>
                                    <li> <a href="icons-weather.html">Weather Icons</a> </li>
                                    <li> <a href="icons-material.html">Material Icons</a> </li>
                                    <li> <a href="icons-themify.html">Themify Icons</a> </li>
                                </ul>
                            </li>
                            <li class="nav-static-title">Widgets, Tables & Layouts</li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-layout-grid4-alt"></i> <span class="nav-title">Widgets</span> <span class="nav-label label label-success">New</span> </a>
                                <ul aria-expanded="false">
                                    <li> <a href="widget-chart.html">Chart Widget</a> </li>

                                    <li> <a href="widget-list.html">List Widget</a> </li>

                                    <li> <a href="widget-social.html">Social Widget</a> </li>

                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout-column3-alt"></i><span class="nav-title">Tables</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="tables-basic.html">Basic Table</a> </li>
                                    <li> <a href="tables-color.html">Color Table </a> </li>
                                    <li> <a href="tables-datatable.html">Data Table</a> </li>
                                    <li> <a href="tables-editable.html">Editable Table</a> </li>
                                    <li> <a href="tables-export.html">Export Table</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout"></i> <span class="nav-title">Layouts</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="layout-mini.html">Sidebar Mini</a></li>

                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-pie-chart"></i><span class="nav-title">Charts</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="chart-apex.html">Apex Chart</a> </li>
                                    <li> <a href="chart-flot.html">Flot Chart</a> </li>
                                    <li> <a href="chart-morris.html">Morris Chart</a> </li>
                                    <li> <a href="chart-chartist.html">Chartist Charts</a> </li>
                                    <li> <a href="chart-chartjs.html">Chartjs Chart</a> </li>
                                    <li> <a href="chart-c3.html">C3 Chart</a> </li>
                                    <li> <a href="chart-sparkline.html">Sparkline Chart</a> </li>
                                    <li> <a href="chart-knob.html">Knob Chart</a> </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-pencil-alt"></i> <span class="nav-title">Forms</span> </a>
                                <ul aria-expanded="false">
                                    <li> <a href="form-autonumeric.html">Autonumeric</a> </li>
                                    <li> <a href="form-editors.html">Editors</a> </li>
                                    <li> <a href="form-elements.html">Elements</a> </li>
                                    <li> <a href="form-file-upload.html">Drop Zone
                                        </a> </li>
                                    <li> <a href="form-input-groups.html">Input Groups</a> </li>
                                    <li> <a href="form-inputmask.html">Input Masks</a> </li>
                                    <li> <a href="form-layouts.html">Forms Layouts</a> </li>
                                    <li> <a href="form-listbox.html">Listbox</a> </li>
                                    <li class="active"> <a href="form-pickers.html">Pickers</a> </li>
                                    <li> <a href="form-range-slider.html">Range Slider</a> </li>
                                    <li> <a href="form-selects.html">Selects</a> </li>
                                    <li> <a href="form-switchers.html">Switchers</a> </li>
                                    <li> <a href="form-validation.html">Validation</a> </li>
                                </ul>
                            </li>
                            <li class="nav-static-title">Extra Components</li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-map-alt"></i><span class="nav-title">Maps</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="maps-google.html">Google Maps</a> </li>
                                    <li> <a href="maps-vector.html">Vector Maps</a> </li>
                                    <li> <a href="maps-mapael.html">Mapael Maps</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layers"></i><span class="nav-title">Pages</span><span class="nav-label label label-primary">12</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="page-account-settings.html">Account Settings</a> </li>
                                    <li> <a href="page-clients.html">Clients</a> </li>
                                    <li> <a href="page-contacts.html">Contacts</a> </li>
                                    <li> <a href="page-employees.html">Employees</a> </li>
                                    <li> <a href="page-faq.html">FAQ</a> </li>
                                    <li> <a href="page-file-manager.html">File Manager</a> </li>
                                    <li> <a href="page-gallery.html">Gallery</a> </li>

                                    <li> <a href="page-pricing.html">Pricing</a> </li>
                                    <li> <a href="page-task-list.html">Task List</a> </li>
                                    <li> <a href="page-404.html">404</a> </li>
                                    <li> <a href="page-500.html">500</a> </li>
                                    <li> <a href="page-coming-soon.html">Coming Soon</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-key"></i><span class="nav-title">Auth</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="auth-login.html">Login</a> </li>
                                    <li> <a href="auth-register.html">Register</a> </li>
                                    <li> <a href="auth-lockscreen.html">Lock Screen</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-list"></i><span class="nav-title">Multi Level</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="javascript: void(0);">Level 1.1</a> </li>
                                    <li class="scoop-hasmenu">
                                        <a class="has-arrow" href="javascript: void(0);">Level 1.2</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="javascript: void(0);">Level 2.1</a> </li>
                                            <li> <a href="javascript: void(0);">Level 2.2</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-banner p-4 bg-gradient text-center m-3 d-block rounded">
                                <h5 class="text-white mb-1">Mentor admin</h5>
                                <p class="font-13 text-white line-20">Multipurpose Bootstrap 4 Admin Template</p>
                                <a class="btn btn-square btn-inverse-light btn-xs d-inline-block mt-2 mb-0" href="#"> Buy now</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Pickers</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Forms
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Pickers</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-xl-6 mb-30 datepicker-contant datepicker-wrapper">
                                <div class="card card-statistics mb-30">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Input</h4>
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control date-picker-default" value="Select Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics mb-30">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Input Group</h4>
                                        </div>
                                        <div class="input-group date display-years" data-date-format="dd-mm-yyyy" data-date="14-06-2018">
                                            <input class="form-control" type="text" placeholder="12-12-2018">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics mb-30">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Helper Buttons</h4>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datepicker-action'>
                                                <input class="form-control" type='text' value="290/07/2018" />
                                                <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                            </div>
                                            <p class="mt-2">clear and today helper buttons added</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Inline Picker</h4>
                                        </div>
                                        <div id="datepicker-inline"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 mb-30 datepicker-contant">
                                <div class="card card-statistics mb-30">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Date Range</h4>
                                        </div>
                                        <div class="input-group" data-date="23/11/2018" data-date-format="mm/dd/yyyy">
                                            <input type="text" class="form-control range-from" name="from">
                                            <span class="input-group-addon">To</span>
                                            <input class="form-control range-to" type="text" name="to">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics mb-30">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Bottom Left</h4>
                                        </div>
                                        <div class='input-group date' id='datepicker-bottom-left'>
                                            <input class="form-control" type='text' placeholder="Bottom left" />
                                            <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics mb-30">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Bottom Right</h4>
                                        </div>
                                        <div class='input-group date' id='datepicker-bottom-right'>
                                            <input class="form-control" type='text' placeholder="Bottom Right" />
                                            <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics mb-30">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Top Left</h4>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datepicker-top-left'>
                                                <input class="form-control" type='text' placeholder="Top left" />
                                                <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics">
                                    <div class="card-body datepicker-form">
                                        <div class="card-heading">
                                            <h4 class="card-title">Top Right</h4>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datepicker-top-right'>
                                                <input class="form-control" type='text' placeholder="Top Right" />
                                                <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2019. All rights reserved.</p>
                    </div>
                    <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        <p>Hand-crafted made with <i class="fa fa-heart text-danger mx-1"></i> by Potenza</p>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>

</html>