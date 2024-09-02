@extends('admin.master')

@section('content')
<div class="page-header ">
    {{-- <h1 class="page-heading">dashboard</h1> --}}
    {{-- <span class="fw-bold page-heading" style="font-size: 30px">Today</span><br> --}}
    <span id="dayOfWeek" class="page-heading" style="font-size: 30px"></span><br>
    <span id='ct7' class="page-heading" style="font-size: 25px"></span>
    <p class="fw-medium fs-5 animated-text"> <span>Hello,</span>
        <span class="fw-bold ">Innocent</span>
        <span>Welcome</span>
        <span>to</span>
        <span>COTAVOGA MANAGMENT SYSTEM
        </span>
        <span>Platform👋</span>
        <hr>
    </p>
</div>
<section class="mb-3 mb-lg-5">
    <div class="row mb-3">
        <div class="col-sm-6 col-lg-3 mb-4 ">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-red">{{$members}}</h4>
                            <p class="subtitle text-sm text-muted mb-0">Total Members</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div>
                                <img class="img-fluid custom-small-img" src="{{ asset('assests/image/teamwork.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none" href="{{ route('organization.member') }}">
                    <div class="card-footer py-3 bg-red-light">
                        <div class="row align-items-center text-red">
                            <div class="col-10">
                                <p class="mb-0">View Details</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4 ">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-dark">{{$shares}}</h4>
                            <p class="subtitle text-sm text-muted mb-0">Total shares</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div>
                                <img class="img-fluid custom-small-img" src="{{ asset('assests/image/task.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none"  href="{{ route('organization.share') }}">
                    <div class="card-footer py-3 bg-dark-light">
                        <div class="row align-items-center text-dark">
                            <div class="col-10">
                                <p class="mb-0">View Details</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- /Widget Type 1-->
        <!-- Widget Type 1-->
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-blue">{{$properties}}</h4>
                            <p class="subtitle text-sm text-muted mb-0">Total Property</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div>
                                <img class="img-fluid custom-small-img"
                                    src="{{ asset('assests/image/department.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none"  href="{{ route('organization.properties') }}">
                    <div class="card-footer py-3 bg-primary-light">
                        <div class="row align-items-center text-primary">
                            <div class="col-10">
                                <p class="mb-0">View Details</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Widget Type 1-->
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-primary">{{$loans}}</h4>
                            <p class="subtitle text-sm text-muted mb-0">Loan Request</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div>
                                <img class="img-fluid custom-small-img" src="{{ asset('assests/image/leave.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none" href="{{ route('loan.loanStatus') }}">
                    <div class="card-footer py-3 bg-warning-light">
                        <div class="row align-items-center text-warning">
                            <div class="col-10">
                                <p class="mb-0">View Details</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- /Widget Type 1-->

        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-info">{{$agents}}</h4>
                            <p class="subtitle text-sm text-muted mb-0">Agents</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div>
                                <img class="img-fluid custom-small-img" src="{{ asset('assests/image/users.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none"  href="{{ route('organization.agent') }}">
                    <div class="card-footer py-3 bg-info-light">
                        <div class="row align-items-center text-info">
                            <div class="col-10">
                                <p class="mb-0">View Details</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-success">{{$punishments}}</h4>
                            <p class="subtitle text-sm text-muted mb-0">Punishiments</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div>
                                <img class="img-fluid custom-small-img" src="{{ asset('assests/image/money.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none"   href="{{ route('organization.punishment') }}">
                    <div class="card-footer py-3 bg-green-light">
                        <div class="row align-items-center text-green">
                            <div class="col-10">
                                <p class="mb-0">View Details</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
       

        {{-- my payroll --}}
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-primary">{{$meetings}}</h4>
                            <p class="subtitle text-sm text-muted mb-0">All Meeting</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div>
                                <img class="img-fluid custom-small-img" src="{{ asset('assests/image/exchange.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none"  href="{{ route('organization.meeting') }}">
                    <div class="card-footer py-3 bg-primary-light">
                        <div class="row align-items-center text-primary">
                            <div class="col-10">
                                <p class="mb-0">View Details</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-green">{{$expenditures}}</h4>
                            <p class="subtitle text-sm text-muted mb-0">All Expenduture</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div>
                                <img class="img-fluid custom-small-img" src="{{ asset('assests/image/logout.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none" href="{{ route('organization.expenduture') }}" >
                    <div class="card-footer py-3 bg-dark-light">
                        <div class="row align-items-center text-dark">
                            <div class="col-10">
                                <p class="mb-0">View Details</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                        </div>
                    </div>
                </a>
                        </div>

            @endsection