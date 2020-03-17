@extends('master.layout')

@section('content')
<header>
    <div class="container inner-header">
        <div class="intro-text">
            <div class="intro-heading">
                افزودن مقاله
            </div>
        </div>
    </div>
</header>
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading">
                    افزودن مقاله جدید :
                </h2>
                <h3 class="section-subheading text-muted">
                    برای ثبت مقاله جدید از فرم زیر استفاده نمایید
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
            <form method="post" action="{{ route('category.store')}}">
                {{  csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1"> دسته ها</label>
                   
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="لطفا ایمیل خود را وارد کنید ...">
                    @if($errors->has('title'))
                        <p class="alert alert-danger">{{ $errors->first('title') }}</p>
                    @endif
                 
                 </div>
                   
                  
                  <button type="submit" class="btn btn-primary">ثبت</button>
                  <button type="reset" class="btn btn-danger">انصراف</button>
                </form>
            </div>

        </div>
    </div>
</section>


@endsection