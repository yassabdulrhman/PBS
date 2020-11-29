<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="{{ URL::asset('css/reset.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/examples.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/radios-to-slider.css') }}" rel="stylesheet" type="text/css" >
@yield('css')

</head>
<body>
    <div id="app">
        <!--- Navbar --->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
            <div>
            <a href="/home">
            <img src="{{asset('storage/logo.png')}}" class="logo" alt="">
            </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
            <div class="collapse navbar-collapse" id="nvbCollapse">
            <div id='cssmenu'>
<ul>
   <li class='active has-sub'><a href='#'><span>الأشراف</span></a>
      <ul>
      <li><a href="{{ route('register') }}"><i class="fa fa-user-plus fa-fw mr-1"></i>{{ __('مستخدم جديد') }}</a></a></li>
      <li><a href="{{ route('users') }}"><i class="fa fa-users fa-fw mr-1"></i>{{ __('المستخدمين') }}</a></a></li>
      <li><a href="{{ route('importExportView') }}"><i class="fa fa-table fa-fw mr-1"></i>{{ __('تحميل مشاريع') }}</a></a></li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>المشاريع</span></a>
      <ul>
      <li><a href="{{ route('reporting') }}"><i class="fa fa-table fa-fw mr-1"></i>{{ __('المشاريع الحديثة') }}</a></a></li>
      <li><a href="{{ route('projectslist','med') }}"><i class="fa fa-star fa-fw mr-1"></i>{{ __('المنشآت الابتكارية المتوسطة') }}</a></a></li>
      <li><a href="{{ route('projectslist','small') }}"><i class="fa fa-star fa-fw mr-1"></i>{{ __('المنشآت الابتكارية الصغيرة') }}</a></a></li>
      <li><a href="{{ route('newproject') }}"><i class="fa fa-plus-square fa-fw mr-1"></i>{{ __('مشروع جديد') }}</a></a></li>
      <li><a href="{{ route('reporting') }}"><i class="fa fa-table fa-fw mr-1"></i>{{ __('تقارير') }}</a></a></li>
      </ul>
   </li>
</ul>
</div>
			</div>
		</div>
	</nav>
	<!--# Navbar #-->


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="site-footer">
        <div>
            <h2>Contact Us</h2>
            <div>
            <div style="width: 100%;display:flex;">
        <div class="side-footer" style="align-content: space-between;">
           <p>

Phone: 0555472570
<br>
Email: info@pbs.sa

           </p>
           </div>
           <div class="side-footer" style="align-content: space-between;">
           <p>
           Address : <br>
King Salman Rd, Al Aarid, Riyadh 13331
           </p>

<div class="elementor-social-ico-dev">
<i class="fa fa-linkedin elementor-social-ico"></i>
<i class="fa fa-twitter elementor-social-ico"></i>
<i class="fa fa-instagram elementor-social-ico"></i>
<i class="fa fa-youtube elementor-social-ico"></i>
</div>

        </div>
        <div class="side-footer">
        <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name" required="required" aria-required="true">
        <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name" required="required" aria-required="true">
        <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name" required="required" aria-required="true">
        <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="form_fields[message]" id="form-field-message" rows="4" placeholder="Message" required="required" aria-required="true"></textarea>
        <button type="submit" class="elementor-animation-grow"><span>
            <span class=" elementor-button-icon">
            </span>
            <span class="elementor-button-text">Send</span>
        </span></button>
    </div>
    </div>
            </div>
        </div>
</footer>
@yield('js')
</body>
</html>
