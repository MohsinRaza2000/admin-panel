

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset ('assets/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets/admin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/admin/build/css/custom.min.css')}}" rel="stylesheet">
      <style> span.text-danger {
              margin-left: -10rem;
          }</style>

  </head>
  <body class="login" >
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action= "{{route('post_registration')}}" method="POST">
                @csrf
              <h1>Registration Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Name" name ="name"/>
                  @if ($errors->has('name'))
                      <div class="name">
                      <span class="text-danger">{{ $errors->first('name') }}</span></div>
                  @endif
              </div>
              <div>
                <input type="email" class="form-control" placeholder="email" name ="email" />
                  <div class="email">
                  @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span></div>
                  @endif

              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password"  name="password"/>
                  <div class="password">
                  @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span></div>
                  @endif
              </div>
              <div>
                <input class="btn btn-info" type="submit" value="Registration">
              </div>
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>

            </form>
          </section>
        </div>
              </div>
        </div>
  </body>
</html>

