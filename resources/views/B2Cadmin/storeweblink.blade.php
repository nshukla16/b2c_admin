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
    <!-- <link rel="stylesheet" href="../../dist/icons/themify-icons/themify-icons.css" type="text/css"> -->

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
                    <div class="col" style="min-height:450px;">
                        <div class="row">
                            <div class="col-md-12 ms-2">
                                <div class="text-lg-start">
                                    <div class="logo">
                                        <img width="50" height="50"
                                            src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/b2clogo.png"
                                            alt="logo">
                                    </div>
                                    <h3 class="fw-bold mt-3">Store Weblink</h3>
                                    <p class="text-muted">Your website will be live to this link.</p>

                                </div>
                                <form method="get" id="storeweblinkform"
                                    action="http://34.72.9.224/quickWebsite/b2c_admin/userweblink">
                                    <div class="d-flex gap-1 mt-4 align-items-center">
                                        <span>www.</span>
                                        <input type="text" class="form-control text-center storeweblink"
                                            id="storeweblink" name="storeweblink" placeholder="" autocomplete="off"
                                            autofocus>
                                        <span>.bechobazar.com</span>
                                        <button class="btn float-start p-0 storeweblnkresetbtn ms-4" type="button">
                                            <i class="bi bi-x-circle text-danger"></i> Clear</button>
                                        <button class="btn float-start p-0 generatelink ms-4" type="button">
                                            <i class="bi bi-plus-circle text-success"></i> Genereate Weblink</button>
                                    </div>
                                </form>

                                <p class="mb-0 mt-3 text-success">Link is Available<i
                                        class="bi bi-patch-check-fill ms-2">
                                    </i>
                                </p>
                                <p class="mb-0 mt-3 text-danger">Sorry! Link is not Available; Try another.<i
                                        class="bi bi-x-circle-fill ms-2">
                                    </i>
                                </p>
                                <p class="mb-0 mt-4 ">Your Store Website link</p>
                                <p class="mb-0 mt-1 text-primary h5"><i
                                        class="bi bi-globe2 me-2"></i>www.stylehub.bechbazar.com</p>


                                <div class="getstarted d-flex align-items-center justify-content-between mt-4 ">
                                    <button style="box-shadow: 0 4px 15px 0 rgb(65 132 234 / 75%);"
                                        class="btn btn-primary" href="http://34.72.9.224/quickWebsite/b2c_admin">Create
                                        Store<i class="bi bi-arrow-right"
                                            style="padding-right:10px; margin-left: 22px;"></i></button>
                                    <a href="#" class="d-flex align-items-center"> <i class="bi bi-skip-backward-circle"
                                            style="padding-right:10px;margin-left: 22px;font-size: 18px;"></i>Skip For
                                        Now
                                    </a>
                                </div>
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

    <script type="text/javascript">
        //  On Store weblink
        $(document).ready(function () {
            $('.storeweblnkresetbtn').click(function () {
                $('.storeweblink').val('')
                $('.storeweblink').focus();
            });
        });
    </script>

</body>

</html>