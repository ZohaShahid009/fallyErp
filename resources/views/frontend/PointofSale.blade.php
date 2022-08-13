@extends('frontend.layout.master')
{{-- @section('title','add product') --}}
@section("content")
<body>
    <section class="container-fluid bg_point--of--sale py-4 px-0 pb-3">
    </section>
    <div class="container ">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="font-weight-bold Point--sale mt-5">Fally ERP Point of Sale</h3>
                <h5>Instant Access.</h5>
                <form>
                    <div class="form-group">
                      <input type="text" required class="form-control" placeholder="First Name and Last Name">
                    </div>
                    <div class="form-group">
                      <input type="email" required class="form-control"  placeholder="Email">
                    </div>
                    <div class="d-flex">
                        <input type="email" required class="form-control"  placeholder="Company Name">
                        <input type="number" required class="form-control ml-lg-3"  placeholder="Phone Number">
                    </div>
                    <div class="d-flex mt-3">
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Select Country</option>
                              <option value="1">Pakistan</option>
                              <option value="2">India</option>
                              <option value="3">China</option>
                              <option value="4">France</option>
                              <option value="4">Germany</option>
                            </select>
                          </div>
                          <div class="input-group mb-3 ml-3">
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Select Language</option>
                              <option value="4">English</option>
                              <option value="3">French</option>
                              <option value="2">German</option>
                              <option value="1">Chinese</option>
                              <option value="4">Japanese</option>
                            </select>
                          </div>
                          
                          
                        </div>
                        <div class="d-flex ">

                            <div class="input-group mb-3">
                              <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Company Size</option>
                                <option value="1"> < 5 </option>
                                <option value="2">5 - 20</option>
                                <option value="3">20 - 50</option>
                                <option value="4">50 - 250</option>
                                <option value="4"> > 250</option>
                              </select>
                            </div>
                            
                            <div class="input-group mb-3 ml-3">
                              <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Primary Interest</option>
                                <option value="1">Pakistan</option>
                                <option value="2">India</option>
                                <option value="3">China</option>
                                <option value="4">France</option>
                                <option value="4">Germany</option>
                              </select>
                            </div>
                        </div>
                        <p class="startnow_comitment bg-info text-white rounded p-2">By clicking on Start Now, you accept our <a href="#" class="font-weight-bold text-dark"> Subscription Agreement </a>and <a href="#" class="font-weight-bold text-dark">Privacy Policy</a></p>
                        <p class="d-flex justify-content-between"><button onclick="tryProducts()" class="text-dark btn btn-md buying_btn_back text-white"><i class="fa-solid fa-angle-left"></i> Change Apps Selection</button><button class="btn btn-md buying_btn text-white">Start Now <i class="fa-solid fa-angle-right"></i></button></p>
                  </form>
                </div>
                <div class="col-lg-6 bg_point_of_sale_image pt-5">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-2">
                            
            
                        <img src="{{asset('assets/images/nur_ru.jpg')}}" class="img-fluid rounded-circle" alt="A profile Picture">
                        </div>
                        <div class="col-lg-10">
                            <h4>
                                Nür Alsahlaïd
                            </h4>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <h5 class="font-weight-bold">
                                With most systems, you get 70% of what you hoped. With Odoo, you get more than what you expected. You, guys, will transform the market.
                            </h5>
                        </div>
                    </div>
                    
                </div>
        </div>
    </div>
   @endsection