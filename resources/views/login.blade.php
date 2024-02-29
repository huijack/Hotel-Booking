<!DOCTYPE html>
<html>
    @include('include.header')
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <body>
    <div class="login">
        <img
          class="glow-centre-icon"
          loading="eager"
          alt=""
          src="{{ asset('images/frame-320@2x.png') }}"
        />

        <div class="login-container">
            <div class="login-inner">
                <form action="" class="log-in-to-sierra-hotel-parent" method="POST">
                    @csrf
                  <h1 class="log-in-to">Log In to Sierra Hotel</h1>
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-width" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                  <div class="username-input form-group mb-0">
                    <label for="login-form" class="username mb-0">Username</label>
                    <input id="login-form" name="username" class="username-input-child form-control" type="text" required/>
                  </div>
                  <div class="frame-parent29">
                    <div class="password-parent form-group mb-0">
                        <label for="login-password" class="password mb-0">Password</label>
                        <input id="login-password" name="password" class="group-input form-control" type="password" required/>
                    </div>
                    <div class="checkbox-frame">
                      <div class="rectangle-parent10">
                        <input class="rectangle-input2" type="checkbox" />

                        <div class="remember-me">Remember Me</div>
                      </div>
                      <a class="i-dont-have" href="{{ url('register') }}">
                        I don’t have an account
                      </a>
                    </div>
                  </div>
                  <button class="button-frame1">
                    <div class="log-in5">Log In</div>
                  </button>
                </form>
              </div>
        </div>
      </div>
</body>
</html>
