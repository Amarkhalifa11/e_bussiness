@extends('backend.admin')
@section('content')
    <h1 class="text-center "><b>update service</b> </h1>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form action="{{ route('dashboard.all_service.update', ['id'=>$services->id]) }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">service title</label>
                                        <input type="text" name="title" class="form-control is-valid"
                                            id="validationServer01" placeholder="service title" value="{{$services->title}}" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">service icon</label>
                                        <input type="text" name="icon" class="form-control is-valid"
                                            id="validationServer01" placeholder="service icon" value="{{$services->icon}}" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">service description</label>
                                        <textarea type="text" name="description" class="form-control is-valid" id="validationServer01"
                                            placeholder="service description" required>{{$services->description}}</textarea>

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
