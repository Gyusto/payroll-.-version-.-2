@extends('layouts.app')
@section('title') {{'Designation'}} @endsection
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
<!-- <div class="row">
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
</div> -->
<div class="row">
      <div class="col-md-8">
        <div class="card">
            <div class="card-bodyxss">
                <div class="card-header p-0 border-0">
                   <div class="row g-0">
                      <div class="col-6 col-sm-3">
                         <div class="p-3 border-dashed">
                            <p class="text-muted mb-0">Project: Kimeo</p>
                            <p class="text-muted mb-0">Client: George Yusto</p>
                            <p class="text-muted mb-0">Start date: 14 Nov 2019</p>
                         </div>
                      </div>
                      <!--end col-->
                      <div class="col-6 col-sm-3">
                         <div class="p-3 border-dashed border-start-0">
                            <p class="text-muted mb-0">Budget</p>
                         </div>
                         <div class="p-3 border-dashed border-start-0">
                            <p class="text-muted mb-0">Earnings</p>
                         </div>
                         <div class="p-3 border-dashed border-start-0">
                            <p class="text-muted mb-0">Earnings</p>
                         </div>
                      </div>
                      <!--end col-->
                      <div class="col-6 col-sm-3">
                         <div class="p-3 border-dashed border-start-0">
                            <h5 class="mb-1"><span class="counter-value" data-target="367">367</span></h5>
                            <p class="text-muted mb-0">Refunds</p>
                         </div>
                      </div>
                      <!--end col-->
                      <div class="col-6 col-sm-3">
                         <div class="p-3 border-dashed border-start-0 border-end-0">
                            <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">18.92</span>%</h5>
                            <p class="text-muted mb-0">Conversation Ratio</p>
                         </div>
                      </div>
                      <!--end col-->
                   </div>
               </div>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <p class="text-muted fw-semibold flex-grow-1">Activity</p>
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 948px;">
                <div class="activity">
                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="material-icons md-18 align-middle me-1 add_circle">add_circle</i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0 w-75">Task finished</h6>
                                <span class="text-muted d-block font-12">10 Min ago</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                <a href="#" class="text-info">[more info]</a>
                            </p> 
                        </div>
                    </div> 

                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="mdi mdi-timer-off bg-soft-pink"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0  w-75">Task Overdue</h6>
                                <span class="text-muted font-12">50 Min ago</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                <a href="#" class="text-info">[more info]</a>
                            </p> 
                            <span class="badge badge-soft-secondary">Design</span>
                            <span class="badge badge-soft-secondary">HTML</span>  
                        </div>
                    </div>
                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0  w-75">New Task</h6>
                                <span class="text-muted font-12">10 hours ago</span>
                            </div> 
                            <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                <a href="#" class="text-info">[more info]</a>
                            </p> 
                        </div>
                    </div>   

                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0">New Comment</h6>
                                <span class="text-muted font-12">Yesterday</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                <a href="#" class="text-info">[more info]</a>
                            </p>   
                        </div>
                    </div>  
                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0">New Lead Miting</h6>
                                <span class="text-muted font-12">14 Nov 2019</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                <a href="#" class="text-info">[more info]</a>
                            </p> 
                        </div>
                    </div> 
                    </div>                                                                                                             
                </div>
            </div>
        </div>        
      </div>
</div>
<input type="text" id="datepicker"/>
@endsection
