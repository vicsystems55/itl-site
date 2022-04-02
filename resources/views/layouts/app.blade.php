<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Solar Installation">
  <link style="max-height: 23px" href="assets/images/favicon/favicon.png" rel="icon">
  <title>Inter-Trade Ltd. - </title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    @include('incs.menu')

    <!-- ============================
        Slider
    ============================== -->
        @yield('content')

    <!-- ========================
        Footer
      ========================== -->
@include('incs.footer')

    <div class="login-popup" id="login-popup">
      <div class="login-popup-wrapper">
        <form class="login-popup__form">
          <h3 class="login-popup__title">Login!</h3>
          <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
          <div class="form-group mb-20">
            <i class="icon-mail input-icon"></i>
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="form-group mb-20">
            <i class="icon-lock input-icon"></i>
            <input type="password" class="form-control" placeholder="********">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-20">
            <div class="custom-control custom-checkbox d-flex align-items-center">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember Me!</label>
            </div>
            <a href="#" class="fz-14 font-weight-bold color-secondary">Forget Password?</a>
          </div>
          <button type="submit" class="btn btn__primary btn__block btn__xl">
            <span>Login</span>
            <i class="icon-arrow-right"></i>
          </button>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-20">
          <span class="color-white fz-14 font-weight-bold">Don’t Have An Account?</span>
          <button id="go-register" class="go-register fz-14 font-weight-bold">
            <span>Register Here</span><i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>
    </div><!-- /.login-popup -->

    <div class="login-popup" id="register-popup">
      <div class="login-popup-wrapper">
        <form class="login-popup__form">
          <h3 class="login-popup__title">Register!</h3>
          <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
          <div class="form-group mb-20">
            <i class="icon-mail input-icon"></i>
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="form-group mb-20">
            <i class="icon-lock input-icon"></i>
            <input type="password" class="form-control" placeholder="********">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-20">
            <div class="custom-control custom-checkbox d-flex align-items-center">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">I read & agree to <a href="#">Terms &
                  Conditions</a></label>
            </div>
          </div>
          <button type="submit" class="btn btn__primary btn__block btn__xl">
            <span>Register</span>
            <i class="icon-arrow-right"></i>
          </button>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-20">
          <span class="color-white fz-14 font-weight-bold">Have An Account?</span>
          <button id="go-login" class="go-login fz-14 font-weight-bold">
            <span>Login Here</span><i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>
    </div><!-- /.login-popup -->

    <div class="search-popup">
      <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
      <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="icon-search"></i></button>
      </form>
    </div><!-- /. search-popup -->
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>