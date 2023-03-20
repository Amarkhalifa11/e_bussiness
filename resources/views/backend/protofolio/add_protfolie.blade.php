@extends('backend.admin')
@section('content')
    <h1 class="text-center "><b>add protfolio</b> </h1>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form action="{{ route('dashboard.all_protfolie.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">name</label>
                                        <input type="text" name="name" class="form-control is-valid"
                                            id="validationServer01" placeholder="name" value="" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">image</label>
                                        <input type="file" name="image" class="form-control is-valid"
                                            id="validationServer01" value="" required>

                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">description</label>
                                        <input type="text" name="description" class="form-control is-valid"
                                            id="validationServer01" placeholder="description" value="" required>

                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">type_id</label>
                                        <input type="text" name="type_id" class="form-control is-valid"
                                            id="validationServer01" placeholder="type_id " value="" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">category_id </label>
                                        <input type="text" name="category_id" class="form-control is-valid"
                                            id="validationServer01" placeholder="category_id " value="" required>

                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">add protfolio</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
