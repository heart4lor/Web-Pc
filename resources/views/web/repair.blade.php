@extends('common.layout')

@section('content')

    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url({{ asset('ststic/images/background1.jpg') }});">

        <form class="form-horizontal" method="post" action="{{url('repair/save')}}">
            {{ csrf_field() }}
            <fieldset>
                <div id="legend" class="">
                    <legend class="">需要维修电脑信息</legend>
                </div>
                <div class="control-group">

                    <!-- Text input-->
                    <label class="control-label" for="input01" >电脑型号</label>
                    <div class="controls">
                        <input type="text" value="{{ old('Repair')['cbrand'] }}"
                               placeholder="" class="input-xlarge" name="Repair[cbrand]">
                        <p class="help-block">{{ $errors->first('Repair.cbrand') }}</p>
                    </div>
                </div>



                <div class="control-group">

                    <!-- Textarea -->
                    <label class="control-label" >电脑问题概述</label>
                    <div class="controls">
                        <div class="textarea">
                            <input type="text" value="{{old('Repair')['question']}}" width="272px" height="36px" name="Repair[question]" >
                            <p>{{ $errors->first('Repair.question') }}</p>
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">图片详情</label>

                    <!-- File Upload -->
                    <div class="controls">
                        <input class="input-file" id="fileInput" type="file"  value="{{old('Repair')['image']}}"
                               name="Repair[image]">
                    </div>
                </div><div class="control-group">

                    <!-- Text input-->
                    <label class="control-label" for="input01">QQ</label>
                    <div class="controls">
                        <input type="text"     value="{{ old('Repair')['qq'] }}"
                               placeholder="" class="input-xlarge" name="Repair[qq]">
                        <p class="help-block">{{ $errors->first('Repair.qq') }}</p>
                    </div>
                </div>

                <div class="control-group">

                    <!-- Text input-->
                    <label class="control-label" for="input01">手机号</label>
                    <div class="controls">
                        <input type="text" value="{{ old('Repair')['number'] }}"
                               placeholder="" class="input-xlarge" name="Repair[number]">
                        <p class="help-block">{{ $errors->first('Repair.number') }}</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">提交</label>

                    <!-- Button -->
                    <div class="controls">
                        <button type="submit" class="btn btn-success">提交</button>
                    </div>
                </div>

            </fieldset>
        </form>


    </header>
    @stop