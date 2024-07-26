@include('layouts.partial.header')
<!-- Carousel Start -->
<div class="container-fluid carousel px-0 mb-5 pb-5">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="/frontend/img/carousel-2.jpg" class="img-fluid w-100" alt="First slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h4 class="text-white mb-4 animated slideInDown">No 1 Pest Control Services</h4>
                        <h1 class="text-white display-1 mb-4 animated slideInDown">Enjoy Your Home Totally Pest Free
                        </h1>
                        <a href="" class="me-2"><button type="button"
                                class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Read
                                More</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/frontend/img/carousel-1.jpg" class="img-fluid w-100" alt="Second slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h4 class="text-white mb-4 animated slideInDown">No 1 Pest Control Services</h4>
                        <h1 class="text-white display-1 mb-4 animated slideInDown">Enjoy Your Home Totally Pest Free
                        </h1>
                        <a href="" class="me-2"><button type="button"
                                class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Read
                                More</button></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary"
            type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button"
            data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="about-img">
                    <div class="rotate-left bg-dark"></div>
                    <div class="rotate-right bg-dark"></div>
                    <img src="/frontend/img/about-img.jpg" class="img-fluid h-100" alt="img">
                    <div class="bg-white experiences">
                        <h1 class="display-3">20</h1>
                        <h6 class="fw-bold">Years Of Experiences</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="about-item overflow-hidden">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                        About PestKit</h5>
                    <h1 class="display-5 mb-2">World Best Pest Control Services Since 2008</h1>
                    <p class="fs-5" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit
                        sed do eiu smod tempor incididunt ut labore dolore magna aliqua.Quis ipsum suspen disse ultrices
                        gravida Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="row">
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 bg-dark rounded d-flex"
                                    style="align-items: center; justify-content: center;">
                                    <i class="fas fa-city fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Building</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 bg-dark rounded d-flex"
                                    style="align-items: center; justify-content: center;">
                                    <i class="fas fa-school fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Education</h5>
                                    <h5>center</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 bg-dark rounded d-flex"
                                    style="align-items: center; justify-content: center;">
                                    <i class="fas fa-warehouse fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Warehouse</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 bg-dark rounded d-flex"
                                    style="align-items: center; justify-content: center;">
                                    <i class="fas fa-hospital fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Hospital</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Find
                        Services</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid services py-5">
    <div class="container text-center py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Services
            </h5>
            <h1 class="display-5">Common Pest Control Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="bg-light rounded p-5 services-item">
                    <div class="d-flex" style="align-items: center; justify-content: center;">
                        <div class="mb-4 rounded-circle services-inner-icon">
                            <i class="fa fa-spider fa-3x text-primary"></i>
                        </div>
                    </div>
                    <h4>Spiders</h4>
                    <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                    <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="bg-light rounded p-5 services-item">
                    <div class="d-flex" style="align-items: center; justify-content: center;">
                        <div class="mb-4 rounded-circle services-inner-icon">
                            <i class="fa fa-spider fa-3x text-primary"></i>
                        </div>
                    </div>
                    <h4 class="text-center">Mosquitos</h4>
                    <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                    <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="bg-light rounded p-5 services-item">
                    <div class="d-flex" style="align-items: center; justify-content: center;">
                        <div class="mb-4 rounded-circle services-inner-icon">
                            <i class="fa fa-spider fa-3x text-primary"></i>
                        </div>
                    </div>
                    <h4 class="text-center">Rodents</h4>
                    <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                    <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
                <div class="bg-light rounded p-5 services-item">
                    <div class="d-flex" style="align-items: center; justify-content: center;">
                        <div class="mb-4 rounded-circle services-inner-icon">
                            <i class="fa fa-spider fa-3x text-primary"></i>
                        </div>
                    </div>
                    <h4 class="text-center">Termites</h4>
                    <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                    <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp"
            data-wow-delay=".3s">More Services</button>
    </div>
</div>
<!-- Services End -->


