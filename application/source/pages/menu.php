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
      <div class="container py-5">
          <div class="row gap-2 justify-content-center">
            <div class="col-lg-10 mx-auto col-12 text-center mb-3">
              <h1 class="mt-0 text-dark">Our Menu</h1>
              <p class="lead">Whether you’re browsing for dine-in or looking to takeout, we’ve got you covered with small plates, ramen, and main dishes that will curb your cravings for ramen and Japanese soul food.</p>
              <div class="row gap-1 justify-content-evenly">
                <p class="lead col-lg-4 ">
                  <a href="#" class="btn btn-danger btn-lg" role="button">Online Delivery</a>
                </p>
                <p class="lead col-lg-4 ">
                  <a class="btn btn-danger btn-lg" href="#" role="button">Order Pick Up</a>
                </p>
              </div>
            </div>

            <div class="container mb-n5">
              <div class="row gap-2">
                <span class="col-1 badge bg-danger">Limited</span>
                <span class="col-1 badge bg-warning">New</span>
                <span class="col-1 badge bg-info">Seasonal</span>
                <span class="col-1 badge bg-success">Vegan-Friendly</span>
              </div>
            </div>

            <div class="col-12 ">
              <hr class="accent mb-5">
              <h3 class="text-center fw-bold">SUMMER '22 MENU</h3>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ <span class="badge bg-danger float-end">Limited</span></h5>
                  <h6 class="text-truncate">SPICY TERIYAKI EDAMAME</h6>
                  <p class="small">Steamed soybean pods glazed in a spicy teriyaki sauce and topped with sesame.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ <span class="badge bg-danger float-end">Limited</span></h5>
                  <h6 class="text-truncate">IKA GESO-AGE</h6>
                  <p class="small">Crispy breaded squid legs seasoned with sea salt and served with a lemon wedge and yuzu-wasabi aioli.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ <span class="badge bg-danger float-end">Limited</span></h5>
                  <h6 class="text-truncate">SPICY SALMON RICE BOWL</h6>
                  <p class="small">Spicy salmon mix served atop steamed white rice, fresh cucumbers and sushi ginger, topped with fried shallots, spring onions and sesame.
                  </p>
              </div>
            </div>

            <div class="col-12 mt-4">
              <hr class="accent my-5">
              <h3 class="text-center fw-bold mb-1">Small Plates</h3>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">9€ <span class="badge bg-warning float-end">New</span></h5>
                  <h6 class="text-truncate">JAPANESE FRIED CHICKEN</h6>
                  <p class="small">Also known as Karaage: 
                    garlic, ginger, and soy-marinated dark meat chicken with a crispy light breading. Served with a side of yuzu mayonnaise.

                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ <span class="badge bg-info float-end">Seasonal</span></h5>
                  <h6 class="text-truncate">TAKOYAKI</h6>
                  <p class="small">Crispy Japanese wheat cakes with a gooey center - filled with octopus and vegetables and topped with tonkatsu sauce, kewpie, katsuobushi and ao nori.
                    Seasonal
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">7€ <span class="badge bg-warning float-end">New</span></h5>
                  <h6 class="text-truncate">CHICKEN GYOZA</h6>
                  <p class="small">Pan-fried chicken and vegetable potstickers served with yuzu kosho and a soy dipping sauce.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">8€</h5>
                  <h6 class="text-truncate">PORK BELLY RICE</h6>
                  <p class="small">Chopped seared pork belly on steamed white rice, topped with a sweet onion drizzle and spring onion.

                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ <span class="badge bg-success float-end">Vegan-friendly</span></h5>
                  <h6 class="text-truncate">FRIED MARINATED TOFU</h6>
                  <p class="small">Crispy on the outside, flavor-packed on the inside! Firm tofu marinated in a traditional soy-based mix.

                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">5€ <span class="badge bg-success float-end">Vegan-friendly, Gluten-Free</span></h5>
                  <h6 class="text-truncate">EDAMAME</h6>
                  <p class="small">Traditional steamed green soybeans served hot with sea salt.

                  </p>
              </div>
            </div>

            <div class="col-12 mt-4">
              <hr class="accent my-5">
              <h3 class="text-center fw-bold">Ramen</h3>
              <h5 class="text-center fw-bold mb-1"><em>Traditional</em></h4>
              
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">15€</h5>
                  <h6 class="text-truncate">SIGNATURE TONKOTSU</h6>
                  <p class="small">Our most popular ramen - thick and full-bodied pork bone broth, topped with braised pork belly, our house made bamboo shoots and wood ear mushrooms.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">14€</h5>
                  <h6 class="text-truncate">SHIO RAMEN</h6>
                  <p class="small">Our lightest broth: sea salt seasoned chicken and smoked fish broth, topped with braised pork belly, wakame and bamboo.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">14€</h5>
                  <h6 class="text-truncate">MISO RAMEN</h6>
                  <p class="small">Flavor packed miso-seasoned chicken and fish broth, topped with braised pork belly and buttered corn.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">15€</h5>
                  <h6 class="text-truncate">CHICKEN RAMEN</h6>
                  <p class="small">An all chicken version of our Signature Tonkotsu, served with panko-breaded chicken.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">14€</h5>
                  <h6 class="text-truncate">SHOYU RAMEN</h6>
                  <p class="small">Tokyo Style! Chicken and fish broth seasoned with our blended soy sauce. Topped with braised pork belly, bamboo and fishcakes.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ <span class="badge bg-warning float-end">New</span></h5>
                  <h6 class="text-truncate">KIDS' RAMEN</h6>
                  <p class="small">Our signature ramen noodles in your choice of our traditional soup broths and two of your favorite toppings!
                    <br><em>Full portion of noodles / 12oz broth</em>
                  </p>
              </div>
            </div>

            <div class="col-12 mt-4">
              <h5 class="text-center fw-bold mb-1"><em>MODERN</em></h4>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">16€ <span class="badge bg-warning float-end">New</span></h5>
                  <h6 class="text-truncate">RED DRAGON</h6>
                  <p class="small">Available in one, two, or three chili spiciness levels! Crafted with chicken bone broth, and topped with ground chili pork and braised pork belly.
                    <br><em>Spice Level Choice: One, Two, or Three</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">11€ </h5>
                  <h6 class="text-truncate">JUNK RAMEN</h6>
                  <p class="small">Soupless and flavorful! Hot ramen topped with a sunny side up egg, chopped seared pork belly, and more!
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">15€ <span class="badge bg-success float-end">Vegan-friendly</span></h5>
                  <h6 class="text-truncate">VEGAN MISO</h6>
                  <p class="small">Handcrafted vegan broth seasoned with miso paste and topped with marinated tofu, super sweet corn, wakame and marinated bamboo shoots.
                  </p>
              </div>
            </div>
          
            <!-- @note RICE BOWLS & SALADS -->
            <div class="col-12 mt-4">
              <hr class="accent my-5">
              <h3 class="text-center fw-bold mb-1">RICE BOWLS & SALADS</h3>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">12€ <span class="badge bg-danger float-end">Limited</span></h5>
                  <h6 class="text-truncate">JFC RICE BOWL</h6>
                  <p class="small">Oisshi's ever popular breaded garlic, ginger and soy-marinated chicken on rice with shredded cabbage and plenty of yuzu mayonnaise.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">13€ </h5>
                  <h6 class="text-truncate">TEMPURA SHRIMP RICE BOWL</h6>
                  <p class="small">Crispy tempura battered shrimp (3) drizzled with a spicy yuzu-infused sauce and unagi sauce. Served atop steamed white rice, shredded cabbage and topped with beni shoga and spring onion.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">12€ </h5>
                  <h6 class="text-truncate">SESAME GINGER SALAD</h6>
                  <p class="small">Sesame-ginger tossed greens with crispy ramen and corn, topped with your choice of panko chicken or marinated tofu.
                    <br><em>Choose your protein: Panko Chicken or Marinated Tofu</em>
                  </p>
              </div>
            </div>

            <!-- @note Beverages -->
            <div class="col-12 mt-4">
              <hr class="accent my-5">
              <h3 class="text-center fw-bold mb-1">Beverages</h3>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">3€ </h5>
                  <h6 class="text-truncate">ICED GREEN TEA</h6>
                  <p class="small">Brewed from a blend of sencha and matcha teas. Steeped daily and unsweetened.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">4€ <span class="badge bg-danger float-end">Limited</span></h5>
                  <h6 class="text-truncate">RAMUNE: JAPANESE MARBLE SODA</h6>
                  <p class="small">The original Japanese bottled soda.
                   <br><em>Strawberry, Melon, Lychee, Blueberry, Grape, Orange, Yuzu</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">3.5€</h5>
                  <h6 class="text-truncate">PERRIER</h6>
                  <p class="small">Sparkling mineral water captured at the Source in France.
                    <br><em>500mL / 16.9 FL OZ</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">4€</h5>
                  <h6 class="text-truncate">ICED HIBISCUS TEA</h6>
                  <p class="small">Slow-steeped hibiscus tea with a ginger-cane simple syrup. Not too sweet, but just right!
                    <br><em>Availability: FLAGSHIP EXCLUSIVE</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">3.5€</h5>
                  <h6 class="text-truncate">FOUNTAIN SODAS</h6>
                  <p class="small">Coke & Boylan Soda products.
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">5€ <span class="badge bg-danger float-end">Limited</span></h5>
                  <h6 class="text-truncate">CBD SPARKLING</h6>
                  <p class="small">A sweetened 20mg CBD-infused sparkling beverage. Gluten-free, vegan, non-GMO, no preservatives, no sodium.
                    <br><em>Flavors: Lemonade, Black Cherry Soda, Ginger Ale</em>
                  </p>
              </div>
            </div>

            <div class="col-12 mt-4">
              <hr class="accent my-5">
              <h5 class="text-center fw-bold mb-1"><em>SAKÉ</em></h5>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">9€ <span class="badge bg-warning float-end">New</span></h5>
                  <h6 class="text-truncate"> HOT DRAFT SAKÉ / SHO CHIKU BAI</h6>
                  <p class="small">Served at 105F in a traditional crafe, this saké is naturally smooth, well-balanced, and pairs best with grilled meat or fish, tempura dishes, sushi & more!
                    <br><em>10 oz / ABV 15%</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">11€ </h5>
                  <h6 class="text-truncate">SUPERIOR GINJO / HAKATSURU</h6>
                  <p class="small">A light, dry sake: Superior is brewed with meticulous care using high quality rice and water from a natural spring in Nada. Silky and smooth, this is best paired with salty or soy sauce-seasoned dishes.
                    <br><em>300mL / ABV 14.5%</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">11€ </h5>
                  <h6 class="text-truncate">MIO SPARKLING / SHO CHIKU BAI</h6>
                  <p class="small">Refreshing, fruity, and a unique sweet aroma. This sweet bubbly appeals to a wide range of tastes - a new sake for a new age.
                    <br><em>300mL / ABV 5%</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ </h5>
                  <h6 class="text-truncate">CHIKA CUP SAKÉ / HAKATSURU</h6>
                  <p class="small">Smooth and refreshing from start to finish. Light aroma of honey and sugarcane, layered with roasted almonds. The flavor profile pairs deliciously with ramen & sushi.
                    <br><em>200mL / ABV 13.5%</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">10€ </h5>
                  <h6 class="text-truncate">NIGORI CREME DE SAKÉ / SHO CHIKU BAI</h6>
                  <p class="small">An unfiltered sake with a high rice content, this bold and sweet creme-like sake is best paired with spicy dishes.
                    <br><em>300mL / ABV 15%</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">11€</h5>
                  <h6 class="text-truncate">GUCCI GOLD / KIKUSUI FUNAGUCHI</h6>
                  <p class="small">Sake in its purest form: this unpasteurized, rich, and full flavored sake pairs best with any ramen or spicy dish.
                    <br><em>200mL / ABV 19%</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ </h5>
                  <h6 class="text-truncate">CHILLED DRAFT SAKÉ / HAKATSURU</h6>
                  <p class="small">A light, fresh, and smooth taste. This dry sake is best paired with flavorful dishes, like our Japanese Fried Chicken.
                    <br><em>180mL / ABV 14%</em>
                  </p>
              </div>
            </div>

            <div class="col-12 mt-4">
              <hr class="accent my-5">
              <h5 class="text-center fw-bold ">BEER</h5>
              <h6 class="text-center fw-bold mb-1"><em>DRAFT TAPS & BOTTLED</em></h6>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6.5€</h5>
                  <h6 class="text-truncate">SAPPORO PREMIUM</h6>
                  <p class="small">A refreshing lager with a crisp, refined flavor and a clean finish. The perfect beer to pair with any meal and any occasion.
                    <br><em>Available only on draft</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">9€ </h5>
                  <h6 class="text-truncate">HITACHINO NEST</h6>
                  <p class="small">With almost two centuries of brewing knowledge, Hitachino offers a variety of beers, sours, and ales with layers of complexity and great taste.
                    <br><em>Dai Dai, Anbai, Weizen, Red Rice, White Ale, Saison du Japon, Pale Ale, XH, Japanese Classic Ale, Espresso Stout</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ / 10€ </h5>
                  <h6 class="text-truncate">MASAHI BEER</h6>
                  <p class="small">A highly attenuated lager without the heavier malt flavors of competitors' products, with a crisp, dry taste reminiscent of some northern German beers.
                    <br><em>355mL 6€ / 633mL 10€</em>
                  </p>
              </div>
            </div>

            <div class="card col-lg-3">
              <div class="card-body">
                <h5 class="float-right font-weight-bold">6€ / 10€ </h5>
                  <h6 class="text-truncate">KIRIN ICHIBAN</h6>
                  <p class="small">A premium, 100% malt beer brewed with the first-press method, offering smooth and rich flavor.
                    <br><em>355mL 6€ / 633mL 10€</em>
                  </p>
              </div>
            </div>

         </div>
      </div>

      <div class="container ">
        <div class="col-lg-9 mx-auto col-12 text-center mb-3">
          <h1 class="mt-0 text-dark">WE STRIVE TO BEST SERVE ALL GUESTS</h1>
          <p class="lead">Our menu offerings change frequently and may use ingredients containing common food allergens including seafood/shellfish, wheat/gluten, eggs, dairy and soy. If you have any questions about ingredients, please ask to speak with a restaurant manager.
            However, because of the handcrafted nature of our menu items, the variety of procedures used on our kitchen lines, and our reliance on our suppliers, we cannot guarantee the accuracy of ingredient information or the possibility that an ingredient might be transferred among food items and must disclaim any liability regarding the accuracy of such information.
          </p>
          <div class="row gap-1 justify-content-evenly">
            <p class="lead col-lg-4 ">
              <a href="#" class="btn btn-danger btn-lg" role="button">Online Delivery</a>
            </p>
            <p class="lead col-lg-4 ">
              <a class="btn btn-danger btn-lg" href="#" role="button">Order Pick Up</a>
            </p>
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