         
            <header id="page-topbar">
               <div  class="navbar-header">
                  <div class="d-flex">
                     <div class="navbar-brand-box">
                     </div>
                  </div>
                  <div class="d-flex">
                     <div class="d-inline-block dropdown">
                        <button type="button" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn header-item waves-effect">
                        <img src="assets/img/users/avatar-1.jpg" alt="Header Avatar" class="rounded-circle header-profile-user">
                        <span  class="d-none d-xl-inline-block ms-1 font-size-18 fw-bold flex-grow-1">{{ Auth::user()->user_name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                           <h6  class="dropdown-header">Welcome George Yusto!</h6>
                           <a href="#" class="dropdown-item">
                           <i  class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i><span key="t-profile" class="align-middle">Profile</span>
                           </a>
                           <a routerlink="/pages/profile" class="dropdown-item" ng-reflect-router-link="/pages/profile" href="/pages/profile"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i>
                           <span  class="align-middle">Messages</span>
                           </a>
                           <a href="#" class="dropdown-item">
                           <i class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i>
                           <span  key="t-taskboard" class="align-middle">Taskboard</span>
                           </a>
                           <a  href="#" class="dropdown-item">
                           <i  class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i>
                           <span _ngcontent-hob-c106="" key="t-help" class="align-middle">Help</span>
                           </a>
                           <div class="dropdown-divider"></div>
                           <a  href="#" class="dropdown-item"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i><span class="align-middle">Balance : <b>$1901.67</b></span>
                           </a>
                           <a  href="#" class="dropdown-item"><span class="badge bg-success bg-soft text-success mt-1 float-end">New</span><i _ngcontent-hob-c106="" class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i><span _ngcontent-hob-c106="" key="t-settings" class="align-middle">Settings</span></a>
                           <a  href="#" class="dropdown-item"><i  class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i><span _ngcontent-hob-c106="" key="t-lock-screen" class="align-middle">Lock screen</span></a><a href="javascript: void(0);" class="dropdown-item"><i _ngcontent-hob-c106="" class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i><span _ngcontent-hob-c106="" key="t-logout" class="align-middle">Logout</span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div  class="page-title-box d-sm-flex align-items-center justify-content-between  flex-sm-row border-0">
                  <p  class="mb-sm-0 font-size-16 fw-bold flex-grow-1">@yield('title')</p>
                  <div class="page-title-right">
                     <ol  class="breadcrumb m-0">
                        <li  class="breadcrumb-item" >@yield('title') </li>
                        <li class="breadcrumb-item active" >@yield('title') </li>
                     </ol>
                  </div>
                   <div  class="pageLoader" id="pageLoader"></div> 
               </div>
            </header>