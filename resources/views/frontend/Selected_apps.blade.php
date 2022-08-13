@extends('frontend.layout.master')
{{-- @section('title','add product') --}}
@section("content")

<body>
    <section class="container-fluid bg_price px-0 pb-3">

       
        <h1 class="display-4 font-weight-bold text-white apps_Heading text-center">Choose Your Apps</h1>
        <h4 class="font-weight-bold text-white text-center mt-0">Free instant access, no credit card required.</h4>
    </section>
<section class="container">
    <h6 class="text-uppercase font-weight-bold mt-4">Website</h6>
    <div class="row">
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Website</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">eCommerce</span>
            
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white card p-2">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-earth-americas fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Blog</span>
           
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Forum</span>
       
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">eLearning</span>
       
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Live chat</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h6 class="text-uppercase font-weight-bold mt-4 ">Sales</h6>
    <div class="row">
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">CRM</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Sales</span>
            
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white card p-2">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-earth-americas fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Invoicing</span>
           
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Point of Sale</span>
       
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Sign</span>
       
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Subscription</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Rental</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Field Service</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h6 class="text-uppercase font-weight-bold mt-4">Operations</h6>
    <div class="row">
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Accounting</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Consolidation</span>
            
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white card p-2">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-earth-americas fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Project</span>
           
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Timesheets</span>
       
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Helpdesk</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Inventory</span>
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Purchase</span>
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Documents</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <h6 class="text-uppercase font-weight-bold mt-4">Manafacturing</h6>
    <div class="row">
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Manafacturing</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">PLM</span>
            
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white card p-2">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-earth-americas fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Maintenance</span>
           
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Quality</span>
       
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Repair</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h6 class="text-uppercase font-weight-bold mt-4">Marketing</h6>
    <div class="row">
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Email Marketing</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">SMS Marketing</span>
            
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white card p-2">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-earth-americas fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Marketing Auto...</span>
           
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Events</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Survey</span>
            
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white card p-2">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-earth-americas fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Social Marketing</span>
           
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Appointments</span>
       
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">NewsLetter sub...</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h6 class="text-uppercase font-weight-bold mt-4">Human Resources</h6>
    <div class="row">
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Employees</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="secondIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Recruitment</span>
            
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white card p-2">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="thirdIcon p-2 rounded">
                            <i class="text-white fa-solid fa-earth-americas fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Employee Refer...</span>
           
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold">Time Off</span>
       
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Expenses</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Planning</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Appraisals</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Fleet</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Approvals</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Lunch</span>
       
                        <input type="checkbox" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h6 class="text-uppercase font-weight-bold mt-4">Customizations</h6>
    <div class="row pb-5">
        <div class=" col-lg-3 mt-3 p-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white p-2 card">
                <div class="row">
                    <div class="col-3 d-flex">
                        <span href="#" class="firstIcon p-2 rounded">
                            <i class="text-white fa-solid fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-around">
                        <span class="font-weight-bold ">Studio</span>
                        <input type="checkbox" name="" id="" class="checkbox-round" />
                    </div>
                </div>
            </div>
        </div>
        </div>
</section>

 @endsection