<!-- Project Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Project
            </h5>
            <h1 class="display-5">Our recently completed projects</h1>
        </div>
        <div class="row g-5">
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/project-1.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Whole Home Sanitizing</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/project-2.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Education center Cleaning</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/project-3.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Warehouse Cleaning</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/project-4.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Hospital Cleaning</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/project-5.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Factory Cleaning</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/project-6.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Furniture Sanitizing</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog
            </h5>
            <h1 class="display-5">Latest Blog & News</h1>
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">
            <div class="blog-item">
                <img src="/frontend/img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>How To Build A Cleaning Plan</h4>
                        <p>Lorem ipsum dolor sit amet consectur adip sed eiusmod tempor.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                        <a href="#" type="button" class="btn btn-primary border-0">Learn More</a>
                        <a href="#" class="my-auto btn-primary border-0"><i class="fa fa-comments me-2"></i>23
                            Comments</a>
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <img src="/frontend/img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>How To Build A Cleaning Plan</h4>
                        <p>Lorem ipsum dolor sit amet consectur adip sed eiusmod tempor.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                        <a href="#" type="button" class="btn btn-primary border-0">Learn More</a>
                        <a href="#" class="my-auto text-dark"><i class="fa fa-comments me-2"></i>23 Comments</a>
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <img src="/frontend/img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>How To Build A Cleaning Plan</h4>
                        <p>Lorem ipsum dolor sit amet consectur adip sed eiusmod tempor.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                        <a href="#" type="button" class="btn btn-primary border-0">Learn More</a>
                        <a href="#" class="my-auto text-dark"><i class="fa fa-comments me-2"></i>23 Comments</a>
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <img src="/frontend/img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>How To Build A Cleaning Plan</h4>
                        <p>Lorem ipsum dolor sit amet consectur adip sed eiusmod tempor.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                        <a href="#" type="button" class="btn btn-primary border-0">Learn More</a>
                        <a href="#" class="my-auto text-dark"><i class="fa fa-comments me-2"></i>23 Comments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Team
            </h5>
            <h1 class="display-5 w-50 mx-auto">Our Team Members</h1>
        </div>
        <div class="row g-5">
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="rounded team-item">
                    <img src="/frontend/img/team-1..jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Full Name</span>
                        <p class="text-muted mb-0">Designation</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="rounded team-item">
                    <img src="/frontend/img/team-2.jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Full Name</span>
                        <p class="text-muted mb-0">Designation</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="rounded team-item">
                    <img src="/frontend/img/team-3.jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Full Name</span>
                        <p class="text-muted mb-0">Designation</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
                <div class="rounded team-item">
                    <img src="/frontend/img/team-4.jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Full Name</span>
                        <p class="text-muted mb-0">Designation</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testiminial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Testimonial
            </h5>
            <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
            <div class="testimonial-item">
                <div class="testimonial-content rounded mb-4 p-4">
                    <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam quis tempor.</p>
                </div>
                <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                    <div class="position-relative">
                        <img src="/frontend/img/testimonial-1.jpg" class="img-fluid rounded-circle py-2" alt="">
                        <div class="position-absolute" style="top: 33px; left: -25px;">
                            <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <h4 class="mb-0">Client Name</h4>
                        <p class="mb-1">Profession</p>
                        <div class="d-flex">
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content rounded mb-4 p-4">
                    <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam quis tempor.</p>
                </div>
                <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                    <div class="position-relative">
                        <img src="/frontend/img/testimonial-2.jpg" class="img-fluid rounded-circle py-2" alt="">
                        <div class="position-absolute" style="top: 33px; left: -25px;">
                            <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <h4 class="mb-0">Client Name</h4>
                        <p class="mb-1">Profession</p>
                        <div class="d-flex">
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content rounded mb-4 p-4">
                    <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam quis tempor.</p>
                </div>
                <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                    <div class="position-relative">
                        <img src="/frontend/img/testimonial-3.jpg" class="img-fluid rounded-circle py-2" alt="">
                        <div class="position-absolute" style="top: 33px; left: -25px;">
                            <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <h4 class="mb-0">Client Name</h4>
                        <p class="mb-1">Profession</p>
                        <div class="d-flex">
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content rounded mb-4 p-4">
                    <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam quis tempor.</p>
                </div>
                <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                    <div class="position-relative">
                        <img src="/frontend/img/testimonial-4.jpg" class="img-fluid rounded-circle py-2" alt="">
                        <div class="position-absolute" style="top: 33px; left: -25px;">
                            <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <h4 class="mb-0">Client Name</h4>
                        <p class="mb-1">Profession</p>
                        <div class="d-flex">
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                            <small class="fas fa-star text-primary me-1"></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testiminial End -->

@include('layouts.partial.footer')