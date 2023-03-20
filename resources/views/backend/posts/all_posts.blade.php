@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The posts</b> </h1>
        <h2 class="text-center ">count of posts : {{count($posts)}}</h2>

        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>image</th>
                                <th>user_id </th>
                                <th>category_id </th>
                                <th>date</th>
                                <th>description</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($posts as $post)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$post->title}}</td>
                                <td><img src="{{ asset('frontend/assets/img/blog/' . $post->image) }}" width="50" alt=""></td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->category->name}}</td>
                                <td>{{$post->date}}</td>
                                <td>{{$post->description}}</td>
                                <td><a href="{{ route('dashboard.all_posts.edit', ['id'=>$post->id]) }}" class="btn btn-success">edit</a></td>
                                <td><a href="{{ route('dashboard.all_posts.destroy' , ['id'=>$post->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection