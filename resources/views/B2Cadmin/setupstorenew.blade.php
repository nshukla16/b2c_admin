<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Quickcell B2C Admin Panel</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="../../assets/images/favicon.png" /> -->

    <!-- Themify icons -->
    <!-- <link rel="stylesheet" href="../../dist/icons/themify-icons/themify-icons.css" type="text/cfoss"> -->

    <!-- Main style file -->
    <link rel="stylesheet" href="http://34.72.9.224/quickWebsite/b2c_admin/public/cssmain/app.min.css" type="text/css">

    <link rel="icon" href="http://34.72.9.224/quickWebsite/b2c_admin/img/mini_logo.png  " type="image/png">

    <!-- Second style file -->
    <link rel="stylesheet" href="http://34.72.9.224/quickWebsite/b2c_admin/public/cssmain/style.css" type="text/css">

    <link rel="stylesheet" href="http://34.72.9.224/quickWebsite/b2c_admin/public/css/colors/default.css  "
        id="colorSkinCSS">

    <!-- Bootstrap icons -->
    <link rel="stylesheet"
        href="http://34.72.9.224/quickWebsite/b2c_admin/public/iconsmain/bootstrap-icons-1.4.0/bootstrap-icons.min.css"
        type="text/css">
    <!-- font awesome CSS -->
    <link rel="stylesheet"
        href="http://34.72.9.224/quickWebsite/b2c_admin/public/vendors/font_awesome/css/all.min.css " />

    <!-- gijgo css -->
    <link rel="stylesheet" href="http://34.72.9.224/quickWebsite/b2c_admin/public/vendors/gijgo/gijgo.min.css " />

    <link rel="stylesheet" href="http://34.72.9.224/quickWebsite/b2c_admin/public/iconsmain/themify-icons.css " />

    <!-- style CSS -->
    <!-- <link rel="stylesheet" href="http://34.72.9.224/quickWebsite/b2c_admin/public/css/style.css " /> -->

</head>

<body class="auth login-wrapper">

    <!-- begin::shape-->
    <div class="background-shape"></div>
    <!-- end::shape -->
    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 ms-2">
                                <div class="ltf-block-logo d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="../../assets/images/logo.svg" alt="logo">
                                </div>
                                <div class="text-lg-start">
                                    <div class="logo">
                                        <img width="50" height="50"
                                            src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/b2clogo.png"
                                            alt="logo">
                                    </div>
                                    <h3 class="fw-bold mt-3">Setup your Store/Register</h3>
                                    <p class="text-muted">Fill some basic details to create your store.</p>
                                    <div class="register-terms mt-3">
                                        <p class="text-muted">Please have the following ready before you begin.</p>
                                        <ul class="text-muted text-start a px-3 mt-3">
                                            <li>Your bank account details for recieving payments.</li>
                                            <li>Tax(GST/PAN) details of your business.</li>
                                        </ul>
                                    </div>
                                </div>
                                <form method="get" id="form1" action="{{url('store-weblink')}}">
                                    <div class="card mt-4 mb-4">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="fullname" class="form-label">Your Full Name</label>
                                                    <input type="text" class="form-control" id="fullname"
                                                        placeholder="Enter your full name">
                                                </div>

                                                <div class="col-6">
                                                    <label for="emailid" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="emailid"
                                                        placeholder="Enter your email address">
                                                </div>
                                                <div class=" mt-3">
                                                    <label for="inputAddress" class="form-label">Firm Name</label>
                                                    <input type="text" class="form-control" id="firmname"
                                                        placeholder="Enter the Firm/business name as registered in GST/PAN">
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="inputAddress" class="form-label">Firm Address</label>
                                                    <textarea class="form-control" id="firmname"
                                                        placeholder="Enter the Firm address"></textarea>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <label for="inputState" class="form-label">State</label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected="">Choose State...</option>
                                                        <option>Delhi</option>
                                                        <option>Uttar Pradesh</option>
                                                        <option>Madhya Pradesh</option>
                                                        <option>Punjab</option>
                                                        <option>Bihar</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <label for="inputcity" class="form-label">City</label>
                                                    <select id="inputcity" class="form-select">
                                                        <option selected="">Choose City...</option>
                                                        <option>Delhi</option>
                                                        <option>Gwalior</option>
                                                        <option>Shipra</option>
                                                        <option>Mumbai</option>
                                                        <option>Patna</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <label for="inputpincode" class="form-label">Pincode</label>
                                                    <input type="text" class="form-control" id="inputpincode"
                                                        placeholder="Enter Pincode">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="card-title mb-2">Mode Of Business</h6>

                                                <p class="text-muted">Select your mode of business.</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- For Shipping -->
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="mb-3">
                                                                <div class="d-flex justify-content-start">

                                                                    <div class="form-check p-0">

                                                                        <label class="form-check-label bselectlabel"
                                                                            for="b2cmode">
                                                                            <input class="form-check-input bmode"
                                                                                type="radio" name="bmodeRadios"
                                                                                id="b2cmode" style="display:none;">
                                                                            <div class="d-flex justify-content-center gap-5 align-items-center modebusiness"
                                                                                id="b2cdiv">
                                                                                <div class="businesstext">
                                                                                    <h6 class="fw-bolder mb-1"> B2C</h6>
                                                                                    <span
                                                                                        style="color: #0077fe;font-size: 12px;">Business
                                                                                        To Client</span>
                                                                                </div>
                                                                                <div class="businessimg">
                                                                                    <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/imgmain/B2C.png"
                                                                                        alt="logo">
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check p-0">

                                                                        <label class="form-check-label bselectlabel"
                                                                            for="b2bmode">
                                                                            <input class="form-check-input bmode"
                                                                                type="radio" name="bmodeRadios"
                                                                                id="b2bmode" value="b2b"
                                                                                style="display:none;">
                                                                            <div class="ms-4 d-flex justify-content-center gap-5 align-items-center modebusiness"
                                                                                id="b2bdiv">
                                                                                <div class="businesstext">
                                                                                    <h6 class="fw-bolder mb-1"> B2B</h6>
                                                                                    <span
                                                                                        style="color: #0077fe;font-size: 12px;">Business
                                                                                        To Business</span>
                                                                                </div>
                                                                                <div class="businessimg">
                                                                                    <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/imgmain/B2B.png"
                                                                                        alt="b2bimg">
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>



                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <!-- For Shipping -->


                                                </div>
                                            </div>
                                            <h6 class="card-title mt-3">Seller Agreement</h6>
                                            <div class="form-check form-check-inline mt-2">
                                                <input type="checkbox" id="noshipping" name="shippingrates"
                                                    class="form-check-input" value="noshipping">
                                                <label class="form-check-label" for="noshipping">I have read and agree
                                                    to the Terms &amp; Conditions.

                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="getstarted d-flex align-items-center justify-content-between mt-4 ">
                                        <button style="box-shadow: 0 4px 15px 0 rgb(65 132 234 / 75%);"
                                            class="btn btn-primary"
                                            href="http://34.72.9.224/quickWebsite/b2c_admin">Next <i
                                                class="bi bi-arrow-right"
                                                style="padding-right:10px; margin-left: 22px;"></i></button> </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bundle scripts -->
    <script src="http://34.72.9.224/quickWebsite/b2c_admin/public/libsmain/bundle.js"></script>

    <!-- Main Javascript file -->
    <script src="http://34.72.9.224/quickWebsite/b2c_admin/public/jsmain/app.min.js"></script>



</body>

</html>