@extends('layouts.defaultmain')
@section('content')

<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Banner List</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Banner List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <button data-bs-toggle="modal" data-bs-target="#add_banner" class="btn btn-primary btn-icon float-end mt-4">
                <i class="bi bi-plus-circle"></i> Add Banner
            </button>
        </div>
    </div>

    <div class="contentborder pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="bannerdatatable" class="table mt-4 table-custom table-lg mb-0 p-3 tables"
                        style="margin-top: 15px !important;">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Banner Image</th>
                                <th>Banner Name</th>
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
                                            <div class="bannerimg p-1">
                                                <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg"
                                                    class="rounded banner-img" width="80" alt="...">
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="bannerdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="bannerdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="bannerdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="bannerdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="bannerdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="bannerdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="bannerdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="bannerdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
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

<!-- Add Banner Name Modal -->
<div class="modal fade " id="add_banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating  mb-3">
                        <select class="form-select" id="bannername" aria-label="Floating label select example">
                            <!-- <option value="">Discount Type</option> -->
                            <option value="topbanner">Top Banner</option>
                            <option value="videobanner">Video Banner</option>
                            <option value="discountbanner">Discount Banner</option>
                        </select>
                        <label for="bannername">Banner Name </label>
                    </div>
                    <div class="form-group col-12">
                        <!-- <label>Category Image</label> -->
                        <input class="form-control" type="file" name="banner_image" id="banner_image"
                            data-bv-field="banner_image" accept="image/png, image/gif, image/jpeg">
                    </div>
                </form>

                <div class="d-flex justify-content-center mt-4">
                    <div class="addbannerimg p-1">
                        <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                            class="rounded banner-img" alt="..." width="150">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <video class="rounded mx-auto d-block mt-3"
                        style="width: 12rem;box-shadow: 0px 7px 14px rgb(80 140 244 / 10%);"
                        src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/banner/16273880770SampleVideo_1280x720_1mb.mp4"
                        controls="controls" preload="metadata"></video>
                </div>
                <div class="form-floating mt-3 discountslabdiv" style="display:none;">
                    <select class="form-select" id="discountslab" aria-label="Floating label select example"
                        multiple="multiple" data-select-search="true">
                        <option value="">Select Discount Slab</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>

                    </select>
                    <label for="discountslab">Discount Slab</label>
                    <!-- <label for="discountslab">Discount Slab</label> -->
                </div>

                <!-- <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <button data-bs-toggle="modal" data-bs-target="#add_bannertargetproduct"
                            class="btn btn-primary btn-icon mt-4 ">
                            <i class="bi bi-plus-circle"></i> Target Products
                        </button>
                    </div>
                </div> -->
                <div class="form-floating mt-4 targetproductdiv">
                    <select class="form-select" id="targetproductdiv" aria-label="Floating label select example">
                        <optgroup label="Mens Wear">
                            <option>
                                Blue Jeans
                            </option>
                            <option>
                                Tracker Pants
                            </option>
                        </optgroup>
                        <optgroup label="Women Wear">
                            <option>
                                Blue Jeans
                            </option>
                            <option>
                                Tracker Pants
                            </option>
                        </optgroup>
                    </select>
                    <label for="targetproductdiv">Select Single Prodct</label>
                    <!-- <label for="discountslab">Discount Slab</label> -->
                </div>
                <!-- <div class="form-floating mt-3 targetmultiproductdiv">
                    <select class="form-select" id="targetmultiproductdiv" aria-label="Floating label select example">
                        <optgroup label="Mens Wear">
                            <option>
                                Blue Jeans
                            </option>
                            <option>
                                Tracker Pants
                            </option>
                        </optgroup>
                        <optgroup label="Women Wear">
                            <option>
                                Blue Jeans
                            </option>
                            <option>
                                Tracker Pants
                            </option>
                        </optgroup>
                    </select>
                    <label for="targetproductdiv"> Product Lists</label>
                </div> -->

                <!-- For Product Showing -->
                <!-- <div class="row">
                    <label for="floatingtitle">Mens Wear</label>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="floatingtitle">Womens Wear</label>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Add Banner Name Modal -->

