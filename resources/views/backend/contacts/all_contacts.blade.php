@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The contacts</b> </h1>
        <h2 class="text-center ">count of contacts : {{count($contacts)}}</h2>

        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>message</th>
                                <th>created_at</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($contacts as $contact)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->message}}</td>
                                <td>{{$contact->created_at}}</td>
                                <td><a href="{{ route('dashboard.all_contacts.destroy' , ['id'=>$contact->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection