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
            <div class="">


                <class="card-body">
                  <div class="" style="text-align: right;">
                    <div id="card{{$users[0]->name_ar}}">
                      <div class="card card-header">
                      {{$users[0]->name_ar}}
                      </div>
                    <div class="card mb-3">
    <div class="row no-gutters">
      <!-- <div class="col-md-4">
        <img src="..." class="card-img" alt="No image">
      </div> -->
      <div class="col-md-10">
        <div class="card-body">
        رقم السجل التجاري للمنشأة المقدمة على الجائزة: <strong>{{$users[0]->govid}}</strong>
                      <br>
                      {{$users[0]->incomes}}
                      <br>
                      {{$users[0]->age}}
                      <br>
                      {{$users[0]->dropdown1}}
                      <br>
                      {{$users[0]->dropdown2}}

          <p class="card-text">
          {{$users[0]->id}}
  <br>
          </p>
          <p class="card-text"><small class="text-muted">Created at:  {{$users[0]->created_at }}</small></p>
        </div>
      </div>
    </div>
    <div>
    </div>
    <div style="padding:0px 50px;">
<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">حداثة الأبتكار في المنتجات والخدمات</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">جدوى الأبتكار المالية في المنتجات والخدمات</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">حداثة الابتكار في نموذج العمل</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">جدوى الابتكار المالية في نموذج العمل</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">حداثة الابتكار في البيئة الداخلية</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">جدوى الابتكار المالية في البيئة الداخلية</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">إمكانيات البحث والتطويد</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">نشاط البحث والتطوير</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
</div>
<div>
<b class="text-right">معدل النمو</b>
</div></div>
<p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
         <a class = "btn navbar-btn btn-primary" onclick="myFunction()" style="margin:0px 50px;color:white">Submit</a>
     </p>
    </div>
  </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection
