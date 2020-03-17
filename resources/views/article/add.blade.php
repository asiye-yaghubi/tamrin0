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
               <form method="post" action="/store">
                {{  csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">عنوان مقاله</label>
                   
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="لطفا ایمیل خود را وارد کنید ...">
                    @if($errors->has('title'))
                        <p class="alert alert-danger">{{ $errors->first('title') }}</p>
                    @endif
                 
                 </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">متن کوتاه</label>
                    <input type="text"  name="demo" class="form-control" id="exampleInputPassword1" placeholder="پسورد خود را وارد کنید...">
                    @if($errors->has('demo'))
                        <p class="alert alert-danger">{{ $errors->first('demo') }}</p>
                    @endif
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">دسته بندی مقاله</label>
                    <select class="form-control" name="category[]" multiple>
                        @foreach ($categories as $category)
                    <option value="{{ $category->title}}">{{ $category->title}}</option>
                            
                        @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">متن کامل مقاله</label>
                    <textarea name="text" class="form-control"  rows="5"></textarea>
                    @if($errors->has('text'))
                        <p class="alert alert-danger">{{ $errors->first('text') }}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">تصویر مقاله</label>
                    <input type="file" id="exampleInputFile">
                    @if($errors->has('image'))
                        <p class="alert alert-danger">{{ $errors->first('image') }}</p>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-primary">ثبت</button>
                  <button type="reset" class="btn btn-danger">انصراف</button>
                </form>
            </div>

        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">ارتباط با ما</h2>
                <h3 class="section-subheading text-muted">
                    شما میتوانید سوالات، پیشنهادات و انتقادات خود را از این طریق به ما برسانید
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="" id="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="نام خود را وارد کنید" id="name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید" id="email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="تلفن خود را وارد کنید" id="phone" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div><!--Left Part-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="پیام خود را در اینجا وارد کنید " id="message" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div><!--Right Part-->
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-lg">
                                ارسال پیام
                            </button>
                        </div>
                    </div><!--row-->
                </form>
            </div>
        </div>
    </div>
</section>


@endsection