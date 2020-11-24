@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

            <body>
                <div class="container">
<br>
                    <h1 style="text-align:center;color:darkblue;">
                        Users
                    </h1>

                    <!-- Bootstrap table and table-striped classes -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#id</td>
                                <th scope="col">Name</td>
                                <th scope="col">Type</td>
                                <th scope="col">Email</td>
                                <th scope="col">Projects</td>
                            </tr>
                        </thead>

                        <tbody>
                          @foreach($users as $userA)
                          <tr>
                              <th scope="row">{{$userA->id}}</td>
                              <td>{{$userA->name}}</td>
                              <td>{{$userA->level}}</td>
                              <td>{{$userA->email}}</td>
                                @if($userA->num>0)
                              <td><a class = "navbar-btn btn-link" href = "/users/{{$userA->id}}" target = "">{{$userA->num}}</a></td>
                              @else
                              <td>{{$userA->num}}</td>
                              @endif
                              <td></td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </body>
            </div>
        </div>
    </div>
</div>
@endsection
