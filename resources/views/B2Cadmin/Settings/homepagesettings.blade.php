@extends('layouts.defaultmain')
@section('content')
<!-- content -->
<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Home Page Setup</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Settings
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Home Page Setup</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <button class="btn btn-primary btn-icon float-end mt-4" type="submit" form="form1">
                <i class="bi bi-plus-circle"></i> Save
            </button>
        </div>
    </div>
    <div class="contentborder pt-3">
        <div class="row">
            <div class="col-3">
                <div class="card sticky-top">
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column gap-2">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('userweblink') ? 'active' : '' }}  d-flex align-items-center"
                                    href="userweblink">
                                    <span class="bi bi-globe2 me-3"></span>Store Weblink</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('shipment-setting') ? 'active' : '' }} d-flex align-items-center"
                                    href="shipment-setting">
                                    <span class="bi bi-truck me-3"></span>Shipment Setup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('payment-setting') ? 'active' : '' }}"
                                    href="payment-setting">
                                    <span class="bi bi-wallet2 me-3"></span>Payment Setup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('account-setting') ? 'active' : '' }}"
                                    href="account-setting">
                                    <span class="bi bi-person me-3"></span>Profile Setup</a>
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link " href="home-setting">
                                    <i class="bi bi-file-earmark-richtext me-3"></i>Home Page Setup</a> -->
                                <a class="nav-link " href="home-setting">
                                    <span class="nav-link-icon">
                                        <i class="bi bi-file-earmark-richtext me-3"></i>
                                    </span>
                                    <span>Home Page Setup</span>
                                </a>
                                <ul style="
    padding-left: 21px;
    color: #666 !important;
">
                                    <li style="
    padding: 10px 6px;
    color: #000;
">
                                        <span class="nav-link-icon">
                                            <i class="bi bi-caret-right me-1"></i>
                                        </span><a class="nav-link {{ Request::is('newarrivals') ? 'active' : '' }}" href="{{url('newarrivals')}}" style="
    color: #666;
">New Arrivals</a>
                                    </li>
                                    <li style="
    padding: 10px 6px;
">
                                        <span class="nav-link-icon">
                                            <i class="bi bi-caret-right me-1"></i>
                                        </span><a class="nav-link {{ Request::is('fatured-products') ? 'active' : '' }}" href="{{url('featured-products')}}" style="
    color: #666;
">Featured Products</a>
                                    </li>
                                    <li style="
    padding: 10px 6px;
">
                                        <span class="nav-link-icon">
                                            <i class="bi bi-caret-right me-1"></i>
                                        </span><a href="http://34.72.9.224/quickWebsite/b2c_admin/add" style="
    color: #666;
">Best Sellers</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li>
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
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 ">
                <form method="get" id="form1" action="http://34.72.9.224/quickWebsite/b2c_admin/settings">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">New Arrivals</h6>

                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Featured Products</h6>

                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Best Sellers</h6>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>



@stop