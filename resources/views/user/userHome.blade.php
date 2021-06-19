<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Home</title>
</head>

<body>

    {{-- nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">VCES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chat Box</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact support</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/user/follow">See Follow list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/history">View history</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/user/editProfile">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Transaction List</a></li>
                            <li><a class="dropdown-item" href="#">request password recovery</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Announcement</a></li>
                        </ul>
                    </li>
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item mr-2">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </ul>

                <!--Navbar-->
          <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
  <!--/.Navbar-->
            </div>
        </div>
    </nav>


    {{-- cards --}}

    <div class="text-center mt-5">
        <h1>Welcome TO VCES</h1>
    </div>

    <div class="container " >
        <h3>Posts</h3>

        {{-- row 1 --}}
        <div class="row ">

            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Bkash to Nagad</h5>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Amount : 3000-8000</li>
                <li class="list-group-item">User Rating : 4.3/5</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-success">Order</a>
                    <a href="#" class="btn btn-primary">Go to post</a>
                </div>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="card" style="max-width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Nagad to Bkash</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Amount : 1000-2000</li>
                    <li class="list-group-item">User Rating : 4.8/5</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-success">Order</a>
                        <a href="#" class="btn btn-primary">Go to post</a>
                    </div>
                </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="max-width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Bkash to Nagad</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">Amount : 2000-5000</li>
                        <li class="list-group-item">User Rating : 4.2/5</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-success">Order</a>
                            <a href="#" class="btn btn-primary">Go to post</a>
                        </div>
                    </div>
                    </div>
</div>

<!-- Footer -->



<footer class="text-center text-white" style="background-color: #f1f1f1;">

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-dark" href="https://vcesbd.com/">VCESBD.com</a>
    </div>
    <!-- Copyright -->


  </footer>

  <!-- Footer End -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


</body>

</html>