<!--Target Product Modal -->
<div class="modal fade " id="add_bannertargetproduct" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-group col-12">
                        <select id="modalpopupatt" class="form-control" multiple="multiple">
                            <option value="0" disabled>Select All</option>
                            <option value="Os1" data-badge="">Option1</option>
                            <option value="Os2" data-badge="">Option2</option>
                            <option value="Os3" data-badge="">Option3</option>
                            <option value="Os4" data-badge="">Option4</option>
                            <option value="O5s" data-badge="">Option5</option>
                            <option value="O6s" data-badge="">Option6</option>
                            <option value="O7s" data-badge="">Option7</option>
                            <option value="O8s" data-badge="">Option8</option>
                            <option value="O9s" data-badge="">Option9</option>
                            <option value="O1s0" data-badge="">Option10</option>
                            <option value="O1s1" data-badge="">Option11</option>
                            <option value="O1s2" data-badge="">Option12</option>
                            <option value="O13s" data-badge="">Option13</option>
                        </select>
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
<!-- /Target Product Modal -->

<!-- Edit Banner Name Modal -->
<div class="modal fade " id="edit_banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating  mb-3">
                        <select class="form-select" id="editbannername" aria-label="Floating label select example">
                            <!-- <option value="">Discount Type</option> -->
                            <option value="topbanner">Top Banner</option>
                            <option value="videobanner">Video Banner</option>
                            <option value="discountbanner">Discount Banner</option>
                        </select>
                        <label for="editbannername">Banner Name </label>
                    </div>
                    <div class="form-group col-12">
                        <!-- <label>Category Image</label> -->
                        <input class="form-control" type="file" name="editbanner_image" id="editbanner_image"
                            data-bv-field="banner_image" accept="image/png, image/gif, image/jpeg">
                    </div>
                </form>

                <div class="d-flex justify-content-center mt-4">
                    <div class="addbannerimg p-1">
                        <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/img/products/img-1.png"
                            class="rounded banner-img" alt="..." width="150">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <video class="rounded mx-auto d-block mt-3"
                        style="width: 12rem;box-shadow: 0px 7px 14px rgb(80 140 244 / 10%);"
                        src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/banner/16273880770SampleVideo_1280x720_1mb.mp4"
                        controls="controls" preload="metadata"></video>
                </div>
                <div class="form-floating mt-3 editdiscountslabdiv" style="display:none;">
                    <select class="form-select editdiscountslab" id="editdiscountslab" aria-label="Floating label select example"
                        multiple="multiple" data-select-search="true">
                        <option value="">Select Discount Slab</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>

                    </select>
                    <label for="editdiscountslab">Discount Slab</label>
                    <!-- <label for="discountslab">Discount Slab</label> -->
                </div>

                <!-- <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <button data-bs-toggle="modal" data-bs-target="#add_bannertargetproduct"
                            class="btn btn-primary btn-icon mt-4 ">
                            <i class="bi bi-plus-circle"></i> Target Products
                        </button>
                    </div>
                </div> -->
                <div class="form-floating mt-4 edittargetproductdiv">
                    <select class="form-select" id="edttargetproductdiv" aria-label="Floating label select example">
                        <optgroup label="Mens Wear">
                            <option>
                                Blue Jeans
                            </option>
                            <option>
                                Tracker Pants
                            </option>
                        </optgroup>
                        <optgroup label="Women Wear">
                            <option>
                                Blue Jeans
                            </option>
                            <option>
                                Tracker Pants
                            </option>
                        </optgroup>
                    </select>
                    <label for="targetproductdiv">Select Single Prodct</label>
                    <!-- <label for="discountslab">Discount Slab</label> -->
                </div>
                <!-- <div class="form-floating mt-3 targetmultiproductdiv">
                    <select class="form-select" id="targetmultiproductdiv" aria-label="Floating label select example">
                        <optgroup label="Mens Wear">
                            <option>
                                Blue Jeans
                            </option>
                            <option>
                                Tracker Pants
                            </option>
                        </optgroup>
                        <optgroup label="Women Wear">
                            <option>
                                Blue Jeans
                            </option>
                            <option>
                                Tracker Pants
                            </option>
                        </optgroup>
                    </select>
                    <label for="targetproductdiv"> Product Lists</label>
                </div> -->

                <!-- For Product Showing -->
                <!-- <div class="row">
                    <label for="floatingtitle">Mens Wear</label>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="floatingtitle">Womens Wear</label>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg" class="rounded"
                                        width="30" alt="...">
                                    <label class="form-check-label" for="categoryCheck1">
                                        Jeans 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Banner Name Modal -->
@stop