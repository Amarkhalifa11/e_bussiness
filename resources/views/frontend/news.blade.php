@extends('frontend.inc.main')
@section('content')
    <main id="main">

        <!-- ======= Blog Header ======= -->
        <div class="header-bg page-area">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer2">
                                    <h1 class="title2">My news</h1>
                                </div>
                                <div class="layer3">
                                    <h2 class="title3">Profesional news Page</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Header -->

        <!-- ======= Blog Page ======= -->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="page-head-blog">
                            <div class="single-blog-page">
                                <!-- search option start -->
                                <form action="{{ route('search') }}" method="POST">
                                    @csrf
                                    <div class="search-option">
                                        <input type="text" placeholder="Search..." name="search">
                                        <button class="button" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                                <!-- search option end -->
                            </div>
                            <div class="single-blog-page">
                                <!-- recent start -->
                                <div class="left-blog">
                                    <h4>recent post</h4>
                                    <div class="recent-post">

                                        @foreach ($posts as $post)
                                            <div class="recent-single-post">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/assets/img/blog/' . $post->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="pst-content">
                                                    <p><a href="{{ route('singlepost', ['id'=>$post->id]) }}"> {{ $post->title }}</a></p>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                                <!-- recent end -->
                            </div>



                            <div class="single-blog-page">
                                <div class="left-blog">
                                    <h4>categories</h4>
                                    <ul>

                                        @foreach ($subSubCategory as $category)
                                            <li>
                                                <a href="{{ route('category.category', ['id'=>$category->id]) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>




                        </div>
                    </div>



                    <!-- End left sidebar -->
                    <!-- Start single blog -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">

                            @foreach ($posts as $post)

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-blog">
                                        <div class="single-blog-img">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('frontend/assets/img/blog/' . $post->image) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="blog-meta">
                                            {{-- <span class="comments-type">
                                                <i class="bi bi-chat"></i>
                                                <a href="#">11 comments</a>
                                            </span> --}}
                                            <span class="date-type">
                                                <i class="bi bi-calendar"></i>{{$post->date}}
                                                <i class="bi bi-calendar"></i>{{$post->user->name}}
                                                <i class="bi bi-chat"></i>{{$post->category->name}}

                                            </span>
                                        </div>
                                        <div class="blog-text">
                                            <h4>
                                                <a href="#">{{$post->title}}</a>
                                            </h4>
                                            <p>
                                                {{$post->description}}
                                            </p>
                                        </div>
                                        <span>
                                            <a href="{{ route('singlepost', ['id'=>$post->id]) }}" class="ready-btn">Read more</a>
                                        </span>
                                    </div>
                                </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Page -->

    </main><!-- End #main -->
@endsection
