@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The user</b> </h1>
        <h2 class="text-center ">user is :: {{Auth::user()->name}}</h2>

        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">created at</th>
                                <th scope="col">updated at</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($users as $user)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                            </tr>
                            
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection