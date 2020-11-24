@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

            <body>
                <div class="container" dir="rtl">
<br>
                    <h1 style="text-align:center;color:darkblue;">
                        مشاركات جائزة ابتكار
                    </h1>

                    <!-- Bootstrap table and table-striped classes -->
                    <table class="table table-striped">
                        <thead>
                            <tr>



                                <th scope="col">#</td>
                                <th scope="col">رقم السجل التجاري</td>
                                <th scope="col">أسم المنشأة</td>
                                <th scope="col">عمر المنشأة</td>
                                <th scope="col">نطاق عدد الموظفين بدوام كامل في المنشأة</td>
                                <th scope="col">نطاق الإيرادات</td>
                            </tr>
                        </thead>

                        <tbody>
                          @foreach($users as $userA)
                          <tr>
                              <th scope="row">{{$userA->id}}</td>
                              <td><a href="projectpage/{{$userA->govid}}">{{$userA->govid}}</a></td>
                              <td>{{$userA->name_ar}}</td>
                              <td>{{$userA->age}}</td>
                              <td>{{$userA->employess_num}}</td>
                              <td>{{$userA->incomes}}</td>
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
