<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            .footer {
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: red;
                color: white;
                text-align: center;
            }
        </style>
    <title>Post a product</title>
</head>

<body>
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
                        <a class="nav-link active" aria-current="page" href="{{ route('seller.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chat Box</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('seller.apply.prime') }}">Upgrade to Prime Seller!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('seller.create.sell.post') }}">Create selling post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('seller.orders') }}">Orders list</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('seller.edit.profile') }}">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('seller.statements') }}">Statements</a></li>
                            <li><a class="dropdown-item" href="{{ route('seller.posts') }}">My posts</a></li>
                            <li><a class="dropdown-item" href="{{ route('seller.contact.support') }}">Contact support</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Announcement</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <div class="text-center mt-5">
        <h1>Add Product details</h1>
    </div>
    <div class="container">

    <form class="row g-3">


        <div class="mb-3">
            <label for="formFile" class="form-label">Select photo</label>
            <input class="form-control" type="file" id="formFile">
        </div>


        <div class="col-12">
            <label for="exampleInputEmail1" class="form-label">Product Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="col-12">
            <label for="exampleInputEmail1" class="form-label">ADD price In Taka*</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>


        <div class="col-12">
            <label for="exampleInputEmail1" class="form-label">Select Payment method</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>none</option>
                <option value="1">Bikash</option>
                <option value="2">Rocket</option>
                <option value="3">bank</option>
              </select>
        </div>

        <div class="col-12">
            <label for="exampleInputEmail1" class="form-label">Payment recive NO:</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="col-12">
            <label for="exampleInputEmail1" class="form-label">whatinformation you need from the buyer</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Only Transection number</option>
                <option value="1">Transection number and phone number of money recive</option>
                <option value="2">Transection and Game ID</option>
                <option value="3">Transection and a other Info</option>
              </select>
        </div>

        <div class="form-floating">
            {{-- <label for="exampleInputEmail1" class="form-label">Write Product Desciption</label> --}}
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Write Product Desciption</label>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</div>



<script src="https://kit.fontawesome.com/d6f10cd10f.js" crossorigin="anonymous"></script>






{{-- footer --}}
<footer class="bg-dark text-center text-white container-fluid footer">
        <!-- Grid container -->
        <div class="container-fluid">
          <!-- Section: Social media -->
          <section class="mb-6">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/%22%3EMDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>

</html>
