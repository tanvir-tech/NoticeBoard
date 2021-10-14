{{View::make('master/header')}}

<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 bg-secondary text-white rounded">
        <form action="registration" method="POST">
          @csrf
        <br>
        <h3 class="text-center">Registration Form</h3>
        <br>
    
        <input class="form-control mr-sm-2" type="text" placeholder="User name" name="user">
        <br>
        <input class="form-control mr-sm-2" type="email" placeholder="email" name="email">
        <br>
        <div class="container p-2">
            User category : 
            <select class="form-select" aria-label="Default select example" id="type" name="type">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="officials">Officials</option>
              </select>
              _._._._._._._._._._._._._._._._._._._._
              Department : 
              <select class="form-select" aria-label="Default select example"  id="department" name="department">
                <option value="ICT">ICT</option>
                <option value="CSE">CSE</option>
                <option value="CSE">CSE</option>
                <option value="ESRM">ESRM</option>
                <option value="CPS">CPS</option>
                <option value="FTNS">FTNS</option>
                <option value="BGE">BGE</option>
                <option value="Pharmacy">Pharmacy</option>
                <option value="BMB">BMB</option>
                <option value="BBA">BBA</option>
                <option value="Management">Management</option>
                <option value="Accounting">Accounting</option>
                <option value="Math">Math</option>
                <option value="Physics">Physics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Statistics">Statistics</option>
                <option value="Economics">Economics</option>
                <option value="English">English</option>
                <option value="All">All</option>
              </select>
        </div>
        <br><br>
        <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password">
        <br>
        <button class="btn btn-success" type="submit">Register</button>
        <br><br>
        </form>
      </div>
</div>
<div class="col-lg-3"></div>



{{View::make('master/footer')}}