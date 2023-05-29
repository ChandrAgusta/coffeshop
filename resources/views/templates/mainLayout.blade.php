<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Main Menu</title>
</head>
<body class = "body" style = "background-color: #191919">
    <div class = "container mt-4" >
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="font-family: Bebas neue">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> <img src="img/logo.png" class="img-fluid rounded-start w-50" style ="width : 30px;height :100px" alt="..."></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="\home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="\menu">Menu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="\cart">Keranjang</a>
                      </li>
                      <form class="d-flex">
                        <input class="form-control me-2 bg-dark" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                      </form>
                </ul>
              </div>
            </div>
        </nav>
          @yield('container')
    </div>
</body>
</html>