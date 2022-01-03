@extends('layouts.defaultmain')
@section('content')

<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Brands List</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Brands List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <button data-bs-toggle="modal" data-bs-target="#add_brand" class="btn btn-primary btn-icon float-end mt-4">
                <i class="bi bi-plus-circle"></i> Add Brand
            </button>
        </div>
    </div>

    <div class="contentborder pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-md-flex gap-4 align-items-center">
                                <div class="d-md-flex gap-4 align-items-center">
                                    <form class="mb-3 mb-md-0">
                                        <div class="row g-3">
                                            <div class="col-md-3">
                                                <select class="form-select">
                                                    <option>Sort by</option>
                                                    <option value="desc">Desc</option>
                                                    <option value="asc">Asc</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-select">
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="40">40</option>
                                                    <option value="50">50</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search Category">
                                                    <button class="btn btn-outline-light" type="button">
                                                        <i class="bi bi-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"
                                        aria-haspopup="true" aria-expanded="false">Actions</a>
                                    <div class="dropdown-menu dropdown-menu-end" style="margin: 0px;">
                                        <a href="#" class="dropdown-item">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- 
                    <div class="table-responsive mt-4" tabindex="1" style="overflow: hidden; outline: none;">
                        <table class="table table-custom table-lg mb-0 p-3 tables" id="customers">
                            <thead>
                                <tr>
                                    <th>
                                        <input class="form-check-input select-all" type="checkbox"
                                            data-select-all-target="#customers" id="defaultCheck1">
                                    </th>
                                    <th>S.No.</th>
                                    <th>Category Image</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                    <div class="avatar avatar-info">
                                            <span class="avatar-text rounded-circle">1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('public/img/products/img-1.png') }}" class="rounded" width="80"
                                                alt="...">
                                        </a>
                                    </td>
                                    <td>Shoes</td>
                                    <td>
                                        <span class="badge_active">Active</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex">
                                            <div class="dropdown ms-auto">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Show</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit_category" class="dropdown-item">Edit</a>
                                                    <a href="#" onclick="branddelconfirmation(event)" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                    <div class="avatar avatar-info">
                                            <span class="avatar-text rounded-circle">2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('public/img/products/02.png') }}" class="rounded" width="80"
                                                alt="...">
                                        </a>
                                    </td>
                                    <td>Shoes</td>
                                    <td>
                                        <span class="badge_inactive">Inactive</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex">
                                            <div class="dropdown ms-auto">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Show</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" onclick="branddelconfirmation(event)" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                    <div class="avatar avatar-info">
                                            <span class="avatar-text rounded-circle">3</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('public/img/products/img-1.png') }}" class="rounded" width="80"
                                                alt="...">
                                        </a>
                                    </td>
                                    <td>Shoes</td>
                                    <td>
                                        <span class="badge_inactive">Inactive</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex">
                                            <div class="dropdown ms-auto">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Show</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" onclick="branddelconfirmation(event)" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                    <div class="avatar avatar-info">
                                            <span class="avatar-text rounded-circle">4</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('public/img/products/02.png') }}" class="rounded" width="80"
                                                alt="...">
                                        </a>
                                    </td>
                                    <td>Shoes</td>
                                    <td>
                                        <span class="badge_inactive">Inactive</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex">
                                            <div class="dropdown ms-auto">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Show</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" onclick="branddelconfirmation(event)" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                    <div class="avatar avatar-info">
                                            <span class="avatar-text rounded-circle">5</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('public/img/products/img-1.png') }}" class="rounded" width="80"
                                                alt="...">
                                        </a>
                                    </td>
                                    <td>Shoes</td>
                                    <td>
                                        <span class="badge_inactive">Inactive</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex">
                                            <div class="dropdown ms-auto">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Show</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" onclick="branddelconfirmation(event)" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <nav class="mt-4" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav> -->

                    <table id="branddatatable" class="table mt-4 table-custom table-lg mb-0 p-3 tables"
                        style="margin-top: 15px !important;">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Brand Image</th>
                                <th>Brand Name</th>
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
                                <!-- Previous Image style -->
                                <!-- <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="	http://34.72.9.224/quickWebsite/b2b_admin/public/images/brand/1625202439IMG_7272%20(1).jpg" class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td> -->
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                                                    class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Reebok Shoes</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_brand" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="branddelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">2</span>
                                    </div>
                                </td>
                                <!-- <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="	http://34.72.9.224/quickWebsite/b2b_admin/public/images/brand/_b2611dae6db7f9b00846e4aab85292ba.jpg" class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td> -->
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="{{ asset('public/img/products/02.png') }}" class="rounded"
                                                    width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Nike Shoes</td>
                                <td>
                                    <span class="badge_inactive">Inactive</span>
                                </td>
                                
                               <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_brand" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="branddelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">3</span>
                                    </div>
                                </td>
                                <!-- Previous Image style -->
                                <!-- <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="	http://34.72.9.224/quickWebsite/b2b_admin/public/images/brand/1625202439IMG_7272%20(1).jpg" class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td> -->
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                                                    class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Nike Shoes</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                               <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_brand" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="branddelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">4</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                                                    class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Nike Shoes</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                               <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_brand" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="branddelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">5</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                                                    class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Nike Shoes</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                               <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_brand" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="branddelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">6</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                                                    class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Nike Shoes</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                               <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_brand" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="branddelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">7</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                                                    class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Nike Shoes</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                               <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_brand" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="branddelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar-info">
                                        <span class="avatar-text rounded-circle">8</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div class="imgcircle-shadow">
                                                <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                                                    class="rounded" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Nike Shoes</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                               <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_brand" class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="branddelconfirmation(event)" class="btn btn-outline-danger flex-shrink-0 ms-2"><i class="bi bi-trash"></i></a>
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

<!-- Add Brand Name Modal -->
<div class="modal fade " id="add_brand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="modalnewbrand"
                            placeholder="Create New Brand">
                        <label for="modalnewbrand">Create New Brand</label>
                    </div>
                    <div class="form-group col-12">
                        <!-- <label>Category Image</label> -->
                        <input class="form-control" type="file" name="brand_image" id="brand_image"
                            data-bv-field="brand_image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Add Brand Name Modal -->

<!-- Edit Brand Name Modal -->
<div class="modal fade " id="edit_brand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="modaleditbrand"
                            placeholder="Edit Brand Name">
                        <label for="modaleditbrand">Brand Name</label>
                    </div>
                    <div class="form-group col-12">
                        <input class="form-control" type="file" name="editbrand_image" id="editbrand_image"
                            data-bv-field="brand_image">
                    </div>
                </form>
                <img class="rounded mx-auto d-block mt-3"
                    style="width: 12rem;box-shadow: 0px 7px 14px rgb(80 140 244 / 10%);"
                    src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png" alt="...">
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Brand Name Modal -->
@stop