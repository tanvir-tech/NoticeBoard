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
                <a class="navbar-brand" href="#">MBSTU</a>
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
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
                            <a class="dropdown-item text-warning" href="#">ICT</a>
                            <a class="dropdown-item text-warning" href="#">CSE</a>
                            <a class="dropdown-item text-warning" href="#">TE</a>
                            <a class="dropdown-item text-warning" href="#">ESRM</a>
                            <a class="dropdown-item text-warning" href="#">CPS</a>
                            <a class="dropdown-item text-warning" href="#">FTNS</a>
                            <a class="dropdown-item text-warning" href="#">BGE</a>
                            <a class="dropdown-item text-warning" href="#">Pharmacy</a>
                            <a class="dropdown-item text-warning" href="#">BMB</a>
                            <a class="dropdown-item text-warning" href="#">BBA</a>
                            <a class="dropdown-item text-warning" href="#">Management</a>
                            <a class="dropdown-item text-warning" href="#">Accounting</a>
                            <a class="dropdown-item text-warning" href="#">Math</a>
                            <a class="dropdown-item text-warning" href="#">Physics</a>
                            <a class="dropdown-item text-warning" href="#">Chemistry</a>
                            <a class="dropdown-item text-warning" href="#">Statistics</a>
                            <a class="dropdown-item text-warning" href="#">Economics</a>
                            <a class="dropdown-item text-warning" href="#">English</a>
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