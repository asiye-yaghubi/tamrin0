@extends('master.layout')

@section('content')
 

<header>
    <div class="container inner-header">
        <div class="intro-text">
            <div class="intro-heading">
                افزودن کامنت
            </div>
        </div>
    </div>
</header>
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading">
                    افزودن کامنت جدید :
                </h2>
                <h3 class="section-subheading text-muted">
                    برای ثبت کامنت جدید از فرم زیر استفاده نمایید
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
               <form method="post" action="/comment/store">
                {{  csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1"> متن کامنت</label>
                   
                    <input type="text" name="comment" class="form-control" id="exampleInputEmail1" placeholder="لطفا ایمیل خود را وارد کنید ...">
                    @if($errors->has('comment'))
                        <p class="alert alert-danger">{{ $errors->first('comment') }}</p>
                    @endif
                 
                 </div>
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">عنوان مقاله</label>
                    <select class="form-control" name="title">
                        @foreach ($itemes['articles'] as $article)
                             <option value="{{ $article->title}}">{{ $article->title}}</option>
                        @endforeach
                      
                    </select>
                    @if($errors->has('title'))
                    <p class="alert alert-danger">{{ $errors->first('title') }}</p>
                @endif
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">نام کاربر</label>
                    <select class="form-control" name="name">
                        @foreach ($itemes['users'] as $user)
                             <option value="{{ $user->name}}">{{ $user->name}}</option>
                        @endforeach
                      
                    </select>
                    @if($errors->has('name'))
                    <p class="alert alert-danger">{{ $errors->first('name') }}</p>
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