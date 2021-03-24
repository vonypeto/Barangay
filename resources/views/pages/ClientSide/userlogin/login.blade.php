<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href=" {{ URL::asset('css/app.css') }}" rel="stylesheet">
  <link href=" https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/homepage_css/Footer-Clean.css">
  <link rel="stylesheet" href="css/homepage_css/Header-Blue.css">
  <link rel="stylesheet" href="css/homepage_css/styles.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script>
    
  </script>

  <title>Login</title>
</head>
<body style="background-image: url({{ URL::asset('images/background.png') }}); background-repeat:no-repeat; background-size: cover ">
<header class="header-blue" style="padding-bottom: 0px;">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container-fluid"><a class="navbar-brand" href="/home" style="font-size: 45px;font-family: bodoni mt;"><img src="{{ URL::to('images/logo.png') }}" style="resize: both;width: 80px;margin-right: 30px;">University of Rizal System</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group mb-0"><label for="search-field"></label></div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Log In</h5>
          {{-- form --}}
          {{-- <form class="log-in-form" action="login" method="post">  --}}
          <form class="log-in-form" action="home" method="get"> 
            @csrf
            <div class="form-label-group mt-2">
              <label for="login_email">Email address</label>
              <input type="text" id="login_email" name="login_email" class="form-control" placeholder="Email address" autofocus
              value={{ old('login_email')}}>
              @error('login_email')
              <span class="text-danger error_text create_account_form_lastname_error"> {{ $message }}</span>
              @enderror
            </div>

            <div class="form-label-group mt-2">
              <label for="login_password">Password</label>
              <input type="password" id="login_password" name="login_password" class="form-control" placeholder="Password" >
              @error('login_password')
              <span class="text-danger error_text create_account_form_lastname_error">{{ $message }}</span>
              @enderror
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase mt-3" id="loginBtn" type="submit">Log in</button>
          </form>
          {{-- end form --}}

          <br><a href="register">Don't have an account?? Register!</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
