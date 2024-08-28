@extends('admin.master')
@section('content')
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">Apply Loan</h4>
    {{-- <div>
        <a href="{{ route('leave.myLeave') }}" class="btn btn-success p-2 px-3 text-lg rounded-pill me-3">Leave
            Status</a>
        <a href="{{ route('leave.myLeaveBalance') }}" class="btn btn-success p-2 px-3 text-lg rounded-pill">Leave
            Balance</a>
    </div> --}}
</div>
<div class="container my-5 py-5">

    <!--Section: Form Design Block-->
    <section>

        <div>
            <div class="w-75 mx-auto">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-font text-uppercase">Loan Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('leave.store') }}" method="post">
                            @csrf
                            <div class="row mb-4">
                                <div class="row mb-4">
                                    <div class=" col-md-6">
                                        <div class="form-outline">
                                            <label class="form-label mt-2 fw-bold " for="form11Example1">From
                                                Date</label>
                                            <input required placeholder="Select" type="date" id="form11Example1"
                                                name="start_date" class="form-control" />
                                        </div>
                                        <div class="mt-2">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <label class="form-label mt-2 fw-bold " for="form11Example1">To Date</label>
                                            <input required placeholder="Select" type="date" id="form11Example1"
                                                name="end_date" class="form-control" />
                                        </div>
                                        <div class="mt-2">
                                            @error('employee_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class=" col-md-12">
                                        <div class="form-outline">
                                            <label class="form-label mt-2 fw-bold " for="form11Example1">From
                                                Amount</label>
                                            <input required placeholder="" type="number" id="form11Example1"
                                                name="start_date" class="form-control" />
                                        </div>
                                        <div class="mt-2">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="text-center w-25 mx-auto mt-3">
                                    <button type="submit"
                                        class="btn btn-success p-2 text-lg  rounded-pill col-md-10">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection