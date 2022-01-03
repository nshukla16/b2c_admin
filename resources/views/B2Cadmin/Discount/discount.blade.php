@extends('layouts.defaultmain')
@section('content')

<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Discount List</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Discount List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <button data-bs-toggle="modal" data-bs-target="#add_discount"
                class="btn btn-primary btn-icon float-end mt-4">
                <i class="bi bi-plus-circle"></i> Add Discount
            </button>
        </div>
    </div>

    <div class="contentborder pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="discountdatatable" class="table mt-4 table-custom table-lg mb-0 p-3 tables"
                        style="margin-top: 15px !important;">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Discount Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
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
                                <td>Diwali</td>
                                <td>08-Jul-2021</td>
                                <td>29-Jul-2021</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_discount"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="discdelconfirmation(event)"
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
                                <td>Holi</td>
                                <td>18-Mar-2021</td>
                                <td>29-Mar-2021</td>
                                <td>
                                    <span class="badge_active">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_discount"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="discdelconfirmation(event)"
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
                                <td>Eid</td>
                                <td>17-Jul-2021</td>
                                <td>22-Jul-2021</td>
                                <td>
                                    <span class="badge_inactive">Expired</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_discount"
                                            class="btn btn-outline-edit flex-shrink-0"><i class="bi bi-pencil"></i></a>
                                        <a href="#" onclick="discdelconfirmation(event)"
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

<!-- Add Discount Name Modal -->
<div class="modal fade " id="add_discount" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Discount</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="subcatname"
                            placeholder="Create New Size">
                        <label for="subcatname">Discount Name</label>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating  mb-3">
                                <select class="form-select" id="disctype" aria-label="Floating label select example">
                                    <!-- <option value="">Discount Type</option> -->
                                    <option value="percentage">Percentage (%)</option>
                                    <option value="amount">Amount (&#8377;)</option>
                                </select>
                                <label for="disctype">Discount Type</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="disc"
                                    placeholder="Discount Type">
                                <label for="disc">Discount</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control form-control-sm" id="fromdate"
                                    placeholder="Create New Size">
                                <label for="fromdate">From Date</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control form-control-sm" id="todate"
                                    placeholder="Create New Size">
                                <label for="todate">To Date</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center ">
                            <button class="btn btn-primary btn-icon mt-4 targetproducts">
                                <i class="bi bi-plus-circle"></i> Target Products
                            </button>
                        </div>
                    </div>
                    <div class="allproductssection" style="display:none;">
                        <div class="row mt-3">

                            <div class="col-12">
                                <div class="categoryhead">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="alldiscountcategory1">
                                        <label class="form-check-label fw-bolder" for="alldiscountcategory1">
                                            Mens Wear
                                        </label>
                                    </div>
                                </div>
                                <div class="categoryproduct mt-2">
                                    <div class="row category" style="max-height: 150px;overflow-y: scroll;">
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck1">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck1">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck2">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck2">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck3">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck3">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck4">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck4">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck5">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck5">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck6">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck6">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck7">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck7">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck8">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck8">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck9">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck9">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck10">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck10">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck11">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck11">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck12">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck12">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck13">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck13">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck14">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck14">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck15">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck15">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">

                            <div class="col-12">
                                <div class="categoryhead">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="alldiscountcategory2">
                                        <label class="form-check-label fw-bolder" for="alldiscountcategory2">
                                            Womens Wear
                                        </label>
                                    </div>
                                </div>
                                <div class="categoryproduct mt-2">
                                    <div class="row category" style="max-height: 150px;overflow-y: scroll;">
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck1">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck1">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck2">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck2">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck3">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck3">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck4">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck4">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck5">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck5">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck6">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck6">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck7">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck7">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck8">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck8">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck9">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck9">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck10">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck10">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck11">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck11">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck12">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck12">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck13">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck13">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck14">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck14">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck15">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck15">
                                                            Jeans 1
                                                        </label>
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
            <div class="modal-footer">
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Add Discount Name Modal -->

<!-- Edit Discount Name Modal -->
<div class="modal fade " id="edit_discount" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Discount</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="editdiscname"
                            placeholder="Discount Name">
                        <label for="editdiscname">Discount Name</label>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating  mb-3">
                                <select class="form-select" id="editdisctype"
                                    aria-label="Floating label select example">
                                    <!-- <option value="">Discount Type</option> -->
                                    <option value="percentage">Percentage (%)</option>
                                    <option value="amount">Amount (&#8377;)</option>
                                </select>
                                <label for="disctype">Discount Type</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="editdisctype"
                                    placeholder="Discount Type">
                                <label for="disc">Discount</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control form-control-sm" id="fromdate"
                                    placeholder="Create New Size">
                                <label for="fromdate">From Date</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control form-control-sm" id="todate"
                                    placeholder="Create New Size">
                                <label for="todate">To Date</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center ">
                            <button class="btn btn-primary btn-icon mt-4 targetproducts">
                                <i class="bi bi-plus-circle"></i> Target Products
                            </button>
                        </div>
                    </div>
                    <div class="allproductssection" style="display:none;">
                        <div class="row mt-3">

                            <div class="col-12">
                                <div class="categoryhead">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="alldiscountcategory1">
                                        <label class="form-check-label fw-bolder" for="alldiscountcategory1">
                                            Mens Wear
                                        </label>
                                    </div>
                                </div>
                                <div class="categoryproduct mt-2">
                                    <div class="row category" style="max-height: 150px;overflow-y: scroll;">
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck1">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck1">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck2">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck2">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck3">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck3">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck4">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck4">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck5">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck5">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck6">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck6">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck7">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck7">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck8">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck8">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck9">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck9">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck10">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck10">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck11">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck11">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck12">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck12">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck13">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck13">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck14">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck14">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory1"
                                                            type="checkbox" id="categoryCheck15">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck15">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">

                            <div class="col-12">
                                <div class="categoryhead">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="alldiscountcategory2">
                                        <label class="form-check-label fw-bolder" for="alldiscountcategory2">
                                            Womens Wear
                                        </label>
                                    </div>
                                </div>
                                <div class="categoryproduct mt-2">
                                    <div class="row category" style="max-height: 150px;overflow-y: scroll;">
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck1">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck1">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck2">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck2">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck3">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck3">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck4">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck4">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck5">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck5">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck6">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck6">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck7">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck7">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck8">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck8">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck9">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck9">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck10">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck10">
                                                            Jeans 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="collapse show mt-4" id="categoriesCollapseExample">
                                                <div class="d-flex flex-column gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck11">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck11">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck12">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck12">
                                                            Jeans 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck13">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck13">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck14">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck14">
                                                            Jeans 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input discountcategory2"
                                                            type="checkbox" id="categoryCheck15">
                                                        <img src="https://vetra.laborasyon.com/assets/images/products/1.jpg"
                                                            class="rounded" width="30" alt="...">
                                                        <label class="form-check-label" for="categoryCheck15">
                                                            Jeans 1
                                                        </label>
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
            <div class="modal-footer">
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Discount Name Modal -->

@stop