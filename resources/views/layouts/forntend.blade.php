
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style type="text/css">
        /* Styling for the Main Menu */
.nav {
  list-style: none;
  padding: 0;
  margin: 0;
}

.nav > li {
  position: relative;
}

.nav > li > a {
  display: block;
  padding: 10px;
  color: #fff;
  /*text-decoration: none;*/
  /*background-color: #333;*/
  border: 1px solid #444;
}

.nav > li > a:hover {
  /*background-color: #555;*/
}

/* Dropdown Menu (Tree Structure) */
.submenu {
  display: none;
  list-style: none;
  margin: 0;
  padding-left: 20px;
}

.submenu li {
  /*background-color: #444;*/
}

.submenu li a {
  color: #fff;
  text-decoration: none;
  padding: 8px 10px;
}

.submenu li a:hover {
  /*background-color: #555;*/
}

/* Arrow Indicator for Submenus */
.nav > li > a i {
  margin-left: 10px;
}

/* Show submenu on hover or click */
.nav > li:hover > .submenu {
  /*display: block;*/
}

.submenu li:hover {
  /*background-color: #555;*/
}

/* Optional: For smoother transition (optional animation) */
.nav > li > a,
.submenu li a {
  /*transition: background-color 0.3s ease;*/
}

.dropdown-submenu {
  position: relative;
}

.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  display: none;
  position: absolute;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}

    </style>
    <title>MyShop-Softwer</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!--   <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
 -->
  <link rel="stylesheet" href="{{ asset('assets-fornt/css/templatemo-chain-app-dev.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-fornt/css/animated.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-fornt/css/owl.css') }}">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">

      <div class="row">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets-fornt/images/logo.png') }}" alt="Chain App Dev"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left: 25%;">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                @if(auth()->check())
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                      Repairing
                  </a>
                  <ul class="dropdown-menu">
                      <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="#">Laptop</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('laptop-repairing/today-deliveries')}}">Today Deliveries</a></li>
                        <li><a class="dropdown-item" href="{{url('laptop-repairing/add')}}">Add Laptop</a></li>
                        <li><a class="dropdown-item" href="{{url('laptop-repairing')}}">View Laptop</a></li>
                      </ul>
                    </li>


                     <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="#">Mobile</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('mobile-repairing/today-deliveries')}}">Today Deliveries</a></li>
                        <li><a class="dropdown-item" href="{{url('mobile-repairing/add')}}">Add Mobile</a></li>
                        <li><a class="dropdown-item" href="{{url('mobile-repairing')}}">View Mobile</a></li>
                      </ul>
                    </li>

                      <li><a class="dropdown-item" href="#">Others</a></li>
                  </ul>
              </li>
                <!-- Inventory Management Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Inventory Management
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('user-accessories')}}">Buy</a></li>
                        <li><a class="dropdown-item" href="{{url('accessories/sales')}}">Sale</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('user-companies')}}">Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('user-category')}}">Category</a>
                </li>
                
                <!-- Others Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Others
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#services">Services</a></li>
                        <li><a class="dropdown-item" href="#pricing">Pricing</a></li>
                        <li><a class="dropdown-item" href="#newsletter">Newsletter</a></li>
                    </ul>
                </li>
                 @else
                   <li class="nav-item">
                      <a class="nav-link" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#pricing">Pricing</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#newsletter">Newsletter</a>
                  </li>
                 @endif
            </ul>
             @if(auth()->check())
            <!-- Sign Out -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{url('logout')}}">Sign Out</a>
                </li>
            </ul>
            @else

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{url('login')}}">Sign In Now</a>
                </li>
            </ul>
            @endif
        </div>
    </div>
 </nav>
       
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form method="POST" action="{{ route('login') }}">
                <label>Email / Username</label>
                <input type="text" name="email"/>
                <br />

                <label>Password</label>
                <input type="password" name="password"/>
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn-primary">Login</button>Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>


  @yield('content')


  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Join our mailing list to receive the news &amp; latest trends</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p>Rio de Janeiro - RJ, 22795-008, Brazil</p>
            <p><a href="#">010-020-0340</a></p>
            <p><a href="#">info@company.co</a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Free Apps</a></li>
              <li><a href="#">App Engine</a></li>
              <li><a href="#">Programming</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">App News</a></li>
            </ul>
            <ul>
              <li><a href="#">App Dev Team</a></li>
              <li><a href="#">Digital Web</a></li>
              <li><a href="#">Normal Apps</a></li>
            </ul>
          </div>
        </div> -->
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>About Our Company</h4>
            <div class="logo">
              <img src="{{ asset('assets-fornt/images/white-logo.png') }}" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 Chain App Dev Company. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-fornt/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets-fornt/js/animation.js') }}"></script>
  <script src="{{ asset('assets-fornt/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets-fornt/js/popup.js') }}"></script>
  <script src="{{ asset('assets-fornt/js/custom.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    // Initialize DataTable
    $('#usersTable').DataTable();

    // Handle form submission
    $('#registrationForm').on('submit', function(e) {
      e.preventDefault();

      // Get form data
      let formData = $(this).serialize();

      // Make an AJAX POST request to register the user
      $.ajax({
        url: '/submit-registration',  // Adjust with your server-side endpoint
        method: 'POST',
        data: formData,
        success: function(response) {
          // Assuming the response contains the user data
          const newUser = response.user;

          // Add the new user to the DataTable
          const table = $('#usersTable').DataTable();
          table.row.add([
            newUser.id,         // Assuming you return the ID
            newUser.name,       // Assuming you return the name
            newUser.email,      // Assuming you return the email
            `<button class="btn btn-info">Edit</button>`  // Add edit or delete buttons as needed
          ]).draw();

          // Optionally, reset the form after submission
          $('#registrationForm')[0].reset();
        },
        error: function(error) {
          alert("An error occurred. Please try again.");
        }
      });
    });
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Toggle submenu visibility when clicking the parent item (Services, Pricing)
    $('.nav > li > a').click(function() {
      var submenu = $(this).next('.submenu');
      
      // Only toggle if there's a submenu
      if (submenu.length > 0) {
        submenu.stop(true, true).slideToggle(300);
        
        // Toggle the caret icon direction
        $(this).find('i').toggleClass('fa-caret-down fa-caret-up');
      }
    });

    // Close all submenus when clicking outside the menu
    $(document).click(function(e) {
      if (!$(e.target).closest('.nav').length) {
        $('.submenu').slideUp(300);
        $('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');
      }
    });
  });
  document.addEventListener('DOMContentLoaded', function () {
    const dropdownSubmenus = document.querySelectorAll('.dropdown-submenu > a');

    dropdownSubmenus.forEach(function (el) {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            let submenu = this.nextElementSibling;

            if (submenu && submenu.classList.contains('dropdown-menu')) {
                submenu.classList.toggle('show');

                // Hide others
                document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (menu) {
                    if (menu !== submenu) {
                        menu.classList.remove('show');
                    }
                });
            }
        });
    });

    // Close on outside click
    document.addEventListener('click', function () {
        document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (menu) {
            menu.classList.remove('show');
        });
    });
});
</script>

</body>
</html>