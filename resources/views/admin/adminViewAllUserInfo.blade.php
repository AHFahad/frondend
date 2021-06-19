<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>All Users</title>
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
                        <a class="nav-link active" aria-current="page" href="/adminHome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chat Box</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Market Place</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/adminEditProfile">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="/adminViewAllUserInfo">User List</a></li>
                            <li><a class="dropdown-item" href="/adminViewAllTransaction">Transaction List</a></li>
                            <li><a class="dropdown-item" href="/adminUserReports">User Reports</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/adminAnnouncement">Announcement</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="text-center mt-5 mb-5">
        <h1>User Information</h1>
    </div>

    <table style="margin:auto;max-width:900px" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Number</th>
            <th scope="col">Type</th>
            <th scope="col">Prime Status</th>
            <th scope="col">Seller Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>asd</td>
            <td>asd@gmail.com</td>
            <td>111</td>
            <td>01700000000</td>
            <td>admin</td>
            <td>-</td>
            <td>-</td>
            <td><a href="/adminEditUserInfo"><button type="button" class="btn btn-warning">Edit</button></a> <button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <td>qwe</td>
            <td>qwe@gmail.com</td>
            <td>222</td>
            <td>01200000000</td>
            <td>user</td>
            <td>prime</td>
            <td>verified</td>
            <td><a href="/adminEditUserInfo"><button type="button" class="btn btn-warning">Edit</button></a> <button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <td>zxc</td>
            <td>zxc@gmail.com</td>
            <td>333</td>
            <td>01900000000</td>
            <td>user</td>
            <td>normal</td>
            <td>unverified</td>
            <td><a href="/adminEditUserInfo"><button type="button" class="btn btn-warning">Edit</button></a> <button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
        </tbody>
      </table>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
