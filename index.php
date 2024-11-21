<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tusk Den Pizzeria</title>
    <link rel="shortcut icon" type="image" href="Logo.png" width="600px" height="200px">
    <link rel="stylesheet" href="Tusk Den Pizzeria.css">

    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap links -->

    <!-- fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <!-- fonts links -->

    <!-- icons links -->
   
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    <!-- icons links -->

    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- animation links -->
     <!-- footer -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

      <!-- footer -->
</head>
<body>
        <div class="all-content">
        <!-- navbar -->
        <nav class="navbar navbar-expand-md" id="navbar">
            <!-- Brand -->
            <a class="navbar-brand" href="Pizzeria home.html" id="logo"><img src="Logo.png" alt="logo" width="50px">Tusk Den Pizzeria</a>
          
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span><img src="menu.png" alt="menu" width="30px"></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="Pizzeria home.html">Home</a>
                </li>
                <!-- dropdown -->
                <li class="nav-item dropdown">
                    <a href="menu.html" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                     Menu
                    </a>
                    <div class="dropdown-menu">
                        <a href="menu.html" class="dropdown-item"> Hot & spicy pizza</a>
                        <a href="menu.html" class="dropdown-item">Pepperoni pizza</a>
                        <a href="menu.html" class="dropdown-item">Neapolitan pizza</a>
                        <a href="menu.html" class="dropdown-item">veggie pizza</a>
                        <a href="menu.html" class="dropdown-item">BBQ Chicken pizza</a>
                        <a href="menu.html" class="dropdown-item">Hawaiian pizza</a>
                    </div>
                </li>
                <!-- dropdown -->
                
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="privacy policy.html">privacy-policy</a>
                </li>
              </ul>
            </div>
            <div class="icons">
                <a href="signin.html"><i class="bi bi-person"></i></a>
                <a href="order.html"><i class="bi bi-cart"></i></a>
            </div>
          </nav>
        <!-- navbar end -->
      
        <!-- home section -->
       
        <div class="home">
            <div class="content" data-aos="zoom-out-right">
                <h3>ENJOY OUR
                    <br>DELICIOUS PIZZA </h3>
                
                     <h3>CATAGORY <span class="changecontent"></span></h3>
                
                   <H3> IN YOUR CHOICE </H3> </P>
                
                <a href="order.html" class="btn">Order Now</a>
            </div>
            
        </div>
        <!-- home section end -->

      
      <!-- banner -->
      <div class="banner"    data-aos="fade-up"
        data-aos-duration="1500">
            <div class="content" data-aos="zoom-in-up"
            data-aos-duration="1500">
                <h3>SPECIAL OFFER</h3>
                <h2>BUY 2 PIZZA UPTO 50% OFF</h2>
                <p>ONLY TWO MONTHS</p>
                <a href="order.html"><div id="btnorder"><button>Order Now</button></div></a>
            </div>
            <div class="img">
                <img src="COMBO 1.jpg" alt="" width = "75px" height = "300px">
            </div>
        </div>    
       
        <!-- about -->
        <div class="container" id="about" data-aos="fade-up" data-aos-duration="1500">
            <h1>ABOUT US</h1>
            <div class="row">
              <div class="col-md-6 py-3">
                <div class="card">
                <img src="COMBO 1.jpg" alt="" width = "550px" height = "300px">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <p>
                  The Tusk Den Pizzeria is all about fun and good times with people you care about, sharing original Italian pizza, hand-made in the traditional Italian way: thin & crispy, and deliciously baked in the only original wood-fired oven in Sri Lanka, along with a tasty range of authentic Italian food with carefully-sourced fresh ingredients imported from Italy. Your tastebuds will crave more after one bite.
                </p>
                <ul class="ul" style="color:white;">
                  <li>Made to perfection in the Only Original Italian Woodfired Oven in Sri Lanka</li>
                  <li>All our main ingredients are brought down from Italy</li>
                  <li>FREE Delivery in Colombo</li>
                  <li>Quality & Purity Guaranteed</li>
                </ul>
              </div>
            </div>
          </div>
          
      <!-- about -->

     
      
      <!-- Gallery -->
    <div class="container" id="Gallary" data-aos="fade-up"
        data-aos-duration="1500">
    <h1 style="color:white;">Our Gallery</h1>

    <div class="row gallary_image_box">
        <div class="col-lg-4 col-md-6 col-sm-12 gallary_image">
        <img src="COMBO 1.jpg" alt="" width = "100px" height = "100px" data-aos="zoom-out" class="img-fluid" alt="Sandwich">
            <h3 style="color:white;">Sanwich</h3>
            <p style="color:white;">A delicious sandwich made with fresh ingredients, perfect for any meal.</p>
            <a href="order.html" class="gallary_btn btn btn-primary">Order Now</a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 gallary_image">
        <img src="COMBO 1.jpg" alt="" width = "100px" height = "100px" data-aos="zoom-out" class="img-fluid" alt="Juice">
            <h3 style="color:white;">Juice</h3>
            <p style="color:white;">Enjoy a refreshing glass of freshly squeezed juice to brighten your day.</p>
            <a href="order.html" class="gallary_btn btn btn-primary">Order Now</a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 gallary_image">
        <img src="COMBO 1.jpg" alt="" width = "100px" height = "100px" data-aos="zoom-out" class="img-fluid" alt="Pizza">
            <h3 style="color:white;">Muffin</h3>
            <p style="color:white;">Hot and cheesy pizza topped with your favorite ingredients, straight from the oven.</p>
            <a href="order.html" class="gallary_btn btn btn-primary">Order Now</a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 gallary_image">
        <img src="COMBO 1.jpg" alt="" width = "100px" height = "100px" data-aos="zoom-out" class="img-fluid" alt="Pepperoni Pizza">
            <h3 style="color:white;">Pizza</h3>
            <p style="color:white;">Savor the classic taste of pepperoni on our signature pizza crust.</p>
            <a href="order.html" class="gallary_btn btn btn-primary">Order Now</a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 gallary_image">
        <img src="COMBO 1.jpg" alt="" width = "100px" height = "100px" data-aos="zoom-out" class="img-fluid" alt="Ice Cream">
            <h3 style="color:white;">ice cream</h3>
            <p style="color:white;">Indulge in our creamy and rich ice cream, available in a variety of flavors.</p>
            <a href="order.html" class="gallary_btn btn btn-primary">Order Now</a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 gallary_image">
        <img src="COMBO 1.jpg" alt="" width = "100px" height = "100px" data-aos="zoom-out" class="img-fluid" alt="Chocolate Dessert">
            <h3 style="color:white;">Chocolate</h3>
            <p style="color:white;">A decadent chocolate dessert to satisfy your sweet tooth cravings.</p>
            <a href="order.html" class="gallary_btn btn btn-primary">Order Now</a>
        </div>
    </div>
</div>
<!--  Gallery -->


  <!--customer review-->

  <div class="container mt-5" data-aos="fade-up" data-aos-duration="1500">
    <h1 class="reviewh1" style="color:white;">Customer Reviews</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="review p-3 mb-4">
                <h4 style="color:white;">Kamel Click</h4>
                <p style="color:white;">"The pizza was amazing! The crust was just the right amount of crispy, and the toppings were fresh. Will definitely order again!"</p>
                <p class="rating" style="color:white;">Rating: ★★★★★</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="review p-3 mb-4">
                <h4 style="color:white;">Alan Osca</h4>
                <p style="color:white;">"Great service and delicious food. The delivery was quick, and the staff was very friendly."</p>
                <p class="rating" style="color:white;">Rating: ★★★★☆</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="review p-3 mb-4">
                <h4 style="color:white;">Robert Michel</h4>
                <p style="color:white;">"The pizza was good, but the delivery took a bit longer than expected. Still, a good experience overall."</p>
                <p class="rating" style="color:white;">Rating: ★★★☆☆</p>
            </div>
        </div>
    </div>
</div>

  <!--customer review-->
        
       <!-- footer -->
   
       <footer>
        <div class="footer-container">
            <!-- Contact Information -->
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email: <a href="mailto:tuskdenpizzeria@gmail.com">tuskdenpizzeria@gmail.com</a></p>
                <p>Phone: +94 435 465 776</p>
                <p>Address: 123 Street, Colombo 09, Sri Lanka</p>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul class="footer-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                </ul>
            </div>
            
            <!-- Social Media Icons -->
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    
        <!-- Bottom Bar -->
        <div class="bottom-bar">
            <p>&copy; 2023 Tusk Den Pizzeria. All rights reserved.</p>
        </div>
    </footer>

    <!-- footer -->
    <a href="#" class="arrow"><i><img src="up-arrow.png" alt="" width="50px"></i></a>
        
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>