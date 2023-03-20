@extends('frontend.inc.main')
@section('content')
    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active"
                        style="background-image: url(frontend/assets/img/hero-carousel/1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">The Best Business Information </h2>
                                <p class="animate__animated animate__fadeInUp">We're In The Business Of Helping You Start
                                    Your Business</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(frontend/assets/img/hero-carousel/2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                                <p class="animate__animated animate__fadeInUp">Helping Business Security & Peace of Mind for
                                    Your Family</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(frontend/assets/img/hero-carousel/3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">


        {{-- about --}}


        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>About eBusiness</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/img/about/1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <h4 class="sec-head">project Maintenance</h4>
                                </a>
                                <p>
                                    Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
                                    aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur
                                    adipisicing elit. Itaque quas officiis iure
                                </p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check"></i> Interior design Package
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> Building House
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> Reparing of Residentail Roof
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> Renovaion of Commercial Office
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> Make Quality Products
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div><!-- End About Section -->



        {{-- services --}}

        <!-- ======= Services Section ======= -->
        <div id="services" class="services-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline services-head text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">

                    @foreach ($services as $service)
                        <!-- Start Left services -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="about-move">
                                <div class="services-details">
                                    <div class="single-services">
                                        <a class="services-icon" href="#">
                                            <i class="{{ $service->icon }}"></i>
                                        </a>
                                        <h4>{{ $service->title }}</h4>
                                        <p>
                                            {{ $service->description }}
                                        </p>
                                    </div>
                                </div>
                                <!-- end about-details -->
                            </div>
                        </div>
                    @endforeach




                </div>
            </div>
        </div><!-- End Services Section -->


        {{-- team --}}

        <!-- ======= Team Section ======= -->
        <div id="team" class="our-team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Our special Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">


                    @foreach ($teams as $team)
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-team-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{ asset('frontend/assets/img/team/' . $team->image) }}" alt="">
                                    </a>
                                    <div class="team-social-icon text-center">
                                        <ul>
                                            <li>
                                                <a href="{{ $team->facebook }}">
                                                    <i class="bi bi-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $team->twitter }}">
                                                    <i class="bi bi-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $team->instagram }}">
                                                    <i class="bi bi-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4>{{ $team->name }}</h4>
                                    <p>{{ $team->track }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                    @endforeach


                    <!-- End column -->
                </div>
            </div>
        </div><!-- End Team Section -->



        <!-- ======= Rviews Section ======= -->
        <div class="reviews-area">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/img/about/2.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 work-right-text d-flex align-items-center">
                    <div class="px-5 py-5 py-lg-0">
                        <h2>working with us</h2>
                        <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
                        <a href="{{ route('contact') }}" class="ready-btn scrollto">Contact us</a>
                    </div>
                </div>
            </div>
        </div><!-- End Rviews Section -->




        {{-- portfolio --}}


        <!-- ======= Portfolio Section ======= -->
        <div id="portfolio" class="portfolio-area area-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Our Portfolio</h2>
                        </div>
                    </div>
                </div>
                {{-- <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> --}}

                <div class="row awesome-project-content portfolio-container">


                    @foreach ($all_protofoilo as $protfolio)
                        <!-- portfolio-item start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
                            <div class="single-awesome-project text-center">
                                <h4> <a href="{{ route('single_protfolio', ['id' => $protfolio->id]) }}"
                                        style="color: black">{{ $protfolio->name }}</a></h4>
                                <div class="awesome-img">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/portfolio/' . $protfolio->image) }}"
                                            alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="portfolio-lightbox" data-gallery="myGallery"
                                                href="{{ asset('frontend/assets/img/portfolio/1.jpg') }}">
                                                <h4>{{ $protfolio->name }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-item end -->
                    @endforeach



                </div>
            </div>
        </div><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <div id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">

                        @foreach ($teamss as $team)

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/assets/img/team/' . $team->image) }}"
                                        class="testimonial-img" alt="">
                                    <h3>{{$team->name}}</h3>
                                    <h4>{{$team->track}}</h4>

                                </div>
                            </div><!-- End testimonial item -->

                            
                        @endforeach



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div><!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Latest News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        @foreach ($posts as $post)
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="blog.html">
                                            <img src="{{ asset('frontend/assets/img/blog/' . $post->image) }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="blog-meta">

                                        <span class="date-type">
                                            <i class="fa fa-calendar"></i>{{ $post->date }}
                                        </span>
                                    </div>
                                    <div class="blog-text">
                                        <h4>
                                            <a href="blog.html">{{ $post->name }}</a>
                                        </h4>
                                        <p>
                                            @php
                                                echo Str::limit($post->description, 105, '...');
                                            @endphp
                                        </p>
                                    </div>
                                    <span>
                                        <a href="{{ route('singlepost', ['id' => $post->id]) }}" class="ready-btn">Read
                                            more</a>
                                    </span>
                                </div>
                                <!-- Start single blog -->
                            </div>
                        @endforeach





                    </div>
                </div>
            </div>
        </div><!-- End Blog Section -->

        <!-- ======= Suscribe Section ======= -->
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                        <div class="suscribe-text text-center">
                            <h3>Welcome to our eBusiness company</h3>
                            <a class="sus-btn" href="/">Get A quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Suscribe Section -->

        {{-- contact --}}


        <!-- ======= Contact Section ======= -->
        <div id="contact" class="contact-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Contact us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-phone"></i>
                                    <p>
                                        Call: +1 5589 55488 55<br>
                                        <span>Monday-Friday (9am-5pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-envelope"></i>
                                    <p>
                                        Email: info@example.com<br>
                                        <span>Web: www.example.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-geo-alt"></i>
                                    <p>
                                        Location: A108 Adam Street<br>
                                        <span>NY 535022, USA</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Start Google Map -->
                        <div class="col-md-6">
                            <!-- Start Map -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <!-- End Map -->
                        </div>
                        <!-- End Google Map -->

                        <!-- Start  contact -->
                        <div class="col-md-6">
                            <div class="form contact-form">
                                <form action="{{ route('contact.create') }}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group mt-3">
                                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group mt-3">
                                      <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" required>
                                    </div>
                                    <div class="form-group mt-3">
                                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="my-3">
                                      <div class="loading">Loading</div>
                                      <div class="error-message"></div>
                                      <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                      <button class="text-center btn btn-success" type="submit">Send Message</button>
                                  </form>
                            </div>
                        </div>
                        <!-- End Left contact -->
                    </div>
                </div>
            </div>
        </div><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
