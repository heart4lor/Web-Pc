@extends('common.layout')


@section('content')

    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url({{ asset('ststic/images/background1.jpg') }});">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>计算机服务中心</h1>
                            <h2>免费解决合肥学院在校生计算机问题</h2>
                            <p><a href="{{url('repair')}}" class="btn btn-default">维修电脑</a></p>
                            <p><a href="{{url('demand')}}" class="btn btn-default">发布需求</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop