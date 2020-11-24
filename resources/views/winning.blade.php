@extends('layouts.app')
@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="container" style="text-align:right;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>
                <?php
                $types = array("Volvo", "BMW", "Toyota");
                 ?>
                @foreach($types as $type)
                <a href="#">1</a>
                @endforeach
                <div class="card-body">

                  	<main class = "main options">


                  		<section class="demo">
                      		<div class="block">

                      			<h2>Into this:</h2>
                      			<div id="radios">
                      				<input id="option1" name="options" type="radio">
                      				<label for="option1">1 <br>year</label>

                      				<input id="option2" name="options" type="radio">
                      				<label for="option2">2 years</label>

                      				<input id="option3" name="options" type="radio" checked>
                      				<label for="option3">3 years</label>

                      				<input id="option4" name="options" type="radio">
                      				<label for="option4">4 years</label>

                      				<input id="option5" name="options" type="radio">
                      				<label for="option5">5+ years</label>

                      			</div>
                      		</div>




                      </main>
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>
                  <h2>اسم المشروع</h2>
                  <p>وصف المشروع</p>
                  <button type="button" class="btn btn-primary btn-lg btn-block" onclick="myFunction()">عرض المشروع</button>
                  <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="location.href='final/pro/1'">تقييم المشروع</button>
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


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45087261-1', 'rubentd.com');
  ga('send', 'pageview');

</script>
@endsection
