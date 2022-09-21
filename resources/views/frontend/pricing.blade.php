@extends('frontend.layout.master')

@section('content')

    <body>
        <section class="container-fluid bg_price px-0 pb-3">


            <!---------------------- Navbar for Mobile View --------------------------->

            <nav class="navbar navbar_mbl navbar-expand-lg bg-dark d-lg-none">
                <a class="navbar-brand text-white" href="./index.html">Fally ERP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white"><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <div class="bg-info row">
                            <div class="text-white py-2 px-3">
                                <span class="font-weight-bold">Finance</span> &nbsp;<span
                                    class="badge bg-light py-1 px-2 text-dark">Apps</span>
                            </div>
                        </div>
                        <li class="nav-item nav_item_mbl">
                            <a class="nav-link text-white" href="#">Spreadsheet</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Accounting</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Invoicing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Expenses</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <div class="bg-info row">
                            <div class="text-white py-2 px-3">
                                <span class="font-weight-bold">Sales</span> &nbsp;<span
                                    class="badge bg-light py-1 px-2 text-dark">Apps</span>
                            </div>
                        </div>
                        <li class="nav-item nav_item_mbl">
                            <a class="nav-link text-white" href="#">CRM</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Sales</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Point of Sales</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Subscriptions</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <div class="bg-info row">
                            <div class="text-white py-2 px-3">
                                <span class="font-weight-bold">Websites</span> &nbsp;<span
                                    class="badge bg-light py-1 px-2 text-dark">Apps</span>
                            </div>
                        </div>
                        <li class="nav-item nav_item_mbl">
                            <a class="nav-link text-white" href="#">Website Builder</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Ecommerce</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Forum</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <div class="bg-info row">
                            <div class="text-white py-2 px-3">
                                <span class="font-weight-bold">Inventory & MRP</span>
                                &nbsp;<span class="badge bg-light py-1 px-2 text-dark">Apps</span>
                            </div>
                        </div>
                        <li class="nav-item nav_item_mbl">
                            <a class="nav-link text-white" href="#">Inventory</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Manafacturing</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">PLM</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Purchase</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <div class="bg-info row">
                            <div class="text-white py-2 px-3">
                                <span class="font-weight-bold">Human Resources</span>
                                &nbsp;<span class="badge bg-light py-1 px-2 text-dark">Apps</span>
                            </div>
                        </div>
                        <li class="nav-item nav_item_mbl">
                            <a class="nav-link text-white" href="#">Employees</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Recruitment</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Time off</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Appraisals</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <div class="bg-info row">
                            <div class="text-white py-2 px-3">
                                <span class="font-weight-bold">Marketing</span> &nbsp;<span
                                    class="badge bg-light py-1 px-2 text-dark">Apps</span>
                            </div>
                        </div>
                        <li class="nav-item nav_item_mbl">
                            <a class="nav-link text-white" href="#">Social Marketing</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Email Marketing</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">SMS Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Events</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <div class="bg-info row">
                            <div class="text-white py-2 px-3">
                                <span class="font-weight-bold">Services</span> &nbsp;<span
                                    class="badge bg-light py-1 px-2 text-dark">Apps</span>
                            </div>
                        </div>
                        <li class="nav-item nav_item_mbl">
                            <a class="nav-link text-white" href="#">Project</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Timesheet</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Field Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Helpdesk</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <div class="bg-info row">
                            <div class="text-white py-2 px-3">
                                <span class="font-weight-bold">Productivity</span> &nbsp;<span
                                    class="badge bg-light py-1 px-2 text-dark">Apps</span>
                            </div>
                        </div>
                        <li class="nav-item nav_item_mbl">
                            <a class="nav-link text-white" href="#">Discuss</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">Approvals</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">IoT</a>
                        </li>
                        <li class="nav-item nav_item_mbl">
                            <a href="#" class="nav-link text-white">VoIP</a>
                        </li>
                    </ul>
                    <h6 class="text-center mt-3">
                        <a href="./pricing.html" class="text-white">Pricing</a>
                    </h6>
                </div>
            </nav>
            <h1 class="display-4 font-weight-bold text-white pricing_heading text-center">Fally ERP Pricing</h1>
        </section>
        <section class="container-fluid Pricing_sect pb-5">
            <div class="container mt-5" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
                    <h3>
                        Choose the number of <span class="font-weight-bold">Users</span>
                    </h3>

                    <!-- !*****************DO everything inside this Lg-9 -->
                    <div class="col-lg-9">
                        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-3 mb-3">
                                <div class="input-group">
                                    <input type="number" class="form-control text-center" min="0"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text font-weight-bold" id="basic-addon2">Users</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 px-0">
                                <span class="font-weight-bold strike pr-lg-2"><s>$8.00 USD </s>
                                </span>
                                <span class="font-weight-bold"> $6.00 USD</span>
                                <span class="font-weight-light">/user/month</span>
                            </div>
                        </div>
                        {{-- parent --}}
                        <div class="row">
                            @foreach ($categories as $category)
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h3 class="mt-3">
                                        Choose your <span class="font-weight-bold">{{ $category->title }}</span>
                                    </h3>
                                </div>
                                {{-- <div class="row"> --}}
                                    {{--  child  --}}
                                @foreach ($product as $products)
                                    @if ($products->category_id == $category->id)
                                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="bg-white p-2">
                                                <div class="row">
                                                    <div class="col-3 d-flex">
                                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                                            <i
                                                                class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col-9">
                                                        <span
                                                            class="font-weight-bold d-block">{{ $products->tittle }}</span>
                                                        <span class="font-weight-bold"> ${{ $products->cost }}</span>
                                                        <span class="font-weight-light">/month</span>
                                                        <input type="checkbox" class="checkbox-round" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                {{-- </div> --}}
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-3 checkout_order">
                        <div id="main_content">

                            <li class="selected" id="page1" onclick="change_tab(this.id);">Anually</li>
                            <li class="notselected" id="page2" onclick="change_tab(this.id);">Monthly</li>
                            <!-- Anuall -->

                            <!-- Please Note that the data you put here for Anuall Package must be putted as same in that below "page_content" <div> as well.   -->
                            <div class=' hidden_desc' id="page1_desc">
                                <p class="d-flex justify-content-between font-weight-bold"><span>1
                                        Users</span><span>$8.00USD</span></p>
                                <p class="d-flex justify-content-between "><span>User discount
                                        <sup>(1)</sup></span><span>-$2.00USD</span></p>
                                <p class="d-flex justify-content-between font-weight-bold"><span>0
                                        Apps</span><span>$0.00USD</span></p>
                                <p class="d-flex justify-content-between font-weight-bold"><span>Total/month
                                        <sup>(2)</sup></span><span>$6.00USD</span></p>
                                <p class="billed--anually"><sup>(2)</sup>Billed annually: <span
                                        class="font-weight-bold">$72.00 USD</span></p>
                                <button ss
                                    class="btn btn-block btn--tryNow text-white  py-3 font-weight-bold text-uppercase"
                                    onclick="tryProducts()">Try
                                    Now</button>
                                <button class="btn btn-block btn--buyNow  font-weight-bold text-uppercase"
                                    onclick="buyProducts()">Buy
                                    Now</button>
                                <p class="print_quote text-center mt-3">Send/Print the quote</p>
                                <p class="description_checkOrder"><sup>(1)</sup>New customers get a discount on the initial
                                    number of users purchased. ($6.00 USD instead of $8.00 USD).</p>
                            </div>



                            <!-- Monthly -->
                            <div class='hidden_desc' id="page2_desc">
                                <p class="d-flex justify-content-between font-weight-bold"><span>1
                                        Users</span><span>$10.00USD</span></p>
                                <p class="d-flex justify-content-between "><span>User discount
                                        <sup>(1)</sup></span><span>-$2.50USD</span></p>
                                <p class="d-flex justify-content-between font-weight-bold"><span>0
                                        Apps</span><span>$0.00USD</span></p>
                                <p class="d-flex justify-content-between font-weight-bold"><span>Total/month
                                    </span><span>$7.50USD</span></p>
                                <button class="btn btn-block btn--tryNow text-white  py-3 font-weight-bold text-uppercase "
                                    onclick="tryProducts()">Try
                                    Now</button>
                                <button class="btn btn-block btn--buyNow  font-weight-bold text-uppercase"
                                    onclick="buyProducts()"> Buy Now</button>
                                <p class="print_quote text-center mt-3">Send/Print the quote</p>
                                <p class="description_checkOrder"><sup>(1)</sup>New customers get a discount on the initial
                                    number of users purchased. ($6.00 USD instead of $8.00 USD).</p>
                            </div>


                            <!----------------------------- Put Anuall data here as Well   ---------------------------- -->
                            <div id="page_content">
                                <p class="d-flex justify-content-between font-weight-bold"><span>1
                                        Users</span><span>$8.00USD</span></p>
                                <p class="d-flex justify-content-between "><span>User discount
                                        <sup>(1)</sup></span><span>-$2.00USD</span></p>
                                <p class="d-flex justify-content-between font-weight-bold"><span>0
                                        Apps</span><span>$0.00USD</span></p>
                                <p class="d-flex justify-content-between font-weight-bold"><span>Total/month
                                        <sup>(2)</sup></span><span>$6.00USD</span></p>
                                <p class="billed--anually"><sup>(2)</sup>Billed annually: <span
                                        class="font-weight-bold">$72.00 USD</span></p>
                                <button class="btn btn-block btn--tryNow text-white  py-3 font-weight-bold text-uppercase "
                                    onclick="tryProducts()">Try
                                    Now</button>
                                <button class="btn btn-block btn--buyNow  font-weight-bold text-uppercase"
                                    onclick="buyProducts()">Buy Now</button>
                                <p class="print_quote text-center mt-3">Send/Print the quote</p>
                                <p class="description_checkOrder"><sup>(1)</sup>New customers get a discount on the initial
                                    number of users purchased. ($6.00 USD instead of $8.00 USD).</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid bg_queries py-3">
            <div class="container">
                <h3 class="pt-5">
                    Any <span class="font-weight-bold">Questions?</span>
                </h3>
                <p>If the answer to your question is not on this page, please contact our <a href="#"
                        class="font-weight-bold"> account managers.</a></p>
            </div>
            <!-- ******************************** -->
            <div class="container">
                <div class="accordion" id="accordionExample">
                    <div class="item">
                        <div class="item-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What does the Subscription include?
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="t-p">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione omnis velit aut commodi
                                officiis harum quis neque voluptatum corrupti optio! </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do you define a paying user? <i class="fa fa-angle-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="t-p">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur esse distinctio ducimus
                                earum debitis in exercitationem sapiente numquam. Neque, voluptatem? </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can i use my own domain name for my Website?
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="t-p">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea labore totam non mollitia autem
                                sed quis id quasi. Ipsa, facere?
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What is the coast of maintenance?
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="t-p">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam fugit perferendis
                                pariatur perspiciatis et nemo ducimus tempora consequatur iusto temporibus!
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseive">
                                    How long will the free offer remain free?
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <div class="t-p">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam fugit perferendis
                                pariatur perspiciatis et nemo ducimus tempora consequatur iusto temporibus!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
@endsection
