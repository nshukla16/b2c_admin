@extends('layouts.defaultmain')
@section('content')
<!-- content -->
<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Orders</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('home')}}">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#filter" class="btn btn-primary float-end mt-4">
                <i class="bi bi-funnel"></i> Filter</a>
        </div>
    </div>
    <div class="contentborder pt-3">
        <div class="card sticky-top ">
            <div class="card-body ">
                <ul class="nav nav-pills d-flex justify-content-between" id="myTab" role="tablist">
                    <li class="nav-item" role="neworders">
                        <a class="nav-link active" id="neworders-tab" data-bs-toggle="tab" href="#neworders" role="tab"
                            aria-controls="neworders" aria-selected="true">New Orders</a>
                    </li>
                    <li class="nav-item" role="acceptedorders">
                        <a class="nav-link" id="accepted-tab" data-bs-toggle="tab" href="#accepted" role="tab"
                            aria-controls="acceptedorders" aria-selected="false">Accepted</a>
                    </li>
                    <li class="nav-item" role="readytoship">
                        <a class="nav-link" id="readytoship-tab" data-bs-toggle="tab" href="#readytoship" role="tab"
                            aria-controls="readytoship" aria-selected="false">Ready To Ship</a>
                    </li>
                    <li class="nav-item" role="shipped">
                        <a class="nav-link" id="shipped-tab" data-bs-toggle="tab" href="#shipped" role="tab"
                            aria-controls="shipped" aria-selected="false">Shipped</a>
                    </li>
                    <li class="nav-item" role="rejected">
                        <a class="nav-link" id="rejected-tab" data-bs-toggle="tab" href="#rejected" role="tab"
                            aria-controls="rejected" aria-selected="false">Rejected</a>
                    </li>
                    <li class="nav-item" role="completed">
                        <a class="nav-link" id="completed-tab" data-bs-toggle="tab" href="#completed" role="tab"
                            aria-controls="completed" aria-selected="false">Completed</a>
                    </li>
                    <li class="nav-item" role="cancelled">
                        <a class="nav-link" id="cancelled-tab" data-bs-toggle="tab" href="#cancelled" role="tab"
                            aria-controls="cancelled" aria-selected="false">Cancelled</a>
                    </li>
                    <li class="nav-item" role="returned">
                        <a class="nav-link" id="returned-tab" data-bs-toggle="tab" href="#returned" role="tab"
                            aria-controls="returned" aria-selected="false">Returned</a>
                    </li>
                    <li class="nav-item" role="complaints">
                        <a class="nav-link" id="complaints-tab" data-bs-toggle="tab" href="#complaints" role="tab"
                            aria-controls="complaints" aria-selected="false">Complaints</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Orders Tab Sections -->
        <div class="row flex-column-reverse flex-md-row mt-4">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="neworders" role="tabpanel"
                        aria-labelledby="password-tab">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-exchange badgenew">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> &#8377; 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewneworderitems1"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="exchangeinternal">
                                                    <div>
                                                        <a class="btn float-start orderbtns">
                                                            <i class="bi bi-x-circle text-danger"></i> Reject
                                                        </a>
                                                        <a class="btn float-end orderbtns">
                                                            <i class="bi bi-check-circle text-success"></i> Accept
                                                        </a>
                                                    </div>
                                                    <div class="">
                                                        <button class="float-end blankbtn me-4">
                                                            <i
                                                                class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                            Return Order</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row collapse" id="viewneworderitems1">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewneworderitems1"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ishwinder Singh </div>
                                                            <span class="badge bg-primary badgenew">New</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> &#8377; 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#viewneworderitems2"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn">
                                                <div>
                                                    <a class="btn float-start orderbtns">
                                                        <i class="bi bi-x-circle text-danger"></i> Reject
                                                    </a>
                                                    <a class="btn float-end orderbtns">
                                                        <i class="bi bi-check-circle text-success"></i> Accept
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewneworderitems2">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewneworderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ramesh Singh </div>
                                                            <span class="badge bg-return badgenew">Return</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> &#8377; 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems3"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn">
                                                <div>
                                                    <a class="btn float-start orderbtns">
                                                        <i class="bi bi-x-circle text-danger"></i> Reject
                                                    </a>
                                                    <a class="btn float-end orderbtns">
                                                        <i class="bi bi-check-circle text-success"></i> Accept
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="vieworderitems3">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#vieworderitems3"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p class="reasondiv" style="display:none;">Reason</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span class="badge bg-primary badgenew me-5">New</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row reasondiv" style="display:none;">
                                                    <div class="col-8">
                                                        <input type="text" class="form-control undelreason"
                                                            id="exampleFormControlInput1"
                                                            placeholder="Enter Reason For Rejection(Optional)">
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn float-start p-0 rejectcancel">
                                                            <i class="bi bi-x-circle text-danger"></i> Cancel
                                                        </a>
                                                        <a class="btn ms-4 p-0">
                                                            <i class="bi bi-check-circle text-success"></i> Reject
                                                        </a>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57,
                                                    Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#viewneworderitems4"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn">
                                                <div>
                                                    <a class="btn float-start orderbtns rejectorder">
                                                        <i class="bi bi-x-circle text-danger"></i> Reject
                                                    </a>
                                                    <a class="btn float-end orderbtns">
                                                        <i class="bi bi-check-circle text-success"></i> Accept
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewneworderitems4">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewneworderitems4"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-undelivered badgenew me-5">Undelivered</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57,
                                                    Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#viewneworderitems5"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0">
                                                <div class="row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit" class=" text-intransit">In
                                                                Transit
                                                            </option>
                                                            <option value="delivery" class="text-delivered">Delivery
                                                            </option>
                                                            <option value="undelivered" class="text-undelivered">
                                                                Undelivered</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="ordernote">
                                                    Note:- This will move to <strong>Returned</strong> orders if
                                                    delivery attempt fails again.
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewneworderitems5">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewneworderitems5"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="accepted" role="tabpanel">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-accepted  badgenew">Accepted</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewacceptedorderitems1"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0">
                                                <div class="row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit">Ready To Ship</option>
                                                            <option value="delivery">Shipped</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewacceptedorderitems1">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewacceptedorderitems1"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-accepted badgenew me-5">Accepted</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewacceptedorderitems2"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="row ">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit" class=" text-intransit">In Transit
                                                            </option>
                                                            <option value="delivery" class="text-delivered">Delivery
                                                            </option>
                                                            <option value="undelivered" class="text-undelivered">
                                                                Undelivered</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="exchangeinternal"
                                                    style="height: 103px; position: absolute;bottom: 0;right: 0;">
                                                    <button class="float-end blankbtn me-5">
                                                        <i class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                        Return Order</button>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewacceptedorderitems2">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewacceptedorderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-undelivered badgenew me-5">Undelivered</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57,
                                                    Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4 ">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <div class="mb-2 d-flex w-60">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#viewacceptedorderitems3"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0">
                                                <div class="row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit" class=" text-intransit">In
                                                                Transit
                                                            </option>
                                                            <option value="delivery" class="text-delivered">Delivery
                                                            </option>
                                                            <option value="undelivered" class="text-undelivered">
                                                                Undelivered</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="ordernote">
                                                    Note:- This will move to <strong>Returned</strong> orders if
                                                    delivery attempt fails again.
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewacceptedorderitems3">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewacceptedorderitems3"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="readytoship" role="tabpanel" aria-labelledby="password-tab">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ishwinder Singh </div>
                                                            <span class="badge bg-primary badgenew">New</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#viewreadytoshiporderitems1"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn">
                                                <div>
                                                    <a class="btn float-start orderbtns">
                                                        <i class="bi bi-x-circle text-danger"></i> Cancel
                                                    </a>
                                                    <a class="btn float-end orderbtns"
                                                        style="display: block;background: linear-gradient(to bottom right, #0076FE 0%, #172AB4 100%);border: 1px solid #036cf5;color: white !important;">
                                                        <i class="bi bi-check-circle text-success"></i> Shipped</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewreadytoshiporderitems1">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems1"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-exchange badgenew">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewreadytoshiporderitems2"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="exchangeinternal">
                                                    <div>

                                                        <a class="btn float-end orderbtns"
                                                            style="display: block;background: linear-gradient(to bottom right, #0076FE 0%, #172AB4 100%);border: 1px solid #036cf5;color: white !important;">
                                                            <i class="bi bi-check-circle text-success"></i> Shipped</a>
                                                    </div>
                                                    <div class="">
                                                        <button class="float-end blankbtn me-4">
                                                            <i
                                                                class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                            Return Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewreadytoshiporderitems2">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-delivered badgenew me-5">Delivered</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-2 pe-0">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <div class="mb-2  ">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse" data-bs-target="#viewreadytoshiporderitems3" style="cursor:pointer" aria-expanded="true"><i class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="">
                                                            <div>
                                                                <i class="bi bi-box-arrow-up-right text-primary p-2"></i>
                                                                <a href="#">Linked Return Order</a>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0">
                                                <div class="row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit" class=" text-intransit">In Transit
                                                            </option>
                                                            <option value="delivery" class="text-delivered">Delivery
                                                            </option>
                                                            <option value="undelivered" class="text-undelivered">
                                                                Undelivered</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="ordernote">
                                                    Note:- This will move to <strong>Completed</strong> orders post
                                                    return period is over.
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row collapse" id="viewreadytoshiporderitems3">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems3"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shipped" role="tabpanel">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Cahal Shrivastava </div>
                                                            <span class="badge bg-intransit badgenew">In Transit</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> &#8377; 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#viewshippedorderitems1"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0">
                                                <div class="row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit" class=" text-intransit">In Transit
                                                            </option>
                                                            <option value="delivery" class="text-delivered">Delivery
                                                            </option>
                                                            <option value="undelivered" class="text-undelivered">
                                                                Undelivered</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewshippedorderitems1">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-delivered badgenew me-5">Delivered</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4 newcolwidth">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-4 newcolwidth">
                                                        <div class="mb-2 d-flex w-60">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#viewshippedorderitems2"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-4 " style=" width: 43%;">
                                                        <div class="">
                                                            <div>
                                                                <i
                                                                    class="bi bi-box-arrow-up-right text-primary p-2"></i>
                                                                <a href="#">Linked Return Order</a>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0">
                                                <div class="row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit" class=" text-intransit">In Transit
                                                            </option>
                                                            <option value="delivery" class="text-delivered">Delivery
                                                            </option>
                                                            <option value="undelivered" class="text-undelivered">
                                                                Undelivered</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="ordernote">
                                                    Note:- This will move to <strong>Completed</strong> orders post
                                                    return period is over.
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewshippedorderitems2">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-undelivered badgenew">Undelivered</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> &#8377; 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">1 item</a>
                                                                    <a class="ms-2" data-bs-toggle="collapse"
                                                                        data-bs-target="#viewshippedorderitems3"
                                                                        style="cursor:pointer" aria-expanded="true"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-primary badgenew">New</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0">
                                                <div class="row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit" class=" text-intransit">In Transit
                                                            </option>
                                                            <option value="delivery" class="text-delivered">Delivery
                                                            </option>
                                                            <option value="undelivered" class="text-undelivered">
                                                                Undelivered</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewshippedorderitems3">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="rejected" role="tabpanel">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-rejected badgenew">Rejected</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewrejectedorderitems1"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice p-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a class="btn float-end orderbtns"
                                                            style="display: block;background: linear-gradient(to bottom right, #0076FE 0%, #172AB4 100%);border: 1px solid #036cf5;color: white !important;">
                                                            <i class="bi bi-wallet2 text-white"></i> Refund</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewrejectedorderitems1">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-rejected badgenew me-5">Rejected</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewrejectedorderitems2"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="exchangeinternal">
                                                    <div>
                                                        <a class="btn float-start orderbtns">
                                                            <i class="bi bi-bootstrap-reboot text-danger"></i> Return
                                                        </a>
                                                        <a class="btn float-end orderbtns">
                                                            <i class="bi bi-wallet2 text-success"></i> Refund</a>
                                                    </div>
                                                    <div class="">
                                                        <button class="float-end blankbtn me-4">
                                                            <i
                                                                class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                            Return Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewrejectedorderitems2">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-rejected badgenew">Rejected</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewrejectedorderitems3"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice p-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn float-end orderbtns no-click "
                                                            style="background: linear-gradient(to bottom right, #dedede 0%, #848484 100%);border: 1px solid #bdbdbd;color: white !important;">
                                                            <i class="bi bi-wallet2 text-white"></i> Refund</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewrejectedorderitems3">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-rejected badgenew me-5">Rejected</span>
                                                            <span class="badge bg-return badgenew me-3">Return</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewrejectedorderitems4"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <!-- <div class="col-xl-3 fororderlgdevice orderrightbtn p-0 ms-3">
                                                <div>
                                                    <a class="btn float-start orderbtns">
                                                        <i class="bi bi-arrows-expand text-danger"></i> Exchange
                                                    </a>
                                                    <a class="btn float-end orderbtns">
                                                        <i class="bi bi-wallet2 text-success"></i> Refund</a>
                                                </div>

                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0">
                                                <div class="row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">

                                                            <option value="exchange">Exchange</option>
                                                            <option value="refund">Refund</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewrejectedorderitems4">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewreadytoshiporderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="completed" role="tabpanel">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-accepted badgenew">Completed</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewcompletedorderitems1"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->

                                        </div>
                                        <div class="row collapse" id="viewcompletedorderitems1">
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div><strong>Ordered Items</strong>
                                                                        <a class="btn p-0 btn-primary float-end"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#viewcompletedorderitems1"
                                                                            style="width: 25px;border-radius: 5px;">
                                                                            <i class="bi bi-x"></i>
                                                                        </a>
                                                                    </div>


                                                                </div>
                                                                <div class="col-6">

                                                                    <div class="list-group-item d-flex mt-3"
                                                                        style="border-radius: 12px;">
                                                                        <a href="#" class="me-3">
                                                                            <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                class="rounded" width="80" alt="...">
                                                                        </a>
                                                                        <div>
                                                                            <span class="text-muted small">
                                                                                srt-1001</span>
                                                                            <h6>Digital clock</h6>
                                                                            <div>₹ 1.190,90</div>
                                                                        </div>
                                                                        <div class="text-end ms-auto text-bold">

                                                                            <p class="mt-2"></p>
                                                                            <h6 class="mt-2">X 5</h6>
                                                                            <div>₹ 1.190,90</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-group-item d-flex mt-2"
                                                                        style="border-radius: 12px;">
                                                                        <a href="#" class="me-3">
                                                                            <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                class="rounded" width="80" alt="...">
                                                                        </a>
                                                                        <div>
                                                                            <span class="text-muted small">
                                                                                srt-1001</span>
                                                                            <h6>Digital clock</h6>
                                                                            <div>₹ 1.190,90</div>
                                                                        </div>
                                                                        <div class="text-end ms-auto text-bold">
                                                                            <p class="mt-2"></p>
                                                                            <h6 class="mt-2">X 5</h6>
                                                                            <div>₹ 1.190,90</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-accepted badgenew me-5">Completed</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewcompletedorderitems2"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 ">
                                                <div class="exchangeinternal" style="
                                                        height: 103px;
                                                        position: absolute;
                                                        bottom: 0;
                                                        right: 0;
                                                    ">
                                                    <button class="float-end blankbtn me-5">
                                                        <i class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                        Return Order</button>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="viewcompletedorderitems2">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#viewcompletedorderitems1"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-3"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-accepted badgenew me-5">Completed</span>
                                                            <span class="badge bg-return badgenew me-3">Return</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#viewcompletedorderitems3"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->

                                        </div>
                                        <div class="row collapse" id="viewcompletedorderitems3">
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div><strong>Ordered Items</strong>
                                                                        <a class="btn p-0 btn-primary float-end"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#viewcompletedorderitems3"
                                                                            style="width: 25px;border-radius: 5px;">
                                                                            <i class="bi bi-x"></i>
                                                                        </a>
                                                                    </div>


                                                                </div>
                                                                <div class="col-6">

                                                                    <div class="list-group-item d-flex mt-3"
                                                                        style="border-radius: 12px;">
                                                                        <a href="#" class="me-3">
                                                                            <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                class="rounded" width="80" alt="...">
                                                                        </a>
                                                                        <div>
                                                                            <span class="text-muted small">
                                                                                srt-1001</span>
                                                                            <h6>Digital clock</h6>
                                                                            <div>₹ 1.190,90</div>
                                                                        </div>
                                                                        <div class="text-end ms-auto text-bold">

                                                                            <p class="mt-2"></p>
                                                                            <h6 class="mt-2">X 5</h6>
                                                                            <div>₹ 1.190,90</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-group-item d-flex mt-2"
                                                                        style="border-radius: 12px;">
                                                                        <a href="#" class="me-3">
                                                                            <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                class="rounded" width="80" alt="...">
                                                                        </a>
                                                                        <div>
                                                                            <span class="text-muted small">
                                                                                srt-1001</span>
                                                                            <h6>Digital clock</h6>
                                                                            <div>₹ 1.190,90</div>
                                                                        </div>
                                                                        <div class="text-end ms-auto text-bold">
                                                                            <p class="mt-2"></p>
                                                                            <h6 class="mt-2">X 5</h6>
                                                                            <div>₹ 1.190,90</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cancelled" role="tabpanel">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-cancelledbycus badgenew">Cancelled by
                                                                Customer</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                        Online (Net Banking)</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice p-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a class="btn float-end orderbtns"
                                                            style="display: block;background: linear-gradient(to bottom right, #0076FE 0%, #172AB4 100%);border: 1px solid #036cf5;color: white !important;">
                                                            <i class="bi bi-wallet2 text-white"></i> Refund</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-cancelledbycus badgenew me-5">Cancelled
                                                                by Customer</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="exchangeinternal">
                                                    <div>

                                                        <a class="btn float-start orderbtns">
                                                            <i class="bi bi-wallet2 text-success"></i> Refund</a>
                                                        <a class="btn float-end orderbtns">
                                                            <i class="bi bi-bootstrap-reboot text-danger"></i> Return
                                                        </a>
                                                    </div>
                                                    <div class="">
                                                        <button class="float-end blankbtn me-4">
                                                            <i
                                                                class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                            Return Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-cancelledbycus badgenew me-5">Cancelled
                                                                by Customer</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="row ">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label selectlabel">Status
                                                        :</label>
                                                    <div class="col-8">
                                                        <select id="selectstatus" class="form-select selectstatus">
                                                            <option selected="">Change Status</option>
                                                            <option value="intransit" class=" text-intransit">In Transit
                                                            </option>
                                                            <option value="delivery" class="text-delivered">Delivery
                                                            </option>
                                                            <option value="undelivered" class="text-undelivered">
                                                                Undelivered</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="exchangeinternal"
                                                    style="height: 103px; position: absolute;bottom: 0;right: 0;">
                                                    <button class="float-end blankbtn me-5">
                                                        <i class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                        Return Order</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">

                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-cancelledbycus badgenew me-5">Cancelled
                                                                by Customer</span>
                                                            <span class="badge bg-return badgenew me-3">Return</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0 ms-3">
                                                <div>
                                                    <a class="btn float-end orderbtns">
                                                        <i class="bi bi-arrows-expand text-danger"></i> Exchange
                                                    </a>
                                                    <a class="btn float-start orderbtns">
                                                        <i class="bi bi-wallet2 text-success"></i> Refund</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Ishwinder Singh
                                                            </div>
                                                            <span
                                                                class="badge bg-cancelledbycus badgenew me-5">Cancelled
                                                                by Customer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small
                                                        class="text-primary ms-5">C.O.D</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice p-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn float-end orderbtns no-click "
                                                            style="background: linear-gradient(to bottom right, #dedede 0%, #848484 100%);border: 1px solid #bdbdbd;color: white !important;">
                                                            <i class="bi bi-wallet2 text-white"></i> Refund</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span class="badge bg-rejected badgenew me-5">Cancelled by
                                                                Self</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="exchangeinternal">
                                                    <div>

                                                        <a class="btn float-start orderbtns">
                                                            <i class="bi bi-wallet2 text-success"></i> Refund</a>
                                                        <a class="btn float-end orderbtns">
                                                            <i class="bi bi-bootstrap-reboot text-danger"></i> Return
                                                        </a>
                                                    </div>
                                                    <div class="">
                                                        <button class="float-end blankbtn me-4">
                                                            <i
                                                                class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                            Return Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span class="badge bg-rejected badgenew me-5">Cancelled by
                                                                Self</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="exchangeinternal">
                                                    <div>

                                                        <a class="btn float-start orderbtns">
                                                            <i class="bi bi-wallet2 text-success"></i> Refund</a>

                                                    </div>
                                                    <div class="">
                                                        <button class="float-end blankbtn me-4">
                                                            <i
                                                                class="bi bi-box-arrow-up-right text-primary p-2"></i>Checked
                                                            Refund Status</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span class="badge bg-rejected badgenew me-5">Cancelled by
                                                                Self</span>
                                                            <span class="badge bg-return badgenew me-3">Return</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 fororderlgdevice orderrightbtn p-0 ms-3">
                                                <div>
                                                    <a class="btn float-end orderbtns">
                                                        <i class="bi bi-arrows-expand text-danger"></i> Exchange
                                                    </a>
                                                    <a class="btn float-start orderbtns">
                                                        <i class="bi bi-wallet2 text-success"></i> Refund</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-rejected badgenew me-5">Cancelled by
                                                                Customer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <p><strong> ₹ 3,225 </strong><small
                                                        class="text-primary ms-5">C.O.D</small></p>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="returned" role="tabpanel">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Ishwinder Singh
                                                            </div>
                                                            <span class="badge bg-returned badgenew">Returned</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small
                                                            class="text-primary ms-5">C.O.D</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="exchangeinternal">
                                                    <div>

                                                        <a class="btn float-start orderbtns">
                                                            <i class="bi bi-wallet2 text-success"></i> Refund</a>

                                                    </div>
                                                    <div class="">
                                                        <button class="float-end blankbtn me-4">
                                                            <i
                                                                class="bi bi-box-arrow-up-right text-primary p-2"></i>Checked
                                                            Refund Status</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-returned badgenew me-5">Returned</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p> <a
                                                        class="badge text-primary ms-4 invoiceanc fromRight" style="
                                                            cursor: pointer;
                                                            margin-right: 259px;
                                                        ">
                                                        <i class="bi bi-journal-medical fs-6 text-primary me-1 "></i>
                                                        Invoice</a>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 exchangebtnrow">
                                                <div class="exchangeinternal">
                                                    <div>

                                                        <a class="btn float-start orderbtns">
                                                            <i class="bi bi-wallet2 text-success"></i> Refund</a>
                                                        <a class="btn float-end orderbtns">
                                                            <i class="bi bi-bootstrap-reboot text-danger"></i> Return
                                                        </a>
                                                    </div>
                                                    <div class="">
                                                        <button class="float-end blankbtn me-4">
                                                            <i
                                                                class="bi bi-box-arrow-up-right text-primary p-2"></i>Linked
                                                            Return Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="complaints" role="tabpanel">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>

                                                            <span
                                                                class="badge bg-complaint badgenew me-5">Complaint</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small
                                                            class="text-primary ms-5">C.O.D</small></p>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">

                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 ordecomplaintright">
                                                <div class="ordercheckbtnouter">
                                                    <div>
                                                        <a class="btn float-end orderbtns ordercheckbtn">
                                                            <i class="bi bi-box-arrow-up-right text-primary"></i>
                                                            Check</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="vieworderitems">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#vieworderitems"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ordercomplaintblock" style="display: none;">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class=" card mb-4">
                                                            <div class="card-body p-0 py-3 px-1">
                                                                <div class="d-flex gap-4 align-items-center collapsed"
                                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                                    data-bs-target="#myOrders53211" role="button">
                                                                    <div><strong>Complaint Order</strong></div>
                                                                    <div class="bi bi-chevron-down ms-auto"></div>
                                                                </div>
                                                                <div class="collapse" id="myOrders53211" style="">
                                                                    <hr class="mb-0">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="list-group-item d-flex mt-3"
                                                                                style="border-radius: 12px;">
                                                                                <a href="#" class="me-3">
                                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                        class="rounded" width="80"
                                                                                        alt="...">
                                                                                </a>
                                                                                <div>
                                                                                    <span class="text-muted small">
                                                                                        srt-1001</span>
                                                                                    <h6>Digital clock</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                                <div class="text-end ms-auto text-bold">

                                                                                    <p class="mt-2"></p>
                                                                                    <h6 class="mt-2">X 5</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="list-group-item d-flex mt-2"
                                                                                style="border-radius: 12px;">
                                                                                <a href="#" class="me-3">
                                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                        class="rounded" width="80"
                                                                                        alt="...">
                                                                                </a>
                                                                                <div>
                                                                                    <span class="text-muted small">
                                                                                        srt-1001</span>
                                                                                    <h6>Digital clock</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                                <div class="text-end ms-auto text-bold">
                                                                                    <p class="mt-2"></p>
                                                                                    <h6 class="mt-2">X 5</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-4">
                                                                        <div class="col-12">
                                                                            <div><strong>Order Complaint Detail</strong>
                                                                            </div>
                                                                            <hr class="mb-0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">Fitting
                                                                                                    not proper and also
                                                                                                    colour is getting
                                                                                                    fade. Please give me
                                                                                                    the refund of this
                                                                                                    product.</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary replyorderreason"
                                                                                                    style="border-radius: 10px; font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class=" orderrepliedpart px-0 d-flex align-items-center mt-4">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text avatar-reply rounded-circle"
                                                                                                    style="background: #0076fe !important;">R</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">
                                                                                                    Sorry for the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="innerreply px-4">
                                                                                        <div class="row orderreasondiv mt-4"
                                                                                            style="display: none;">
                                                                                            <div class="col-9 px-4">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="orderreply"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 orderreplycancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">2</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">My Jeans
                                                                                                    colour is getting
                                                                                                    fade. Please change
                                                                                                    this product</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    12:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary attmodalsave"
                                                                                                    style="border-radius: 10px;font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="innerreply px-4">

                                                                                        <div class="row reasondiv mt-4"
                                                                                            style="display: none;">


                                                                                            <div class="col-9">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="exampleFormControlInput1"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 rejectcancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">3</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1"> My suit
                                                                                                    is in small size.
                                                                                                    Please change this.
                                                                                                </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary attmodalsave"
                                                                                                    style="border-radius: 10px;font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="innerreply px-4">

                                                                                        <div class="row reasondiv mt-4"
                                                                                            style="display: none;">


                                                                                            <div class="col-9">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="exampleFormControlInput1"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 rejectcancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class=" card mb-4">
                                                            <div class="card-body p-0 py-3 px-1">
                                                                <div class="d-flex gap-4 align-items-center collapsed"
                                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                                    data-bs-target="#orderpreviousqueries"
                                                                    role="button">


                                                                    <div><strong>Order Previous Queries</strong></div>
                                                                    <div class="bi bi-chevron-down ms-auto"></div>
                                                                </div>
                                                                <div class="collapse" id="orderpreviousqueries"
                                                                    style="">
                                                                    <hr class="mb-0">
                                                                    <div class="row">
                                                                        <div class="col-12">

                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">Fitting
                                                                                                    not proper and also
                                                                                                    colour is getting
                                                                                                    fade. Please give me
                                                                                                    the refund of this
                                                                                                    product.</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div
                                                                                        class=" orderrepliedpart px-0 d-flex align-items-center mt-4">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text avatar-reply rounded-circle"
                                                                                                    style="background: #0076fe !important;">R</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">
                                                                                                    Sorry for the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="innerreply px-4">
                                                                                        <div class="row orderreasondiv mt-4"
                                                                                            style="display: none;">
                                                                                            <div class="col-9 px-4">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="orderreply"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 orderreplycancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="px-0 list-group-item d-flex align-items-center">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div
                                                                                            class="avatar avatar-info me-3">
                                                                                            <span
                                                                                                class="avatar-text rounded-circle">2</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 d-md-flex">
                                                                                        <div
                                                                                            class="flex-fill mb-1 mb-lg-0">
                                                                                            <p class="mb-1">My Jeans
                                                                                                colour is getting fade.
                                                                                                Please change this
                                                                                                product</p>
                                                                                            <span
                                                                                                class="text-muted small">
                                                                                                <i
                                                                                                    class="bi bi-clock me-1"></i>
                                                                                                26/07/2021
                                                                                                12:35PM</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="px-0 list-group-item d-flex align-items-center">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div
                                                                                            class="avatar avatar-info me-3">
                                                                                            <span
                                                                                                class="avatar-text rounded-circle">3</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 d-md-flex">
                                                                                        <div
                                                                                            class="flex-fill mb-1 mb-lg-0">
                                                                                            <p class="mb-1"> My suit is
                                                                                                in small size. Please
                                                                                                change this.</p>
                                                                                            <span
                                                                                                class="text-muted small">
                                                                                                <i
                                                                                                    class="bi bi-clock me-1"></i>
                                                                                                12/06/2021
                                                                                                11:35AM</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="complainproductimg ">
                                                        <div class="row mt-3 justify-content-between">
                                                            <div class="col-4">
                                                                <a href="#"
                                                                    class="btn btn-primary btn-icon btn-sm ordercall"><i
                                                                        class="bi bi-phone"></i> Call</a>
                                                            </div>

                                                            <div class="col-4 "></div>
                                                            <div class="col-4 d-flex justify-content-end">
                                                                <button type="button"
                                                                    class="ordereplybtn btn cancel-btn">Deny</button>
                                                                <button
                                                                    class="ordereplybtn btn btn-primary submit-btn ms-3"
                                                                    type="button">Refund</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-complaint badgenew me-5">Complaint</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary ms-2">Paid
                                                            Online (Net Banking)</small></p>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">

                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems2"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>

                                            <div class="col-xl-3 ordecomplaintright">
                                                <div class="ordercheckbtnouter">
                                                    <div>
                                                        <a class="btn float-end orderbtns" data-bs-toggle="collapse"
                                                            data-bs-target="#complaintorder2">
                                                            <i class="bi bi-box-arrow-up-right text-primary"></i>
                                                            Check</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="vieworderitems2">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#vieworderitems2"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="complaintorder2">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class=" card mb-4">
                                                            <div class="card-body p-0 py-3 px-1">
                                                                <div class="d-flex gap-4 align-items-center collapsed"
                                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                                    data-bs-target="#myOrders53211" role="button">
                                                                    <div><strong>Complaint Order</strong></div>
                                                                    <div class="bi bi-chevron-down ms-auto"></div>
                                                                </div>
                                                                <div class="collapse" id="myOrders53211" style="">
                                                                    <hr class="mb-0">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="list-group-item d-flex mt-3"
                                                                                style="border-radius: 12px;">
                                                                                <a href="#" class="me-3">
                                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                        class="rounded" width="80"
                                                                                        alt="...">
                                                                                </a>
                                                                                <div>
                                                                                    <span class="text-muted small">
                                                                                        srt-1001</span>
                                                                                    <h6>Digital clock</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                                <div class="text-end ms-auto text-bold">

                                                                                    <p class="mt-2"></p>
                                                                                    <h6 class="mt-2">X 5</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="list-group-item d-flex mt-2"
                                                                                style="border-radius: 12px;">
                                                                                <a href="#" class="me-3">
                                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                        class="rounded" width="80"
                                                                                        alt="...">
                                                                                </a>
                                                                                <div>
                                                                                    <span class="text-muted small">
                                                                                        srt-1001</span>
                                                                                    <h6>Digital clock</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                                <div class="text-end ms-auto text-bold">
                                                                                    <p class="mt-2"></p>
                                                                                    <h6 class="mt-2">X 5</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-4">
                                                                        <div class="col-12">
                                                                            <div><strong>Order Complaint Detail</strong>
                                                                            </div>
                                                                            <hr class="mb-0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">Fitting
                                                                                                    not proper and also
                                                                                                    colour is getting
                                                                                                    fade. Please give me
                                                                                                    the refund of this
                                                                                                    product.</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary replyorderreason"
                                                                                                    style="border-radius: 10px; font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class=" orderrepliedpart px-0 d-flex align-items-center mt-4">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text avatar-reply rounded-circle"
                                                                                                    style="background: #0076fe !important;">R</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">
                                                                                                    Sorry for the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="innerreply px-4">
                                                                                        <div class="row orderreasondiv mt-4"
                                                                                            style="display: none;">
                                                                                            <div class="col-9 px-4">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="orderreply"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 orderreplycancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">2</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">My Jeans
                                                                                                    colour is getting
                                                                                                    fade. Please change
                                                                                                    this product</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    12:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary attmodalsave"
                                                                                                    style="border-radius: 10px;font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="innerreply px-4">

                                                                                        <div class="row reasondiv mt-4"
                                                                                            style="display: none;">


                                                                                            <div class="col-9">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="exampleFormControlInput1"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 rejectcancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">3</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1"> My suit
                                                                                                    is in small size.
                                                                                                    Please change this.
                                                                                                </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary attmodalsave"
                                                                                                    style="border-radius: 10px;font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="innerreply px-4">

                                                                                        <div class="row reasondiv mt-4"
                                                                                            style="display: none;">


                                                                                            <div class="col-9">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="exampleFormControlInput1"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 rejectcancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class=" card mb-4">
                                                            <div class="card-body p-0 py-3 px-1">
                                                                <div class="d-flex gap-4 align-items-center collapsed"
                                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                                    data-bs-target="#orderpreviousqueries"
                                                                    role="button">


                                                                    <div><strong>Order Previous Queries</strong></div>
                                                                    <div class="bi bi-chevron-down ms-auto"></div>
                                                                </div>
                                                                <div class="collapse" id="orderpreviousqueries"
                                                                    style="">
                                                                    <hr class="mb-0">
                                                                    <div class="row">
                                                                        <div class="col-12">

                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">Fitting
                                                                                                    not proper and also
                                                                                                    colour is getting
                                                                                                    fade. Please give me
                                                                                                    the refund of this
                                                                                                    product.</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div
                                                                                        class=" orderrepliedpart px-0 d-flex align-items-center mt-4">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text avatar-reply rounded-circle"
                                                                                                    style="background: #0076fe !important;">R</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">
                                                                                                    Sorry for the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="innerreply px-4">
                                                                                        <div class="row orderreasondiv mt-4"
                                                                                            style="display: none;">
                                                                                            <div class="col-9 px-4">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="orderreply"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 orderreplycancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="px-0 list-group-item d-flex align-items-center">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div
                                                                                            class="avatar avatar-info me-3">
                                                                                            <span
                                                                                                class="avatar-text rounded-circle">2</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 d-md-flex">
                                                                                        <div
                                                                                            class="flex-fill mb-1 mb-lg-0">
                                                                                            <p class="mb-1">My Jeans
                                                                                                colour is getting fade.
                                                                                                Please change this
                                                                                                product</p>
                                                                                            <span
                                                                                                class="text-muted small">
                                                                                                <i
                                                                                                    class="bi bi-clock me-1"></i>
                                                                                                26/07/2021
                                                                                                12:35PM</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="px-0 list-group-item d-flex align-items-center">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div
                                                                                            class="avatar avatar-info me-3">
                                                                                            <span
                                                                                                class="avatar-text rounded-circle">3</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 d-md-flex">
                                                                                        <div
                                                                                            class="flex-fill mb-1 mb-lg-0">
                                                                                            <p class="mb-1"> My suit is
                                                                                                in small size. Please
                                                                                                change this.</p>
                                                                                            <span
                                                                                                class="text-muted small">
                                                                                                <i
                                                                                                    class="bi bi-clock me-1"></i>
                                                                                                12/06/2021
                                                                                                11:35AM</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="complainproductimg ">
                                                        <div class="row mt-3 justify-content-between">
                                                            <div class="col-4">
                                                                <a href="#"
                                                                    class="btn btn-primary btn-icon btn-sm ordercall"><i
                                                                        class="bi bi-phone"></i> Call</a>
                                                            </div>

                                                            <div class="col-4 "></div>
                                                            <div class="col-4 d-flex justify-content-end">
                                                                <button type="button"
                                                                    class="ordereplybtn btn cancel-btn">Deny</button>
                                                                <button
                                                                    class="ordereplybtn btn btn-primary submit-btn ms-3"
                                                                    type="button">Refund</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">

                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-complaint badgenew me-5">Complaint</span>
                                                            <span class="badge bg-return badgenew me-3">Returned</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary ms-2">Paid
                                                            Online (Net Banking)</small></p>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems3"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>

                                            <div class="col-xl-3 ordecomplaintright">
                                                <div class="ordercheckbtnouter">
                                                    <div>
                                                        <a class="btn float-end orderbtns " data-bs-toggle="collapse"
                                                            data-bs-target="#complaintorder3">
                                                            <i class="bi bi-box-arrow-up-right text-primary"></i>
                                                            Check</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="vieworderitems3">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#vieworderitems3"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="complaintorder3">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class=" card mb-4">
                                                            <div class="card-body p-0 py-3 px-1">
                                                                <div class="d-flex gap-4 align-items-center collapsed"
                                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                                    data-bs-target="#myOrders53211" role="button">
                                                                    <div><strong>Complaint Order</strong></div>
                                                                    <div class="bi bi-chevron-down ms-auto"></div>
                                                                </div>
                                                                <div class="collapse" id="myOrders53211" style="">
                                                                    <hr class="mb-0">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="list-group-item d-flex mt-3"
                                                                                style="border-radius: 12px;">
                                                                                <a href="#" class="me-3">
                                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                        class="rounded" width="80"
                                                                                        alt="...">
                                                                                </a>
                                                                                <div>
                                                                                    <span class="text-muted small">
                                                                                        srt-1001</span>
                                                                                    <h6>Digital clock</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                                <div class="text-end ms-auto text-bold">

                                                                                    <p class="mt-2"></p>
                                                                                    <h6 class="mt-2">X 5</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="list-group-item d-flex mt-2"
                                                                                style="border-radius: 12px;">
                                                                                <a href="#" class="me-3">
                                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                        class="rounded" width="80"
                                                                                        alt="...">
                                                                                </a>
                                                                                <div>
                                                                                    <span class="text-muted small">
                                                                                        srt-1001</span>
                                                                                    <h6>Digital clock</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                                <div class="text-end ms-auto text-bold">
                                                                                    <p class="mt-2"></p>
                                                                                    <h6 class="mt-2">X 5</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-4">
                                                                        <div class="col-12">
                                                                            <div><strong>Order Complaint Detail</strong>
                                                                            </div>
                                                                            <hr class="mb-0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">Fitting
                                                                                                    not proper and also
                                                                                                    colour is getting
                                                                                                    fade. Please give me
                                                                                                    the refund of this
                                                                                                    product.</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary replyorderreason"
                                                                                                    style="border-radius: 10px; font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class=" orderrepliedpart px-0 d-flex align-items-center mt-4">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text avatar-reply rounded-circle"
                                                                                                    style="background: #0076fe !important;">R</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">
                                                                                                    Sorry for the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="innerreply px-4">
                                                                                        <div class="row orderreasondiv mt-4"
                                                                                            style="display: none;">
                                                                                            <div class="col-9 px-4">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="orderreply"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 orderreplycancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">2</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">My Jeans
                                                                                                    colour is getting
                                                                                                    fade. Please change
                                                                                                    this product</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    12:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary attmodalsave"
                                                                                                    style="border-radius: 10px;font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="innerreply px-4">

                                                                                        <div class="row reasondiv mt-4"
                                                                                            style="display: none;">


                                                                                            <div class="col-9">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="exampleFormControlInput1"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 rejectcancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">3</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1"> My suit
                                                                                                    is in small size.
                                                                                                    Please change this.
                                                                                                </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary attmodalsave"
                                                                                                    style="border-radius: 10px;font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="innerreply px-4">

                                                                                        <div class="row reasondiv mt-4"
                                                                                            style="display: none;">


                                                                                            <div class="col-9">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="exampleFormControlInput1"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 rejectcancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class=" card mb-4">
                                                            <div class="card-body p-0 py-3 px-1">
                                                                <div class="d-flex gap-4 align-items-center collapsed"
                                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                                    data-bs-target="#orderpreviousqueries"
                                                                    role="button">


                                                                    <div><strong>Order Previous Queries</strong></div>
                                                                    <div class="bi bi-chevron-down ms-auto"></div>
                                                                </div>
                                                                <div class="collapse" id="orderpreviousqueries"
                                                                    style="">
                                                                    <hr class="mb-0">
                                                                    <div class="row">
                                                                        <div class="col-12">

                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">Fitting
                                                                                                    not proper and also
                                                                                                    colour is getting
                                                                                                    fade. Please give me
                                                                                                    the refund of this
                                                                                                    product.</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div
                                                                                        class=" orderrepliedpart px-0 d-flex align-items-center mt-4">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text avatar-reply rounded-circle"
                                                                                                    style="background: #0076fe !important;">R</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">
                                                                                                    Sorry for the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="innerreply px-4">
                                                                                        <div class="row orderreasondiv mt-4"
                                                                                            style="display: none;">
                                                                                            <div class="col-9 px-4">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="orderreply"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 orderreplycancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="px-0 list-group-item d-flex align-items-center">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div
                                                                                            class="avatar avatar-info me-3">
                                                                                            <span
                                                                                                class="avatar-text rounded-circle">2</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 d-md-flex">
                                                                                        <div
                                                                                            class="flex-fill mb-1 mb-lg-0">
                                                                                            <p class="mb-1">My Jeans
                                                                                                colour is getting fade.
                                                                                                Please change this
                                                                                                product</p>
                                                                                            <span
                                                                                                class="text-muted small">
                                                                                                <i
                                                                                                    class="bi bi-clock me-1"></i>
                                                                                                26/07/2021
                                                                                                12:35PM</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="px-0 list-group-item d-flex align-items-center">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div
                                                                                            class="avatar avatar-info me-3">
                                                                                            <span
                                                                                                class="avatar-text rounded-circle">3</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 d-md-flex">
                                                                                        <div
                                                                                            class="flex-fill mb-1 mb-lg-0">
                                                                                            <p class="mb-1"> My suit is
                                                                                                in small size. Please
                                                                                                change this.</p>
                                                                                            <span
                                                                                                class="text-muted small">
                                                                                                <i
                                                                                                    class="bi bi-clock me-1"></i>
                                                                                                12/06/2021
                                                                                                11:35AM</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="complainproductimg ">
                                                        <div class="row mt-3 justify-content-between">
                                                            <div class="col-4">
                                                                <a href="#"
                                                                    class="btn btn-primary btn-icon btn-sm ordercall"><i
                                                                        class="bi bi-phone"></i> Call</a>
                                                            </div>

                                                            <div class="col-4 "></div>
                                                            <div class="col-4 d-flex justify-content-end">
                                                                <button type="button"
                                                                    class="ordereplybtn btn cancel-btn">Deny</button>
                                                                <button
                                                                    class="ordereplybtn btn btn-primary submit-btn ms-3"
                                                                    type="button">Refund</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>

                                                            <span
                                                                class="badge bg-complaint badgenew me-5">Complaint</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small
                                                            class="text-primary ms-5">C.O.D</small></p>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">

                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems4"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                        </div>
                                        <div class="row collapse" id="vieworderitems4">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#vieworderitems4"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">

                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-complaint badgenew me-5">Complaint</span>
                                                            <span
                                                                class="badge bg-exchange badgenew me-3">Exchange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary ms-2">Paid
                                                            Online (Net Banking)</small></p>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems6"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>


                                        </div>
                                        <div class="row collapse" id="vieworderitems6">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#vieworderitems6"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">

                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-complaint badgenew me-5">Complaint</span>
                                                            <span class="badge bg-return badgenew me-3">Returned</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems5"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->

                                        </div>
                                        <div class="row collapse" id="vieworderitems5">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#vieworderitems5"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">

                                <div class="card">
                                    <div class="card-body d-flex flex-column gap-3">
                                        <div class="row ">
                                            <div class="col-xl-2 fw-bolder orderdivtitle">
                                                <p>By</p>
                                                <p>Delivery at</p>
                                                <p>Amount</p>
                                                <p>Ordered on</p>
                                                <p>Order ID</p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <p>Kartik Verma</p>
                                                    <span class="badge bg-primary badgenew">New</span> -->
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="display-9 me-5"> Rakesh Kumar </div>
                                                            <span
                                                                class="badge bg-complaint badgenew me-5">Complaint</span>
                                                            <span class="badge bg-return badgenew me-3">Returned</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>B-34, Santa Calra Street, Sushant Lok-3, Sector 57, Gurugram-122003
                                                </p>
                                                <div class="d-flex justify-content-between rejectedanc">
                                                    <p><strong> ₹ 3,225 </strong><small class="text-primary">Paid
                                                            Online (Net Banking)</small></p>
                                                </div>
                                                <p>27,Jan,2021</p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>OD10000026</p>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <div
                                                            class="mb-2 d-flex justify-content-center gap-4 align-items-center">
                                                            <div>
                                                                <i class="bi bi-box-seam mr-2 text-primary me-1 "></i>
                                                                <span>Item(s): <a href="#">4 items</a>
                                                                    <a class="ms-2 " data-bs-toggle="collapse"
                                                                        data-bs-target="#vieworderitems7"
                                                                        style="cursor:pointer"><i
                                                                            class="bi bi-eye text-primary"></i>
                                                                        View</a></span>
                                                            </div>
                                                            <!-- <div>
                                                                <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
                                                                <span>Order</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <strong>Total :</strong> -->
                                            </div>
                                            <!-- <div class="col-xl-1 text-center">
                                                <span class="badge bg-exchange badgenew">Exchange</span>
                                            </div> -->
                                            <div class="col-xl-3 ordecomplaintright">
                                                <div class="ordercheckbtnouter">
                                                    <div>
                                                        <a class="btn float-end orderbtns " data-bs-toggle="collapse"
                                                            data-bs-target="#complaintorder6">
                                                            <i class="bi bi-box-arrow-up-right text-primary"></i>
                                                            Check</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row collapse" id="vieworderitems7">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div><strong>Ordered Items</strong>
                                                                <a class="btn p-0 btn-primary float-end"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#vieworderitems7"
                                                                    style="width: 25px;border-radius: 5px;">
                                                                    <i class="bi bi-x"></i>
                                                                </a>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">

                                                            <div class="list-group-item d-flex mt-3"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">

                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item d-flex mt-2"
                                                                style="border-radius: 12px;">
                                                                <a href="#" class="me-3">
                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                        class="rounded" width="80" alt="...">
                                                                </a>
                                                                <div>
                                                                    <span class="text-muted small">
                                                                        srt-1001</span>
                                                                    <h6>Digital clock</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                                <div class="text-end ms-auto text-bold">
                                                                    <p class="mt-2"></p>
                                                                    <h6 class="mt-2">X 5</h6>
                                                                    <div>₹ 1.190,90</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row collapse" id="complaintorder6">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class=" card mb-4">
                                                            <div class="card-body p-0 py-3 px-1">
                                                                <div class="d-flex gap-4 align-items-center collapsed"
                                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                                    data-bs-target="#myOrders53211" role="button">
                                                                    <div><strong>Complaint Order</strong></div>
                                                                    <div class="bi bi-chevron-down ms-auto"></div>
                                                                </div>
                                                                <div class="collapse" id="myOrders53211" style="">
                                                                    <hr class="mb-0">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="list-group-item d-flex mt-3"
                                                                                style="border-radius: 12px;">
                                                                                <a href="#" class="me-3">
                                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                        class="rounded" width="80"
                                                                                        alt="...">
                                                                                </a>
                                                                                <div>
                                                                                    <span class="text-muted small">
                                                                                        srt-1001</span>
                                                                                    <h6>Digital clock</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                                <div class="text-end ms-auto text-bold">

                                                                                    <p class="mt-2"></p>
                                                                                    <h6 class="mt-2">X 5</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="list-group-item d-flex mt-2"
                                                                                style="border-radius: 12px;">
                                                                                <a href="#" class="me-3">
                                                                                    <img src="https://vetra.laborasyon.com/assets/images/products/3.jpg"
                                                                                        class="rounded" width="80"
                                                                                        alt="...">
                                                                                </a>
                                                                                <div>
                                                                                    <span class="text-muted small">
                                                                                        srt-1001</span>
                                                                                    <h6>Digital clock</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                                <div class="text-end ms-auto text-bold">
                                                                                    <p class="mt-2"></p>
                                                                                    <h6 class="mt-2">X 5</h6>
                                                                                    <div>₹ 1.190,90</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-4">
                                                                        <div class="col-12">
                                                                            <div><strong>Order Complaint Detail</strong>
                                                                            </div>
                                                                            <hr class="mb-0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">Fitting
                                                                                                    not proper and also
                                                                                                    colour is getting
                                                                                                    fade. Please give me
                                                                                                    the refund of this
                                                                                                    product.</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary replyorderreason"
                                                                                                    style="border-radius: 10px; font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class=" orderrepliedpart px-0 d-flex align-items-center mt-4">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text avatar-reply rounded-circle"
                                                                                                    style="background: #0076fe !important;">R</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">
                                                                                                    Sorry for the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="innerreply px-4">
                                                                                        <div class="row orderreasondiv mt-4"
                                                                                            style="display: none;">
                                                                                            <div class="col-9 px-4">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="orderreply"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 orderreplycancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">2</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">My Jeans
                                                                                                    colour is getting
                                                                                                    fade. Please change
                                                                                                    this product</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    12:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary attmodalsave"
                                                                                                    style="border-radius: 10px;font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="innerreply px-4">

                                                                                        <div class="row reasondiv mt-4"
                                                                                            style="display: none;">


                                                                                            <div class="col-9">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="exampleFormControlInput1"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 rejectcancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">3</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1"> My suit
                                                                                                    is in small size.
                                                                                                    Please change this.
                                                                                                </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="me-5">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <button
                                                                                                    class="btn btn-primary attmodalsave"
                                                                                                    style="border-radius: 10px;font-size: 14px;">Reply</button>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="innerreply px-4">

                                                                                        <div class="row reasondiv mt-4"
                                                                                            style="display: none;">


                                                                                            <div class="col-9">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="exampleFormControlInput1"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 rejectcancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class=" card mb-4">
                                                            <div class="card-body p-0 py-3 px-1">
                                                                <div class="d-flex gap-4 align-items-center collapsed"
                                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                                    data-bs-target="#orderpreviousqueries"
                                                                    role="button">


                                                                    <div><strong>Order Previous Queries</strong></div>
                                                                    <div class="bi bi-chevron-down ms-auto"></div>
                                                                </div>
                                                                <div class="collapse" id="orderpreviousqueries"
                                                                    style="">
                                                                    <hr class="mb-0">
                                                                    <div class="row">
                                                                        <div class="col-12">

                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item p-0 py-3">
                                                                                    <div
                                                                                        class="px-0 d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text rounded-circle">1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">Fitting
                                                                                                    not proper and also
                                                                                                    colour is getting
                                                                                                    fade. Please give me
                                                                                                    the refund of this
                                                                                                    product.</p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div
                                                                                        class=" orderrepliedpart px-0 d-flex align-items-center mt-4">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div
                                                                                                class="avatar avatar-info me-3">
                                                                                                <span
                                                                                                    class="avatar-text avatar-reply rounded-circle"
                                                                                                    style="background: #0076fe !important;">R</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="flex-grow-1 d-md-flex">
                                                                                            <div
                                                                                                class="flex-fill mb-1 mb-lg-0">
                                                                                                <p class="mb-1">
                                                                                                    Sorry for the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. Sorry for
                                                                                                    the
                                                                                                    inconvenience
                                                                                                    yes we will do
                                                                                                    that in few
                                                                                                    days. Wait for
                                                                                                    the reply from
                                                                                                    our support
                                                                                                    team. </p>
                                                                                                <span
                                                                                                    class="text-muted small">
                                                                                                    <i
                                                                                                        class="bi bi-clock me-1"></i>
                                                                                                    26/07/2021
                                                                                                    10:35PM</span>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="innerreply px-4">
                                                                                        <div class="row orderreasondiv mt-4"
                                                                                            style="display: none;">
                                                                                            <div class="col-9 px-4">
                                                                                                <input type="text"
                                                                                                    class="form-control undelreason"
                                                                                                    id="orderreply"
                                                                                                    placeholder="Enter Reply For This Complaint.">
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a
                                                                                                    class="btn float-start p-0 orderreplycancel">
                                                                                                    <i
                                                                                                        class="bi bi-x-circle text-danger"></i>
                                                                                                    Cancel
                                                                                                </a>
                                                                                                <a class="btn ms-4 p-0">
                                                                                                    <i
                                                                                                        class="bi bi-check-circle text-success"></i>
                                                                                                    Send
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="px-0 list-group-item d-flex align-items-center">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div
                                                                                            class="avatar avatar-info me-3">
                                                                                            <span
                                                                                                class="avatar-text rounded-circle">2</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 d-md-flex">
                                                                                        <div
                                                                                            class="flex-fill mb-1 mb-lg-0">
                                                                                            <p class="mb-1">My Jeans
                                                                                                colour is getting fade.
                                                                                                Please change this
                                                                                                product</p>
                                                                                            <span
                                                                                                class="text-muted small">
                                                                                                <i
                                                                                                    class="bi bi-clock me-1"></i>
                                                                                                26/07/2021
                                                                                                12:35PM</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="px-0 list-group-item d-flex align-items-center">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div
                                                                                            class="avatar avatar-info me-3">
                                                                                            <span
                                                                                                class="avatar-text rounded-circle">3</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1 d-md-flex">
                                                                                        <div
                                                                                            class="flex-fill mb-1 mb-lg-0">
                                                                                            <p class="mb-1"> My suit is
                                                                                                in small size. Please
                                                                                                change this.</p>
                                                                                            <span
                                                                                                class="text-muted small">
                                                                                                <i
                                                                                                    class="bi bi-clock me-1"></i>
                                                                                                12/06/2021
                                                                                                11:35AM</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="complainproductimg ">
                                                        <div class="row mt-3 justify-content-between">
                                                            <div class="col-4">
                                                                <a href="#"
                                                                    class="btn btn-primary btn-icon btn-sm ordercall"><i
                                                                        class="bi bi-phone"></i> Call</a>
                                                            </div>

                                                            <div class="col-4 "></div>
                                                            <div class="col-4 d-flex justify-content-end">
                                                                <button type="button"
                                                                    class="ordereplybtn btn cancel-btn">Deny</button>
                                                                <button
                                                                    class="ordereplybtn btn btn-primary submit-btn ms-3"
                                                                    type="button">Refund</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Filter Modal Starts -->
