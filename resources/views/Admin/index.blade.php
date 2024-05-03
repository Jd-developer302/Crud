@extends('masterlayout.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="mb-5 fs-18 text-fade l-h-n">Propeties for Sale</p>
                            <h2 class="my-0 fw-700">425</h2>
                        </div>
                        <div class="text-center">
                            <input class="knob" data-width="90" data-height="90" data-angleOffset="85" data-linecap="round" data-fgColor="#3246D3" value="85" data-displayInput="false" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="mb-5 fs-18 text-fade l-h-n">Propeties for Rent</p>
                            <h2 class="my-0 fw-700">259</h2>
                        </div>
                        <div class="text-center">
                            <input class="knob" data-width="90" data-height="90" data-angleOffset="25" data-linecap="round" data-fgColor="#37d159" value="25" data-displayInput="false" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="mb-5 fs-18 text-fade l-h-n">Total Customer</p>
                            <h2 class="my-0 fw-700">4,258</h2>
                        </div>
                        <div class="text-center">
                            <input class="knob" data-width="90" data-height="90" data-angleOffset="65" data-linecap="round" data-fgColor="#ffa800" value="65" data-displayInput="false" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="mb-5 fs-18 text-fade l-h-n">Total Projects</p>
                            <h2 class="my-0 fw-700">754</h2>
                        </div>
                        <div class="text-center">
                            <input class="knob" data-width="90" data-height="90" data-angleOffset="35" data-linecap="round" data-fgColor="#00D0FF" value="35" data-displayInput="false" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Sales</h4>
                </div>
                <div class="box-body">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-12">
                            <h2>$32,485/=</h2>
                            <p class="mb-15"><i class="fa fa-line-chart text-success"></i> <span class="text-success">+20%</span> than last month</p>
                            <p class="fs-18 mb-0"><span class="badge badge-pill badge-primary"></span> Last Year</p>
                            <p class="fs-18"><span class="badge badge-pill badge-info"></span> Last Running Year</p>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div id="recent_trend"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="d-flex align-items-center justify-content-start">
                                <img src="../images/compass.png" class="max-w-120" alt="">
                                <div class="ps-20">
                                    <span class="badge badge-danger badge-xl">180 New</span>
                                    <h2>24,000 +</h2>
                                    <p class="mb-0"><i class="fa fa-line-chart text-success"></i> <span class="text-success">+20%</span> than last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="box overflow-hidden">
                        <div class="box-body p-0">
                            <div class="row align-items-center justify-content-start g-0">
                                <div class="col-6 bg-info">
                                    <div class="p-25">
                                        <i class="fs-32 mb-5 fa fa-home"></i>
                                        <h2 class="mb-0">7,000+</h2>
                                        <p class="fs-18 mb-0">Active Pro.</p>
                                    </div>
                                </div>
                                <div class="col-6 bg-primary">
                                    <div class="p-25">
                                        <i class="fs-32 mb-5 fa fa-user"></i>
                                        <h2 class="mb-0">4,000+</h2>
                                        <p class="fs-18 mb-0">Corporate Pro.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Overview</h4>
                        </div>
                        <div class="box-body">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center me-30">
                                    <div class="bg-gradient-success overflow-h me-10 rounded10 w-50 h-50 l-h-50 fs-18 text-center text-white"><i class="fa fa-home"></i></div>
                                    <div>
                                        <p class="fs-16 text-fade mb-0">Total Sale</p>
                                        <h4 class="mb-0">2,212 units</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="bg-gradient-primary overflow-h me-10 rounded10 w-50 h-50 l-h-50 fs-18 text-center text-white"><i class="fa fa-building"></i></div>
                                    <div>
                                        <p class="fs-16 text-fade mb-0">Total Rent</p>
                                        <h4 class="mb-0">212 units</h4>
                                    </div>
                                </div>
                            </div>
                            <div id="overview_trend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="box" style="height: 435px;">
                        <div class="box-header no-border">
                            <h4 class="box-title">Overview</h4>
                        </div>
                        <div class="box-body">
                            <div id="chart432"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="box">
                <div class="box-body">
                    <div class="mb-30">
                        <div class="d-flex align-items-center justify-content-between mb-15">
                            <h4>Property Viewed</h4>
                            <h4>245/Days</h4>
                        </div>
                        <div class="progress active">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                            </div>
                        </div>
                    </div>
                    <div class="mb-30">
                        <div class="d-flex align-items-center justify-content-between mb-15">
                            <h4>Property Listed</h4>
                            <h4>415 Unit</h4>
                        </div>
                        <div class="progress active">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-15">
                            <h4>Reviews</h4>
                            <h4>345 Comments</h4>
                        </div>
                        <div class="progress active mb-0">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Customer Review</h4>
                </div>
                <div class="box-body p-0">
                    <div class="inner-user-div">
                        <div class="media-list bb-1 bb-dashed border-light">
                            <div class="media align-items-center">
                                <a class="avatar avatar-lg status-success" href="#">
                    <img src="../images/avatar/avatar-10.png" class="bg-success-light" alt="...">
                  </a>
                                <div class="media-body">
                                    <p class="fs-16">
                                        <a class="hover-primary" href="#"><strong>Theron Trump</strong></a>
                                    </p>
                                    2 day ago
                                </div>
                                <div class="media-right">
                                    <div class="d-flex">
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star-half"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media pt-0">
                                <p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.</p>
                            </div>
                        </div>
                        <div class="media-list bb-1 bb-dashed border-light">
                            <div class="media align-items-center">
                                <a class="avatar avatar-lg status-success" href="#">
                    <img src="../images/avatar/avatar-3.png" class="bg-success-light" alt="...">
                  </a>
                                <div class="media-body">
                                    <p class="fs-16">
                                        <a class="hover-primary" href="#"><strong>Johen Doe</strong></a>
                                    </p>
                                    5 day ago
                                </div>
                                <div class="media-right">
                                    <div class="d-flex">
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star-half"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media pt-0">
                                <p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.</p>
                            </div>
                        </div>
                        <div class="media-list">
                            <div class="media align-items-center">
                                <a class="avatar avatar-lg status-success" href="#">
                    <img src="../images/avatar/avatar-4.png" class="bg-success-light" alt="...">
                  </a>
                                <div class="media-body">
                                    <p class="fs-16">
                                        <a class="hover-primary" href="#"><strong>Tyler Mark</strong></a>
                                    </p>
                                    7 day ago
                                </div>
                                <div class="media-right">
                                    <div class="d-flex">
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star-half"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media pt-0">
                                <p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet.</p>
                            </div>
                        </div>
                        <div class="media-list bb-1 bb-dashed border-light">
                            <div class="media align-items-center">
                                <a class="avatar avatar-lg status-success" href="#">
                    <img src="../images/avatar/avatar-10.png" class="bg-success-light" alt="...">
                  </a>
                                <div class="media-body">
                                    <p class="fs-16">
                                        <a class="hover-primary" href="#"><strong>Theron Trump</strong></a>
                                    </p>
                                    2 day ago
                                </div>
                                <div class="media-right">
                                    <div class="d-flex">
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star-half"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media pt-0">
                                <p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.</p>
                            </div>
                        </div>
                        <div class="media-list bb-1 bb-dashed border-light">
                            <div class="media align-items-center">
                                <a class="avatar avatar-lg status-success" href="#">
                    <img src="../images/avatar/avatar-3.png" class="bg-success-light" alt="...">
                  </a>
                                <div class="media-body">
                                    <p class="fs-16">
                                        <a class="hover-primary" href="#"><strong>Johen Doe</strong></a>
                                    </p>
                                    5 day ago
                                </div>
                                <div class="media-right">
                                    <div class="d-flex">
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star-half"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media pt-0">
                                <p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="#" class="waves-effect waves-light d-block w-p100 btn btn-primary">See More Reviews</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection