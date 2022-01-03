@extends('layouts.defaultmain')
@section('content')
<!-- content -->
<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Store Weblink</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Settings
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Store Weblink</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <button class="btn btn-primary btn-icon float-end mt-4" type="submit" form="storeweblinkform">
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
                                    <span class="bi bi-person me-3"></span>Account Setup</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 ">
                <form method="get" id="storeweblinkform" action="{{url('userweblink')}}">
                    <div class="card mb-4">
                        <div class="card-body">
                            <figure class="mb-3 me-3">
                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/b2clogo.png"
                                    height="40px" width="40px" alt="...">
                            </figure>
                            <h6 class="card-title ">Store Weblink</h6>
                            <p class="mb-0 text-muted small">Your website will be live to this link.
                            </p>
                            <div class="d-flex gap-1 mt-4 align-items-center">
                                <span>www.</span><input type="text" class="form-control text-center storeweblink"
                                    id="userstoreweblink" name="userstoreweblink" placeholder="" autocomplete="off" autofocus>
                                <span>.bechobazar.com</span>
                                <button class="btn float-start p-0 userweblnkresetbtn ms-4" type="button" >
                                    <i class="bi bi-x-circle text-danger"></i> Clear</button>
                                    <button class="btn float-start p-0 generatelink ms-4" type="button">
                                     <i class="bi bi-plus-circle text-success"></i> Genereate Weblink</button>
                                </div>
                            <p class="mb-0 mt-3 text-success">Link is Available<i class="bi bi-patch-check-fill ms-2">
                                </i>
                            </p>
                            <p class="mb-0 mt-3 text-danger">Sorry! Link is not Available<i class="bi bi-x-circle-fill ms-2">
                                </i>
                            </p>
                            <p class="mb-0 mt-3 ">Your Store Website link</p>
                            <p class="mb-0 mt-1 text-primary h5">www.stylehub.bechbazar.com</p>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <figure class="mb-3 me-3">
                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/b2clogo.png" height="40px" width="40px" alt="...">
                            </figure>
                            <h6 class="card-title ">Store Weblink</h6>
                            <p class="mb-0 mt-4 ">Your Store Website link</p>
                            <p class="mb-0 mt-1 text-primary h5">www.stylehub.bechbazar.com</p>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>



@stop