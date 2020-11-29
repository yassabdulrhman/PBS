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
    function iselect(row,val)
    {
        alert(row + "|" + val);
    }
    function myFunction(p_id)
    {
        alert("Done");
        if (confirm('Are you sure you want to save this?')) {
          var v1 = document.getElementsByName('options3')[1].value;
          alert(v1);
          var v2 = document.getElementsByName('options2')[0].value;
          var v3 = document.getElementsByName('options1')[0].value;
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
          /* the route pointing to the post function */
          url: '/rate',
          type: 'POST',
          /* send the csrf-token and the input to the controller */
          data: {_token: CSRF_TOKEN, rate:v1,rate2:v2,rate3:v3,rate4:10,rate5:10,id:10},
          dataType: 'JSON',
          /* remind that 'data' is the response of the AjaxController */
          success: function (data) {
              alert("Done");
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
      <div class="col-md-10" style="margin: auto;">
        <div class="card-body">
        <div dir="rtl">
        <label for="">رقم</label>
        <strong>10</strong>
        <br>
       <p>
       اسم
       <br>
       name
       </p>
       <table style="width:100%">
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">عمر</label>
       </td>
       <td>
       <label for="">عمر</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">لللل</label>
       </td>
       <td>
       <label for="">للللل</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ششششش</label>
       </td>
       <td>
       <label for="">شششش</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ضضضضض</label>
       </td>
       <td>
       <label for="">ضضضض</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">للليبل</label>
       </td>
       <td>
       <label for="">للليبل</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">عمر</label>
       </td>
       <td>
       <label for="">عمر</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">لللل</label>
       </td>
       <td>
       <label for="">للللل</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ششششش</label>
       </td>
       <td>
       <label for="">شششش</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ضضضضض</label>
       </td>
       <td>
       <label for="">ضضضض</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">للليبل</label>
       </td>
       <td>
       <label for="">للليبل</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">عمر</label>
       </td>
       <td>
       <label for="">عمر</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">لللل</label>
       </td>
       <td>
       <label for="">للللل</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ششششش</label>
       </td>
       <td>
       <label for="">شششش</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ضضضضض</label>
       </td>
       <td>
       <label for="">ضضضض</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td colspan="2">
       <label for="" class="tlable">مرحبا</label>
       <p>ططط</p>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ششششش</label>
       </td>
       <td>
       <label for="">شششش</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ضضضضض</label>
       </td>
       <td>
       <label for="">ضضضض</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td colspan="2">
       <label for="" class="tlable">مرحبا</label>
       <p>ططط</p>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ششششش</label>
       </td>
       <td>
       <label for="">شششش</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td>
       <label for="">ضضضضض</label>
       </td>
       <td>
       <label for="">ضضضض</label>
       </td>
       </tr>
       <tr style="border-bottom: gray 0.3px solid;">
       <td colspan="2">
       <label for="" class="tlable">مرحبا</label>
       <p>ططط</p>
       </td>
       </tr>
       </table>
       <br>
        </div>
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
    <input type="radio" name="options1" id="option1" autocomplete="off" value="0">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options1" id="option2" autocomplete="off" value="1">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options1" id="option3" autocomplete="off" value="2">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options1" id="option3" autocomplete="off" value="3">3
  </label>
</div>
<div>
<b class="text-right">إمكانيات البحث والتطويد</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active">
    <input type="radio" name="options2" id="option1" autocomplete="off" value="0">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options2" id="option2" autocomplete="off" value="1">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options2" id="option3" autocomplete="off" value="2">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options2" id="option3" autocomplete="off" value="3">3
  </label>
</div>
<div>
<b class="text-right">نشاط البحث والتطوير</b>
</div></div>

<!-- new -->
<div style="display:flex; justify-content:space-between; align-items: center; margin:6px 0px">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options3" id="option1" autocomplete="off" value="0">0
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options3" id="option2" autocomplete="off" value="1">1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options3" id="option3" autocomplete="off" value="2">2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" onclick="iselect('b',10)" name="options3" id="option3" autocomplete="off" value="3">3
  </label>
</div>
<div>
<b class="text-right">معدل النمو</b>
</div></div>
<p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
         <a class = "btn navbar-btn btn-primary" onclick="myFunction(10)" style="margin:0px 50px;color:white">Submit</a>
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
