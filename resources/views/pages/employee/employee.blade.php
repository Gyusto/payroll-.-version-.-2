@extends('layouts.app')
@section('title') {{'Employee'}} @endsection
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
@if(!$employees ->isEmpty())
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
              
              <th scope="col">Employee No</th>
              <th scope="col">Name</th>
              <th>Gender</th>
              <th scope="col">Contact</th>
              <th>Designation</th>
              <th scope="col">Department</th>
              <th scope="col">Date Registered</th>
            </tr>
          </thead>
          <tbody>
            @foreach($employees as $employee)
            <tr scope="row" >
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td>
                {{$employee->employee_number}}
              </td>
              <td>
                <a href="#">{{$employee->person->firstName.' '.$employee->person->middleName.' '.$employee->person->lastName}}</a>
            </td>
            <td>
                  {{$employee->person->gender}}
              </td>
              <td>
                0716840328
                <small class="d-block">geeeyusto17@gmail.com</small>
              </td>
              <td>
                  @foreach($employee->designation as $designation)
                    <span class="badge bg-secondary">{{$designation->name}}</span>
                  @endforeach
              </td>
              <td>{{$employee->department->name}}</td>
              <td>{{$employee->date_created}}</td>
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
@endif
<div class="input-details card">
   <div class="card-header ng-tns-c128-1 ng-star-inserted" style="">
      <h5 class="ng-tns-c128-1 ng-star-inserted">Form Validation</h5>
      <!----><span class="d-block pt-2 ng-tns-c128-1 ng-star-inserted"></span><!---->
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
      <form action="{{ route('employee') }}" method="POST">
        @csrf
        <span class="text-danger">{{ $errors }}</span>
        <div  class="row">
            <div  class="col-md-4">
              <div class="form-group">
                 <label for="firstName" class="form-control-label">Fisrt Name</label>
                 <input id="firstName" name="firstName" type="text" placeholder="Enter FirstName" class="form-control input-md" autocomplete="off" autocomplete="off">
              </div>
           </div>
           <div  class="col-md-4">
              <div class="form-group">
                 <label for="middleName" class="form-control-label">Middle Name</label>
                 <input id="middleName" name="middleName" type="text" placeholder="Enter MiddleName" class="form-control input-md" autocomplete="off">
              </div>
           </div>
           <div  class="col-md-4">
              <div class="form-group">
                 <label for="lastName" class="form-control-label">Last Name</label>
                 <input id="lastName" name="lastName" type="text" placeholder="Enter LastName" required="" class="form-control input-md" autocomplete="off">
              </div>
           </div>
           <div class="col-md-6">
              <div class="form-group">
                 <label class="form-label">Birthday Date</label>
                <div class="cal-icon">
                    <input class="form-control" type="date" id="birthDate" name="birthDate">
                </div>
              </div>
           </div>
           <div class="col-md-6">
              <div class="form-group">
                 <label class="form-label">Gender</label>
                 <select name="gender" required="" class="form-control">
                    <option value="">Select Gender...</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                 </select>
              </div>
           </div>
           <div class="col-md-6">
              <div class="form-group">
                 <label class="form-label">Department</label>
                 <select required class="form-control" name="department">
                    <option value="">Select Department</option>
                      @foreach($departmentList as $department)
                       <option value="{{$department->id}}">{{$department->name}}</option>

                     @endforeach
                 </select>
              </div>
           </div>
           <div class="col-md-6">
              <div class="form-group">
                 <label class="form-label">Desinations</label>
                 <select id="select2" name="designation[]" class="select2 form-control" id="type" multiple required >
                     <optgroup label="Desinations">
                    @foreach($designationList as $designation)
                       <option value="{{$designation->id}}">{{$designation->name}}</option>
                    @endforeach
                  </select>
              </div>
           </div>

        </div>
        <div class="float-end mb-4">
              <button class="btn btn-gradient-primary btn-sm text-light px-4 mt-3 mb-0">Save</button>
        </div>

     </form>
  </div>   
</div>
@if(!$employees ->isEmpty())
<div class="view-details">
    <div class="box-shadow">
        <div class="row">
            @foreach($employees as $employee)
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-header" style="padding: 10px 5px;">
                        <img src="assets/img/blank-user.png" alt="Header Avatar" class="header-profile-user-2">
                        <div  style="margin-left: 3px; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;display: inline-block;">
                            <span>{{$employee->person->firstName.' '.$employee->person->middleName.' '.$employee->person->lastName}}</span>
                            <span class="d-block text-muted">{{$employee->employee_number}}</span>
                        </div>
                        
                        <span class="card-header-right">
                            <i class="material-icons md-18">more_vert</i>
                        </span>
                    </div>
                    <div class="card-body">
                       <ul class="user-lists">
                           <li> <i  class="material-icons md-18">more_vert</i><span>{{$employee->employee_number}}</span></li>
                           <li> <i class="material-icons md-18">date_range</i>{{$employee->department->name}}</li>
                           <li> <i class="material-icons md-18">date_range</i>Carpenter, Decorator</li>
                           <li> <i class="material-icons md-18">date_range</i>Member since {{$employee->dateCreated}}</li>
                           <li> <i class="material-icons md-18">phone</i>+255 716 84028</li>
                           <li> <i class="material-icons md-18">location_on</i>128 mwananyamala , kinondoni</li>
                       </ul> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@endsection
