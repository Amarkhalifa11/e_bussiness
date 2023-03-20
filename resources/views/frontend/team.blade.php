@extends('frontend.inc.main')
@section('content')
        <!-- ======= Team Section ======= -->
        <div id="team" class="our-team-area area-padding mt-5">
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
                            <a href="{{$team->facebook}}">
                              <i class="bi bi-facebook"></i>
                            </a>
                          </li>
                          <li>
                            <a href="{{$team->twitter}}">
                              <i class="bi bi-twitter"></i>
                            </a>
                          </li>
                          <li>
                            <a href="{{$team->instagram}}">
                              <i class="bi bi-instagram"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="team-content text-center">
                      <h4>{{$team->name}}</h4>
                      <p>{{$team->track}}</p>
                    </div>
                  </div>
                </div>
                <!-- End column -->
      
      
                @endforeach



              </div>
            </div>
          </div><!-- End Team Section -->
@endsection