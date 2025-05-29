<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learn More</title>
  <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
  <link rel="stylesheet" href="slick/slick.css" />
  <link rel="stylesheet" href="slick/slick-theme.css" />
  <link rel="stylesheet" href="magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/tooplate-infinite-loop.css" />
  <style>
    body {
      background-color: #222;
      color: #fff;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .hero-section {
      background: url('your-hero-image.jpg') no-repeat center center;
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
    }

    .cont {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      max-width: 900px;
      margin: 50px auto;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      background-color: #333;
    }

    .image {
      flex: 1;
      padding-right: 20px;
    }

    .image img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .description {
      flex: 2;
    }

    select {
      padding: 5px;
      margin-top: 10px;
    }

    button {
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#infinite">Arihant Canvasers</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#whatwedo">What We Do</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Our Team</a></li>
          <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Rice Info Box -->
  <div class="cont">
    <div class="image">
      <img src="img/boiled rice.jpg" alt="Sample Image">
    </div>
    <div class="description">
      <h1>Boiled Rice</h1>
      <h2>Purity:100%</h2>
      <h3>Price: ₹</h3>
      <p style="margin-top: 15px;">
        Boiled rice is pre-cooked rice that is soft, slightly sticky, and easy to prepare.
         It retains most of its nutrients during boiling and is often used as a side dish or in curries and salads.
          Known for its mild flavor and fluffy texture, boiled rice is a convenient and versatile staple in many cuisines.
      </p>
    </div>
  </div>

  <!-- Scripts for Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
