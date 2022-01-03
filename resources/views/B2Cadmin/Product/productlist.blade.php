@extends('layouts.defaultmain')
@section('content')

<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Product List</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Product List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <a href="{{url('add')}}" class="btn btn-primary btn-icon float-end mt-4">
                <i class="bi bi-plus-circle"></i> Add Product
            </a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#filterproduct"
                class="btn btn-primary btn-icon float-end mt-4 me-2">
                <i class="bi bi-funnel m-0"></i>
            </a>

        </div>
    </div>

    <div class="contentborder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="productlistdatatable" class=" pt-0 table mt-4 table-custom table-lg mb-0 p-3 tables"
                        style="margin-top: 15px !important;">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Product Image</th>
                                <th>Article No.</th>
                                <th>Product Name</th>
                                <th>Selling Price</th>
                                <th>Available Qty.</th>
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
                                <td><strong>srt-1001</strong></td>
                                <td>Kurti</td>
                                <td><strong>₹ 500/-</strong></td>
                                <td><strong>500</strong></td>
                                <td>
                                    <!-- <span class="badge_active">Available</span> -->
                                    <div class="d-flex align-items-center justify-content-center">
                                        <select name="checkprodstatus" id="checkprodstatus"
                                            class="checkprodstatus form-select p-1 pe-0"
                                            style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;">
                                            <option id="available" class="ps-3"
                                                style="width: 133px;background-color: #E2FFE2;color: #64E355 !important;padding: 5px 12px !important;font-weight: 700;font-size: 12px;border-color: #ccf4cc !important;border-radius: 8px;"
                                                value="">Available</option>
                                            <option id="outofstock" value="Out Of Stock"
                                                style="width: 133px;background-color: #ea444447;padding: 5px 12px !important;color: #db2626 !important;font-weight: 700;font-size: 12px;border-color: #ea444447 !important;border-radius: 8px;">
                                                Out Of Stock </option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="productdelconfirmation(event)"
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
                                <td><strong>srt-1002</strong></td>
                                <td>Ladies Kurti</td>
                                <td><strong>₹ 600/-</strong></td>
                                <td><strong>1900</strong></td>

                                <td>
                                    <span class="badge_outofstck">Removed</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="productdelconfirmation(event)"
                                            class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <!-- <tr>
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
                                                <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg"
                                                    class="rounded banner-img" width="80" alt="...">
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>Ladies Kurti 2</td>
                                <td><strong>₹ 700/-</strong></td>
                                <td>
                                    <span class="badge_outofstck">Out Of Stock</span>
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
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Filter Modal Starts-->
<div class="modal fade " id="filterproduct" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Products List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                <label class="form-check-label badge badge_outofstck" for="categoryCheck1">
                                    Removed
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row text-center ">
                    <div class="col-6">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary attmodalclose"
                            id="filterclose">Close</a>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary attmodalsave">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Filter Modal Ends -->


@stop