 @extends('layouts.home')
 @section('layouts.container.home')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
         <div class="text-center mb-5">
            <a  class="auth-logo" >
             <!--   <img src="assets/images/logo-dark.png" alt="" height="28" class="auth-logo-dark">
               <img src="assets/images" height="28" class="auth-logo-light"> -->
            </a>
            <p class="font-size-15 text-muted mt-3">Wood & Metal <b>PayRoll</b> </p>
         </div>
         <div class="card overflow-hidden">
            <div class="row g-0">
               <div class="col-lg-6">
                  <div class="p-lg-5 p-4">
                     <div>
                        <h5>Welcome Back !</h5>
                        <p class="text-muted">Sign in to continue to Payroll.</p>
                     </div>
                     <div class="mt-4 pt-3">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                           <div class="mb-3">
                              <label for="email" class="fw-semibold">Email</label>
                              <input type="text"  id="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="mb-3 mb-4">
                              <label for="userpassword" class="fw-semibold">Password</label>
                              <input type="password"  id="userpassword" placeholder="Enter password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                             
                           </div>
                           <div class="row align-items-center">
                              <div class="col-6">
                              <div class="form-check">
                                 <input type="checkbox" id="remember-check" class="form-check-input font-size-16" {{ old('remember') ? 'checked' : '' }}>
                                 <label for="remember-check" class="form-check-label">Remember me</label>
                              </div>
                           </div>
                           <div>
                              <div class="text-end">
                                 <button type="submit" class="btn btn-gradient-primary text-light px-4 mt-3">Log In</button>
                              </div>
                           </div>
                        </div>
                        <div class="mt-4">
                           @if (Route::has('password.request'))
                              <a  class="text-muted"  >
                              <i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                            @endif
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="p-lg-5 p-4 bg-auth h-100 d-none d-lg-block">
                  <div class="bg-overlay"></div>
               </div>
            </div>
            </div>
         </div>
            <div class="mt-5 text-center">
               <p >Don't have an account ? <a  class="fw-semibold text-decoration-underline text-primary"> Sign up </a>
               </p>
               <p>© 2023 <b >wood & metal</b>. design  <i class="mdi mdi-heart text-danger"></i> by Yusto </p></div>
        </div>
    </div>
 </div>
@endsection