@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The protfolio</b> </h1>
        <h2 class="text-center ">count of protfolios : {{count($protfolios)}}</h2>

        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>image</th>
                                <th>description</th>
                                <th>type</th>
                                <th>category</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($protfolios as $protfolio)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$protfolio->name}}</td>
                                <td><img src="{{ asset('frontend/assets/img/portfolio/' . $protfolio->image) }}" width="50" alt=""></td>
                                <td>{{$protfolio->description}}</td>
                                <td>{{$protfolio->type->name}}</td>
                                <td>{{$protfolio->category->name}}</td>
                                <td><a href="{{ route('dashboard.all_protfolie.edit', ['id'=>$protfolio->id]) }}" class="btn btn-success">edit</a></td>
                                <td><a href="{{ route('dashboard.all_protfolie.destroy' , ['id'=>$protfolio->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection