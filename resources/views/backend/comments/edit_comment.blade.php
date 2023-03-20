@extends('backend.admin')
@section('content')
    <h1 class="text-center "><b>update comment</b> </h1>





    <div class="content-wrapper">
        <div class="content">
            <div class="row">



                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form action="{{ route('dashboard.comments.update', ['id'=>$comments->id]) }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">comment</label>
                                        <input type="text" name="comment" class="form-control is-valid"
                                            id="validationServer01"  value="{{$comments->comment}}" required>
                                    </div>

                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                </div>

                                <button class="btn btn-primary" type="submit">update comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
