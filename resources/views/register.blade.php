<!DOCTYPE html>
<html lang="en">
    @include('include.header')
    <link rel="stylesheet" href="{{ asset('css/sign-up.css') }}">
<body>
    <div class="sign-up">
        <div class="frame-user-name-wrapper">
            <div class="login-inner">
                <form action="{{ route('register') }}" class="frame-user-name" method="POST">
                    @csrf
                    <div class="register-button">
                      <h2 class="sign-up-to">Sign Up to Sierra Hotel</h2>
                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-width" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-width" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="frame-email form-group mb-0">
                        <label for="register-username" class="username1 mb-0">Username</label>
                        <input id="register-username" name="username" class="frame-email-child form-control" type="text" required/>
                    </div>
                    <div class="frame-email1 form-group mb-0">
                        <label for="register-email" class="email6 mb-0">Email</label>
                        <input id="register-email" name="email" class="frame-email-item form-control" type="email" required/>
                    </div>
                    <div class="frame-email2 form-group mb-0">
                        <label for="register-password" class="password1 mb-0">Password</label>
                        <input id="register-password" name="password" class="frame-email-inner form-control" type="password" required/>
                    </div>
                    <div class="sign-up-frame">
                      <div class="frame-parent30">

                        <div class="terms-of-service-agree-frame">
                          <input class="rectangle-input3" type="checkbox" required/>

                          <div class="i-agree-to-container">
                            I agree to all statements in
                            <span class="terms-of-service">Terms of Service</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="t-ake-advantage-of-readytouse">
                      <div class="register">Register</div>
                    </button>
                  </form>
            </div>
        </div>

        <a href="{{ url('login') }}" class="arrowleftcirclefill-icon">
            <i class="fa-solid fa-circle-arrow-left"></i>
        </a>

        <img
          class="empty-frame-icon"
          loading="eager"
          alt=""
          src="{{ asset('images/frame-320@2x.png') }}"
        />
      </div>
</body>
</html>
