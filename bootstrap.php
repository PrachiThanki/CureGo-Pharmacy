<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="First" >
    <div >
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item" >
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>
    </div>
    <br>
    <div>
           <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3>Los Angeles</h3>
      <p>We had such a great time in LA!</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="second_image.jpg" alt="Chicago" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3>Chicago</h3>
      <p>Thank you, Chicago!</p>
    </div> 
  </div>
  <div class="carousel-item">
    <img src="fourth_image.jpg" alt="New York" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3>New York</h3>
      <p>We love the Big Apple!</p>
    </div>  
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
    </div>
    <br>
    <div class="container-fluid">
    <div class="row">
      <div class="col-sm  p-4" ><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
      <div class="col-sm   p-4"><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
      <div class="col-sm  p-4"><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
    </div>  
  <div class="row">
      <div class="col-sm  p-4"><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
      <div class="col-sm   p-4"><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
      <div class="col-sm   p-4"><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
    </div>  
    <br>
    <div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-sm  p-3"><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
      <div class="col-sm   p-3"><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
    </div>  
    </div><br>
    <div>
    <div class="row">
      <div class="col-sm p-3"><img src="first_image.jpg" alt="Los Angeles" class="d-block" style="width:100%"></div>
      <div class="col-sm   p-3">
      <div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
      </div>
    </div> 
    </div><br>
    <div class="bg-secondary p-3"></div><br>
    </div>

    
</body>
</html>