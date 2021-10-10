<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBSTU</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <header>
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-2">
                    <img src="https://mbstu.ac.bd/assets/images/logo.png" alt="Mbstu logo"
                        style="width:85px; height:85px;">
                </div>
                <div class="col-lg-4">
                    <h3>Mawlana Bhashani Science and Technology University</h3>
                </div>

            </div>

        </div>
        <!-- Nav tabs -->
        <nav class="navbar navbar-expand-md bg-secondary navbar-dark">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="/home">MBSTU</a>
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>

                    <div class="dropdown p-1">
                        <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Departments
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-warning" href="deptNotice/ICT" target="blank">ICT</a>
                            <a class="dropdown-item text-warning" href="deptNotice/CSE" target="blank">CSE</a>
                            <a class="dropdown-item text-warning" href="deptNotice/TE" target="blank">TE</a>
                            <a class="dropdown-item text-warning" href="deptNotice/ESRM" target="blank">ESRM</a>
                            <a class="dropdown-item text-warning" href="deptNotice/CPS" target="blank">CPS</a>
                            <a class="dropdown-item text-warning" href="deptNotice/FTNS" target="blank">FTNS</a>
                            <a class="dropdown-item text-warning" href="deptNotice/BGE" target="blank">BGE</a>
                            <a class="dropdown-item text-warning" href="deptNotice/Pharmacy" target="blank">Pharmacy</a>
                            <a class="dropdown-item text-warning" href="deptNotice/BMB" target="blank">BMB</a>
                            <a class="dropdown-item text-warning" href="deptNotice/BBA" target="blank">BBA</a>
                            <a class="dropdown-item text-warning" href="deptNotice/Management" target="blank">Management</a>
                            <a class="dropdown-item text-warning" href="deptNotice/Accounting" target="blank">Accounting</a>
                            <a class="dropdown-item text-warning" href="deptNotice/Math" target="blank">Math</a>
                            <a class="dropdown-item text-warning" href="deptNotice/Physics" target="blank">Physics</a>
                            <a class="dropdown-item text-warning" href="deptNotice/Chemistry" target="blank">Chemistry</a>
                            <a class="dropdown-item text-warning" href="deptNotice/Statistics" target="blank">Statistics</a>
                            <a class="dropdown-item text-warning" href="deptNotice/Economics" target="blank">Economics</a>
                            <a class="dropdown-item text-warning" href="deptNotice/English" target="blank">English</a>
                        </div>
                    </div>

                    <div class="dropdown p-1">
                        <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Information
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Admistration</a>
                            <a class="dropdown-item" href="#">Admission</a>
                            <a class="dropdown-item" href="#">Contact</a>
                        </div>
                    </div>

                    @if(Session::has('user'))
                    <div class="dropdown p-1">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')['name']}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="orderlist">My Department</a>
                            <a class="dropdown-item" href="logout">Logout</a>
                        </div>

                    @else 
                        <a class="nav-link" href="login">Login</a>
                    @endif
                    
                </ul>
            </div>
        </nav>

    </header>
    <!-- navbar closed  -->


  











    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>