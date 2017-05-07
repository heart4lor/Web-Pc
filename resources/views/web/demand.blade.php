@extends('common.layout')

@section('content')

    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url({{ asset('ststic/images/background1.jpg') }});">




        <form class="form-horizontal" method="post" action="{{url('demand/save')}}">
            {{ csrf_field() }}
            <fieldset>
                <div id="legend" class="">
                    <legend class="">你的需求</legend>
                </div>
                <div class="control-group">

                    <!-- Select Basic -->
                    <label class="control-label">需求方面</label>
                    <div class="controls">
                        <select class="input-xlarge" name="Demand[need]" >
                            <option   value="code">编程教程</option>
                            <option   value="blog">网站/博客</option>
                            <option  value="python">搜集资料</option>
                            <option   value="love">制作表白网站</option>
                            <option   value="wechat">微信开发</option>
                            <option   value="other">其他</option>
                            </select>
                    </div>

                </div>

                <div class="control-group">

                    <!-- Text input-->
                    <label class="control-label" for="input01">大致需求内容</label>
                    <div class="controls">
                        <input type="text" placeholder=""  value="{{old('Demand')['content']}}"  class="input-xlarge" name="Demand[content]">
                        <p class="help-block">{{$errors->first('Demand.content')}}</p>
                    </div>
                </div>

                <div class="control-group">

                    <!-- Text input-->
                    <label class="control-label" for="input01">QQ</label>
                    <div class="controls">
                        <input type="text" placeholder="" class="input-xlarge" value="{{old('Demand')['qq']}}" name="Demand[qq]">
                        <p class="help-block">{{ $errors->first('Demand.qq') }}</p>
                    </div>
                </div>

                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <button class="btn btn-success" type="submit">提交</button>
                    </div>
                </div>

            </fieldset>
        </form>
















    </header>
@stop