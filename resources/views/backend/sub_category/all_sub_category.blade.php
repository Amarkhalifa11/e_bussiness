@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The sub category</b> </h1>
        <h2 class="text-center ">count of sub category : {{count($subCategorys)}}</h2>

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

                            @foreach ($subCategorys as $subCategory)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$subCategory->name}}</td>
                                <td><a href="{{ route('dashboard.subCategorys.edit', ['id'=>$subCategory->id]) }}" class="btn btn-success">edit</a></td>
                                <td><a href="{{ route('dashboard.subCategorys.destroy' , ['id'=>$subCategory->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection