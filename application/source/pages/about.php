<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amaterasu | Ramen Shop</title>
    <meta name="description" content="Ramen worthy for GODS">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/bootstrap-5.2.0-beta1-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="/style.css" rel="stylesheet">

  </head>
  <body>

    <!-- @note Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
          <div class="container">
            
             <!--  Show this only on mobile to medium screens  -->
             <a href="../index.php" class="navbar-brand  d-lg-none justify-content-center">
              <img src="../assets/logo-lg-white.png" alt="Oishii ramen shop" width="200px" height="200px">
            </a>
              
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!--  Use flexbox utility classes to change how the child elements are justified  -->
            <div class="collapse navbar-collapse justify-content-center" id="navmenu">
                <ul class="navbar-nav p-lg-5 ps-5">
                    <li class="nav-item">
                      <a href="../index.php" class="nav-link active"><h5>Home</h5></a>
                    </li>
                    <li class="nav-item">
                        <a href="./menu.php" class="nav-link"><h5>Menu</h5></a>
                    </li>
                    <li class="nav-item">
                      <a href="./location.php" class="nav-link"><h5>Location</h5></a>
                    </li>
                  </ul>

                      <!--   Show this only lg screens and up   -->
                  <a class="navbar-brand d-none d-lg-block " href="../index.php">
                    <img src="../assets/logo-lg-white.png" alt="Oishii ramen shop" width="200px" height="200px">
                  </a>
            
                  <ul class="navbar-nav ps-5 ps-lg-0">
                    <li class="nav-item">
                        <a href="./gallery.php" class="nav-link"><h5>Gallery</h5></a>
                    </li>
                    <li class="nav-item">
                        <a href="./about.php" class="nav-link"><h5>About Us</h5></a>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.php" class="nav-link"><h5>Contact Us</h5></a>
                    </li>
                    <li class="nav-item">
                      <a href="./eview.php" class="nav-link"><h5>Review</h5></a>
                  </li>
                  </ul>
              </div>
        </div>
      </nav>

      <!-- @note Hero Section -->
     <div class="container my-5">
      <h1 class=" text-uppercase  text-center col-auto pb-5">Dining with Oishii Ramen isn’t just dining - it’s an <em>experience.</em></h1>
      <div class="row">
        <div class="col-lg-3 col-auto p-5">
          <h3>OUR HISTORY</h3>
          <p>It all began in a little shop in Japan…sort of.</p>
          <p>Oishii Ramen started as a partnership between Southern Japan’s best ramen companies. The idea sprung from a passion for flavor-packed authentic ramen, with the intention of sharing this love of Japanese soul foods with those unfamiliar with the concept.</p>
          <p>Oishii’s doors first opened in March 2022 on Brussels Center in Belgium - and was an instant success among locals, tourists and foodies alike.</p>
          <p>FAST FORWARD TO TODAY…</p>
        </div>
        <div class="col-lg-6 col-auto">
          <img class="img-fluid" alt="oishii restaurant" src="https://github.com/John4E656F/Amaterasu/blob/main/assets/Melbourne.jpg?raw=true">
        </div>
        <div class="col-lg-3 col-auto p-5">
          <div class="row ">
              <p class="col-auto">We strive to spread the delicious flavors and culture of ramen through tried and true recipes handed down from generations of ramen chefs from our partners in Japan.</p>
              <p class="col-auto ">WANT TO LEARN MORE ABOUT RAMEN?</p>
              <button type="button" class="btn btn-danger mb-2">Check Out Our Blog</button>
              <button type="button" class="btn btn-danger">Read About Us In The</button>

          </div>
        </div>
      </div>
     </div>
      


        <!-- @note Footer -->
        <footer class="bg-dark text-center text-white">
          <!-- Grid container -->
          <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="bi bi-facebook"></i>
              </a>
        
              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="bi bi-twitter"></i>
              </a>
        
              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="bi bi-instagram"></i>
              </a>
        
            </section>
            <!-- Section: Social media -->
        
            <!-- Section: Form -->
            <section class="">
              <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                  <!--Grid column-->
                  <div class="col-auto">
                    <p class="pt-2">
                      <strong>Sign up for our newsletter</strong>
                    </p>
                  </div>
                  <!--Grid column-->
        
                  <!--Grid column-->
                  <div class="col-md-5 col-12">
                    <!-- Email input -->
                    <div class="form-outline form-white mb-4">
                      <input type="email" id="form5Example21" class="form-control" placeholder="Email address"/>
                      <!-- <label class="form-label" for="form5Example21">Email address</label> -->
                    </div>
                  </div>
                  <!--Grid column-->
        
                  <!--Grid column-->
                  <div class="col-auto">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-outline-light mb-4">
                      Subscribe
                    </button>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </form>
            </section>
            <!-- Section: Form -->
        
            <!-- Section: Links -->
            <section class="">
              <!--Grid row-->
              <div class="row">
    
                  <h5 class="text-uppercase">Links</h5>
        
                  <ul class="list-unstyled mb-0 row justify-content-center">
                    <li class="col-lg-1">
                      <a href="https://john4e656f.github.io/Amaterasu/" class="text-white">Home</a>
                    </li>
                    <li class="col-lg-1">
                      <a href="https://john4e656f.github.io/Amaterasu/pages/menu.html" class="text-white">Menu</a>
                    </li>
                    <li class="col-lg-1">
                      <a href="ttps://john4e656f.github.io/Amaterasu/pages/location.html" class="text-white">Location</a>
                    </li>
                    <li class="col-lg-1">
                      <a href="https://john4e656f.github.io/Amaterasu/pages/gallery.html" class="text-white">Gallery</a>
                    </li>
                    <li class="col-lg-1">
                      <a href="https://john4e656f.github.io/Amaterasu/pages/about.html" class="text-white">About Us</a>
                    </li>
                    <li class="col-lg-1">
                      <a href="https://john4e656f.github.io/Amaterasu/pages/contact.html" class="text-white">Contact Us</a>
                    </li>
                  </ul>
    
    
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->
          </div>
          <!-- Grid container -->
        
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://john4e656f.github.io/Amaterasu/">oishiiramen.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      </body>
    </html>