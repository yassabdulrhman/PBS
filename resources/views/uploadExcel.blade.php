@extends('layouts.app')
@section('content')


<div class="container">

    <div class="card bg-light mt-3">

        <div class="card-header">

            رفع المشاريع من ملف مجدول

        </div>

        <div class="card-body">

<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <input type="file" name="file" class="form-control">

    <br>

    <button class="btn btn-success">إدخال</button>

    <a class="btn btn-warning" href="{{ route('export') }}">تنزيل</a>

</form>

</div>

    </div>

</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تحميل بيانات مجدوله</div>
                <div class="uploadbox">
                <a href="#" class="uploadboxA">
                <img src="{{asset('storage/excel.png')}}" class="logo" alt="">
                <br>
                <b>تحميل</b>
                </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection

