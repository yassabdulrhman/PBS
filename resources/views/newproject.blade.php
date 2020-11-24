@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" dir="rtl">
                <div class="card-header">{{ __('منشآه جديدة') }}</div>

                <div class="card-body">
                <div class="container"  style="width:auto;">
  <h2>Dynamic Tabs</h2>
  <!-- <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Home</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
  </ul> -->
  <form method="POST" action="/newproject" enctype="multipart/form-data">
  <div class="tab-content">
    <div id="menu1" class="tab-pane fade in active">
      <h3>HOME</h3>

                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('رقم السجل التجاري للمنشأة المقدمة على الجائزة: ') }}</label>

                            <div class="col-md-6">
                                <input id="govno" type="text" class="form-control @error('govno') is-invalid @enderror" name="govno" value="{{ old('govno') }}" required autocomplete="govno" autofocus>

                                @error('govno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('اسم المنشأة الرسمي باللغة العربية: ') }}</label>

                            <div class="col-md-6">
                                <input id="arname" type="text" class="form-control @error('arname') is-invalid @enderror" name="arname" value="{{ old('arname') }}" required autocomplete="arname" autofocus>

                                @error('arname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('اسم المنشأة الرسمي باللغة الإنجليزية: ') }}</label>

                            <div class="col-md-6">
                                <input id="enname" type="text" class="form-control @error('enname') is-invalid @enderror" name="enname" value="{{ old('enname') }}" required autocomplete="enname" autofocus>

                                @error('enname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-md-6" style="text-align: right;">
                        <label for="name" class="">{{ __('عمر المنشأة: ') }}</label>
                        <br>
                            <label for="name">{{ __('يرجى وضع الرقم صفر في حال لم تكمل المنشأة سنتها الأولى') }}</label>
</div>
                            <div class="col-md-6" style="margin: auto;">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('هل المنشأة مملوكة كلياً أو جزئياً لمستثمرين غير سعوديين؟ ') }}</label>
                            <div class="col-md-6">
                              <div style="display: flex; justify-content: space-evenly;">
                              <label class=""><input type="radio" name="saudiowner" value="true"> نعم </label>
                              <label class=""><input type="radio" name="saudiowner" value="false"> لا </label>
                              </div>
                                @error('saudiowner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('ما هو نطاق عدد الموظفين بدوام كامل في المنشأة؟ ') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="employees" name="employees">
                              <option value="5" >خمس موظفين أو أقل</option>
                              <option value="46" >من ٦ إلي ٤٩</option>
                              <option value="249" >من ٥٠ إلى ٢٤٩موظفاً</option>
                              <option value="250" >من ٢٥٠ موظف آو اكثر</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('ما هو نطاق الإيرادات السنوية للمنشأة؟ ') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="income" name="income">
                              <option value="3" >٣ ملايين او اقل</option>
                              <option value="40">من ٣ ملايين إلى ٤٠ مليون ريال</option>
                              <option value="200">من ٤٠ مليون إلى ٢٠٠ مليون ريال</option>
                              <option value="201">أكثر من ٢٠٠ مليون ريال</option>
                              </select>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('اسم المتقدم: ') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('المسمى الوظيفي للمتقدم: ') }}</label>

                            <div class="col-md-6">
                                <input id="jtitle" type="text" class="form-control @error('name') is-invalid @enderror" name="jtitle" value="{{ old('jtitle') }}" required autocomplete="jtitle" autofocus>

                                @error('jtitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('رقم جوال المتقدم: ') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" class="form-control @error('name') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('البريد الإلكتروني للمتقدم: ') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="email" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('countrie:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="contrary" name="contrary">
                                @foreach($city as $citys)
                                @if($citys->id=="82")
                                <option value="{{$citys->id}}" selected >{{$citys->Country}}</option>
                                @else
                                <option value="{{$citys->id}}" >{{$citys->Country}}</option>
                                @endif
                                @endforeach
                              </select>
                            </div>
                        </div> -->
                        <hr>

                        <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('يرجى اختيار الوصف الأنسب للابتكار لدى منشأتك في منتجاتها و/أو خدماتها مما يلي:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="drop1" name="drop1">
                              <option value="0">الشركة ليس لديها ابتكار واضح في منتجاتها و/أو خدماتها </option>
                              <option value="1">المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية</option>
                              <option value="2">المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى جميع الأنشطة التجارية في السعودية </option>
                              <option value="3">المنشأة لديها ابتكار جديد على مستوى العالم أو حاصل على براءة اختراع </option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('يرجى اختيار الوصف الأنسب للجدوى المالية للابتكار لدى منشأتك في منتجاتها و/ أو خدماتها مما يلي:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="drop2" name="drop2">
                              <option value="0">المنشأة ليس لديها ابتكار واضح في منتجاتها و/أو خدماتها</option>
                              <option value="1">المنشأة لديها ابتكار لم يحقق أية أرقام مالية مثبتة حتى الآن</option>
                              <option value="2">المنشأة لديها ابتكار حقق بعض الأرقام المالية المشجعة</option>
                              <option value="3">المنشأة لديها ابتكار زاد من ربحية المنشأة</option>
                              <option value="4">المنشأة لديها ابتكار صنع لها ميزة تنافسية واضحة في السوق</option>
                              </select>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('xxx') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="drop1" name="drop1">
                              <option value="xx">xxx</option>
                              </select>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('يرجى توضيح الابتكار الموجود لدى المنشأة في منتجاتها و/أو خدماتها المقصود في السؤالين السابقين والتوضيح بالأرقام والتفاصيل (فيما لا يزيد عن 500 كلمة) مبررات اختيار إجابات السؤالين السابقين، مع كتابة "لا يوجد" في حال لم تكن لدى المنشأة ابتكارات من هذا النوع:') }}</label>

                            <div class="col-md-6">
                                <textarea id="w3review" name="w3review" rows="4" cols="50">
                                </textarea>
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>

                      <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('يرجى اختيار الوصف الأنسب للابتكار لدى منشأتك في نموذج العمل التجاري لكيفية تقديم منتجاتها و/أو خدماتها و/أو كيفية جني الإيرادات منها مما يلي:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="drop3" name="drop3">
                              <option value="0">المنشأة ليس لديها ابتكار واضح في نموذج عملها التجاري</option>
                              <option value="1">المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية</option>
                              <option value="2">المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى جميع الأنشطة التجارية في السعودية </option>
                              <option value="3">المنشأة لديها نموذج عمل تجاري جديد على مستوى العالم</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('يرجى اختيار الوصف الأنسب للجدوى المالية لنموذج العمل التجاري لمنشأتك مما يلي:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="drop1" name="drop1">
                              <option value="xx">المنشأة ليس لديها ابتكار واضح في نموذج عملها التجاري</option>
                              <option value="xx">المنشأة لديها نموذج عمل تجاري لم يحقق أية أرقام مالية مثبتة حتى الآن</option>
                              <option value="xx">المنشأة لديها نموذج عمل تجاري حقق بعض الأرقام المالية المشجعة</option>
                              <option value="xx">المنشأة لديها نموذج عمل تجاري زاد من ربحية المنشأة</option>
                              <option value="xx">المنشأة لديها نموذج عمل تجاري صنع لها ميزة تنافسية واضحة في السوق</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('	يرجى توضيح الابتكار الموجود لدى المنشأة في نموذج عملها التجاري المقصود في السؤالين السابقين والتوضيح بالأرقام والتفاصيل (فيما لا يزيد عن 500 كلمة) مبررات اختيار إجابات السؤالين السابقين، مع كتابة "لا يوجد" في حال لم يكن لدى المنشأة ابتكار من هذا النوع:') }}</label>
                            <div class="col-md-6">
                                <textarea id="w3review2" name="w3review2" rows="4" cols="50">
                                </textarea>
                                @error('w3review2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <div class="form-group row">
                        <h1>رابعاً: الابتكار في بيئة العمل و/أو العمليات الداخلية</h1>
                        </div>


                       <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('اختر الوصف الأنسب للابتكار لدى منشأتك في بيئة عملها و/أو عملياتها الداخلية مما يلي:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="drop5" name="drop5">
                              <option value="0">المنشأة ليس لديها ابتكار واضح في بيئة عملها و/أو عملياتها الداخلية</option>
                              <option value="1">المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية</option>
                              <option value="2">المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى جميع الأنشطة التجارية في السعودية</option>
                              <option value="3">المنشأة لديها بيئة عمل و/أو عمليات داخلية جديدة على مستوى العالم</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('اختر الوصف الأنسب للجدوى المالية لبيئة العمل و/أو العمليات الداخلية لمنشأتك مما يلي:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="drop6" name="drop6">
                              <option value="0">المنشأة ليس لديها ابتكار واضح في بيئة عملها و/أو عملياتها الداخلية</option>
                              <option value="1">المنشأة لديها بيئة عمل و/أو عمليات داخلية لم تحقق أية أرقام مالية مثبتة حتى الآن</option>
                              <option value="2">المنشأة لديها بيئة عمل و/أو عمليات داخلية حققت بعض الأرقام المالية المشجعة</option>
                              <option value="3">المنشأة لديها بيئة عمل و/أو عمليات داخلية زادت من ربحية المنشأة</option>
                              <option value="4">المنشأة لديها بيئة عمل و/أو عمليات داخلية صنعت لها ميزة تنافسية واضحة في السوق</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('يرجى توضيح الابتكار الموجود لدى المنشأة في بيئة عملها و/أو عملياتها الداخلية المقصود في السؤالين السابقين والتوضيح بالأرقام والتفاصيل (فيما لا يزيد عن 500 كلمة) مبررات اختيار إجابات السؤالين السابقين، مع كتابة "لا يوجد" في حال لم يكن لدى المنشأة ابتكار من هذا النوع:') }}</label>

                            <div class="col-md-6">
                                <textarea id="w3review5" name="w3review5" rows="4" cols="50">
                                </textarea>
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bra_id" class="col-md-6 col-form-label text-md-right">{{ __('xxx') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="drop1" name="drop1">
                              <option value="xx">xxx</option>
                              </select>
                            </div>
                        </div>

                        <hr>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a data-toggle="tab" onclick="check()" href="#menu2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('التالي') }}
                                </button>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('حفظ') }}
                                </button>
                            </div>



    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('حفظ') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a data-toggle="tab" href="#menu1">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('التالي') }}
                                </button>
                                </a>
                            </div>
                        </div>
    </div>
  </div>
</div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
function check()
{
    alert("");
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  @endsection
