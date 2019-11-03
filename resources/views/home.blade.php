@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    </body>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
<div class="container">
<div class="row align-items-center">
<div class="col-md-4">
<h2 class="h4 mb-4">About Us</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae voluptatem mollitia obcaecati quod maxime. Soluta libero eligendi voluptatum, natus debitis.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, quasi!</p>
<p><a href="#" class="btn btn-primary text-white px-5">Our works</a></p>
</div>
<div class="col-md-4">
<img src="images/about_1.jpg" alt="Image" class="img-fluid">
</div>
<div class="col-md-4">
<h2 class="h4 mb-4">Our expertise and skills</h2>
<div class="progress-wrap mb-4">
<div class="d-flex">
<span>Writing</span>
<span class="ml-auto">55%</span>
</div>
<div class="progress rounded-0" style="height: 7px;">
<div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="progress-wrap mb-4">
<div class="d-flex">
<span>WordPress</span>
<span class="ml-auto">85%</span>
</div>
<div class="progress rounded-0" style="height: 7px;">
<div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="progress-wrap mb-4">
<div class="d-flex">
<span>Bootstrap</span>
<span class="ml-auto">93%</span>
</div>
<div class="progress rounded-0" style="height: 7px;">
<div class="progress-bar" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="progress-wrap mb-4">
<div class="d-flex">
<span>jQuery</span>
<span class="ml-auto">83%</span>
</div>
<div class="progress rounded-0" style="height: 7px;">
<div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

