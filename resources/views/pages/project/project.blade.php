@extends('layouts.app')
@section('title') {{'Projects'}} @endsection
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
                        Add Project
                      </label>
                   </div>
                   <div class="col-auto">
                      <input type="checkbox" id="btn-check-1" class="btn-check"  autocomplete="off" >
                      <label class="btn btn-icon btn-soft-danger btn-sm fw-semibold" for="btn-check-1">
                        Activity & Task
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
                <p class="text-muted fw-semibold flex-grow-1">Active Projects</p>
                <p class="text-muted mt-3 mb-0 font-size-16 "><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> Today </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="text-muted fw-semibold flex-grow-1">Active Activity</p>
                <p class="text-muted mt-3 mb-0 font-size-16 "><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>0/12</span> Today </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="text-muted fw-semibold flex-grow-1">Schedules</p>
                <p class="text-muted mt-3 mb-0 font-size-16 "><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>240</span> Today </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="text-muted fw-semibold flex-grow-1">Tasks & Activity</p>
                <p class="text-muted mt-3 mb-0 font-size-16 "><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>240</span> Today </p>
            </div>
        </div>
    </div>
</div>

<div class="view-list-details">
  <div class="box-shadow">
   <div id="search">
      <form id="search-form" action="" method="POST" enctype="multipart/form-data">
         <div class="row">
            <div class="form-group col-md-9">
               <input class="form-control" type="text" placeholder="Search" />
            </div>
            <div class="form-group col-md-3">
               <button type="submit" class="btn btn-block btn-soft-danger btn-md fw-semibold" >Search</button>
            </div>
         </div>
      </form>
   </div>
   <div class="mb-3 pb-1">
   <button class="collapsed btn btn-soft-danger btn-sm fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-expanded="false" aria-controls="filter">
      <i class="material-icons align-middle me-1 expand_more">expand_more</i>
      Advance Search
      
     </button>
   </div>
   <div  class="collapse" id="filter">
      <form>
         <div class="row">
         <div class="form-group col-sm-3 col-xs-6">
            <label for="department">By Department</label>
            <select id="department" data-filter="make" class="filter-make filter form-control">
               <option value="">Select Department</option>
               <option value="">Show All</option>
            </select>
         </div>
         <div class="form-group col-sm-3 col-xs-6">
            <label for="designation">By Designation</label>
            <select data-filter="model" class="filter-model filter form-control">
               <option value="">Select Designation</option>
               <option value="">Show All</option>
            </select>
         </div>
         <div class="form-group col-sm-3 col-xs-6">
            <label for="contract">By Contract</label>
            <select id="contract" data-filter="type" class="filter-type filter form-control">
               <option value="">Select Contract</option>
               <option value="">Show All</option>
            </select>
         </div>
         <div class="form-group col-sm-3 col-xs-6">
            <label for="date-range">By Date Range</label>
            <input id="date-range" class="form-control" type="picker" placeholder="Select Date Range" />
         </div>
      </div>
      </form>
   </div>
   <div class="row">
      <div class="col-md-12">
         <p class="text-muted fw-semibold flex-grow-1">Records</p>
         <span class="badge badge-default text-muted">Filtered 16</span>
         <span class="badge badge-default text-muted">Total 20</span>
      </div>
   </div>
</div>
<div class="row" id="add_option">
   <div class="table-responsive custom-table-responsive">
        <table class="table custom-table">
          <thead>
            <tr>  

              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox"  class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <th scope="col">Project Name</th>
              <th scope="col">Description</th>
              <th scope="col">Start Date</th>
              <th scope="col">End date</th>
              <th scope="col">Created By</th>
              <th scope="col">Date Created</th>
            </tr>
          </thead>
          <tbody>
             @foreach($projects as $project)
            <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td >
                <a  href="{{ route('project.details', $project->uuid) }}">
                {{$project->name}}
                 </a>
              </td>
              <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                {{$project->description}}
                </a>
            </td>
            <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                  {{$project->date_started}}
                </a>
              </td>
              <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                  {{$project->date_stopped}}
              </a>
              </td>
              <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                {{$project->createdBy->person->firstName.' '.$project->createdBy->person->lastName}}
               </a>
            </td>
              <td>
                <a  href="{{ route('project.details', $project->uuid) }}">
                {{$project->date_created}}
            </a>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex justify-content-end mb-5">
          <div class="pagination-wrap hstack gap-2" style="display: flex;">
             <a class="page-item pagination-prev disabled" href="#">
             Previous
             </a>
             <ul class="pagination listjs-pagination mb-0">
                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                <li><a class="page" href="#" data-i="2" data-page="8">2</a></li>
             </ul>
             <a class="page-item pagination-next" href="#">
             Next
             </a>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="input-details card">
   <div class="card-header" style="">
      <h5>Form Validation</h5>
      <span class="d-block pt-2 ng-tns-c128-1 ng-star-inserted"></span>
      <div class="card-header-right ng-tns-c128-1 ng-star-inserted">
         <div class="btn-group card-option ng-tns-c128-1 dropdown">
            <button type="button" class="dropdown-toggle btn btn-icon ng-tns-c128-1" aria-expanded="false"><i class="feather icon-more-horizontal ng-tns-c128-1"></i></button>
            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end ng-tns-c128-1">
               <li class="dropdown-item full-card ng-tns-c128-1"><a href="javascript:" class="ng-tns-c128-1"><span class="ng-tns-c128-1"><i _ngcontent-hik-c128="" class="feather ng-tns-c128-1 icon-maximize"></i> Maximize</span></a></li>
               <li class="dropdown-item minimize-card ng-tns-c128-1"><a href="javascript:" class="ng-tns-c128-1"><span class="ng-tns-c128-1"><i _ngcontent-hik-c128="" class="feather ng-tns-c128-1 icon-minus"></i> Collapse </span><span style="display: block;" class="ng-tns-c128-1"><i class="feather icon-plus ng-tns-c128-1"></i></span></a></li>
               <li class="dropdown-item reload-card ng-tns-c128-1"><a href="javascript:" class="ng-tns-c128-1"><i class="feather icon-refresh-cw ng-tns-c128-1"></i> Reload</a></li>
               <li class="dropdown-item close-card ng-tns-c128-1"><a href="javascript:" class="ng-tns-c128-1"><i class="feather icon-trash ng-tns-c128-1"></i> Remove</a></li>
            </ul>
         </div>
      </div>
      <!---->
      <div></div>
      <!----><!---->
   </div>

  <div class="card-block">
        <div class="row">
            <div class="col-md-6">
            <form action="{{ route('employee') }}" method="POST">
            @csrf
                <div  class="row">
                    <div  class="col-md-6">
                      <div class="form-group">
                         <label for="firstName" class="form-control-label">Name</label>
                         <input id="firstName" name="firstName" type="text" placeholder="Enter Project Name" class="form-control input-md" autocomplete="off" autocomplete="off">
                      </div>
                   </div>
                   <div  class="col-md-6">
                      <div class="form-group">
                         <label for="middleName" class="form-control-label">Description</label>
                         <input id="middleName" name="middleName" type="text" placeholder="Enter Project Description" class="form-control form-floating" autocomplete="off">
                      </div>
                   </div>
                   <div  class="col-md-6">
                      <div class="form-group">
                         <label for="lastName" class="form-control-label">Start date</label>
                         <input id="lastName" name="lastName" type="date" placeholder="Enter Start Date" required="" class="form-control input-md" autocomplete="off">
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label class="form-label">End Date</label>
                        <div class="cal-icon">
                            <input class="form-control" type="date" id="birthDate" name="birthDate">
                        </div>
                      </div>
                   </div>

                </div>
            <div class="float-start mb-4">
                  <button class="btn btn-gradient-primary btn-sm text-light px-4 mt-3 mb-0">Create project</button>
              </div>
            </form> 
        </div>   
         <div class="col-md-5 ml-auto ">
            <center>
            <form>
                <div class="form-group">
                    <label class="px-2" for="pro-avatar">Project Avatar</label>
                    <img src="assets/img/project3.jpg" alt="" class="thumb-xl ml-3 px-2">
                    <button class="btn btn-gradient-primary btn-sm  text-light change-avatar ml-3">Change Avatar</button>
                    <input id="fileupload" type="file" name="files[]" multiple="" style="display: none;">
                </div>
                <p class="font-weight-normal my-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
                <div class="form-group">
                <label for="team-leader">Project team members</label>
                <div class="img-group ml-3">
                    <a class="user-avatar user-avatar-group" href="#">
                        <img src="assets/img/users/user-3.jpg" alt="user" class="thumb-md rounded-circle">
                    </a>
                    <a class="user-avatar user-avatar-group" href="#">
                        <img src="assets/img/users/user-5.jpg" alt="user" class="thumb-md rounded-circle">
                    </a>
                    <a class="user-avatar user-avatar-group" href="#">
                        <img src="assets/img/users/user-3.jpg" alt="user" class="thumb-md rounded-circle">
                    </a>
                    <a class="user-avatar user-avatar-group" href="#">
                        <img src="assets/img/users/user-5.jpg" alt="user" class="thumb-md rounded-circle">
                    </a>
                </div><!--end img-group-->
                <button type="button" class="btn btn-gradient-primary btn-sm text-light ml-1 px-2">
                   <i class="material-icons md-18 align-middle me-1 add_circle">add_circle</i>
                </button>
                <input id="add-member" type="file" name="files[]" multiple="" style="display: none;">
            </div>
            </form>
            </center>
        </div>    
    </div>
  </div>   
</div>
@endsection
