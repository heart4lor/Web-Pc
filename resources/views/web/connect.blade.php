@extends('common.layout')

@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url({{ asset('ststic/images/background1.jpg') }});">
    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-6 animate-box">
                </div>


                <div class="col-md-5 col-md-push-1 animate-box">
                    <h1>到这里来联系我们!</h1>
                    <div class="gtco-contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </header>
    @stop