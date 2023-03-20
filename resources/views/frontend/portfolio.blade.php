@extends('frontend.inc.main')
@section('content')
    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row wesome-project-1 fix">
                <!-- Start Portfolio -page -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul id="portfolio-flters">

                        <a class="btn btn-sucess" href="{{ route('protfolios') }}">all</a>
                      


                        @foreach ($subCategorys as $subCategory)

                        <a class="btn btn-sucess" style="color: black" href="{{ route('category', ['id'=>$subCategory->id]) }}">{{ $subCategory->name }}</a>

                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="row awesome-project-content portfolio-container">

                @foreach ($protfolios as $protfolio)
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
@endsection
