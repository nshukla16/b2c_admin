@extends('layouts.defaultmain')
@section('content')
<!-- content -->
<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Help & Support</h3>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Help & Support
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Raise New Complaints</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-4">
            <button class="btn btn-primary btn-icon float-end mt-4" type="submit" form="form1">
                <i class="bi bi-plus-circle"></i> Save
            </button>
        </div>
    </div>
    <div class="contentborder pt-3">
        <div class="row">
            <div class="col-3">
                <div class="card sticky-top">
                    <div class="card-body ps-3 pe-3 pt-3 pb-3">
                        <ul class="nav nav-pills flex-column gap-2">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('faq') ? 'active' : '' }}  d-flex align-items-center"
                                    href="faq">
                                    <span class="bi bi-globe2 me-3"></span>FAQ's</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('new-complaint') ? 'active' : '' }} d-flex align-items-center"
                                    href="new-complaint">
                                    <span class="bi bi-truck me-3"></span>Raise New Complaint</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('old-complaint') ? 'active' : '' }}"
                                    href="old-complaint">
                                    <span class="bi bi-wallet2 me-3"></span>Your Old Complaints</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 ">
                <form method="get" id="form1" action="http://34.72.9.224/quickWebsite/b2c_admin/settings">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Raise New Complaint</h6>
                        </div>
                    </div>
                
                </form>
            </div>
        </div>

    </div>
</div>



@stop