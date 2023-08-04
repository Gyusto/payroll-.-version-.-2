<div class="sidenav">
   <div class="logo">
      <a href="{{ route('home') }}">
      <i class="material-icons md-18">diversity_3</i><span>Wood & Metal</span>
      </a>
   </div>
   <div class="menu">
      <span class="menu-label">Employees</span>
      <div class="menu-itens">
         <a href="{{ route('employee') }}" class="{{set_active(['employee'])}}">
         <i class="material-icons md-18">groups</i>
         <span>Employees</span>
         </a>
         <a href="{{ route('holidays') }}" class="{{set_active(['holidays'])}}">
         <i class="material-icons md-18 ">album</i>
         <span>Holidays</span>
         </a>
         <a href="{{ route('leaves') }}" class="{(set_active(['leaves'])}}">
         <i class="material-icons md-18">album</i>
         <span>Leaves</span>
         </a>
         <a href="{{ route('department') }}" class="{{set_active(['department'])}}">
         <i class="material-icons md-18">album</i>
         <span>Departments</span>
         </a>
         <a href="{{ route('designation') }}" class="{{set_active(['designation'])}}">
         <i class="material-icons md-18">album</i>
         <span>Designations</span>
         </a>
         <a href="{{ route('project') }}" class="{{set_active(['project'])}}">
         <i class="material-icons md-18">album</i>
         <span>Activities & Schedules</span>
         </a>
      </div>
      <span class="menu-label">Payroll</span>
      <div class="menu-itens">
         <a href="#">
         <i class="material-icons md-18">payments</i>
         <span>Payments</span>
         </a>
         <a href="#">
         <i class="material-icons md-18">bookmarks</i>
         <span>Payslip</span>
         </a>
         <a href="#">
         <i class="material-icons md-18">album</i>
         <span>Payroll Items</span>
         </a>
      </div>
      <span class="menu-label">Audit log</span>
      <div class="menu-itens">
         <a href="#">
         <i class="material-icons md-18">launch</i>
         <span>logs</span>
         </a>
      </div>
      <span class="menu-label">Configuration</span>
      <div class="menu-itens">
         <a href="#">
         <i class="material-icons md-18">library_add</i>
         <span>Users</span>
         </a>
         <a href="#">
         <i class="material-icons md-18">album</i>
         <span>Roles</span>
         </a>
         <a href="#">
         <i class="material-icons md-18">album</i>
         <span>Permission</span>
         </a>
      </div>
   </div>
    <div class="sidebar-footer hidden-small">
           <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
             <i class="material-icons md-18">settings</i>
           </a>
           <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
             <i class="material-icons md-18">fullscreen</i>
             <!-- <i class="material-icons md-18">fullscreen_exit</i> -->
           </a>
           <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
             <i class="material-icons md-18">visibility_off</i>
           </a>
           <a data-toggle="tooltip" data-placement="top" title="" >
             <i class="material-icons md-18">logout</i>
           </a>
       </div>
</div>