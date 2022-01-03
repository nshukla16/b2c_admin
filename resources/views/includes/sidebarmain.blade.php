<!-- menu -->
<div class="menu">
    <div class="menu-header d-flex justify-content-center">
        <a href="index-2.html" class="menu-header-logo">
            <img src="{{ asset('public/img/b2clogo.png') }}" alt="logo">
        </a>
        <a href="index-2.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <!-- <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="../../assets/images/user/man_avatar3.jpg" class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">Timotheus Bendan</div>
                    <small class="text-muted">Sales Manager</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
                <a href="login.html" class="dropdown-item d-flex align-items-center text-danger" target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div> -->
        <ul class="text-center">
            <li class="menu-divider">Quickcell B2C Admin</li>
            <li>
                <a href="{{url('home')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url('categories')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-diagram-2"></i>
                    </span>
                    <span>Categories</span>
                </a>
            </li>
            <!-- <li>
                <a href="{{url('sub-categories')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-layer-backward"></i>
                    </span>
                    <span>Sub-Category</span>
                </a>
            </li> -->
            <li>
                <a href="{{url('banners')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-tv"></i>
                    </span>
                    <span>Banners</span>
                </a>
            </li>
            <li>
                <a href="{{url('brands')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bookmark-star"></i>
                    </span>
                    <span>Brands</span>
                </a>
            </li>
            <li>
                <a href="{{url('discounts')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-percent"></i>
                    </span>
                    <span>Discount</span>
                </a>
            </li>
            <li>
                <a href="{{url('attributes')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-list-stars"></i>
                    </span>
                    <span>Attributes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-box-seam"></i>
                    </span>
                    <span>Products</span>
                </a>
                <ul>
                    <li>
                        <a href="{{url('product_list')}}">Products List</a>
                    </li>
                    <li>
                        <a href="{{url('add')}}">Add Product</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('order')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-basket"></i>
                    </span>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="{{url('shipment-setting')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-gear"></i>
                    </span>
                    <span>Settings</span>
                </a>

            </li>
            <li>
                <a href="{{url('faq')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-headset"></i>
                    </span>
                    <span>Help & Support</span>
                </a>

            </li>
            <!-- <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
                <ul>
                    <li>
                        <a href="orders.html">List</a>
                    </li>
                    <li>
                        <a href="order-detail.html">Detail</a>
                    </li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
                <ul>
                    <li>
                        <a href="product-list.html">List
                            View</a>
                    </li>
                    <li>
                        <a class="active" href="product-grid.html">Grid
                            View</a>
                    </li>
                    <li>
                        <a href="product-detail.html">Product Detail</a>
                    </li>
                    <li>
                        <a href="shopping-cart.html">Shopping
                            Cart</a>
                    </li>
                    <li>
                        <a href="checkout.html">Checkout</a>
                    </li>
                </ul>
            </li> -->

        </ul>
    </div>
</div>
<!-- ./  menu -->


<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
        <div class="menu-toggle-btn">
            <!-- Menu close button for mobile devices -->
            <a href="#">
                <i class="bi bi-list"></i>
            </a>
        </div>
        <!-- Logo -->
        <a href="index-2.html" class="logo">
            <img width="100" src="{{ asset('public/img/b2clogo.png') }}" alt="logo">
        </a>
        <!-- ./ Logo -->
        <!-- <div class="page-title">Products</div> -->

        <!-- OLD HEADER STARTS -->
        <!-- <form class="search-form">
            <div class="input-group">
                <button class="btn btn-outline-light" type="button" id="button-addon1">
                    <i class="bi bi-search"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search..."
                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                <a href="#" class="btn btn-outline-light close-header-search-bar">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </form>
        <div class="header-bar ms-auto">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                        <i class="bi bi-bell icon-lg"></i>
                    </a>
                </li>
            </ul>
        </div> -->
        <!-- OLD HEADER ENDS -->


        <!-- New Header Starts -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <!-- <label class="switch_toggle d-none d-lg-block" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="slider round open_miniSide"></div>
                        </label> -->

                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="serach_field-area d-flex align-items-center">
                                <div class="search_inner">
                                    <form action="#">
                                        <div class="search_field">
                                            <input type="text" placeholder="Search here...">
                                        </div>
                                        <button class="close_search"> <i class="bi bi-search"></i> </button>
                                    </form>
                                </div>

                            </div>

                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <!-- <li>
                                    <div class="serach_button">
                                        <i class="ti-search"></i>
                                        <div class="serach_field-area d-flex align-items-center">
                                            <div class="search_inner">
                                                <form action="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search here..." >
                                                    </div>
                                                    <button class="close_search"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                            <span class="f_s_14 f_w_400 ml_25 white_text text_white" >Apps</span>
                                        </div>
                                    </div>
                                </li> -->
                                <li>
                                    <a class="bell_notification_clicker" href="#"> <img
                                            src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/menu-icon/4.svg"
                                            title="All Orders" alt="All Orders" name="All Orders">
                                        <!-- <div class="nav_title">
                                        <p>Orders</p>
                                    </div> -->
                                        <span>2</span>
                                    </a>

                                    <!-- Menu_NOtification_Wrap  -->

                                    <!--/ Menu_NOtification_Wrap  -->
                                </li>
                                <li>
                                    <a class="" href="#"> <img
                                            src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/menu-icon/9.svg"
                                            title="Inventory" alt="Inventory" name="Inventory">
                                        <!-- <div class="nav_title">
                                        <p>Inventory</p>
                                    </div> -->
                                        <span>18</span>
                                    </a>

                                    <!-- Menu_NOtification_Wrap  -->

                                    <!--/ Menu_NOtification_Wrap  -->
                                </li>
                                <li>
                                    <a class="bell_notification_clicker" href="#"> <img
                                            src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/icon/bell.svg"
                                            title="Notifications" alt="Notifications" name="Notifications">
                                        <!-- <div class="nav_title">
                                        <p>Inventory</p>
                                    </div> -->
                                        <span>18</span>
                                    </a>

                                    <!-- Menu_NOtification_Wrap  -->

                                    <!--/ Menu_NOtification_Wrap  -->
                                </li>

                                <!-- <li>
                                <a class="CHATBOX_open" href="#"> <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/icon/msg.svg"
                                        alt=""> <span>2</span> </a>
                            </li> -->
                            </div>
                            <div class="profile_info">
                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name pb-2">
                                        <p>Rohan Garments</p>

                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="http://34.72.9.224/quickWebsite/b2c_admin/logout">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Header Ends -->



        <!-- Header mobile buttons -->
        <div class="header-mobile-buttons">
            <a href="#" class="search-bar-btn">
                <i class="bi bi-search"></i>
            </a>
            <a href="#" class="actions-btn">
                <i class="bi bi-three-dots"></i>
            </a>
        </div>
        <!-- ./ Header mobile buttons -->
    </div>
    <!-- ./ header -->