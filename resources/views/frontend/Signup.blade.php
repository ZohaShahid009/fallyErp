<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fally ERP</title>
        <link rel="stylesheet" href="{{asset('assets/frontendcss/style.css')}}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Inter:wght@400;500;600;700&family=Lato&family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
      </head>

<body>
    <form method="POST" action="{{ url('signup') }}" class="form" enctype="multipart/form-data">
        @csrf
    <div class="container">
        <div class="row parent_div align-items-center justify-content-center">
            <div class="col-lg-4 card">
                <h3 class="text-center py-3">Fally ERP</h3>
                <p class="bg-info p-3 text-white">Access and manage your instances from this Fally ERP account.</p>

                <label class="font-weight-bold">Your Email</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="email" required name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label class="font-weight-bold">Your Name</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" required   name="name" placeholder="e.g. John Doe" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="pass" name="password"  required class="form-control">
                    <div class="input-group-append">
                      <button onclick="password_toggle()" class="btn input-group-text" id="basic-addon2"><i class="fa-solid fa-eye"></i></button>
                    </div>
                  </div>
                  <button class="btn btn-block btn-info text-uppercase mt-lg-4">Sign up</button>
                  <p class="text-right mt-3"><a href="/signin" class="text-info font-weight-bold">I already have an account</a></p>
                  <p>We will handle your personal data as described in our <a href="#" class="text-secondary font-weight-bold"> Privacy Policy.</a></p>
                </div>
        </div>
    </div>
    </form>
    <footer class="container-fluid footer">
        <div class="container pb-5">
          <div class="row pt-5">
            <div class="col-lg-12">
              <h2 class="text-center text-white font-weight-bold">Fally ERP</h2>
            </div>
            <div class="col-lg-2 mt-5">
              <h5 class="text-white font-weight-bold">Community</h5>
              <a href="#" class="footer_links">Tutorials</a>
              <a href="#" class="footer_links">Documentation</a>
              <a href="#" class="footer_links">Forum</a>
              <h5 class="text-white font-weight-bold mt-lg-3 mt-5">Open Source</h5>
              <a href="#" class="footer_links mb-lg-3">Download</a>
              <a href="#" class="footer_links">Github</a>
              <a href="#" class="footer_links">Runbot</a>
              <a href="#" class="footer_links">Translations</a>
            </div>
            <div class="col-lg-2 mt-5">
              <h5 class="text-white font-weight-bold">Services</h5>
              <a href="#" class="footer_links">Odoo.sh Hosting</a>
              <a href="#" class="footer_links mt-3">Support</a>
              <a href="#" class="footer_links mt-1">Upgrade</a>
              <a href="#" class="footer_links mt-1">Education</a>
              <a href="#" class="footer_links my-3">Find an Accountant</a>
              <a href="#" class="footer_links mt-3">Find a Partner</a>
              <a href="#" class="footer_links mt-1">Become a Partner</a>
            </div>
            <div class="col-lg-2 mt-5">
              <h5 class="text-white font-weight-bold">About us</h5>
              <a href="#" class="footer_links">Our company</a>
              <a href="#" class="footer_links mt-1">Contact us</a>
              <a href="#" class="footer_links mt-1">Jobs</a>
              <a href="#" class="footer_links mt-3">Education</a>
              <a href="#" class="footer_links mt-1">Events</a>
              <a href="#" class="footer_links mt-1">Blog</a>
              <a href="#" class="footer_links mt-1">Customers</a>
              <a href="#" class="footer_links mt-1">Partners</a>
              <a href="#" class="footer_links mt-3">Legal</a>
              <a href="#" class="footer_links mt-1">Privacy</a>
              <a href="#" class="footer_links mt-1">Security</a>
            </div>
            <div class="col-lg-6 mt-5">
              <select name="" id="lang_selector">
                <option value="">English</option>
                <option value="">French</option>
                <option value="">Arabic</option>
                <option value="">Chinese</option>
                <option value="">German</option>
              </select>
              <hr class="opt_hr">
              <p>
                Odoo is a suite of open source business apps that cover all your
                company needs: CRM, eCommerce, accounting, inventory, point of
                sale, project management, etc.
              </p>
              <p class="mt-lg-3">
                Odoo's unique value proposition is to be at the same time very
                easy to use and fully integrated.
              </p>
              <a href="#" class="footer_icons"><i class="fa-brands fa-facebook-f mx-3"></i></a>
              <a href="#" class="footer_icons"><i class="fa-brands fa-twitter mx-3"></i></a>
              <a href="#" class="footer_icons"><i class="fa-brands fa-linkedin-in mx-3"></i></a>
              <a href="#" class="footer_icons"><i class="fa-brands fa-github mx-3"></i></a>
              <a href="#" class="footer_icons"><i class="fa-brands fa-instagram mx-3"></i></a>
              <a href="#" class="footer_icons"><i class="fa-solid fa-envelope mx-3"></i></a>
            </div>
          </div>

        </div>
        <div class="row foot_para py-3 align-items-center">
          <div class="container">
            <p>Website made with <a href="./index.html" class="font-weight-bold text-white">Fally ERP</a></p>
          </div>
        </div>
      </footer>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eeb84b58a3.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/index.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- to initialize Animation -->
    <script>
      AOS.init();
    </script>

</html>
