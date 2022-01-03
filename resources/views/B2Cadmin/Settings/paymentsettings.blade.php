@extends('layouts.defaultmain')
@section('content')
<!-- content -->
<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Payment Setup</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Settings
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Payment Setup</li>
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
                                    <span class="bi bi-person me-3"></span>Account Setup</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 ">
                <form method="get" id="form1" action="{{url('settings')}}">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Payments</h6>
                            <p class="mb-0">You can choose to accept digital payments via the providers below. Default
                                Setup of your account is on C.O.D. You can choose, the additional charges.</p>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <figure class="mb-0 me-3">
                                        <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/imgmain/razorpay.png"
                                            height="25px" width="100px" alt="...">
                                    </figure>
                                </div>
                                <div class="col-auto me-5">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" data-bs-toggle="collapse"
                                            href="#razorpayopen" id="razorpaycheck" name="razorpaycheck">
                                    </div>
                                </div>
                                <!-- <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="shiprocketcheck">
                                        </div> -->
                            </div>
                            <p class="mb-0 mt-4">Integrate payments with Razorpay. If you are not signed up. Click here
                                to <a href="#">Sign Up</a>.


                            </p>
                            <div class="row mt-4 collapse" id="razorpayopen" style="">

                                <div class="col-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="apikey" name="apikey"
                                            placeholder="Api Key">
                                        <label for="apikey">API Key</label>
                                    </div>
                                </div>

                                <div class="col-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="sharedsecret" name="sharedsecret"
                                            placeholder="Shared Secret">
                                        <label for="sharedsecret">Shared Secret</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row align-items-center ">
                                <div class="col">
                                    <h6 class="card-title mb-0">Cash On Delivery</h6>
                                </div>
                                <div class="col-auto me-5">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" data-bs-toggle="collapse"
                                            href="#codon" id="codcheck" name="codcheck">
                                    </div>
                                </div>
                                <!-- <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="shiprocketcheck">
                                        </div> -->
                            </div>
                            <div class="collapse" id="codon" style="">
                                <p class="mb-0 mt-3">As per Govt. regulations C.O.D amount cannot exceed <strong>
                                        <underline>10,000 ₹/-</underline>
                                    </strong> per order.
                                </p>
                                <div class="row mt-4">
                                    <div class="col-md-10">
                                        <h6 class="card-title mb-0">Cash On Delivery Charges</h6>
                                        <div class="mb-3 mt-3">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="noshipping" name="shippingrates"
                                                        class="form-check-input" value="noshipping">
                                                    <label class="form-check-label" for="noshipping">No Shipping
                                                        Charges</label>
                                                </div>
                                                <div class="form-check form-check-inline me-4">
                                                    <input type="radio" id="chargeperitem" name="shippingrates"
                                                        class="form-check-input" value="chargeperitem">
                                                    <label class="form-check-label" for="chargeperitem">Charge Per
                                                        Item</label>
                                                </div>
                                                <div class="form-check form-check-inline me-4">
                                                    <input type="radio" id="chargeperorder" name="shippingrates"
                                                        class="form-check-input" value="chargeperorder">
                                                    <label class="form-check-label" for="chargeperorder">Charge Per
                                                        Order</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4 shippingchargesdiv" style="display:none;">
                                            <div class="col-6" id="chargeperitemdiv">
                                                <div class="mb-3">
                                                    <div class="d-flex gap-1">
                                                        <span> Charge per Item </span><input type="number"
                                                            class="form-control chargeperitem ms-2 text-center"
                                                            id="chargeperitemnum" name="chargeperitemnum" placeholder=""
                                                            style="width: 79px;">
                                                        <span>₹/-</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6" id="chargeperorderdiv">
                                                <div class="mb-3">
                                                    <div class="d-flex gap-1">
                                                        <span> Charge per Order </span><input type="number"
                                                            class="form-control chargeperitem ms-2 text-center"
                                                            id="chargeperordernum" name="chargeperordernum"
                                                            placeholder="" style="width: 79px;">
                                                        <span>₹/-</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <div class="d-flex gap-1">
                                                        <span>Free above </span><input type="number"
                                                            class="form-control chargeperitem ms-2 text-center"
                                                            id="freeabove" name="freeabove" placeholder=""
                                                            style="width: 79px;">
                                                        <span>₹/-</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>



@stop