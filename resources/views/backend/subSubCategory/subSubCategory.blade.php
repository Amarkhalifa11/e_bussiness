@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The sub sub category</b> </h1>
        <h2 class="text-center ">count of sub sub category : {{count($subSubCategorys)}}</h2>

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

                            @foreach ($subSubCategorys as $subSubCategory)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$subSubCategory->name}}</td>
                                <td><a href="{{ route('dashboard.subsubCategorys.edit', ['id'=>$subSubCategory->id]) }}" class="btn btn-success">edit</a></td>
                                <td><a href="{{ route('dashboard.subsubCategorys.destroy', ['id'=>$subSubCategory->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection