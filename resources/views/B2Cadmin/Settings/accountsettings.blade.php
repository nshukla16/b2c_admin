@extends('layouts.defaultmain')
@section('content')
<!-- content -->
<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Profile Setup</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Settings
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Setup</li>
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
                                <a class="nav-link " href="home-setting">
                                    <i class="bi bi-file-earmark-richtext me-3"></i>Home Page Setup</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 ">
                <form method="get" id="form1" action="http://34.72.9.224/quickWebsite/b2c_admin/settings">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Profile Setup</h6>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="profilename" class="form-label">Your Full Name</label>
                                    <input type="text" class="form-control" id="profilename"
                                        placeholder="Enter your full name">
                                </div>

                                <div class="col-md-5">
                                    <label for="profilephone" class="form-label">Your Phone Number</label>
                                    <input type="text" class="form-control" id="profilephone"
                                        placeholder="Enter your full name" value="7840006024" disabled="">
                                </div>
                                <div class="col-md-5 mt-3">
                                    <label for="profileemail" class="form-label">Your Email Id</label>
                                    <input type="text" class="form-control" id="profileemail"
                                        placeholder="Enter your email id">
                                </div>
                                <div class="col-md-5 mt-3">
                                    <label for="profileformlogo" class="form-label">Your Firm Logo</label>

                                    <input class="form-control" type="file" id="profileformlogo">
                                </div>
                                <div class="col-10 mt-3">
                                    <label for="profilefirmname" class="form-label">Firm Name</label>
                                    <input type="text" class="form-control" id="profilefirmname"
                                        placeholder="Enter the Firm/business name as registered in GST/PAN">
                                </div>
                                <div class="col-10 mt-3">
                                    <label for="profilefirmAddress" class="form-label">Firm Address</label>
                                    <textarea class="form-control" id="profilefirmAddress"
                                        placeholder="Enter the Firm address"></textarea>
                                </div>
                                <div class="col-md-5 mt-3">
                                    <label for="profilefirmstate" class="form-label">State</label>
                                    <select id="profilefirmstate" class="form-select">
                                        <option selected="">Choose State...</option>
                                        <option>Delhi</option>
                                        <option>Uttar Pradesh</option>
                                        <option>Madhya Pradesh</option>
                                        <option>Punjab</option>
                                        <option>Bihar</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mt-3">
                                    <label for="profilefirmcity" class="form-label">City</label>
                                    <select id="profilefirmcity" class="form-select">
                                        <option selected="">Choose City...</option>
                                        <option>Delhi</option>
                                        <option>Gwalior</option>
                                        <option>Shipra</option>
                                        <option>Mumbai</option>
                                        <option>Patna</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mt-3">
                                    <label for="profilefirmpincode" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="profilefirmpincode"
                                        placeholder="Enter Pincode">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title mb-4">GST Details</h6>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- For Shipping -->
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-start">
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="nogst" name="gstdetails"
                                                            class="form-check-input" value="nogst">
                                                        <label class="form-check-label" for="nogst">I don't have
                                                            GST.</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="havegst" name="gstdetails"
                                                            class="form-check-input" value="havegst">
                                                        <label class="form-check-label" for="havegst">I have
                                                            GST.</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mt-4 " id="gstdiv" style="display: none;">
                                                <div class="col-12" id="gstnumber">
                                                    <div class="mb-3">
                                                        <div class="d-flex gap-1">
                                                            <span>GST Number</span><input type="text"
                                                                class="form-control chargeperitem ms-2 text-center"
                                                                id="gstnum" name="gstnum" placeholder=""
                                                                style="width: 181px;">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input type="checkbox" id="authorizegstcheck"
                                                            name="authorizegstcheck" class="form-check-input" checked> 

                                                        <label class="form-check-label" for="authorizegstcheck">
                                                            <p>I authorise <input type="text" id="authorizeperson"
                                                                    name="authorizeperson"
                                                                    class="form-control chargeperitem ms-2 text-center"
                                                                    value="bechobazar.com"
                                                                    style="width: 181px;display: inline-block;"
                                                                    disabled=""> to
                                                                use my Account details to function my account and
                                                                for other purposes required by<input type="text"
                                                                    id="authorizeperson2" name="authorizeperson2"
                                                                    class="form-control chargeperitem ms-2 text-center"
                                                                    style="width: 181px;display: inline-block;"
                                                                    value="bechobazaar.com" disabled=""></p>
                                                        </label></div>
                                                    <p class="text-danger"><i class="bi bi-info-circle-fill ">
                                                        </i>Unchecking the above may lead your
                                                        account to not work.
                                                    </p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- For Shipping -->


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