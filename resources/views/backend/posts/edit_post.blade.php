@extends('backend.admin')
@section('content')
    <h1 class="text-center "><b>edit post</b> </h1>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form action="{{ route('dashboard.all_posts.update', ['id'=>$posts->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">title</label>
                                        <input type="text" name="title" class="form-control is-valid"
                                            id="validationServer01" placeholder="title" value="{{$posts->title}}" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">image</label>
                                        <input type="file" name="image" class="form-control is-valid"
                                            id="validationServer01" value="{{$posts->image}}" required>

                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">user_id </label>
                                        <input type="text" name="user_id" class="form-control is-valid"
                                            id="validationServer01" placeholder="user_id" value="{{$posts->user_id}}" required>

                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">category_id</label>
                                        <input type="text" name="category_id" class="form-control is-valid"
                                            id="validationServer01" placeholder="category_id" value="{{$posts->category_id}}" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">date </label>
                                        <input type="date" name="date" class="form-control is-valid"
                                            id="validationServer01" placeholder="date" value="{{$posts->date}}" required>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">description </label>
                                        <textarea name="description" class="form-control is-valid"
                                            id="validationServer01" placeholder="description" value="" required>{{$posts->description}}</textarea>

                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">edit post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
