@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
<form method="POST" action="/upload" enctype="multipart/form-data">
@csrf
<input type="hidden" id="pro_id" name="pro_id" value="{{$id}}">
<div class="form-group row">
    <label for="bra_id" class="col-md-4 col-form-label text-md-right">{{ __('File type') }}</label>
    <div class="col-md-6">
      <input type="file" name="file[]" multiple><br><br>
      <select class="form-control" id="type" name="type">
        @foreach($types as $type)
        <option value="{{$type->id}}">{{$type->type}}</option>
        @endforeach
      </select>
      <br>
      <button type="submit" class="btn btn-primary">Upload</button>
    </div>
</div>
</form>

<table class="table table-bordered table-striped">
  <thead>
    <th>File Name</th>
    <th>Project ID</th>
    <th>Filetype</th>
    <th>Date Uploaded</th>
  </thead>
  <tbody>
    @if(count($files) > 0)
      @foreach($files as $file)
        <tr>
          <td>{{ $file->filename }}</td>
          <td><a href="#">{{ $file->projetID }}</a></td>
          <td> {{ $file->type }}</td>
          <td>{{ date('M d, Y h:i A', strtotime($file->created_at)) }}</td>
        </tr>
      @endforeach
    @else
      <tr>
        <td colspan="4" class="text-center">No Table Data</td>
      </tr>
    @endif
  </tbody>
</table>
<p class = "tpbutton btn-toolbar text-right" style="display: block; text-align: right; padding:0px 50px;">
  <a class = "btn navbar-btn btn-primary" href="/projects">Close and go to projects</a>
</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
