@extends('layouts.defaultmain')
@section('content')

<div class="content ">
    <div class="row">
        <div class="col-6">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Attributes List</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Attributes List</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-6">
            <div class="d-grid gap-2 d-md-flex justify-content-end">
                <button data-bs-toggle="modal" data-bs-target="#add_attribute"
                    class="btn btn-primary btn-icon mt-4 me-2">
                    <i class="bi bi-plus-circle"></i> Add Attribute
                </button>
                <button data-bs-toggle="modal" data-bs-target="#add_attributevalues"
                    class="btn btn-primary btn-icon float-end mt-4">
                    <i class="bi bi-plus-circle"></i> Add Sub-Attribute
                </button>
            </div>
        </div>

    </div>

    <div class="contentborder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive mt-4" tabindex="1" style="overflow: hidden; outline: none;">
                        <table id="attributedatatable" class="table mt-4 table-custom table-lg mb-0 p-3 tables"
                            style="margin-top: 15px !important;">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Attribute Title</th>
                                    <th data-orderable="false">Attributes</th>
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
                                    <td>Occassion</td>
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
                                            <div class="col-2 d-flex align-items-center">
                                                <a class="editattval me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attributevalues"
                                                    title="Edit Attribute Sub-Type"><i class="bi bi-pencil"></i></a>
                                                <a class="saveattval me-2" style="display:none;"
                                                    title="Save Attribute Sub-Type"><i
                                                        class="bi bi-check2 text-success"></i></a>
                                                <a href="#" class="delattval delete text-danger"
                                                    title="Delete Attribute Sub-Type"><i class="bi bi-trash"></i></a>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge_active">Active</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_attribute"
                                                data-toggle="tooltip" data-placement="bottom" title="Edit Attribute"
                                                class="btn btn-outline-edit flex-shrink-0"><i
                                                    class="bi bi-pencil"></i></a>
                                            <a href="#" onclick="attdelconfirmation(event)"
                                                class="btn btn-outline-danger flex-shrink-0 ms-2"
                                                title="Delete Attribute"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="avatar avatar-info">
                                            <span class="avatar-text rounded-circle">2</span>
                                        </div>
                                    </td>
                                    <td>Pattern</td>
                                    <td class="text-center"><button data-bs-toggle="modal"
                                            data-bs-target="#add_attributevalues" class="btn btn-primary btn-icon">
                                            <i class="bi bi-plus-circle"></i> Add Sub-Attribute
                                        </button>
                                    </td>
                                    <td>
                                        <span class="badge_active">Active</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_attribute"
                                                data-toggle="tooltip" data-placement="bottom" title="Edit Attribute"
                                                class="btn btn-outline-edit flex-shrink-0"><i
                                                    class="bi bi-pencil"></i></a>
                                            <a href="#" onclick="attdelconfirmation(event)"
                                                class="btn btn-outline-danger flex-shrink-0 ms-2"
                                                title="Delete Attribute"><i class="bi bi-trash"></i></a>
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
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Add Attribute Modal -->
<div class="modal fade " id="add_attribute" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Attribute</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="modalnewattribute"
                            placeholder="Create New Attribute">
                        <label for="modalnewattribute">Create New Attribute</label>
                    </div>
                </form>
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

<!-- Edit Attribute Modal -->
<div class="modal fade " id="edit_attribute" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Attribute</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="modaleditdisattribute"
                            value="Ocsassion" readonly>
                        <label for="modaleditdisattribute">Selected Attribute Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="modalrenameattribute"
                            placeholder="Rename Attribute">
                        <label for="modalrenameattribute">Rename Attribute</label>
                    </div>
                </form>
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

<!-- Add Attribute Sub-Type Modal -->
<div class="modal fade " id="add_attributevalues" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Attribute Sub-Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="submodalatttype" aria-label="Floating label select example">
                                <option value="002">Occassion</option>
                                <option value="002">Pattern</option>
                                <option value="003">Religious</option>
                            </select>
                            <label for="submodalatttype">Attribute Type</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="subattsubtype" placeholder=Rename
                            Attribute Sub-Type">
                        <label for="subattsubtype">Attribute Sub-Type</label>
                    </div>
                </form>
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
<!-- /Add Attribute Sub-Type Modal -->

<!-- Edit Attribute Sub-Type  Modal -->
<div class="modal fade " id="edit_attributevalues" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Attribute Sub-Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="modaleditdisattribute"
                            value="Ocsassion" readonly>
                        <label for="modaleditdisattribute">Attribute Type</label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="catname" aria-label="Floating label select example">
                                <option selected="">Select Attribute Sub-Type</option>
                                <option value="002">Clothes</option>
                                <option value="002">Shoes</option>
                                <option value="003">Watches</option>
                            </select>
                            <label for="catname">Attribute Sub-Type</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="renameattsubtype"
                            placeholder="Rename Attribute Sub-Type">
                        <label for="renameattsubtype">Rename Attribute Sub-Type</label>
                    </div>
                </form>
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
<!-- Edit Attribute Values Modal -->

@stop