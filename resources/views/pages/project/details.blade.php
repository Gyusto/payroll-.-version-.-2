@extends('layouts.app')
@section('title') {{'project details'}} @endsection
@section('layouts.container.content')
<div class="row">
    <div class="col-md-12  mb-3 pb-1">
       <div class="d-flex align-items-lg-center flex-lg-row flex-column">
          <div class="flex-grow-1">
             <!-- <h4 class="fs-16 mb-1">Good Morning, Anna!</h4> -->
             <p class="font-size-16 text-muted ">Here's what's happening with your project
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
                      <label class="btn btn-icon btn-soft-danger btn-sm fw-semibold" for="btn-check">
                        <i class="material-icons md-18 align-middle me-1 add_circle">edit_note</i>
                        Project
                      </label>
                   </div>
                   <!-- <div class="col-auto">
                      <label class="btn btn-icon btn-soft-danger btn-sm fw-semibold" for="btn-check">
                        <i class="material-icons md-18 align-middle me-1 add_circle">edit_note</i>
                        Activity
                      </label>
                   </div> -->
                </div>
             </form>
          </div>
       </div>
    </div>
</div>
<div class="row">
      <div class="col-md-8">
        <div class="card">
            <div class="card-bodyxss">
                <div class="card-header p-0 border-0">
                   <div class="row g-0">
                      <div class="col-6 col-sm-3">
                         <div class="p-3 border-dashed">
                            <p class="font-size-16 text-muted mb-0">Project: {{$details[0]->name}}</p>
                            <p class="font-size-16 text-muted mb-0">Client: {{$details[0]->projectClient->name}}</p>
                            <p class="font-size-16 text-muted mb-0">Start date: {{$details[0]->date_started}}</p>
                         </div>
                      </div>
                      <!--end col-->
                      <div class="col-6 col-sm-3">
                         <div class="p-3 border-dashed border-start-0">
                            <p class="font-size-16 mb-1">
                                <span class="counter-value" >{{$details[0]->budget}}
                            </span>
                            </p>
                            <p class="font-size-16 text-muted mb-0">Budget</p>
                         </div>
                      </div>
                      <!--end col-->
                      <div class="col-6 col-sm-3">
                         <div class="p-3 border-dashed border-start-0">
                            <p class="mb-1"><span class="counter-value" data-target="367">0</span></p>
                            <p class="font-size-16 text-muted mb-0">Refunds</p>
                         </div>
                      </div>
                      <!--end col-->
                      <div class="col-6 col-sm-3">
                         <div class="p-3 border-dashed border-start-0 border-end-0">
                            <p class="font-size-16 mb-1 text-success"><span class="counter-value" data-target="18.92">18.92</span>%</p>
                            <p class="font-size-16 text-muted mb-0">Profit</p>
                         </div>
                      </div>
                      <!--end col-->
                   </div>
               </div>
            </div>

        </div>
        <div class="tab-pane fade active show" >
        <div>
            <h5 class="font-size-16 mb-3">Materials</h5>
           <div class="d-flex justify-content-between">
            <span>
                <span class="badge bg-secondary">Wood</span>
                <span class="badge bg-secondary">Paint</span>
                <span class="badge bg-secondary">Hammer</span>
                <span class="badge bg-secondary">Nails</span>
                <span class="badge bg-secondary">Wood</span>
                <span class="badge bg-secondary">Wood</span>
            </span>
            <ul class="list-inline mb-0 align-self-center">
                        <li class="list-item d-inline-block">
                            <label role="button" class="ml-2 left-toggle-button" href="#" for="left-side-container">
                                 <i style="color: #EB4747 !important;" class="material-icons font-18">edit_note</i>
                            </label>                                                                                 
                        </li>
                    </ul>
            </div>
            <h5 class="font-size-16 my-3">Member</h5>
            <div class="d-flex justify-content-between">
                    <div class="img-group">
                        <a class="user-avatar user-avatar-group" href="#">
                            <img src="../assets/img/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                        </a>
                        <a class="user-avatar user-avatar-group" href="#">
                            <img src="../assets/img/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                        </a>
                        <a class="user-avatar user-avatar-group" href="#">
                            <img src="../assets/img/users/avatar-1.jpg" alt="user" class="rounded-circle thumb-xs">
                        </a>
                        <a class="user-avatar user-avatar-group" href="#">
                            <img src="../assets/img/users/avatar-1.jpg" alt="user" class="rounded-circle thumb-xs">
                        </a>
                        <a href="" class="avatar-box thumb-xs align-self-center">
                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                        </a>                    
                    </div><!--end img-group--> 
                    <ul class="list-inline mb-0 align-self-center">
                        <li class="list-item d-inline-block">
                            <label role="button" class="ml-2 left-toggle-button" href="#" for="left-side-container-1">
                                 <i style="color: #EB4747 !important;" class="material-icons font-18">edit_note</i>
                            </label>                                                                             
                        </li>
                    </ul>
                </div>
                <hr>
            </div>
      </div>
      </div>
      <div class="col-md-4">
        <div class="card">
            <div class="card-body">
        <label role="button" class="ml-2 left-toggle-button float-end" href="#" for="left-side-container-2">
             <i style="color: #EB4747 !important;" class="material-icons font-18">edit_note</i>
        </label> 
                <p class="text-muted fw-semibold flex-grow-1 ">Activity</p>
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 948px;">
                <div class="activity">
                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="material-icons md-18 align-middle me-1 "></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0 w-75">Task finished</h6>
                                <span class="text-muted d-block font-12">10 Min ago</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                <a href="#" class="text-info">[more info]</a>
                            </p> 
                            <span class="badge badge-soft-success">Completed</span>
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
                            <span class="badge badge-soft-success">Completed</span>
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
                                <span class="badge badge-soft-warning">In progress</span>
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
                            <span class="badge badge-soft-error">Pending</span>
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

    <div  class="left-main-container">
   <div>
   <!--Leftside Container: Material-->
        <input type="checkbox" id="left-side-container" class="left-side-container invisible">
        <label role="button" class="side-btn-close" for="left-side-container">
            <i style="color: #EB4747 !important;" class="material-icons font-18">cancel</i>
        </label>  
        <div class="left-container" id="left-side-container">
          <div style="position: absolute; top: 40px;left: 0;right: 0;bottom: 0; padding: 18px 10px;">
                 @include('pages.project.add-material')
            </div>
        </div>
    </div>
        <!--Leftside Container: Material-->
        <!--Leftside Container: Team member-->
    <div>
        <input type="checkbox" id="left-side-container-1" class="left-side-container invisible">
        <label role="button" class="side-btn-close" for="left-side-container-1">
            <i style="color: #EB4747 !important;" class="material-icons font-18">cancel</i>
        </label>   
        <div class="left-container" id="left-side-container-1">
          <div style="position: absolute; top: 40px;left: 0;right: 0;bottom: 0; padding: 18px 10px;">
                 @include('pages.project.add-team-member')
            </div>
        </div>
    </div>
       <!--Leftside Container: Team member-->
       <!--Leftside Container: Activity-->
    <div>
        <input type="checkbox" id="left-side-container-2" class="left-side-container invisible">
        <label role="button" class="side-btn-close" for="left-side-container-2">
            <i style="color: #EB4747 !important;" class="material-icons font-18">cancel</i>
        </label> 
        <div class="left-container" id="left-side-container-2">
          <div style="position: absolute; top: 40px;left: 0;right: 0;bottom: 0; padding: 18px 10px;">
               @include('pages.project.add-activity')
            </div>
        </div>
    </div>
        <!--Leftside Container: Activity-->
     </div>
@endsection
