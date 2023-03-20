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
                                    <h1 class="title2">post Details </h1>
                                </div>
                                <div class="layer3">
                                    <h2 class="title3">profesional post Page</h2>
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
                                <form action="#">
                                    <div class="search-option">
                                        <input type="text" placeholder="Search...">
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


                                        @foreach ($postss as $post)
                                            <div class="recent-single-post">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/assets/img/blog/' . $post->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="pst-content">
                                                    <p><a href="{{ route('singlepost', ['id' => $post->id]) }}">
                                                            {{ $post->title }}</a></p>
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
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- single-blog start -->
                                <article class="blog-post-wrapper">
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('frontend/assets/img/blog/' . $posts->image) }}"
                                            alt="" />
                                    </div>
                                    <div class="post-information">
                                        <h2>{{ $posts->title }}</h2>
                                        <div class="entry-meta">
                                            <span class="author-meta"><i class="bi bi-person"></i> <a
                                                    href="#">{{ $posts->user->name }}</a></span>
                                            <span><i class="bi bi-clock"></i>{{ $posts->date }}</span>
                                            <span class="tag-meta">
                                                <i class="bi bi-folder"></i>
                                                <a href="#">{{ $posts->category->name }}</a>
                                            </span>

                                              <i class="bi bi-chat"></i> {{count($comments)}} comments
                                        </div>
                                        <div class="entry-content">

                                            <blockquote>
                                                <p>{{ $posts->description }}.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </article>
                                <div class="clear"></div>
                                <div class="single-post-comments">
                                    <div class="comments-area">
                                        <div class="comments-heading">
                                            <h3>6 comments</h3>
                                        </div>
                                        <div class="comments-list">
                                            <ul>



                                                <li class="threaded-comments">
                                                    <div class="comments-details">
                                                        {{-- <div class="comments-list-img">
                                                            <img src="assets/img/blog/b02.jpg" alt="post-author">
                                                        </div> --}}

                                                        @foreach ($comments as $comment)


                                                            <div class="comments-content-wrap">
                                                                <span>
                                                                    <b>{{$comment->name}}</b>
                                                                    <b>{{$comment->email}}</b>

                                                                    <span class="post-time">{{$comment->date}}</span>
                                                                </span>
                                                                <p>{{$comment->comment}}</p>
                                                            </div>


                                                        @endforeach


                                                    </div>
                                                </li>




                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">Leave a comment </h3>

                                        <form action="{{ route('comments.create') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <p>Name *</p>
                                                    <input type="text" name="name" placeholder="the name" />
                                                </div>

                                                
                                                <div class="col-lg-4 col-md-4">
                                                    <p>Email *</p>
                                                    <input type="email" name="email" placeholder="the email" />
                                                </div>
                                                
                                                <div class="col-lg-4 col-md-4">
                                                    <input type="hidden" name="post_id" value="{{ $posts->id }}" />
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                    <p>comment</p>
                                                    <textarea name="comment" placeholder="the comment" id="message-box" cols="30" rows="10"></textarea>
                                                    <input type="submit" value="send Comment" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- single-blog end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Page -->

    </main><!-- End #main -->
@endsection
