@extends('master.layout')
@section('bootstrap')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
@endsection
@section('content')
 <!-- Slide Start -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">پیاده سازی وبلاگ به عنوان اولین پروژه </div>
            <div class="intro-heading">
               پروژه شماره 1
            </div>
            <a href="" class="btn btn-primary btn-lg">اطلاعات بیشتر</a>
        </div>
    </div>
</header>
<!-- slider end -->  
<!--  popup flash -->
  
@if(Session::has('store'))
<div class="right">
<div class="panel panel-success" style="background-color:#00ff99,width:300px,height:300px">
    <div class="panel-body">
پیغام    
</div>
    <div class="panel-footer"> {{ Session::get('store') }}</div>
  </div>

</div>
 @endif

<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    کامنت های سایت
                </h2>
                <h3 class="section-subheading text-muted">
                    در این بخش کلیه کامنت های سایت را مشاهده میکنید 
                </h3>
                <div class="row">
                <form class="bs-example" data-example-id="btn-tags"> 
                    <a href="#" class="btn btn-default" role="button">دسته بندی شماره1</a> 
                    <a href="#" class="btn btn-default" role="button">دسته بندی شماره1</a> 
                    <a href="#" class="btn btn-default" role="button">دسته بندی شماره1</a> 
                    <a href="#" class="btn btn-default" role="button">دسته بندی شماره1</a> 
                 </form>
                </div>
            </div>
        </div>
        <div class="row">



            @foreach ($comments as $comment)
                
            
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="/detail/{{ $comment->id}}" class="portfolio-link">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/img/portfolio/escape.png" class="img-responsive" alt="portfolio-Pic">
                </a>
                <div class="portfolio-caption">
                    <h4>متن کامنت :{{ $comment->comment }}  </h4>
                    <p class="demo">
                       عنوان مقاله : {{ $comment->article->title }}
                    </p>
                    <p class="text-muted">
                       <span>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        {{ Verta::instance($comment->created_at )->format('Y-n-j') }}
                        </span>
                         <span>
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                         طراحی سایت 
                        
                          </span>
                          <br>
                          <span>
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                          نویسنده: {{  $comment->user->name }}
                        
                          </span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        {{ $comments->links()}}
    </div>
</section>


@endsection

