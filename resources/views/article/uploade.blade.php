@extends('master.layout')

@section('content')
<header>
    <div class="container inner-header">
        <div class="intro-text">
            <div class="intro-heading">
                اپلود عکس
            </div>
        </div>
    </div>
</header>
<div class="row">
    <div class="col-lg-10">
       <form method="post" action="/uploader" enctype="multipart/form-data">
        {{  csrf_field() }}
          
          <div class="form-group">
            <label for="exampleInputFile">تصویر مقاله</label>
            <input type="file" name="image" id="exampleInputFile">
            @if($errors->has('image'))
                <p class="alert alert-danger">{{ $errors->first('image') }}</p>
            @endif
          </div>
          <button type="submit" class="btn btn-primary">ثبت</button>
          <button type="reset" class="btn btn-danger">انصراف</button>
        </form>
    </div>

</div>   
@endsection
