<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>计算机服务中心 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--维修电脑和发布需求的框子 -->
    <link rel="stylesheet" href="{{ asset('ststic/css/animate.css') }}">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('ststic/css/bootstrap.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('ststic/css/style.css') }}">

    <!-- 头部 -->
    <script src="{{asset('ststic/js/modernizr-2.6.2.min.js')}}"></script>

</head>

<body>
<div id="page">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="gtco-logo"><a href="{{url('index')}}">计算机服务中心 </a></div>
                </div>
                <div class="col-xs-8 text-center menu-1">
                    <ul>
                        <li class="active"><a href="{{url('index')}}">主页</a></li>
                        <li class="has-dropdown">
                            <a href="services.html">服务</a>
                            <ul class="dropdown">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">常见工具下载</a>
                            <ul class="dropdown">
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">CSS3</a></li>
                                <li><a href="#">Sass</a></li>
                                <li><a href="#">jQuery</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">关于我们</a></li>
                        <li><a href="{{url('connect')}}">联系我们</a></li>
                    </ul>
                </div>
                <div class="col-xs-2 text-right hidden-xs menu-2">
                    <ul>
                        <li class="btn-cta"><a href="{{url('login')}}"><span>登陆</span></a></li>
                    </ul>
                    <ul>
                        <li class="btn-cta"><a href="{{url('register')}}"><span>注册</span></a></li>
                    </ul>
                </div>
                <div>

                </div>
            </div>

        </div>
    </nav>



@section('content')

@show







    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-4 gtco-widget">
                    <h3>新航科技</h3>
                    <p>我们致力于软件外包和网站的制作与维护，提供一站式服务，高效稳定</p>
                    <p><a href="{{url('about')}}">了解更多</a></p>
                </div>
                <div class="col-md-2 col-md-push-1">
                    <ul class="gtco-footer-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Meetups</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-md-push-1">
                    <ul class="gtco-footer-links">
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Handbook</a></li>
                        <li><a href="#">Held Desk</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-md-push-1">
                    <ul class="gtco-footer-links">
                        <li><a href="#">Find Designers</a></li>
                        <li><a href="#">Find Deelopers</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">API</a></li>
                    </ul>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2017 NewNavigationTechnology</small>
                        <small class="block">In me the tiger Sniffe the rose </small>
                    </p>
                    <p class="pull-right">
                    <ul class="gtco-social-icons pull-right">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

<!-- jQuery -->
<script src="{{asset('ststic/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('ststic/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('ststic/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('ststic/js/jquery.waypoints.min.js')}}"></script>
<!-- Carousel -->
<script src="{{asset('ststic/js/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{asset('ststic/js/jquery.countTo.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('ststic/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('ststic/js/magnific-popup-options.js')}}"></script>
<!-- Main -->
<script src="{{asset('ststic/js/main.js')}}"></script>




</body>
</html>

