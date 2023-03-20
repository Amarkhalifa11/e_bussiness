@extends('backend.admin')
@section('content')
    <h1 class="text-center "><b>add sub sub category</b> </h1>





    <div class="content-wrapper">
        <div class="content">
            <div class="row">



                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form action="{{ route('dashboard.subsubCategorys.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">sub sub category name</label>
                                        <input type="text" name="name" class="form-control is-valid"
                                            id="validationServer01" placeholder="sub sub category name" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">add sub sub category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
