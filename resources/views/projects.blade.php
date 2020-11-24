@extends('layouts.app')

@section('content')
    <!-- load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>

    function myFunction(p1, p_id)
    {
      if (confirm('Are you sure you want to save this?')) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            /* the route pointing to the post function */
            url: '/aprove',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {_token: CSRF_TOKEN, message:p1,id:p_id},
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
                $(".writeinfo").append(data.id);
                document.getElementById("card"+p_id).remove();
            }
        });
  } else {
      // Do nothing!
  }
    }
    </script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">List of all Projects</div>

                <div class="card-body">
                  <div class="">
                    @foreach($recordes as $recorde)
                    <div id="card{{$recorde->id}}">
                      <div class="card card-header">
                        {{$recorde->name}}
                      </div>
                    <div class="card mb-3">
    <div class="row no-gutters">
      <!-- <div class="col-md-4">
        <img src="..." class="card-img" alt="No image">
      </div> -->
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$recorde->name}}</h5>
          <p class="card-text">{{$recorde->details}}
  <br>
@if ($collection->has($recorde->id))
@foreach($collection[$recorde->id] as $attachmentlink)
  <a class = "btn navbar-btn btn-link" href = "/download/{{$attachmentlink}}" target = "">download attachment</a>
  <br>
  @endforeach
@endif


          </p>
          <p class="card-text"><small class="text-muted">Created at:  {{$recorde->created_at}}</small></p>
        </div>
      </div>
    </div>
    <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right; padding:0px 50px;color:white;">
      <a class = "btn navbar-btn btn-success" onclick="myFunction(1,{{$recorde->id}})">Aprove</a>
      <a class = "btn navbar-btn btn-primary" onclick="myFunction(1,{{$recorde->id}})">Fast Aprovel</a>
      <a class = "btn navbar-btn btn-link" style="color:red;" onclick="myFunction(0,{{$recorde->id}})">Decline</a>
    </p>
  </div>
                    </div>

                    @endforeach

                    @if (empty($recorde->name))
                    <p>There is no new projects</p>
                    <br><br><br><br><br><br><br><br><br><br><br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
