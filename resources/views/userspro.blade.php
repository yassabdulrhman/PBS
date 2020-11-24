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
                        تقييم المشاريع حسب الموظف
                    </h1>
                    <p>
                      <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
                      <b class="text-right">السؤال ١: قابلية تحويل الاختراع لمنتج أو خدمة تجارية ؟</b>
                      </p>
                      <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
                      <b class="text-right">السؤال ٢: لاختراع يلبي احتياج في السوق أو يعالج مشكلة قائمة ؟</b>
                      </p>
                      <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
                      <b class="text-right">السؤال ٣: الاختراع يحقق ميزة تنافسية محلية مقارنة بمنتجات/الخدمات الحالية؟</b>
                      </p>
                      <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
                      <b class="text-right">السؤال ٤: وضوح الخطة المستقبلية لتحويل الابتكار لمشروع تجاري واعد قابل للنمو؟</b>
                      </p>
                      <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
                      <b class="text-right">السؤال ٥: ملائمة الاختراع لطبيعة وثقافة المستهلك السعودي ؟</b>
                      </p>
                      <p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right;">
                       </p>
                    </p>

                    <!-- Bootstrap table and table-striped classes -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#id</td>
                                <th scope="col">Project ID</td>
                                <th scope="col">Type</td>
                                <th scope="col">السؤآل ١</td>
                                <th scope="col">السؤآل ٢</td>
                                <th scope="col">السؤآل ٣</td>
                                <th scope="col">السؤآل ٤</td>
                                <th scope="col">السؤآل ٥</td>
                                <th scope="col">تاريخ الأنشاء</td>
                            </tr>
                        </thead>

                        <tbody>
                          @foreach($pros as $pro)
                          <tr>
                              <th scope="row">{{$pro->id}}</td>
                              <td>{{$pro->ProjectID}}</td>
                              <td>{{$pro->name}}</td>
                              <td>{{$pro->rate}}</td>
                              <td>{{$pro->rate2}}</td>
                              <td>{{$pro->rate3}}</td>
                              <td>{{$pro->rate4}}</td>
                              <td>{{$pro->rate5}}</td>
                              <td>{{$pro->created_at}}</td>
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
