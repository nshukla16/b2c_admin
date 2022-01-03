@extends('layouts.defaultmain')
@section('content')

<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i>Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>
        </div>
        
    </div>
    <div class="contentborder pt-3">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        
        
        
        
        
        
        
        
        <div class="col-md-6 col-lg-3">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-truck text-secondary"></i>
                                </div>
                                <h5 class="my-3">Delivered</h5>
                                <div class="text-muted">15 New Packages</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="col-md-6 col-lg-3">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Ordered</h5>
                                <div class="text-muted">72 New Items</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-md-6 col-lg-3">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-bar-chart text-info"></i>
                                </div>
                                <h5 class="my-3">Reported</h5>
                                <div class="text-muted">50 Support New Cases</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-md-6 col-lg-3">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-cursor text-success"></i>
                                </div>
                                <h5 class="my-3">Arrived</h5>
                                <div class="text-muted">34 Upgraded Boxed</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-12 col-md-12">
            <div class="card widget">
                
                <div class="card-body">
                    <h6 class="card-title mb-4">Recent Products</h6>
                    <p class="text-muted">Products added today. Click <a href="#">here</a> for more details</p><div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                             <table class="table mt-4 table-custom table-lg mb-0 p-3 tables" style="margin-top: 15px !important;">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Product SNo.</th>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">1</span>
                                    </div>
                                </td>
                                <td><strong>srt-1001</strong></td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="bannerimg p-1">
                                                <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg" class="rounded banner-img" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Kurti</td>
                                <td><strong>₹ 500/-</strong></td>
                                <td>
                                    <!-- <span class="badge_active">Available</span> -->
                                    <div class="d-flex align-items-center justify-content-center">
                                        <select name="checkprodstatus" id="checkprodstatus" class="checkprodstatus form-select p-1 pe-0" style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;">
                                            <option id="available" class="ps-3" style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;" value="">Available</option>
                                            <option id="outofstock" value="Out Of Stock" style="width: 133px;background-color: #ea444447;padding: 5px 12px !important;color: #db2626 !important;font-weight: 700;font-size: 12px;border-color: #ea444447 !important;border-radius: 8px;">
                                                Out Of Stock </option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="productdelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">2</span>
                                    </div>
                                </td>
                                <td><strong>srt-1002</strong></td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="bannerimg p-1">
                                                <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg" class="rounded banner-img" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Ladies Kurti</td>
                                <td><strong>₹ 600/-</strong></td>
                                <td>
                                <div class="d-flex align-items-center justify-content-center">
                                        <select name="checkprodstatus" id="checkprodstatus" class="checkprodstatus form-select p-1 pe-0" style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;">
                                            <option id="available" class="ps-3" style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;" value="">Available</option>
                                            <option id="outofstock" value="Out Of Stock" style="width: 133px;background-color: #ea444447;padding: 5px 12px !important;color: #db2626 !important;font-weight: 700;font-size: 12px;border-color: #ea444447 !important;border-radius: 8px;">
                                                Out Of Stock </option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="productdelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">3</span>
                                    </div>
                                </td>
                                <td><strong>srt-1003</strong></td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="bannerimg p-1">
                                                <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg" class="rounded banner-img" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Ladies Kurti</td>
                                <td><strong>₹ 600/-</strong></td>
                                <td>
                                <div class="d-flex align-items-center justify-content-center">
                                        <select name="checkprodstatus" id="checkprodstatus" class="checkprodstatus form-select p-1 pe-0" style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;">
                                            <option id="available" class="ps-3" style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;" value="">Available</option>
                                            <option id="outofstock" value="Out Of Stock" style="width: 133px;background-color: #ea444447;padding: 5px 12px !important;color: #db2626 !important;font-weight: 700;font-size: 12px;border-color: #ea444447 !important;border-radius: 8px;">
                                                Out Of Stock </option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="productdelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">4</span>
                                    </div>
                                </td>
                                <td><strong>srt-1004</strong></td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="bannerimg p-1">
                                                <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg" class="rounded banner-img" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Ladies Kurti</td>
                                <td><strong>₹ 600/-</strong></td>
                                <td>
                                <div class="d-flex align-items-center justify-content-center">
                                        <select name="checkprodstatus" id="checkprodstatus" class="checkprodstatus form-select p-1 pe-0" style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;">
                                            <option id="available" class="ps-3" style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;" value="">Available</option>
                                            <option id="outofstock" value="Out Of Stock" style="width: 133px;background-color: #ea444447;padding: 5px 12px !important;color: #db2626 !important;font-weight: 700;font-size: 12px;border-color: #ea444447 !important;border-radius: 8px;">
                                                Out Of Stock </option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="productdelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                         
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
        
@stop