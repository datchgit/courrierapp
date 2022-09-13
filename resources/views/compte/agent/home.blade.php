
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg">

    <head>
        
        <meta charset="utf-8" />
        <title>Projects | Velzon - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="user/assets/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="{{asset('user/assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('user/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('user/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('user/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('user/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="user/assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="user/assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="user/assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="user/assets/images/logo-light.png" alt="" height="17">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                                id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <!-- App Search-->
                            <form class="app-search d-none d-md-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                        id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                        id="search-close-options"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                    <div data-simplebar style="max-height: 320px;">
                                        <!-- item-->
                                        <div class="dropdown-header">
                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                        </div>

                                        <div class="dropdown-item bg-transparent text-wrap">
                                            <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i
                                                    class="mdi mdi-magnify ms-1"></i></a>
                                            <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i
                                                    class="mdi mdi-magnify ms-1"></i></a>
                                        </div>
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Analytics Dashboard</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Help Center</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                            <span>My account settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="user/assets/images/users/avatar-2.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Angela Bernier</h6>
                                                        <span class="fs-11 mb-0 text-muted">Manager</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="user/assets/images/users/avatar-3.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">David Grasso</h6>
                                                        <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="user/assets/images/users/avatar-5.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Mike Bunch</h6>
                                                        <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="text-center pt-3 pb-1">
                                        <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i
                                                class="ri-arrow-right-line ms-1"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex align-items-center">

                            <div class="dropdown d-md-none topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="bx bx-search fs-22"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-search-dropdown">
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..."
                                                    aria-label="Recipient's username">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="dropdown ms-1 topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img id="header-lang-img" src="user/assets/images/flags/us.svg" alt="Header Language" height="20"
                                        class="rounded">
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en"
                                        title="English">
                                        <img src="user/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">English</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp"
                                        title="Spanish">
                                        <img src="user/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">Española</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr"
                                        title="German">
                                        <img src="user/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded"
                                            height="18"> <span class="align-middle">Deutsche</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it"
                                        title="Italian">
                                        <img src="user/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">Italiana</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru"
                                        title="Russian">
                                        <img src="user/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">русский</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch"
                                        title="Chinese">
                                        <img src="user/assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">中国人</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr"
                                        title="French">
                                        <img src="user/assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">français</span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-category-alt fs-22'></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                                    <i class="ri-arrow-right-s-line align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="user/assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="user/assets/images/brands/bitbucket.png" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="user/assets/images/brands/dribbble.png" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="user/assets/images/brands/dropbox.png" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="user/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                    <span>Mail Chimp</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="user/assets/images/brands/slack.png" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-shopping-bag fs-22'></i>
                                    <span
                                        class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart"
                                    aria-labelledby="page-header-cart-dropdown">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">7</span>
                                                    items</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 300px;">
                                        <div class="p-2">
                                            <div class="text-center empty-cart" id="empty-cart">
                                                <div class="avatar-md mx-auto my-3">
                                                    <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                                        <i class='bx bx-cart'></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Your Cart is Empty!</h5>
                                                <a href="#" class="btn btn-success w-md mb-3">Shop Now</a>
                                            </div>
                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="user/assets/images/products/img-1.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                                                T-Shirts</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>10 x $32</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="user/assets/images/products/img-2.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html"
                                                                class="text-reset">Bentwood Chair</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>5 x $18</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="user/assets/images/products/img-3.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html" class="text-reset">
                                                                Borosil Paper Cup</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>3 x $250</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="user/assets/images/products/img-6.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                                                                Styled T-Shirt</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>1 x $1250</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="user/assets/images/products/img-5.png"
                                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details.html"
                                                                class="text-reset">Stillbird Helmet</a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantity: <span>2 x $495</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border"
                                        id="checkout-elem">
                                        <div class="d-flex justify-content-between align-items-center pb-3">
                                            <h5 class="m-0 text-muted">Total:</h5>
                                            <div class="px-2">
                                                <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                            </div>
                                        </div>

                                        <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    data-toggle="fullscreen">
                                    <i class='bx bx-fullscreen fs-22'></i>
                                </button>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button"
                                    class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                    <i class='bx bx-moon fs-22'></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class='bx bx-bell fs-22'></i>
                                    <span
                                        class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                            class="visually-hidden">unread messages</span></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                        <div class="p-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                                </div>
                                                <div class="col-auto dropdown-tabs">
                                                    <span class="badge badge-soft-light fs-13"> 4 New</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-2 pt-2">
                                            <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"
                                                id="notificationItemsTab" role="tablist">
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab"
                                                        aria-selected="true">
                                                        All (4)
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab"
                                                        aria-selected="false">
                                                        Messages
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab"
                                                        aria-selected="false">
                                                        Alerts
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="tab-content" id="notificationItemsTabContent">
                                        <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3">
                                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                                <i class="bx bx-badge-check"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                    Optimization <span class="text-secondary">reward</span> is
                                                                    ready!
                                                                </h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="all-notification-check01">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check01"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-reset notification-item d-block dropdown-item position-relative active">
                                                    <div class="d-flex">
                                                        <img src="user/assets/images/users/avatar-2.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                                    graph 🔔.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="all-notification-check02" checked>
                                                                <label class="form-check-label"
                                                                    for="all-notification-check02"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3">
                                                            <span
                                                                class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                                                                <i class='bx bx-message-square-dots'></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b
                                                                        class="text-success">20</b> new messages in the conversation
                                                                </h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="all-notification-check03">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check03"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <img src="user/assets/images/users/avatar-8.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="all-notification-check04">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check04"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-3 text-center">
                                                    <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                        All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                            aria-labelledby="messages-tab">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="user/assets/images/users/avatar-3.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="messages-notification-check01">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check01"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="user/assets/images/users/avatar-2.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                                    graph 🔔.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="messages-notification-check02">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check02"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="user/assets/images/users/avatar-6.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                                                </p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="messages-notification-check03">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check03"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="user/assets/images/users/avatar-8.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="messages-notification-check04">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check04"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-3 text-center">
                                                    <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                        All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab">
                                            <div class="w-25 w-sm-50 pt-3 mx-auto">
                                                <img src="user/assets/images/svg/bell.svg" class="img-fluid" alt="user-pic">
                                            </div>
                                            <div class="text-center pb-5 mt-2">
                                                <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="user/assets/images/users/avatar-1.jpg"
                                            alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                            <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome Anna!</h6>
                                    <a class="dropdown-item" href="pages-profile.html"><i
                                            class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="apps-chat.html"><i
                                            class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Messages</span></a>
                                    <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                                            class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Taskboard</span></a>
                                    <a class="dropdown-item" href="pages-faqs.html"><i
                                            class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Help</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages-profile.html"><i
                                            class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Balance : <b>$5971.67</b></span></a>
                                    <a class="dropdown-item" href="pages-profile-settings.html"><span
                                            class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                            class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Settings</span></a>
                                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                            class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle">Lock screen</span></a>
                                    <a class="dropdown-item" href="auth-logout-basic.html"><i
                                            class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="user/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="user/assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="user/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="user/assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">
            
                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Dashboards</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarDashboards">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-projects.html" class="nav-link" data-key="t-projects"> Projects </a>
                                        </li>
                                    </ul>
                                </div>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i data-feather="grid" class="icon-dual"></i> <span data-key="t-apps">Apps</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Calendar </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Mailbox </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce">Ecommerce 
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders"> Orders </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-order-details.html" class="nav-link" data-key="t-order-details"> Order Details </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers"> Customers </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart"> Shopping Cart </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout"> Checkout </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers"> Sellers </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-seller-details.html" class="nav-link" data-key="t-sellers-details"> Seller Details </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects"> Projects
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarProjects">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-projects-list.html" class="nav-link" data-key="t-list"> List </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-projects-create.html" class="nav-link" data-key="t-create-project"> Create Project </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarTasks">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-tasks-kanban.html" class="nav-link" data-key="t-kanbanboard"> Kanban Board </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-tasks-list-view.html" class="nav-link" data-key="t-list-view"> List View </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-tasks-details.html" class="nav-link" data-key="t-task-details"> Task Details </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm"> CRM
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCRM">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-crm-contacts.html" class="nav-link" data-key="t-contacts"> Contacts </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crm-companies.html" class="nav-link" data-key="t-companies"> Companies </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals"> Deals </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads"> Leads </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarCrypto" data-key="t-crypto"> Crypto
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrypto">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-transactions.html" class="nav-link" data-key="t-transactions"> Transactions </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-buy-sell.html" class="nav-link" data-key="t-buy-sell"> Buy & Sell </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-orders.html" class="nav-link" data-key="t-orders"> Orders </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-wallet.html" class="nav-link" data-key="t-my-wallet"> My Wallet </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-ico.html" class="nav-link" data-key="t-ico-list"> ICO List </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-kyc.html" class="nav-link" data-key="t-kyc-application"> KYC Application </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarInvoices" data-key="t-invoices"> Invoices
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarInvoices">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-invoices-details.html" class="nav-link" data-key="t-details"> Details </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice"> Create Invoice </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarTickets" data-key="t-supprt-tickets"> Support Tickets
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarTickets">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-tickets-details.html" class="nav-link" data-key="t-ticket-details"> Ticket Details </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarLayouts">
                                    <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Layouts</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLayouts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> <!-- end Dashboard Menu -->

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAuth">
                                    <i data-feather="users" class="icon-dual"></i> <span data-key="t-authentication">Authentication</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAuth">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSignIn">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSignUp">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset"> Password Reset
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarResetPass">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen"> Lock Screen
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarLogout">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Success Message
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification"> Two Step Verification
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarErrors">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic"> 404 Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover"> 404 Cover </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt"> 404 Alt </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarPages">
                                    <i data-feather="command" class="icon-dual"></i> <span data-key="t-pages">Pages</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile  
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarProfile">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="pages-profile.html" class="nav-link" data-key="t-simple-page"> Simple Page </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="pages-profile-settings.html" class="nav-link" data-key="t-settings"> Settings </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> Gallery </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search Results </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" target="_blank" href="landing.html">
                                    <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                                    <span class="badge badge-pill bg-danger" data-key="t-new">New</span>
                                </a>
                            </li>

                        

                       

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarMaps">
                                    <i data-feather="map-pin" class="icon-dual"></i> <span data-key="t-maps">Maps</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarMaps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="maps-google.html" class="nav-link" data-key="t-google">
                                                Google
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                                Vector
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                                Leaflet
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                    <i data-feather="share-2" class="icon-dual"></i> <span data-key="t-multi-level">Multi Level</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level 1.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarAccount">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse"
                                                            role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebarCrm">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1 </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2 </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Projects</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Projects</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row project-wrapper">
                            <div class="col-xxl-8">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                                            <i data-feather="briefcase" class="text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Active Projects</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825">0</span></h4>
                                                            <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>5.02 %</span>
                                                        </div>
                                                        <p class="text-muted text-truncate mb-0">Projects this month</p>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                                            <i data-feather="award" class="text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="text-uppercase fw-medium text-muted mb-3">New Leads</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522">0</span></h4>
                                                            <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>3.58 %</span>
                                                        </div>
                                                        <p class="text-muted mb-0">Leads this month</p>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                                            <i data-feather="clock" class="text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Hours</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="168">0</span>h <span class="counter-value" data-target="40">0</span>m</h4>
                                                            <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35 %</span>
                                                        </div>
                                                        <p class="text-muted text-truncate mb-0">Work this month</p>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Projects Overview</h4>
                                                <div>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                                        1Y
                                                    </button>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-header p-0 border-0 bg-soft-light">
                                                <div class="row g-0 text-center">
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value" data-target="9851">0</span></h5>
                                                            <p class="text-muted mb-0">Number of Projects</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value" data-target="1026">0</span></h5>
                                                            <p class="text-muted mb-0">Active Projects</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1">$<span class="counter-value" data-target="228.89">0</span>k</h5>
                                                            <p class="text-muted mb-0">Revenue</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                            <h5 class="mb-1 text-success"><span class="counter-value" data-target="10589">0</span>h</h5>
                                                            <p class="text-muted mb-0">Working Hours</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div><!-- end card header -->
                                            <div class="card-body p-0 pb-2">
                                                <div>
                                                    <div id="projects-overview-chart" data-colors='["--vz-primary", "--vz-primary-rgb, 0.1", "--vz-primary-rgb, 0.50"]' class="apex-charts" dir="ltr"></div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end col -->

                            <div class="col-xxl-4">
                                <div class="card">
                                    <div class="card-header border-0">
                                        <h4 class="card-title mb-0">Upcoming Schedules</h4>
                                    </div><!-- end cardheader -->
                                    <div class="card-body pt-0">
                                        <div class="upcoming-scheduled">
                                            <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
                                        </div>

                                        <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Events:</h6>
                                        <div class="mini-stats-wid d-flex align-items-center mt-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <span class="mini-stat-icon avatar-title rounded-circle text-primary bg-soft-primary fs-4">
                                                    09
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Development planning</h6>
                                                <p class="text-muted mb-0">iTest Factory </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <p class="text-muted mb-0">9:20 <span class="text-uppercase">am</span></p>
                                            </div>
                                        </div><!-- end -->
                                        <div class="mini-stats-wid d-flex align-items-center mt-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <span class="mini-stat-icon avatar-title rounded-circle text-primary bg-soft-primary fs-4">
                                                    12
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Design new UI and check sales</h6>
                                                <p class="text-muted mb-0">Meta4Systems</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <p class="text-muted mb-0">11:30 <span class="text-uppercase">am</span></p>
                                            </div>
                                        </div><!-- end -->
                                        <div class="mini-stats-wid d-flex align-items-center mt-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <span class="mini-stat-icon avatar-title rounded-circle text-primary bg-soft-primary fs-4">
                                                    25
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Weekly catch-up </h6>
                                                <p class="text-muted mb-0">Nesta Technologies</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <p class="text-muted mb-0">02:00 <span class="text-uppercase">pm</span></p>
                                            </div>
                                        </div><!-- end -->
                                        <div class="mini-stats-wid d-flex align-items-center mt-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <span class="mini-stat-icon avatar-title rounded-circle text-primary bg-soft-primary fs-4">
                                                    27
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">James Bangs (Client) Meeting</h6>
                                                <p class="text-muted mb-0">Nesta Technologies</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <p class="text-muted mb-0">03:45 <span class="text-uppercase">pm</span></p>
                                            </div>
                                        </div><!-- end -->

                                        <div class="mt-3 text-center">
                                            <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all Events</a>
                                        </div>

                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-7">
                                <div class="card card-height-100">
                                    <div class="card-header d-flex align-items-center">
                                        <h4 class="card-title flex-grow-1 mb-0">Active Projects</h4>
                                        <div class="flex-shrink-0">
                                            <a href="javascript:void(0);" class="btn btn-soft-secondary btn-sm">Export Report</a>
                                        </div>
                                    </div><!-- end cardheader -->
                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-nowrap table-centered align-middle">
                                                <thead class="bg-light text-muted">
                                                    <tr>
                                                        <th scope="col">Project Name</th>
                                                        <th scope="col">Project Lead</th>
                                                        <th scope="col">Progress</th>
                                                        <th scope="col">Assignee</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" style="width: 10%;">Due Date</th>
                                                    </tr><!-- end tr -->
                                                </thead><!-- thead -->

                                                <tbody>
                                                    <tr>
                                                        <td class="fw-medium">Brand Logo Design</td>
                                                        <td>
                                                            <img src="user/assets/images/users/avatar-1.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                            <a href="javascript: void(0);" class="text-reset">Donald Risher</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-1 text-muted fs-13">53%</div>
                                                                <div class="progress progress-sm  flex-grow-1" style="width: 68%;">
                                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="avatar-group flex-nowrap">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                                        <td class="text-muted">06 Sep 2021</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="fw-medium">Redesign - Landing Page</td>
                                                        <td>
                                                            <img src="user/assets/images/users/avatar-2.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                            <a href="javascript: void(0);" class="text-reset">Prezy William</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 text-muted me-1">0%</div>
                                                                <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-soft-danger">Pending</span></td>
                                                        <td class="text-muted">13 Nov 2021</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="fw-medium">Multipurpose Landing Template</td>
                                                        <td>
                                                            <img src="user/assets/images/users/avatar-3.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                            <a href="javascript: void(0);" class="text-reset">Boonie Hoynas</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 text-muted me-1">100%</div>
                                                                <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-soft-success">Completed</span></td>
                                                        <td class="text-muted">26 Nov 2021</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="fw-medium">Chat Application</td>
                                                        <td>
                                                            <img src="user/assets/images/users/avatar-5.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                            <a href="javascript: void(0);" class="text-reset">Pauline Moll</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 text-muted me-1">64%</div>
                                                                <div class="progress flex-grow-1 progress-sm" style="width: 68%;">
                                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-soft-warning">Progress</span></td>
                                                        <td class="text-muted">15 Dec 2021</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="fw-medium">Create Wireframe</td>
                                                        <td>
                                                            <img src="user/assets/images/users/avatar-6.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                            <a href="javascript: void(0);" class="text-reset">James Bangs</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 text-muted me-1">77%</div>
                                                                <div class="progress flex-grow-1 progress-sm" style="width: 68%;">
                                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="user/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-soft-warning">Progress</span></td>
                                                        <td class="text-muted">21 Dec 2021</td>
                                                    </tr><!-- end tr -->
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div>
 
                                        <div class="align-items-center mt-xl-3 mt-4 justify-content-between d-flex">                
                                            <div class="flex-shrink-0">
                                                <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                </div>
                                            </div>
                                            <ul class="pagination pagination-separated pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link">←</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">→</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1 py-1">My Tasks</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">All Tasks <i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">All Tasks</a>
                                                    <a class="dropdown-item" href="#">Completed </a>
                                                    <a class="dropdown-item" href="#">Inprogress</a>
                                                    <a class="dropdown-item" href="#">Pending</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-borderless table-nowrap table-centered align-middle mb-0">
                                                <thead class="table-light text-muted">
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Dedline</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Assignee</th>
                                                    </tr>
                                                </thead><!-- end thead -->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask1">
                                                                <label class="form-check-label ms-1" for="checkTask1">
                                                                    Create new Admin Template
                                                                </label>
                                                              </div>
                                                        </td>
                                                        <td class="text-muted">03 Nov 2021</td>
                                                        <td><span class="badge badge-soft-success">Completed</span></td>
                                                        <td>
                                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Mary Stoner">
                                                                <img src="user/assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </td>
                                                    </tr><!-- end -->
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask2">
                                                                <label class="form-check-label ms-1" for="checkTask2">
                                                                    Marketing Coordinator
                                                                </label>
                                                              </div>
                                                        </td>
                                                        <td class="text-muted">17 Nov 2021</td>
                                                        <td><span class="badge badge-soft-warning">Progress</span></td>
                                                        <td>
                                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Den Davis">
                                                                <img src="user/assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </td>
                                                    </tr><!-- end -->
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask3">
                                                                <label class="form-check-label ms-1" for="checkTask3">
                                                                    Administrative Analyst
                                                                </label>
                                                              </div>
                                                        </td>
                                                        <td class="text-muted">26 Nov 2021</td>
                                                        <td><span class="badge badge-soft-success">Completed</span></td>
                                                        <td>
                                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Alex Brown">
                                                                <img src="user/assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </td>
                                                    </tr><!-- end -->
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask4">
                                                                <label class="form-check-label ms-1" for="checkTask4">
                                                                    E-commerce Landing Page
                                                                </label>
                                                              </div>
                                                        </td>
                                                        <td class="text-muted">10 Dec 2021</td>
                                                        <td><span class="badge badge-soft-danger">Pending</span></td>
                                                        <td>
                                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Prezy Morin">
                                                                <img src="user/assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </td>
                                                    </tr><!-- end -->
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask5">
                                                                <label class="form-check-label ms-1" for="checkTask5">
                                                                    UI/UX Design
                                                                </label>
                                                              </div>
                                                        </td>
                                                        <td class="text-muted">22 Dec 2021</td>
                                                        <td><span class="badge badge-soft-warning">Progress</span></td>
                                                        <td>
                                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                                <img src="user/assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </td>
                                                    </tr><!-- end -->
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask6">
                                                                <label class="form-check-label ms-1" for="checkTask6">
                                                                    Projects Design
                                                                </label>
                                                              </div>
                                                        </td>
                                                        <td class="text-muted">31 Dec 2021</td>
                                                        <td><span class="badge badge-soft-danger">Pending</span></td>
                                                        <td>
                                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh William">
                                                                <img src="user/assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </td>
                                                    </tr><!-- end -->
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div>
                                        <div class="mt-3 text-center">
                                            <a href="javascript:void(0);" class="text-muted text-decoration-underline">Load More</a>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xxl-4">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Team Members</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Last 30 Days<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Yesterday</a>
                                                    <a class="dropdown-item" href="#">Last 7 Days</a>
                                                    <a class="dropdown-item" href="#">Last 30 Days</a>
                                                    <a class="dropdown-item" href="#">This Month</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        
                                        <div class="table-responsive table-card">
                                            <table class="table table-borderless table-nowrap align-middle mb-0"> 
                                                <thead class="table-light text-muted">
                                                    <tr>
                                                        <th scope="col">Member</th>
                                                        <th scope="col">Hours</th>
                                                        <th scope="col">Tasks</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>                                                 
                                                <tbody>
                                                    <tr>
                                                        <td class="d-flex">
                                                            <img src="user/assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                            <div>
                                                                <h5 class="fs-13 mb-0">Donald Risher</h5>
                                                                <p class="fs-12 mb-0 text-muted">Product Manager</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-0">110h : <span class="text-muted">150h</span></h6>
                                                        </td>
                                                        <td>
                                                            258
                                                        </td>
                                                        <td style="width:5%;">
                                                            <div id="radialBar_chart_1" data-colors='["--vz-primary"]' data-chart-series="50" class="apex-charts" dir="ltr"></div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="d-flex">
                                                            <img src="user/assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                            <div>
                                                                <h5 class="fs-13 mb-0">Jansh Brown</h5>
                                                                <p class="fs-12 mb-0 text-muted">Lead Developer</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-0">83h : <span class="text-muted">150h</span></h6>
                                                        </td>
                                                        <td>
                                                            105
                                                        </td>
                                                        <td>
                                                            <div id="radialBar_chart_2" data-colors='["--vz-primary"]' data-chart-series="45" class="apex-charts" dir="ltr"></div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="d-flex">
                                                            <img src="user/assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                            <div>
                                                                <h5 class="fs-13 mb-0">Carroll Adams</h5>
                                                                <p class="fs-12 mb-0 text-muted">Lead Designer</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-0">58h : <span class="text-muted">150h</span></h6>
                                                        </td>
                                                        <td>
                                                            75
                                                        </td>
                                                        <td>
                                                            <div id="radialBar_chart_3" data-colors='["--vz-primary"]' data-chart-series="75" class="apex-charts" dir="ltr"></div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="d-flex">
                                                            <img src="user/assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                            <div>
                                                                <h5 class="fs-13 mb-0">William Pinto</h5>
                                                                <p class="fs-12 mb-0 text-muted">UI/UX Designer</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-0">96h : <span class="text-muted">150h</span></h6>
                                                        </td>
                                                        <td>
                                                            85
                                                        </td>
                                                        <td>
                                                            <div id="radialBar_chart_4" data-colors='["--vz-primary"]' data-chart-series="25"  class="apex-charts" dir="ltr"></div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="d-flex">
                                                            <img src="user/assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                            <div>
                                                                <h5 class="fs-13 mb-0">Garry Fournier</h5>
                                                                <p class="fs-12 mb-0 text-muted">Web Designer</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-0">76h : <span class="text-muted">150h</span></h6>
                                                        </td>
                                                        <td>
                                                            69
                                                        </td>
                                                        <td>
                                                            <div id="radialBar_chart_5" data-colors='["--vz-primary"]' data-chart-series="60" class="apex-charts" dir="ltr"></div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="d-flex">
                                                            <img src="user/assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                            <div>
                                                                <h5 class="fs-13 mb-0">Susan Denton</h5>
                                                                <p class="fs-12 mb-0 text-muted">Lead Designer</p>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <h6 class="mb-0">123h : <span class="text-muted">150h</span></h6>
                                                        </td>
                                                        <td>
                                                            658
                                                        </td>
                                                        <td>
                                                            <div id="radialBar_chart_6" data-colors='["--vz-primary"]' data-chart-series="85" class="apex-charts" dir="ltr"></div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="d-flex">
                                                            <img src="user/assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                            <div>
                                                                <h5 class="fs-13 mb-0">Joseph Jackson</h5>
                                                                <p class="fs-12 mb-0 text-muted">React Developer</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-0">117h : <span class="text-muted">150h</span></h6>
                                                        </td>
                                                        <td>
                                                            125
                                                        </td>
                                                        <td>
                                                            <div id="radialBar_chart_7" data-colors='["--vz-primary"]' data-chart-series="70" class="apex-charts" dir="ltr"></div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xxl-4 col-lg-6">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Chat</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted"><i class="ri-settings-4-line align-middle me-1"></i>Setting <i class="mdi mdi-chevron-down ms-1"></i></span> 
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ri-user-2-fill align-bottom text-muted me-2"></i> View Profile</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i> Archive</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-mic-off-line align-bottom text-muted me-2"></i> Muted</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body p-0">
                                        <div class="chat-conversation p-3" data-simplebar style="height: 400px;">
                                            <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                                <li class="chat-list left">
                                                    <div class="conversation-list">
                                                        <div class="chat-avatar">
                                                            <img src="user/assets/images/users/avatar-2.jpg" alt="">
                                                        </div>
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content">Good morning 😊</p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                        </div>                
                                                    </div>            
                                                </li>
                                                <!-- chat-list -->

                                                <li class="chat-list right">
                                                    <div class="conversation-list">
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                        </div>                
                                                    </div>            
                                                </li>
                                                <!-- chat-list -->

                                                <li class="chat-list left">
                                                    <div class="conversation-list">
                                                        <div class="chat-avatar">
                                                            <img src="user/assets/images/users/avatar-2.jpg" alt="">
                                                        </div>
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content">Hey, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents 🎁.</p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                        </div>                
                                                    </div>            
                                                </li>
                                                <!-- chat-list -->

                                                <li class="chat-list right">
                                                    <div class="conversation-list">
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content">Wow that's great</p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                        </div>                
                                                    </div>            
                                                </li>
                                                <!-- chat-list -->

                                                <li class="chat-list left">
                                                    <div class="conversation-list">
                                                        <div class="chat-avatar">
                                                            <img src="user/assets/images/users/avatar-2.jpg" alt="">
                                                        </div>
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="message-img mb-0">
                                                                    <div class="message-img-list">
                                                                        <div>
                                                                            <a class="popup-img d-inline-block" href="user/assets/images/small/img-1.jpg">
                                                                                <img src="user/assets/images/small/img-1.jpg" alt="" class="rounded border">
                                                                            </a>
                                                                        </div>
                                                                        <div class="message-img-link">
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item dropdown">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="ri-more-fill"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="user/assets/images/small/img-1.jpg" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="message-img-list">
                                                                        <div>
                                                                            <a class="popup-img d-inline-block" href="user/assets/images/small/img-2.jpg">
                                                                                <img src="user/assets/images/small/img-2.jpg" alt="" class="rounded border">
                                                                            </a>
                                                                        </div>
                                                                        <div class="message-img-link">
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item dropdown">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="ri-more-fill"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="user/assets/images/small/img-2.jpg" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    
                                                            <div class="conversation-name"><small class="text-muted time">09:30 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                        </div>                
                                                    </div>            
                                                </li>
                                                <!-- chat-list -->
                                            </ul>
                                        </div>
                                        <div class="border-top border-top-dashed">
                                            <div class="row g-2 mx-3 mt-2 mb-3">
                                                <div class="col">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send float-end"></i></button>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xxl-4 col-lg-6">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Projects Status</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="dropdown-btn text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    All Time <i class="mdi mdi-chevron-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">All Time</a>
                                                    <a class="dropdown-item" href="#">Last 7 Days</a>
                                                    <a class="dropdown-item" href="#">Last 30 Days</a>
                                                    <a class="dropdown-item" href="#">Last 90 Days</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="prjects-status" data-colors='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.70", "--vz-primary-rgb, 0.50"]' class="apex-charts" dir="ltr"></div>
                                        <div class="mt-3">
                                            <div class="d-flex justify-content-center align-items-center mb-4">
                                                <h2 class="me-3 ff-secondary mb-0">258</h2>
                                                <div>
                                                    <p class="text-muted mb-0">Total Projects</p>
                                                    <p class="text-success fw-medium mb-0">
                                                        <span class="badge badge-soft-success p-1 rounded-circle"><i class="ri-arrow-right-up-line"></i></span> +3 New
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                                <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-success align-middle me-2"></i> Completed</p>
                                                <div>
                                                    <span class="text-muted pe-5">125 Projects</span>
                                                    <span class="text-success fw-medium fs-12">15870hrs</span>
                                                </div>
                                            </div><!-- end -->
                                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                                <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-primary align-middle me-2"></i> In Progress</p>
                                                <div>
                                                    <span class="text-muted pe-5">42 Projects</span>
                                                    <span class="text-success fw-medium fs-12">243hrs</span>
                                                </div>
                                            </div><!-- end -->
                                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                                <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-warning align-middle me-2"></i> Yet to Start</p>
                                                <div>
                                                    <span class="text-muted pe-5">58 Projects</span>
                                                    <span class="text-success fw-medium fs-12">~2050hrs</span>
                                                </div>
                                            </div><!-- end -->
                                            <div class="d-flex justify-content-between py-2">
                                                <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-danger align-middle me-2"></i> Cancelled</p>
                                                <div>
                                                    <span class="text-muted pe-5">89 Projects</span>
                                                    <span class="text-success fw-medium fs-12">~900hrs</span>
                                                </div>
                                            </div><!-- end -->
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div>  
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Velzon.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <div class="customizer-setting d-none d-md-block">
            <div class="btn-primary btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
                data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
            </div>
        </div>

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
                <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-4">
                        <h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
                        <p class="text-muted">Choose your layout</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                        class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Vertical</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                                        class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                        <span class="d-flex h-100 flex-column gap-1">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                                <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn"
                                        class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Two Column</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
                        <p class="text-muted">Choose Light or Dark Scheme.</p>

                        <div class="colorscheme-cardradio">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                            id="layout-mode-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Light</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check card-radio dark">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                            id="layout-mode-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-soft-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-soft-light d-block p-1"></span>
                                                        <span class="bg-soft-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
                            <p class="text-muted">Choose Fluid or Boxed layout.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-width"
                                            id="layout-width-fluid" value="fluid">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Fluid</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-width"
                                            id="layout-width-boxed" value="boxed">
                                        <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                            <span class="d-flex gap-1 h-100 border-start border-end">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Boxed</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Position</h6>
                            <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                            <div class="btn-group radio" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                                    value="fixed">
                                <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position"
                                    id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
                        <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light"
                                        value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark"
                                        value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
                            <p class="text-muted">Choose a size of Sidebar.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size"
                                            id="sidebar-size-default" value="lg">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size"
                                            id="sidebar-size-compact" value="md">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 bg-soft-primary rounded mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size"
                                            id="sidebar-size-small" value="sm">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size"
                                            id="sidebar-size-small-hover" value="sm-hover">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-view">
                            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
                            <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-style"
                                            id="sidebar-view-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Default</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-style"
                                            id="sidebar-view-detached" value="detached">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                    <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                                                </span>
                                                <span class="d-flex gap-1 h-100 p-1 px-2">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Detached</h5>
                                </div>
                            </div>
                        </div>
                        <div id="sidebar-color">
                            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Color</h6>
                            <p class="text-muted">Choose Ligth or Dark Sidebar Color.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar"
                                            id="sidebar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Light</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark"
                                            value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('user/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('user/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('user/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('user/assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('user/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
        <script src="{{asset('user/assets/js/plugins.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('user/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- projects js -->
        <script src="{{asset('user/assets/js/pages/dashboard-projects.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('user/assets/js/app.js')}}"></script>
    </body>

</html>