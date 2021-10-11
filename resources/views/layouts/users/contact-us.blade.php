@extends('layouts.main')
@section('title')
    | Contact-Us
@endsection
@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ti-headphone-alt bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Contact-Us</h4>
                        <span>need help?? You can contact us via the contact below!</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ Route('dashboardadmin.index') }}">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Contact-Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="card">
            <div class="card-body">
                <!-- Contact Us Section -->
                <section id="contact">
                    <div class="container">
                        <h3 class="text-center text-uppercase">contact us</h3>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                <div class="card border-0">
                                    <div class="card-body text-center">
                                        <i class="bi bi-telephone-inbound"></i>
                                        <h4 class="text-uppercase mb-5">call us</h4>
                                        <p>+62 831 3248 421</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                <div class="card border-0">
                                    <div class="card-body text-center">
                                        <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                        <h4 class="text-uppercase mb-5">office loaction</h4>
                                        <address>Suite 02, Level 12, Sahera Tropical Center </address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                              <div class="card border-0">
                                  <div class="card-body text-center">
                                      <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                      <h4 class="text-uppercase mb-5">office loaction</h4>
                                      <address>Suite 02, Level 12, Sahera Tropical Center </address>
                                  </div>
                              </div>
                          </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                <div class="card border-0">
                                    <div class="card-body text-center">
                                        <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                                        <h4 class="text-uppercase mb-5">email</h4>
                                        <p>PenginapanSdh@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Contact Us Section -->
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
