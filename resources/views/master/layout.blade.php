<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وبلاگ</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- @yield('bootstrap') --}}
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
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
    <!-- Navigation -->
       <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
             <div class="navbar-header">
                <div class="navbar-brand">
                        @if(Auth::check())

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('خروج') }}
                                </a>
                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        
                        @else
                        <a  class="btn btn-primary" href="{{ route('register') }}">ثبت نام</a>
                        <a  class="btn btn-success" href="{{ route('login') }}">ورود اعضا</a>
                        @endif
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle Navigation</span> منو <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse in" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-right text-right">
                   
                     <li>
                        <a href="#services">ثبت مقاله جدید</a>
                    </li>
                    <li>
                        <a href="#services">صفحه اصلی</a>
                    </li>
                    <li>
                    <a>آکادمی آی تی</a>
                    </li>
                </ul>
            </div>
        </div><!--container-->
    </nav>
    @yield('header')

    @yield('content')


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
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2016</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#/"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li> <a href="#">قوانین</a></li>
                    <li> <a href="#">شرایط استفاده</a></li>
                </ul>
            </div>
        </div><!--row-->
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>

{{-- <script src="/js/app.js"></script> --}}
</body>
</html>