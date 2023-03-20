@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The service</b> </h1>
        <h2 class="text-center ">count of service : {{count($services)}}</h2>

        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>description</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($services as $service)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td><a href="{{ route('dashboard.all_service.edit', ['id'=>$service->id]) }}" class="btn btn-success">edit</a></td>
                                <td><a href="{{ route('dashboard.all_service.destroy' , ['id'=>$service->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection