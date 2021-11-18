
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <meta name="description" content="Here you can rent latest Cars.">
  <meta name="author" content="Nerds">

  <meta property="og:title" content="Rent a Car">
  <meta property="og:type" content="car rental">
  <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
  <meta property="og:description" content="A Place where you can find cars to get on rent.">
  <meta property="og:image" content="../assets/images/logo/cars_logo_white.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 

  <link rel="icon" href="../assets/images/logo/cars_logo_white.png">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="css/cars.css">
  <!-- Font awesome icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark navbg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo/cars_logo_white.png" style="width:120px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carlisting.php">Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact</a>
          </li>
        </ul>

        <form class="d-flex">
          <button class="btn btncolor my-2 mx-2 " type="button"><i class="fas fa-user"></i><span class="d-sm-none">
              LOGIN</span></button>
        </form>
        <form class="d-flex btn-group">
          <input class="form-control" type="text" placeholder="Search" style="font-size: 0.7rem;">
          <button class="btn btncolor" type="button"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>