@extends('frontend.layout.master')

@section("content")

<body>
    <section class="container-fluid bg_price px-0 pb-3">


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

                    <h3 class="mt-3">
                        Choose your <span class="font-weight-bold">Apps</span>
                    </h3>
                    @foreach ($product as $product)
                    <div class="row">
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">

                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>

                                    {{--  start dynamic  data  --}}
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">{{ $product->tittle}}</span>
                                        <span class="font-weight-bold"> ${{ $product->cost}}</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>

                                </div>

                            </div>
                        </div>
                        {{--  <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold">IoT Boxes</span>
                                        <button class="mb-1 ml-lg-2 box_btn" onclick="decrement()">-</button>
                                        <span class="font-weight-bold" id="boxes"></span>
                                        <button class="box_btn" onclick="increment()">+</button><br>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>  --}}


                    </div>
                    @endforeach

                    {{--  <h3 class="mt-3">
                        Extra <span class="font-weight-bold">Integrations</span>
                    </h3>  --}}
                    <div class="row">
                        {{--  <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>  --}}

                        {{--  zoyy  --}}

                        {{--  <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="thirdIcon py-2 px-3 rounded">
                                            <i class="text-white fa-solid fa-file-invoice-dollar fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Invoicing</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2 mt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="secondIcon p-2 rounded">
                                            <i class="fa-solid fa-2x text-white fa-arrow-trend-up"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">Sales</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-white p-2">
                                <div class="row">
                                    <div class="col-3 d-flex">
                                        <span href="#" class="firstIcon p-2 rounded">
                                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <span class="font-weight-bold d-block">CRM</span>
                                        <span class="font-weight-bold"> $8.00 USD</span>
                                        <span class="font-weight-light">/month</span>
                                        <input type="checkbox" name="" id="" class="checkbox-round" />
                                    </div>
                                </div>
                            </div>
                        </div>  --}}

<br><br>
                        <h3 class="mt-3">
                            Choose your <span class="font-weight-bold">hosting type</span>
                        </h3>

                        <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                            <ul class="pl-lg-2">
                                <li class="card">
                                    <label for="1" class="d-flex align-items-center label_radio pt-3">
                                        <input type="radio" id="1" required name="check">
                                        Standard Cloud Hosting - Free
                                    </label>
                                </li>
                                <li class=" card">
                                    <label for="2" class="d-flex align-items-center label_radio pt-3">
                                        <input type="radio" id="2" required name="check">
                                        Self Hosting - Free
                                    </label>
                                </li>
                                <li class="card">
                                    <label for="3" class=" label_radio pt-3 d-flex align-items-center">
                                        <input type="radio" required name="check" id="3">
                                        Fally ERP.sh Cloud Platform (allows custom modules)
                                </li>
                            </ul>
                        </div>
                        <h3 class="mt-3">
                            <span class="font-weight-bold">Implementation</span> Service
                        </h3>
                        <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                            <ul>
                                <li class="card">
                                    <label for="4" class=" d-flex align-items-center label_radio pt-3">
                                        <input id="4" type="radio" required name="service">
                                        Self-service
                                    </label>
                                </li>
                                <li class="card">
                                    <label for="5" class=" label_radio pt-3 d-flex align-items-center">
                                        <input id="5" type="radio" required name="service">
                                        With a local partner <br class="d-lg-none"> (recommended for<span
                                            class="font-weight-bold ml-auto ml-lg-2">>50 users</span>) </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{--  @endforeach  --}}
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
                                class="btn btn-block btn--tryNow text-white  py-3 font-weight-bold text-uppercase" onclick="tryProducts()">Try
                                Now</button>
                            <button class="btn btn-block btn--buyNow  font-weight-bold text-uppercase" onclick="buyProducts()">Buy
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
                            <button
                                class="btn btn-block btn--tryNow text-white  py-3 font-weight-bold text-uppercase " onclick="tryProducts()">Try
                                Now</button>
                            <button class="btn btn-block btn--buyNow  font-weight-bold text-uppercase"  onclick="buyProducts()"> Buy Now</button>
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
                            <button
                                class="btn btn-block btn--tryNow text-white  py-3 font-weight-bold text-uppercase " onclick="tryProducts()">Try
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
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
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
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
   @endsection
