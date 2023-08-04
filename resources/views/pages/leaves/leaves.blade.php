@extends('layouts.app')
@section('title') {{'Leaves'}} @endsection
@section('layouts.container.content')
<div class="row">
    <div class="col-md-12  mb-3 pb-1">
       <div class="d-flex align-items-lg-center flex-lg-row flex-column">
          <div class="flex-grow-1">
             <!-- <h4 class="fs-16 mb-1">Good Morning, Anna!</h4> -->
             <p class="font-size-16 text-muted ">Here's what's happening with your employees
                today. 

             @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
             </p>
          </div>
          <div class="mt-3 mt-lg-0">
             <form>
                <div class="row g-3 mb-0 align-items-center font-size-16">
                    <div class="col-auto">
                     <span>
                        <input type="radio" id="btn-apps" name="table-view-action" autocomplete="off" class="btn-check">
                         <label class="btn btn-icon btn-soft-danger btn-sm" for="btn-apps">
                            <i class="material-icons md-18 align-middle me-1">apps</i>
                         </label>
                     </span>
                     <span>
                         <input type="radio" id="btn-menu" autocomplete="off" name="table-view-action" class="btn-check" checked>
                         <label class="btn btn-icon btn-soft-danger btn-sm" for="btn-menu">
                            <i class="material-icons md-18 align-middle me-1">menu</i>
                         </label>
                     </span>
                   </div> 
                   <div class="col-auto">
                      <input type="checkbox" id="btn-check" class="btn-check"  autocomplete="off" >
                      <label class="btn btn-icon btn-soft-danger btn-sm fw-semibold" for="btn-check">
                        <i class="material-icons md-18 align-middle me-1 add_circle">add_circle</i>
                        <i class="material-icons md-18 align-middle me-1 do_not_disturb_on">do_not_disturb_on</i>
                        Add Employee
                      </label>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="text-muted fw-semibold flex-grow-1">Today Presents</p>
                <p class="text-muted mt-3 mb-0 font-size-16 "><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> Today </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="text-muted fw-semibold flex-grow-1">Planned Leaves</p>
                <p class="text-muted mt-3 mb-0 font-size-16 "><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>0/12</span> Today </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="text-muted fw-semibold flex-grow-1">Unplanned Leaves</p>
                <p class="text-muted mt-3 mb-0 font-size-16 "><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>240</span> Today </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="text-muted fw-semibold flex-grow-1">Pending Requests</p>
                <p class="text-muted mt-3 mb-0 font-size-16 "><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>240</span> Today </p>
            </div>
        </div>
    </div>
</div>
@endsection
