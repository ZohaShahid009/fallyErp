<!---------------------- Navbar for Desktop View --------------------------->

<nav class="menu fixed-top pt-lg-0 d-lg-block d-none">
    <button onclick="myFunction()" type="button" class="toggle_btn d-lg-none bg-transparent rounded">
        <i class="text-white fa-2x fa-solid fa-bars"></i>
    </button>
    <ul class="d-lg-flex align-items-center pt-lg-2" id="mynav">
        <a href="/" class="logo d-none d-lg-block" style="font-size: 18px;"><span>Fally </span>ERP</a>
        <li class="drop-down">
            <a class="border-0 btn bg-transparent apps" style="font-size: 13px;">Apps <i
                    class="fa-solid fa-angle-down"></i></a>
            {{-- zoi start --}}


                <div class="mega-menu fadeIn animated">
                    @foreach ($categories as $category)
                    <div class="mm-6column">
                        <span class="categories-list">
                            <ul>
                                <h5 class="products_heading_1">{{ $category->title }}</h5>
                                <hr class="borderLine" />
                                @foreach ($product as $products)
                                    @if ($products->category_id == $category->id)
                                        <a href="#" class="text-dark">{{ $products->tittle }}</a>
                                        {{-- <a href="#" class="text-dark">Invoicing</a> --}}
                                        @endif
                                        @endforeach
                            </ul>
                        </span>
                    </div>


            @endforeach
            </div>


        </li>
        <a href="price" class="apps" style="font-size: 13px;">Pricing</a>
        <a href="signin" class="apps sign_in_btn" style="font-size: 13px;margin-left: 210px;">Sign in</a>
        <a href="apps" type="button" class="btn_navbar btn text-white border-0 py-1 px-2 rounded"
            style="font-size: 13px;">
            Try it free
        </a>

    </ul>
</nav>

<!---------------------- Navbar for Mobile View --------------------------->

<nav class="navbar navbar_mbl navbar-expand-lg bg-dark d-lg-none">
    <a class="navbar-brand text-white" href="show">Fally ERP</a>
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
            <a href="/price" class="text-white">Pricing</a>
        </h6>
    </div>
</nav>