<div class="modal fade " id="filter" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Orders Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form autocomplete="off">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                <label class="form-check-label" for="categoryCheck1">
                                    <span class="badge bg-primary badgenew">New</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="categoryCheck2">
                                <label class="form-check-label" for="categoryCheck2">
                                    <span class="badge bg-exchange badgenew">Exchange</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="categoryCheck3">
                                <label class="form-check-label" for="categoryCheck3">
                                    <span class="badge bg-return badgenew">Return</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="categoryCheck4">
                                <label class="form-check-label" for="categoryCheck4">
                                    <span class="badge bg-delivered badgenew">Delivered</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="categoryCheck5">
                                <label class="form-check-label" for="categoryCheck5">
                                    <span class="badge bg-undelivered badgenew">Undelivered</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </form> -->
                <form autocomplete="off">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                <label class="form-check-label badge bg-primary badgenew" for="categoryCheck1">
                                    New
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="categoryCheck2">
                                <label class="form-check-label badge bg-exchange badgenew" for="categoryCheck2">
                                    Exchange
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="categoryCheck3">
                                <label class="form-check-label badge bg-return badgenew" for="categoryCheck3">
                                    Return
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="categoryCheck4">
                                <label class="form-check-label badge bg-delivered badgenew" for="categoryCheck4">
                                    Delivered
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="categoryCheck5">
                                <label class="form-check-label badge bg-undelivered badgenew" for="categoryCheck5">
                                    Undelivered
                                </label>
                            </div>
                        </div>
                        <div class="col-3"></div>
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
<!-- /Filter Modal Ends-->
@stop