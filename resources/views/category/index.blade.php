@extends('master.layout')

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
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    مقالات سایت 
                </h2>
                <h3 class="section-subheading text-muted">
                    در این بخش کلیه مقالات سایت را مشاهده میکنید 
                </h3>
                <div class="row">
                {{-- <form class="bs-example" data-example-id="btn-tags">
                    @foreach ($categories as $category)
                <a href="#" class="btn btn-default" role="button">{{ $category->title }}</a> 
                        
                    @endforeach 
                 </form> --}}
                </div>
            </div>
        </div>
        <div class="row">



            @foreach ($articles as $article)
                
            
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="/detail/{{ $article->id}}" class="portfolio-link">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ $article->image }}" class="img-responsive" alt="portfolio-Pic">
                </a>
                <div class="portfolio-caption">
                    <h4>{{ $article->title }}  </h4>
                    <p class="demo">
                        {{ $article->demo }}
                    </p>
                    <p class="text-muted">
                       <span>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        {{ Verta::instance($article->created_at )->format('Y-n-j') }}
                        </span>
                         <span>
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                         طراحی سایت 
                        
                          </span>
                          
                          <span>
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                          نویسنده: {{ $article->user->name}}
                        
                          </span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        {{ $articles->links()}}
    </div>
</section>


@endsection

