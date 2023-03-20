@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The category</b> </h1>
        <h2 class="text-center ">count of category : {{count($categories)}}</h2>

        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($categories as $category)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$category->name}}</td>
                                <td><a href="{{ route('dashboard.category.edit', ['id'=>$category->id]) }}" class="btn btn-success">edit</a></td>
                                <td><a href="{{ route('dashboard.category.destroy' , ['id'=>$category->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection