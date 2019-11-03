@extends('layouts.app')

@section('content')
    <!-- load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>
    function changemark()
    {
      document.getElementById('mark1').innerHTML = document.getElementById('customRange1').value;
      document.getElementById('mark2').innerHTML = document.getElementById('customRange2').value;
      document.getElementById('mark3').innerHTML = document.getElementById('customRange3').value;
      document.getElementById('mark4').innerHTML = document.getElementById('customRange4').value;
      document.getElementById('mark5').innerHTML = document.getElementById('customRange5').value;
    }
    function myFunction(p_id)
    {
        if (confirm('Are you sure you want to save this?')) {
      var v1 = document.getElementById('customRange1').value;
          var v2 = document.getElementById('customRange2').value;
          var v3 = document.getElementById('customRange3').value;
          var v4 = document.getElementById('customRange4').value;
          var v5 = document.getElementById('customRange5').value;
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
          /* the route pointing to the post function */
          url: '/rate',
          type: 'POST',
          /* send the csrf-token and the input to the controller */
          data: {_token: CSRF_TOKEN, rate:v1,rate2:v2,rate3:v3,rate4:v4,rate5:v5,id:p_id},
          dataType: 'JSON',
          /* remind that 'data' is the response of the AjaxController */
          success: function (data) {
              $(".writeinfo").append(data.id);
              document.getElementById("card"+p_id).remove();
          }
      });
    }
    else {
       // Do nothing!
   }
    }
    </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Rate the Projects</div>

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
      <div class="col-md-10">
        <div class="card-body">
          <h5 class="card-title">{{$recorde->name}}</h5>
          <p class="card-text">
            {{$recorde->details}}
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
    <div>
    </div>
    <div style="padding:0px 50px;">
    <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
    <b class="text-right">قابلية تحويل الاختراع لمنتج أو خدمة تجارية ؟</b><b id="mark1" class="markcolor">10</b>
              <input type="range" class="custom-range" min="0" max="10" id="customRange1" onchange="changemark()">

    </p>

    <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
    <b class="text-right">لاختراع يلبي احتياج في السوق أو يعالج مشكلة قائمة ؟</b><b id="mark2" class="markcolor">10</b>
              <input type="range" class="custom-range" min="0" max="10" id="customRange2" onchange="changemark()">
    </p>
    <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
    <b class="text-right">الاختراع يحقق ميزة تنافسية محلية مقارنة بمنتجات/الخدمات الحالية؟</b><b id="mark3" class="markcolor">10</b>
              <input type="range" class="custom-range" min="0" max="10" id="customRange3" onchange="changemark()">
    </p>
    <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
    <b class="text-right">وضوح الخطة المستقبلية لتحويل الابتكار لمشروع تجاري واعد قابل للنمو؟</b><b id="mark4" class="markcolor">10</b>
              <input type="range" class="custom-range" min="0" max="10" id="customRange4" onchange="changemark()">
    </p>
    <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
    <b class="text-right">ملائمة الاختراع لطبيعة وثقافة المستهلك السعودي ؟</b><b id="mark5" class="markcolor">10</b>
              <input type="range" class="custom-range" min="0" max="10" id="customRange5" onchange="changemark()">
    </p>
    <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
         <a class = "btn navbar-btn btn-primary" onclick="myFunction({{$recorde->id}})" style="margin:0px 50px;color:white">Submit</a>
     </p>
    </div>
  </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
