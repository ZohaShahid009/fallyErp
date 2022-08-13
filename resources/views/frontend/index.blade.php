@extends('frontend.layout.master')
{{-- @section('title','add product') --}}
@section("content")
<body>
  <section class="container-fluid bg_hero px-0 pb-3">
    <!---------------------- Navbar for Desktop View --------------------------->

    <div class="container px-0 px-lg-2">
      <div class="row no-gutters hero_section align-items-lg-center">
        <div class="col-lg-7 col-12 text-white px-0">
          <h3 class="employee_heading">
            Amazing employees deserve <span> amazing software</span>
          </h3>
          <p class="hero_para">
            The only platform you will ever need to help run your business:
            integrated apps, kept simple, and loved by millions of happy
            users.
          </p>
          <a href="./Selected_apps.html" class="btn btn-lg start_now_btn mt-4">
            Start Now - <span>It's Free</span>
          </a>
          <a href="#" class="btn btn-lg ml-lg-3 Meet_expert_btn mt-4 ml-3">
            Meet an Expert
          </a>
        </div>
        <div class="col-lg-5 d-none d-lg-block">
          <div class="video_options">
            <button type="button" class="btn video_btn py-2" data-toggle="modal" data-target=".bd-example-modal-lg">
              <i class="fa-solid fa-play fa-2x text-white"></i>
            </button>
          </div>
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <iframe style="position: absolute; left: -170px" width="1140" height="600"
                  src="https://www.youtube.com/embed/y7TlnAv6cto" title="What is Odoo? 95 seconds overview"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
      
          <img src="{{asset('assets/images/screen.png')}}"class="cmputerscreen" alt="A Computer Screen" />
        </div>
      </div>
    </div>
    <div class="curve"></div>
  </section>
  <section class="container apps_section">
    <div class="row mb-lg-3">
      <div class="col-lg-12 mb-5">
        <h2 class="text-center font-weight-bold">An app for every need</h2>
      </div>
      <div class="col-lg-4 col-12">
        <h6 class="text-center font-weight-bold mb-lg-0">BOOST YOUR SALES</h6>
        <div class="row mt-4">
          <div class="col-4 mb-5 mt-3 mb-lg-0 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="firstIcon apps_pad">
              <i class="text-white fa-solid fa-2x fa-handshake"></i>
            </a>
            <h6 class="mt-4 text-center">CRM</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="secondIcon apps_pad">
              <i class="text-white fa-solid fa-2x fa-shop"></i>
            </a>
            <h6 class="mt-4 text-center">POS</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="thirdIcon apps_pad">
              <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
            </a>
            <h6 class="mt-4 text-center">Sales</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h6 class="text-center font-weight-bold">INTEGRATE YOUR SERVICES</h6>
        <div class="row mt-4">
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="firstIcon apps_pad">
              <i class="text-white fa-solid fa-2x fa-puzzle-piece"></i>
            </a>
            <h6 class="mt-4 text-center">Project</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="secondIcon apps_pad">
              <i class="text-white fa-regular fa-2x fa-clock"></i>
            </a>
            <h6 class="mt-4 text-center">Timesheet</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="bg-info apps_pad">
              <i class="fa-solid fa-2x text-white fa-satellite-dish"></i></a>
            <h6 class="mt-4 text-center">Helpdesk</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h6 class="text-center font-weight-bold">
          STREAMLINE YOUR OPERATIONS
        </h6>
        <div class="row mt-4">
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="firstIcon apps_pad">
              <i class="text-white fa-solid fa-2x fa-box-open"></i>
            </a>
            <h6 class="mt-4 text-center">Inventory</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="secondIcon apps_pad">
              <i class="text-white fa-solid fa-2x fa-wrench"></i>
            </a>
            <h6 class="mt-4 text-center">MRP</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="bg-danger apps_pad">
              <i class="fa-solid fa-2x text-white fa-wallet"></i>
            </a>
            <h6 class="mt-4 text-center">Purchase</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mt-lg-5">
        <h6 class="text-left font-weight-bold">BUILD STUNNING WEBSITES</h6>
        <div class="row mt-4">
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="bg-info apps_pad">
              <i class="text-white fa-solid fa-2x fa-earth-americas"></i>
            </a>
            <h6 class="mt-4 text-center">Website Builder</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center ml-lg-4" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="secondIcon apps_pad">
              <i class="text-white fa-solid fa-2x fa-cart-shopping"></i>
            </a>
            <h6 class="mt-4 text-center">eCommerce</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mt-lg-5">
        <h6 class="text-left font-weight-bold">MANAGE YOUR FINANCES</h6>
        <div class="row mt-4">
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="thirdIcon apps_pad">
              <i class="text-white fa-solid fa-2x fa-file-invoice-dollar"></i>
            </a>
            <h6 class="mt-4 text-center">Invoice</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center ml-lg-4" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="bg-danger apps_pad">
              <i class="text-white fa-solid fa-2x fa-file"></i>
            </a>
            <h6 class="mt-4 text-center">Accounting</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mt-lg-5">
        <h6 class="text-left font-weight-bold">AMPLIFY YOUR MARKETING</h6>
        <div class="row mt-4">
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="thirdIcon apps_pad">
              <i class="text-white fa-regular fa-2x fa-paper-plane"></i>
            </a>
            <h6 class="mt-4 text-center">Email Marketing</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center ml-lg-4" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="bg-warning apps_pad">
              <i class="text-white fa-solid fa-2x fa-gears"></i>
            </a>
            <h6 class="mt-4 text-center">Marketing Automation</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mt-lg-5">
        <h6 class="text-left font-weight-bold">CUSTOMIZE & DEVELOP</h6>
        <div class="row mt-4">
          <div class="col-4 mb-5 mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="thirdIcon apps_pad">
              <i class="text-white fa-solid fa-2x fa-screwdriver-wrench"></i>
            </a>
            <h6 class="mt-4 text-center">Studio</h6>
          </div>
          <div class="col-4 mb-5 mt-3 text-center ml-lg-4" data-aos="fade-up" data-aos-duration="1000">
            <a href="#" class="bg-info apps_pad">
              <i class="text-white fa-solid fa-2x fa-down-left-and-up-right-to-center"></i>
            </a>
            <h6 class="mt-4 text-center">odoo.sh</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mb-lg-5">
      <a href="#" class="btn btn-lg start_now_btn">... and Many More</a>
    </div>
  </section>
  <section class="Sect_3 container-fluid mt-4">
    <div class="row" data-aos="fade-up" data-aos-duration="2000">
      <div class="col-lg-7 screens-mockup">
       
        <img src="{{asset('assets/images/screens-mockup.png')}}" class="screens-mockup_pic" alt="screens" />
      </div>
      <div class="col-lg-5 integrated_content">
        <h2>
          No more <span class="font-weight-bold">painful integrations.</span>
        </h2>
        <p class="mt-3">
          If you have individual software solutions that work, but don't talk
          to each other, you are probably entering things more than once and
          missing a comprehensive overview of what's going on.
        </p>
        <p class="mt-3">
          Between the Odoo apps and the tens of thousands of Community apps,
          there is something to help address all of your business needs in a
          single, cost-effective and modular solution: no more work to get
          different technology cooperating.
        </p>
        <p class="mt-3">
          Odoo apps are perfectly integrated with each other, allowing you to
          fully automate your business processes and reap the savings and
          benefits.
        </p>
        <div class="row">
          <div class="col-lg-2">
            
            <img src="{{asset('assets/images/marc_peeters_sodexo.png')}}" class="img-fluid" alt="MarcPeetersSodexo" />
          </div>
          <div class="col-lg-9 px-0">
            <p class="font-weight-bold italic_words mb-0">
              “We replaced 14 different applications and increased revenues by
              10% overnight.”
            </p>
            <p class="font-weight-light italic_words">
              -Marc Peeters, General Manager of the Vending Division
            </p>
         
            <img src="{{asset('assets/images/sodexo.png')}}" class="sodexo" alt="Some Logo" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container sect_graph">
    <div class="row" data-aos="fade-down" data-aos-duration="1000">
      <div class="col-lg-7 graph_content">
        <h3>
          A <span class="font-weight-bold">unique</span> value proposition
          <span class="font-weight-light">
            Everything you need with a top-notch user experience.</span>
        </h3>
        <p class="mt-3 font-weight-light">
          Our family of apps work seamlessly together - giving you the ability
          to automate and track everything you do - centralized, online, and
          accessible from anywhere with any device.
        </p>
        <p class="mt-3 font-weight-light">
          The
          <span class="font-weight-bold">
            open-source development model of Fally</span>
          has allowed us to leverage thousands of developers and business
          experts to build the world's largest ecosystem of fully integrated
          business apps.
        </p>
        <p class="font-weight-light mt-3">
          With a modern and elegant technical design, Fally's framework is
          unique. It allows us and our community developers to provide
          <span class="font-weight-bold">top-notch usability that scales across all apps.</span>
        </p>
        <p class="mt-3 font-weight-light">
          Usability improvements made to Fally will be automatically applied
          to all of our integrated apps.
        </p>
        <p class="mt-3 font-weight-light">
          Finally, with regular annual releases, Odoo evolves much faster than
          any other solution.
        </p>
      </div>
        <img src="{{asset('assets/images/Graph.png')}}" class="img-fluid mt-lg-5" alt="Perfomance Graph" />
      </div>
    </div>
  </section>
  <section class="container-fluid followers_sect pt-lg-4">
    <div class="row no-gutters justify-content-center bg_followers_img" data-aos="fade-up" data-aos-duration="1000">
        
  
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
     
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange"><img src="{{asset('assets/images/follower (9).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange1"><img src="{{asset('assets/images/follower (8).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange2"><img src="{{asset('assets/images/follower (7).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <span class="imgchange3"><img src="{{asset('assets/images/follower (1).jpg')}}" height="100px" alt="A Follower_pic" /></span>
      <h2 class="text-dark display-4 font-weight-bold text-center d-none d-lg-block"> <span
          class="display-1 font-weight-bold">7</span>
        Million Users <span class="font-weight-light display-5">Grow their business with <span class="font-weight-bold">
            Fally ERP</span></span></h2>
    </div>
    <h2 class="text-dark display-4 font-weight-bold text-center d-lg-none "> <span
        class="display-1 font-weight-bold">7</span>
      Million Users <span class="font-weight-light display-5">Grow their business with <span class="font-weight-bold">
          Fally ERP</span></span></h2>
    <div class="row users_foot align-items-center py-5">
      <div class="col-lg-6 text-lg-right text-center text-white">
        <h3 class="font-weight-bold">Unleash <span class="font-weight-light"> your</span> growth
          potential</h3>
        <span>No credit card required - Instant access</span>
      </div>
      <div class="col-lg-6 text-center text-lg-left mt-3 mt-lg-0">
        <a href="./Selected_apps.html" class="btn btn-lg start_now_btn px-lg-5">
          Start Now - <span>It's Free</span>
        </a>
      </div>
    </div>
  </section>
 @endsection