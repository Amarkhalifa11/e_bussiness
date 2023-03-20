@extends('backend.admin')
@section('content')
    <h1 class="text-center "><b>update team</b> </h1>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form action="{{ route('dashboard.all_team.update', ['id'=>$teams->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">team name</label>
                                        <input type="text" name="name" class="form-control is-valid"
                                            id="validationServer01" placeholder="name" value="{{$teams->name}}" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">image</label>
                                        <input type="file" name="image" class="form-control is-valid"
                                            id="validationServer01" value="{{$teams->image}}" required>

                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">track</label>
                                        <input type="text" name="track" class="form-control is-valid"
                                            id="validationServer01" placeholder="track" value="{{$teams->track}}" required>

                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">facebook</label>
                                        <input type="text" name="facebook" class="form-control is-valid"
                                            id="validationServer01" placeholder="facebook" value="{{$teams->facebook}}" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">instagram</label>
                                        <input type="text" name="instagram" class="form-control is-valid"
                                            id="validationServer01" placeholder="instagram" value="{{$teams->instagram}}" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">twitter</label>
                                        <input type="text" name="twitter" class="form-control is-valid"
                                            id="validationServer01" placeholder="twitter" value="{{$teams->twitter}}" required>

                                    </div>
                                </div>


                                <button class="btn btn-primary" type="submit">update service</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
