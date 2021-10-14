{{View::make('master/header')}}

<div class="container text-white p-2">

    <div class="row p-2">
      <div class="col-lg-9 bg-secondary text-warning p-5">
        <h1>Welcome to 
            <br>MBSTU notice board</h1>
        <br>
        <p>
          Information Center
        </p>



      </div>
      <!-- welcome closed  -->
      <div class="col-lg-3 bg-warning text-white">
        <form action="login" method="POST">
          @csrf
        <br>
        <h4 class="text-center">Login here</h4>
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="email ID" name="email">
        <br>
        <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password">
        <br>
        <button class="btn btn-success" type="submit">Login</button>
        <a class="text-success btn btn-warning btn-sm" href="registration">Create account</a>
        <br><br>
        <a class="text-primary" href="forgetPass">Forgot password !</a>
        <br><br>
        </form>
      </div>
      <!-- login closed  -->
    </div>
    <!-- row closed -->






  </div>
  <!-- container close -->
  {{View::make('master/footer')}}