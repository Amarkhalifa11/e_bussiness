@extends('backend.admin')
@section('content')
        <h1 class="text-center "><b>The team</b> </h1>
        <h2 class="text-center ">count of team : {{count($teams)}}</h2>

        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>image</th>
                                <th>track</th>
                                <th>facebook</th>
                                <th>instagram</th>
                                <th>twitter</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($teams as $team)
                                
                            <tr>
                                <td scope="row">{{$i++}}</td>
                                <td>{{$team->name}}</td>
                                <td><img src="{{ asset('frontend/assets/img/team/' . $team->image) }}" width="50" alt=""></td>
                                <td>{{$team->track}}</td>
                                <td>{{$team->facebook}}</td>
                                <td>{{$team->instagram}}</td>
                                <td>{{$team->twitter}}</td>
                                <td><a href="{{ route('dashboard.all_team.edit', ['id'=>$team->id]) }}" class="btn btn-success">edit</a></td>
                                <td><a href="{{ route('dashboard.all_team.destroy' , ['id'=>$team->id]) }}" class="btn btn-danger">delete</a></td>
                            </tr>
                            
                            @endforeach 

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection