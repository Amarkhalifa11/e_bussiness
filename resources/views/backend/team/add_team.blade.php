@extends('backend.admin')
@section('content')
    <h1 class="text-center "><b>add team</b> </h1>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form action="{{ route('dashboard.all_team.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">team name</label>
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
                                        <label for="validationServer01">track</label>
                                        <input type="text" name="track" class="form-control is-valid"
                                            id="validationServer01" placeholder="track" value="" required>

                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">facebook</label>
                                        <input type="text" name="facebook" class="form-control is-valid"
                                            id="validationServer01" placeholder="facebook" value="" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">instagram</label>
                                        <input type="text" name="instagram" class="form-control is-valid"
                                            id="validationServer01" placeholder="instagram" value="" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">twitter</label>
                                        <input type="text" name="twitter" class="form-control is-valid"
                                            id="validationServer01" placeholder="twitter" value="" required>

                                    </div>
                                </div>


                                <button class="btn btn-primary" type="submit">add service</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
