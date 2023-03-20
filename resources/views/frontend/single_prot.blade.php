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
                  <h1 class="title2">protfolio Details </h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">profesional protfolio Page</h2>
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

          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- single-blog start -->
                <article class="blog-post-wrapper text-center">
                  <div class="post-thumbnail">
                    <img src="{{ asset('frontend/assets/img/portfolio/' . $protfolios['image']) }}" alt="" />
                  </div>
                  <div class="post-information">
                    <h2>{{$protfolios['name']}}</h2>
                    <div class="entry-meta">
                      <span class="author-meta"><i class="bi bi-person"></i>{{$protfolios->category->name}}</span>
                      <span class="author-meta"><i class="bi bi-person"></i>{{$protfolios->type->name}}</span>
                      {{-- <span><i class="bi bi-chat"></i> <a href="#">6 comments</a></span> --}}
                    </div>
                    <div class="entry-content">
                      <p>{{$protfolios['description']}}</p>
                    </div>
                  </div>
                </article>
                <div class="clear"></div>
                {{-- <div class="single-post-comments">
                  <div class="comments-area">
                    <div class="comments-heading">
                      <h3>6 comments</h3>
                    </div>
                    <div class="comments-list">
                      <ul>
                        <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">admin</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 6:18 pm </span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                            </div>
                          </div>
                        </li>
                        <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 7:25 pm</span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a Reply </h3>
                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                    <form action="#">
                      <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <p>Name *</p>
                          <input type="text" />
                        </div>
                        <div class="col-lg-4 col-md-4">
                          <p>Email *</p>
                          <input type="email" />
                        </div>
                        <div class="col-lg-4 col-md-4">
                          <p>Website</p>
                          <input type="text" />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                          <p>Website</p>
                          <textarea id="message-box" cols="30" rows="10"></textarea>
                          <input type="submit" value="Post Comment" />
                        </div>
                      </div>
                    </form>
                  </div>
                </div> --}}
                <!-- single-blog end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->





@endsection