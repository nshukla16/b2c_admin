@extends('layouts.defaultmain')
@section('content')

<div class="content ">
    <div class="row">
        <div class="col-6">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Category List</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Category List</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-6">
            <div class="d-grid gap-2 d-md-flex justify-content-end">
                <button data-bs-toggle="modal" data-bs-target="#add_category"
                    class="btn btn-primary btn-icon mt-4 me-2">
                    <i class="bi bi-plus-circle"></i> Add Category
                </button>
                <button data-bs-toggle="modal" data-bs-target="#add_subcategory"
                    class="btn btn-primary btn-icon float-end mt-4">
                    <i class="bi bi-plus-circle"></i> Add Sub-Category
                </button>
            </div>
        </div>

    </div>

    <div class="contentborder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive mt-4" tabindex="1" style="overflow: hidden; outline: none;">
                        <table id="categorydatatable" class="table mt-4 table-custom table-lg mb-0 p-3 tables"
                            style="margin-top: 15px !important;">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th data-orderable="false">Category Image</th>
                                    <th>Category Name</th>
                                    <th data-orderable="false">Sub-Category Name</th>
                                    <th>Status</th>
                                    <th data-orderable="false">Action</th>
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
                                    <td>Womens Wear</td>
                                    <td class="text-start">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="atttext">
                                                    <div class="atttablespan">Option1 </div>
                                                    <div class="atttablespan">Option1 </div>
                                                    <div class="atttablespan">Option1 </div>
                                                    <div class="atttablespan">Option1 </div>
                                                    <div class="atttablespan">Option1 </div>
                                                    <div class="atttablespan">Option1 </div>
                                                    <div class="atttablespan">Option1 </div>
                                                    <div class="atttablespan">Option2 </div>
                                                    <div class="atttablespan">Option3 </div>
                                                    <div class="atttablespan">Option4 </div>
                                                    <div class="atttablespan">Option5 </div>
                                                    <div class="atttablespan">Option6 </div>
                                                    <div class="atttablespan">Option7 </div>
                                                    <div class="atttablespan">Option8 </div>
                                                    <div class="atttablespan">Option9 </div>
                                                    <div class="atttablespan">Option10 </div>
                                                    <div class="atttablespan">Option11 </div>
                                                    <div class="atttablespan">Option12 </div>
                                                    <div class="atttablespan">Option13 </div>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                <a class="editattval me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_subcategory" title="Edit Sub-Category"><i
                                                        class="bi bi-pencil"></i></a>
                                                <a class="saveattval me-2" style="display:none;"
                                                    title="Save Attribute Sub-Type"><i
                                                        class="bi bi-check2 text-success"></i></a>
                                                <a href="#" class="delattval delete text-danger"
                                                    title="Delete Sub-Category"><i class="bi bi-trash"></i></a>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge_active">Active</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_category"
                                                class="btn btn-outline-edit flex-shrink-0" title="Edit Category"><i
                                                    class="bi bi-pencil"></i></a>
                                            <a href="#" onclick="catdelconfirmation(event)"
                                                class="btn btn-outline-danger flex-shrink-0 ms-2"><i
                                                    class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">

                                    <td>
                                        <div class="avatar avatar-info">
                                            <span class="avatar-text rounded-circle">2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('public/img/products/02.png') }}" class="rounded"
                                                width="80" alt="...">
                                        </a>
                                    </td>
                                    <td>Shoes</td>
                                    <td><a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_subcategory" data-toggle="tooltip"
                                            data-placement="bottom" title="Add Sub-Category">
                                            <i class="bi bi-plus"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge_inactive">Inactive</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_banner"
                                                class="btn btn-outline-edit flex-shrink-0"><i
                                                    class="bi bi-pencil"></i></a>
                                            <a href="#" onclick="catdelconfirmation(event)"
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
</div>

<!-- Add Category Name Modal -->
<div class="modal fade " id="add_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="modalnewcategory"
                            placeholder="Create New Category">
                        <label for="modalnewcategory">Create New Category</label>
                    </div>
                    <div class="form-group col-12">
                        <!-- <label>Category Image</label> -->
                        <input class="form-control" type="file" name="amodalcategory_image" id="amodalcategory_image"
                            data-bv-field="amodalcategory_image">
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-4">
                    <div class="addbannerimg p-1">
                        <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg"
                            class="rounded banner-img" alt="..." width="150">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz"
                    onclick="save_size()">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Add Category Name Modal -->

<!-- Edit Category Name Modal -->
<div class="modal fade " id="edit_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="modaleditcategory"
                            placeholder="Create New Category">
                        <label for="modaleditcategory">Category Name</label>
                    </div>
                    <div class="form-group col-12">
                        <!-- <label>Category Image</label> -->
                        <input class="form-control" type="file" name="emodalcategory_image" id="emodalcategory_image"
                            data-bv-field="emodalcategory_image">
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-4">
                    <div class="addbannerimg p-1">
                        <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg"
                            class="rounded banner-img" alt="..." width="150">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz"
                    onclick="save_size()">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Category Name Modal -->

<!-- Add Sub Category Name Modal -->
<div class="modal fade " id="add_subcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Sub Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="amodalcatname" aria-label="Floating label select example">
                                <option selected="">Select Category Name</option>
                                <option value="002">Clothes</option>
                                <option value="002">Shoes</option>
                                <option value="003">Watches</option>
                            </select>
                            <label for="amodalcatname">Category Name</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="amodalsubcat"
                            placeholder="Create New Sub Category">
                        <label for="amodalsubcat">Sub Category Name</label>
                    </div>
                    <div class="form-group col-12">
                        <!-- <label>Category Image</label> -->
                        <input class="form-control" type="file" name="asubcategory_image" id="asubcategory_image"
                            data-bv-field="asubcategory_image">
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-4">
                    <div class="addbannerimg p-1">
                        <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg"
                            class="rounded banner-img" alt="..." width="150">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz"
                    onclick="save_size()">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /Add Sub Category Name Modal -->

<!-- Edit Sub Category Name Modal -->
<div class="modal fade " id="edit_subcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Sub Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="emodalcatname" aria-label="Floating label select example"
                                disabled="">

                                <option value="002">Clothes</option>
                                <option value="002">Shoes</option>
                                <option value="003">Watches</option>
                            </select>
                            <label for="emodalcatname">Category Name</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="emodalsubcatname" aria-label="Floating label select example">
                                <option selected="">Select Sub-Category Name</option>
                                <option value="002">Clothes</option>
                                <option value="002">Shoes</option>
                                <option value="003">Watches</option>
                            </select>
                            <label for="emodalsubcatname">Sub-Category Name</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="emodalsubcat"
                            placeholder="Create New Sub Category">
                        <label for="emodalsubcat">Sub Category Name</label>
                    </div>
                    <div class="form-group col-12">
                        <!-- <label>Category Image</label> -->
                        <input class="form-control" type="file" name="emodalsubcategory_image"
                            id="emodalsubcategory_image" data-bv-field="emodalsubcategory_image">
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-4">
                    <div class="addbannerimg p-1">
                        <img src="http://34.72.9.224/quickWebsite/b2b_admin/public/images/category/1625202259IMG_7559.jpg"
                            class="rounded banner-img" alt="..." width="150">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
                <button class="btn btn-primary submit-btn" type="button" id="sub_btn_sz"
                    onclick="save_size()">Save</button>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn cancel-btn">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- Edit Sub Category Name Modal -->

@stop