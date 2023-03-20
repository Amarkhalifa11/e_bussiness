@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The comments</b> </h1>
        <h2 class="text-center ">count of comments : {{count($comments)}}</h2>

        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>date</th>
                                <th>comment</th>
                                <th>post id</th>
                                <th>created at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($comments as $comment)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$comment->name}}</td>
                                <td>{{$comment->email}}</td>
                                <td>{{$comment->date}}</td>
                                <td>{{$comment->comment}}</td>
                                <td>{{$comment->post_id}}</td>
                                <td>{{$comment->created_at}}</td>
                                <td><a href="{{ route('dashboard.comments.edit', ['id'=>$comment->id]) }}" class="btn btn-success">edit</a></td>
                                <td><a href="{{ route('dashboard.comments.destroy' , ['id'=>$comment->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection